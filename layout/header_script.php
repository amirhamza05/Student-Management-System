<?php

session_start(); 

if( isset($_SESSION['user'])!="" ){

include "config/config.php";
$db=new database();

include 'script/program/program.php';

include "script/site_content/site_content.php";
$site=new site_content();


include 'script/subject/subject.php'; 
$subject_ob=new subject();
$subject=$subject_ob->get_subject_info();

include 'script/batch/batch.php';
$batch_ob=new batch();
$batch=$batch_ob->batch_info();

//include 'script/program/program.php';
$program_ob=new program();
$program=$program_ob->get_program_info();

include 'script/student/student.php';
$student_ob=new student();
$student=$student_ob->get_student_info();

include 'script/sms/sms.php';
$sms=new sms();


include 'script/contest/contest.php';
$contest=new contest();

include 'script/payment/payment.php';
$payment=new payment();
$payment_info=$payment->get_payment_info();

include 'script/id_card/id_card.php';
$id_card=new id_card();

include 'script/exam/exam.php';
$exam_ob=new exam();
$exam=$exam_ob->get_exam_info();

include 'script/result/result.php';
$result=new result();
$result_info=$result->get_result();

include 'script/notice/notice.php';
$notice=new notice();
$notice_info=$notice->get_notice_info();

include 'script/user/user.php';
$id=$_SESSION['user'];
$user_ob=new user($id);
$user=$user_ob->get_user_info();
$login_user=$user_ob->get_login_user();
}
else{

    header("Location: login.php");

}

?>