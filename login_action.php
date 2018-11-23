<?php
session_start();
include "config/config.php";
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
	}
}
else{
	 header("Location: login.php");
}

?>
