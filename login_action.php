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

	$flag=0;
	foreach ($user as $key => $value) {
		$id=$value['id'];
		$uname1=$value['uname'];
		$pass1=$value['pass'];
		if($pass1==$pass && $uname==$uname1){

			$flag=1;
			break;
		}
	}
	
	if($flag==0){
        echo "0";
	}
	else{
		echo $id;
		$_SESSION['user']=$id;
		$ex=$_SESSION['user'];
		$info=array();
		$info['user_id']=$id;
        $ip = $_SERVER['REMOTE_ADDR'];
		$browser = $user_ob->get_browser($_SERVER['HTTP_USER_AGENT']);
        $db->set_login_user($id,$ip,$browser);
	    $db->sql_action("login","insert",$info,"no");
	}
}
else{
	 header("Location: login.php");
}

?>
