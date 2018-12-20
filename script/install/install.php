<?php


class install {
   
public $config_file="config/db.php";

 public function __construct(){   
     //$this->step_install();
 }

 public function step_install(){
 	$res=$this->check_config_file();
 	if($res==0)return 1;
 	return 2;
 }

 public function check_config_file(){
 	
	$st=$this->get_file_data($this->config_file);
	$len=strlen($st);
	if($len>0)return 1;
	return 0;
 }

 public function get_file_data($file_name){
	$data=file_get_contents($file_name);
    $line=explode("\n",$data);
	$st="";
	foreach($line as $newline){
    	$st=$st.$newline;
	}
	return $st;
 }






}


?>

