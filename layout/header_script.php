<?php

session_start(); 
 
if( isset($_SESSION['user'])!="" ){

include "config/config.php";
$db=new database();

include 'script/program/program.php';
include "script/site_content/site_content.php";
include "script/payment/set_payment.php";
include "tool/vendor/vendor/autoload.php";
include 'script/theme/theme.php';

include 'script/user/user.php';
$id=$_SESSION['user'];
$user_ob=new user($id);

$user=$user_ob->get_user_info();
$login_user=$user_ob->get_login_user();

$user_id=$login_user['id'];
$login_user_id=$login_user['id'];
$user_permit=$login_user['permit'];
$role=$login_user['permit'];
$login_user_role=$role;

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $user_ob->get_browser($_SERVER['HTTP_USER_AGENT']);

$db->set_login_user($user_id,$ip,$browser);

 
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
$sms=new sms($user_id);


include 'script/contest/contest.php';
$contest=new contest();

include 'script/payment/payment.php';
$payment=new payment();


$set_payment_ob=new set_payment();
$set_payment_info=$set_payment_ob->get_set_payment_list();

include 'script/id_card/id_card.php';
$id_card=new id_card();

//include 'script/exam/exam.php';
//$exam_ob=new exam();
//$exam=$exam_ob->get_exam_info();

//include 'script/result/result.php';
//$result=new result();
//$result_info=$result->get_result();


include 'script/attendence/attendence.php';
$attend_ob=new attendence();

include 'script/notice/notice.php';
$notice=new notice();
$notice_info=$notice->get_notice_info(); 


$theme=new theme();
$theme_info=$theme->get_theme_info();

include 'script/report/report.php';
$report=new report();

include 'script/account/account.php';
$account=new account();

include 'script/site_activity/site_activity.php';
$site_activity=new site_activity();

include 'script/setting/setting.php';
$setting=new setting();

include 'script/graph/graph.php';
$graph=new graph();

include 'script/chat/chat.php';
$chat=new chat();

include 'script/exam/exam_category.php';
$exam=new exam();



}
else{

    echo "<script>window.location.href = 'login.php';</script>";

}

?>