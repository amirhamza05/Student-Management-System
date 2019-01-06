<?php
include 'layout/header.php';

$page="404.php";
$rep_page=array();
$rep_page['expence_report']="expence_report.php";
$rep_page['profit_report']="profit_report.php";
$rep_page['attendence_report']="attend_report.php";
$rep_page['payment_report']="payment_report.php";
$rep_page['income_report']="income_report.php";

if(isset($_GET['type'])){
	
	$type=$_GET['type'];
	
    if(array_key_exists($type,$rep_page)){
    	$page=$rep_page[$type];
    	$page="page/report/$page";
    }
}

include "$page";
include "layout/footer.php";

?>