<?php


session_start();
if( isset($_SESSION['user'])=="" ){
include "layout/header_lib.php";
include 'page/login/login.php';
}
else{
	header("Location: index.php");
}
?>