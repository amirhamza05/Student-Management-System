<?php

include "script/site_content/site_config.php";

/**
* 
*/


class site_content extends site_config {


//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->barcode_ob= new \Picqer\Barcode\BarcodeGeneratorPNG();

 }

public function select($query){
   return $this->result=$this->db->select($query);
}

public function barcode($text,$image="PNG",$type="TYPE_CODE_128"){
  $barcode="data:image/png;base64,";
  $barcode_ob=$this->barcode_ob;
  $barcode.=base64_encode($barcode_ob->getBarcode($text, $barcode_ob::TYPE_CODE_128));
  return $barcode;
}
   
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
public function timeAgo($timestamp){
  
    $datetime1=new DateTime("now");
    $datetime2=date_create($timestamp);
    $diff=date_diff($datetime1, $datetime2);

    $timemsg='';
    if($diff->y > 0){
        $timemsg = $diff->y .' year'. ($diff->y > 1?"'s":'');

    }
    else if($diff->m > 0){
     $timemsg = $diff->m . ' month'. ($diff->m > 1?"'s":'');
    }
    else if($diff->d > 0){
     $timemsg = $diff->d .' day'. ($diff->d > 1?"'s":'');
    }
    else if($diff->h > 0){
     $timemsg = $diff->h .' hour'.($diff->h > 1 ? "'s":'');
    }
    else if($diff->i > 0){
     $timemsg = $diff->i .' minute'. ($diff->i > 1?"'s":'');
    }
    else if($diff->s > 0){
     $timemsg = $diff->s .' second'. ($diff->s > 1?"'s":'');
    }

$timemsg = $timemsg.' ago';
return $timemsg;
}

public function welcome_time($user_name){
  $welcome = '';
  $time = (int)date("H");
  $timezone = date("e");
  if ($time >= "19" || $time<="5") {
        $welcome = "Good Night";
  }
  else if ($time < "12") {
        $welcome = "Good Morning";
  } 
  else if ($time >= "12" && $time < "17") {
        $welcome = "Good Afternoon";
  } 
  else if ($time >= "17" && $time < "19") {
        $welcome = "Good Evening";
  } 

  return $welcome.", $user_name";
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

public function make_name($name,$len=17){
  $name=substr($name, 0, $len);
  return $name;
}

public function header_info_area(){
  ?>
  <div class="school_header_area">
      <img class="header_area_logo" src="<?php echo $this->db->logo; ?>"><br/>
      <span class="school_title"><?php echo $this->db->site_name; ?></span><br/>
      <span class="glyphicon glyphicon-map-marker"></span> <?php echo $this->db->address; ?><br/>
      <span class="glyphicon glyphicon-phone"></span> Phone: <?php echo $this->db->phone; ?> | <span class="glyphicon glyphicon-envelope"></span> Email: <?php echo $this->db->email; ?>    </div>
    <style type="text/css">
      .school_header_area{
      text-align: center;
      font-size: 14px; 
      padding-bottom: 10px;
      color: #000000;
      border-width: 0px 0px 1px 0px;
      border-color: #eeeeee;
      border-style: solid;
      margin-bottom: 5px;
    
      }
  .school_title{
    font-size: 25px;
    font-family: 'Trocchi', serif;
    font-weight: bold;
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

