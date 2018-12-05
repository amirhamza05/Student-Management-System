<?php

include "script/site_content/site_config.php";

/**
* 
*/


class site_content extends site_config {

   
public function url_list(){

  $list_url=array();
  array_push($list_url,"student_list","add_student","exam_list","edit_student","subject_list");

  return $list_url;
}

public function url_name(){
	$list_name=array();
	$list_name["student_list"]="Student List";
	$list_name["add_student"]="Add Student";
	$list_name["edit_student"]="Edit Student";
  $list_name["subject_list"]="Subject List";
  $list_name["exam_list"]="Exam List"; 

	$list_name["index"]="Dashboard";

	return $list_name;
}

public function url_root(){
   $st1="Dashboard";
   $st2="  /  Student";
   $list_root=array();
   $st3=$st1.$st2;
   $list_root["student_list"]=$st3;
   $list_root["add_student"]=$st3;
   $list_root["edit_student"]=$st3;
   $list_root["index"]=$st1;
   return $list_root;
}


public function get_md5($st){
  $en="techserma_group";
  $st=$st.$en;
  $st=md5($st);
  $st=$en.$st;
  $st=hash('sha256', $st);
 
  return $st;
}

public function get_encode($st){
  for($i=0; $i<100001; $i++){
    $st1=$this->get_md5($i);
    if($st1==$st)return $i;
  }
  return -1;
}


public function get_page_sub_str($link){
	$list_url=$this->url_list();
	$flag=0;
	$sub_str="";
	foreach ($list_url as $key => $url) {
		$sub_str=$url;
		$flag=strpos($link, $sub_str);
       if($flag==true)break;
	}
   if($flag==0)$sub_str="index";
   return $sub_str;
}

public function get_page_name($sub_str){
	$list_name=$this->url_name();
    return $list_name[$sub_str];
}

public function get_url_root($sub_str){
	
	
}



 public function myprint_r($my_array) {
    echo "<pre>";
    print_r($my_array);
    echo "</pre>";
  }

public function array_to_string($arr){
 $st="";
 $st=implode(',', $arr);
return $st;
}

public function day(){
  $day[1]="Stuurday";
  $day[2]="Sunday";
  $day[3]="Sunday";
  $day[4]="Sunday";
  $day[5]="Sunday";
  $day[6]="Sunday";
  $day[7]="Sunday";
  return $day;
}

public function get_user_id(){
  $id=5;
  return $id;
}

public function get_user_name($uid){
  $uname="hamza";
  return $uname;
}

public function make_name($name){
  $name=substr($name, 0, 17);
  return $name;
}

public function header_info_area(){
  ?>
  <div class="school_header_area">
      <img class="header_area_logo" src="https://britainstandardschool.com/wp-content/uploads/2018/11/rsz_master_logo2-1.jpg"><br/>
      <span class="school_title">TechSerm Educational Software</span><br/>
      <span class="glyphicon glyphicon-map-marker"></span> South Keraniganj , Dhaka , Bangladesh<br/>
      <span class="glyphicon glyphicon-phone"></span> Phone: 01716404120 | <span class="glyphicon glyphicon-envelope"></span> Email: 
            britainstandard@gmail.com
    </div>
    <style type="text/css">
      .school_header_area{
      text-align: center;
      font-size: 14px;
      padding-bottom: 10px;
      color: #868686;
      border-width: 0px 0px 1px 0px;
      border-color: #eeeeee;
      border-style: solid;
      margin-bottom: 5px;
    
      }
  .school_title{
    font-size: 25px;
    font-family: 'Trocchi', serif;
  }
  .header_area_logo{
          height: 60px;
          width: 60px;
  }
    </style>

  <?php
}


}


?>

