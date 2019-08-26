<?php

session_start(); 


include "config/config.php";

include 'script/program/program.php';
include "script/site_content/site_content.php";
include "script/payment/set_payment.php";
include 'script/student/student.php';
include 'script/batch/batch.php';
include 'script/subject/subject.php'; 
include 'script/sms/sms.php';


$site_key="12345";
$data=array();
$info=array();
$data['error']=1;
$key=(isset($_GET['key']))?$_GET['key']:"";
$type=(isset($_GET['type']))?$_GET['type']:"";


if($key==$site_key){
	if($type=="student_info"){
		if(isset($_GET['student_id'])){
			$student_ob=new student();
		    $student_list=$student_ob->get_student_info();
		    $student_id=$_GET['student_id'];
		    if(isset($student_list[$student_id])){
		    	$info=$student_list[$student_id];
		    	$data['error']=0;
		    }   
		}
	}
	
	else if($type=="check_login"){
		
		$info['login_id']=-1;
		if( isset($_SESSION['student_login'])!="" ){
             $info['login_id']=$_SESSION['student_login'];
             $data['error']=0;
		}
	}

	else if($type="send_sms"){
		$data['error']=0;
		$info['sms']="hello bangladesh";
	}
	else if($type=="post_sms"){
		$data['error']=0;
		$val=$_GET['data'];
		$info=$val;
	}

}



	$data['data']=$info;
	$data=json_encode($data);
	echo "$data";
	


?>