<?php

if(isset($_POST['view_income_report'])){

$info=$_POST['view_income_report'];

$date1=$info['date1'];
$date2=$info['date2'];

$data['date1']=$date1;
$data['date2']=date('Y-m-d', strtotime($date2 . ' +1 day'));
$info=$report->get_income_report($data);

$date1=date("d M Y", strtotime($date1));
$date2=date("d M Y", strtotime($date2));

?>

<div class="pull-right">
<button class="button" onclick="print('report_body')">Print Report</button>
</div>
<div id="report_body">
	<style type="text/css">
    .payment_report{
    	background-color: #ffffff;
    	padding: 15px;
    	border-radius: 4px;
    }
	.payment_report .td1{
		padding: 15px 2px 15px 2px;
		border: 1px solid #eeeeee;
		text-align: center;
		font-weight: bold;
		font-size: 12px;
		color: #1A2229;
		font-family: Verdana, Geneva, sans-serif;
		background-color: #f5f5f5;
	}
	.payment_report .td2{
		padding: 10px 2px 10px 2px;
		font-size: 12px;
		border: 1px solid #eeeeee;
		text-align: center;
		font-family: "Trebuchet MS", Helvetica, sans-serif;
		color: #1A2229;
	}
	@media print 
	{
    	@page {
      	size: A4; /* DIN A4 standard, Europe */
      	margin:0;
      	content: counter(page);
    }

    html, body {
        width: 210mm;
        /* height: 297mm; */
        height: 282mm;
        font-size: 11px;
        background: #FFF;
        overflow:visible;
    }
    body {
        padding-top:0mm;
    }


}

.info_area{
    	padding: 2px 0px 8px 0px;
    }

 .report_title{
 	font-size: 18px;
 	color: #1A2229;
 	font-family: Verdana, Geneva, sans-serif;
 }
 .report_description{
 	color: #1A2229;
 	font-size: 14px;
 	font-family: Verdana, Geneva, sans-serif;
 }   
	
</style>
<div class="payment_report">
<?php $site->header_info_area(); ?>


<div class="row  info_area">
	<div class="col-md-12">
		<font class="report_title">
			<center>
				Income Report<br/>
			</center>
		</font>
		<center>
			<font class="report_description">
				<?php echo "$date1 - $date2"; ?><br/>
			</font>	
		</center>
	</div>
</div>
<div style="margin-top: 5px;"></div>
<table width="100%">
	<tr>
		<td class="td1">#</td>
		<td class="td1">Date</td>
		<td class="td1">Income Name</td>
		<td class="td1">Notes</td>
		<td class="td1">Add By</td>
		<td class="td1">Amount</td>
	</tr>
	<?php 
    $sum=0;
    foreach ($info as $key => $value) {
     
     $sum+=$value['amount'];
     $date=date("d M Y h:i:A", strtotime($value['date']));
     $user_id=$value['add_by'];
     $user_name=$user[$user_id]['uname'];
	?>
	<tr>
		<td class="td2"><?php echo $value['id']; ?></td>
		<td class="td2"><?php echo $date; ?></td>
		<td class="td2"><?php echo $value['name']; ?></td>
		<td class="td2"><?php echo $value['notes']; ?></td>
		<td class="td2"><?php echo $user_name; ?></td>
		<td class="td2"><?php echo $value['amount']; ?> Tk</td>
		
	</tr>

	<?php } ?>
	<tr>
		
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align: right;padding: 15px;"><b>Total Payment</b></td>
		<td class="td2"><b style="font-size: 15px;"><?php echo "$sum"; ?> Tk</b></td>
	</tr>
</table>

</div>
</div>


	<?php
}



?>