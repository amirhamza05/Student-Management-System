<?php

if(isset($_POST['view_payment_report'])){

$info=$_POST['view_payment_report'];

$date1=$info['date1'];
$date2=$info['date2'];
$program_id=$info['program_id'];
$type=$info['type'];

$data['program_id']=$program_id;
$data['type']=$type;
$data['date1']=$date1;
$data['date2']=date('Y-m-d', strtotime($date2 . ' +1 day'));
$program_name=($program_id==0)?"All Program":$program[$program_id]['name'];

if($type==0)$type_string="ALL Type Fee";
else if($type==1)$type_string="Admission Fee";
else if($type==2)$type_string="Monthly Fee";
else if($type==3)$type_string="Extra Fee";

$date1=date("d M Y", strtotime($date1));
$date2=date("d M Y", strtotime($date2));


$info=$report->get_payment_report_list($data);
?>

<div class="pull-right">
<button class="button" onclick="print('report_body')">Print Report</button>
</div>
<div id="report_body">
	<style type="text/css">
	table {
  border-collapse: collapse;
}
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
				Payment Report<br/>
			</center>
		</font>
		<center>
			<font class="report_description">
				<?php echo "$date1 - $date2"; ?><br/>
				<?php echo "$type_string"; ?>
			</font>	
		</center>
	<div style="float: left;"><b>Program: </b><?php echo "$program_name"; ?> </div>
	<div style="float: right;"><b>Batch:</b> All Batch</div>
	</div>
</div>
<div style="margin-top: 5px;"></div>
<table width="100%">
	<thead style="border-width: 0px;">
	<tr>
		<td class="td1">#</td>
		<td class="td1">Date</td>
		<td class="td1">Name</td>
		<td class="td1">Program Name</td>
		<td class="td1">Pyament Type</td>
		<td class="td1">Year</td>
		<td class="td1">Month</td>
		<td class="td1">Receive By</td>
		<td class="td1" style="width: 100px">Pay</td>
	</tr>
	</thead>
	<tbody>
	<?php 
    $sum=0;
    foreach ($info as $key => $value) {
    $type=$value['type'];

    if($value['type']==2){
      $value['month']=$set_payment_ob->get_month_name($value['month']);
     }
     else{
      $value['month']="-";
      $value['year']="-";
     }

     $type=($value['type']==1)?"Admission Fee":"Monthly Fee";
     if($value['type']==3)$type=$value['note'];
     $sum+=$value['pay'];
     $pay_date=date("d M Y h:i:A", strtotime($value['date']));
     $student_name=$value['student_name'];
     $student_id=$value['student_id'];
	?>
	<tr>
		<td class="td2"><?php echo $value['id']; ?></td>
		<td class="td2"><?php echo $pay_date; ?></td>
		<td class="td2"><?php echo "$student_name ($student_id)"; ?></td>
		<td class="td2"><?php echo $value['program_name']; ?></td>
		<td class="td2"><?php echo $type; ?></td>
		<td class="td2"><?php echo $value['year']; ?></td>
		<td class="td2"><?php echo $value['month']; ?></td>
		<td class="td2"><?php echo $value['add_by']; ?></td>
		<td class="td2"><?php echo $value['pay']; ?> Tk</td>
		
	</tr>

	<?php } ?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align: right;padding: 15px;"><b>Total Payment</b></td>
		<td class="td2"><b style="font-size: 15px;"><?php echo "$sum"; ?> Tk</b></td>
	</tr>
	</tbody>
</table>

</div>
</div>


	<?php
}



?>