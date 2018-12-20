<?php
include "script/install/install.php";
$install=new install();
$step=$install->step_install();
if($step==1)include 'page/install/install_system.php';
else header("Location: login.php");


?>