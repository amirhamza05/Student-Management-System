<?php

$path="page_action/report/";
$file=array();
array_push($file, "expense_report.php");
array_push($file, "payment_report.php");
array_push($file, "profit_report.php");
array_push($file, "attend_report.php");
array_push($file, "income_report.php");

foreach ($file as $key => $value) {
	$file_name="$path$value";
	include $file_name;
}


?>

<style type="text/css">
	@page {
  		margin: 1;
  		table { page-break-after:auto }
  		tr    { page-break-inside:avoid; page-break-after:auto }
  		td    { page-break-inside:avoid; page-break-after:auto }
  		thead { display:table-header-group }
  		tfoot { display:table-footer-group }
	}
</style>