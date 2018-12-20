<?php


include "page_action/report/expense_report.php";
include "page_action/report/payment_report.php";
include "page_action/report/profit_report.php";
include "page_action/report/attend_report.php";


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