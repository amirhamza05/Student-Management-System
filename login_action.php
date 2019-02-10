<?php
session_start();
include "config/config.php";
$db=new database();

include 'script/user/user.php';
$user_ob=new user();
$user=$user_ob->get_user_info();


if(isset($_POST['login'])){

  $uname = trim($_POST['uname']);
  $uname = strip_tags($uname);
  $uname = htmlspecialchars($uname);

  $pass = $_POST['pass'];
  $pass=hash('sha256', $pass);

  $data['error']=0;

	$login_error=1;
	foreach ($user as $key => $value) {
		$id=$value['id'];
		$uname1=$value['uname'];
		$pass1=$value['pass'];
		$status=$value['status'];
		if($pass1==$pass && $uname==$uname1){
			if($status==0)$login_error=2;
			else $login_error=0;
			break;
		}
	}
	
	if($login_error==0){
		$_SESSION['user']=$id;
		$ex=$_SESSION['user'];
		$info=array();
		$info['user_id']=$id;
        $ip = $_SERVER['REMOTE_ADDR'];
		$browser = $user_ob->get_browser($_SERVER['HTTP_USER_AGENT']);
        $db->set_login_user($id,$ip,$browser);
	    $db->sql_action("login","insert",$info,"no");
	}

	$data['error']=$login_error;
	$data['error_msg']=($login_error==1)?"Please Fill Up Correct User Name and Password":"User Is Deactive.";
	$data=json_encode($data);
	echo "$data";


}

?>
