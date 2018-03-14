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

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

	$flag=0;
	foreach ($user as $key => $value) {
		$id=$value['id'];
		$uname1=$value['uname'];
		$pass1=$value['pass'];
		$pass=hash('sha256', $pass);
		if($pass1==$pass && $uname==$uname1){
			$flag=1;
			break;
		}
	}
	if($flag==0){
    
     echo "<script>alert('Failed...Please Again Try!');</script><script>document.location='login.php'</script>";
	}
	else{
		$_SESSION['user']=$id;
			echo "<script>alert('Successfully Login Account!');</script><script>document.location='index.php'</script>";
			$ex=$_SESSION['user'];
	}
}
else{
	 header("Location: login.php");
}

?>