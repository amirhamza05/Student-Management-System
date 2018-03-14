<style type="text/css">
@media print {
  h2 { 
    page-break-before: always;
  }
  h3, h4 {
    page-break-after: avoid;
  }
  pre, blockquote {
    page-break-inside: avoid;
  }
}
.box{
  height: 100%;
  padding: 15px;

  /*overflow: auto;*/
  
}
.card_box{
	background: #eeeeee;
	height: 230px;
	width: 350px;
	border-radius: 0px;
	border-style: solid;
	border-color: #2E363F;
	border-width: 2px;
	float: left;
	margin-right: 15px;
	margin-top: 20px;
	page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-inside: avoid; 
}

.card_header{
	background-color: #2E363F;
	padding: 5px;
	color: #ffffff;
}

.font_name{
	font-size: 18px;
	margin-left: 0px;
	font-weight: bold;
}

.img_card{
	height: 100px;
	width: 80px;
	overflow: visible;
	margin-top: -35px;
	margin-right: 5px;
	border-style: solid;
	
	border-width: 1px
}

.title{
	background-color: #2E363F;
	height: 20px;
	width: 100px;
	margin-top: 0px;
	border-radius: 0% 0% 15% 15%;
	font-weight: bold;
	text-align: center;
	font-size: 15px;
	margin-left: 33%;
	padding: 3px;
	color: #ffffff;
	margin-bottom: 7px;
}

.id_field{
	background-color: #BDC1CB; 
	width: 98px;
	font-size: 12px;
	font-weight: bold;
	float: left;
	padding: 1px;
	margin-right: 5px;
}

.inf{
	margin-right: 5px;
	font-size: 14px;
}
	
.barcode{
   text-align: center;
   height: 30px;
   width: 200px;
   margin-top: 5px;
}	

.barcode_div{
	border-style: solid;
	border-width: 1px 0px 0px 0px;
	border-color: #BDC1CB;
	margin-top: 5px;

}

.box_body{

}

.name_field{
	margin-bottom: 1px;
}

</style>

<div class="box">

<?php 


$batch_id=0;
$student_id=0;
$program_id=0;

if(isset($_GET['batch'])) {
    $batch_id=$_GET['batch'];
}
if(isset($_GET['student'])) {
    $student_id=$_GET['student'];
}
if(isset($_GET['program'])) {
    $program_id=$_GET['program'];
}

//$batch_id=$site->get_encode($batch_id);

if($batch_id==-1 || $student_id==-1 || $program_id==-1){
 echo "<script>window.close();</script>";
}
else{


$info=$student_ob->get_select_student($program_id,$batch_id,$student_id);

$id_card->get_id_card($info);
?>

</div>

<script type="text/javascript">
 window.onload = function() { 
 	window.print(); 
 	window.close();

 }
</script>

<?php } ?>