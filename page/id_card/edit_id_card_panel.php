<style type="text/css">
	.bgheader{
		background-color: #000000;
		width: 200px;
		color: #ffffff;
		font-weight: bold;
		padding: 15px;
	}
</style>
<script src="tool/color_picker/jscolor.js"></script>
<script src="page/id_card/js/id_card.js"></script>


<div class="row">

<div id="id_card200" style="align-content: center;">

<style type="text/css">
	

 .box1{
  height: auto;
  overflow: auto;
  padding: 15px;
  overflow: auto;
  margin-left: 50px;

}
.card_box{
	overflow: hidden;
	background: #eeeeee;
	height: 260px;
	width: 350px;
	border-radius: 0px;
	border-style: solid;
	border-color: #2E363F;
	border-width: 
    float: left;
	margin-right: 10px;
	margin-bottom: 15px;
	page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-inside: avoid; 
}
.card_header{
	background-color: #2E363F;
	padding: 5px;
	color: #EEEEEE;
	font-size: 13px;
}
.font_name{
	font-size: 18px;
	margin-left: 0px;
	font-weight: bold;
	color: #ffffff;
} .img_card{
	height: 75px;
	width: 65px;
	overflow: visible;
	margin-top: -10px;
	margin-right: 5px;
	border: 1px solid #2E363F;
	border-radius: 10px;
	float: right;
}
.id_title{
	background-color: #2E363F;
	height: 20px;
	width: 100px;
	margin-top: 0px;
	border-radius: 0% 0% 100px 100px;
	font-weight: bold;
	text-align: center;
	font-size: 15px;
	margin-left: 33%;
	padding: 2px;
	color: #ffffff; 
	margin-bottom: 7px;
}
.card_footer{
	background-color: #2E363F;
	color: #ffffff; 
	overflow: hidden;
	height: 55px;
	font-size: 13px;
}

.id_field{
	background-color: #BDC1CB; 
	width: 100px;
	font-size: 12px;
	font-weight: bold;
	float: left;
	padding: 1px 1px 1px 1px;
	text-align: right;
	margin-right: 5px;
	display: block

}

.inf{
	margin-right: 5px;
	font-size: 12px;
	font-weight: bold;
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

.id_box_body{
    height: 155px;
}

.name_field{
	margin-bottom: 3px;
}
.card_logo{
	height: 45px;
	width: 40px;
}

</style>

<?php for($i=0; $i<10; $i++){ ?>	
<div class="id_card" id="" style="float: left;">


<div class="card_box">
  <div class="card_header">
  	<div style="float: left;margin-right: 5px;">
  		<img src="<?php echo $db->logo; ?>" class="card_logo">
  	</div>
  	<div style="">
  		<div class="font_name">
  			<?php echo $db->site_name; ?>	
  		</div>
  		<b></b><?php echo $db->address; ?><br/>	
  	</div>	
  </div>

  <div class="id_box_body">
    <img src="<?php echo "upload/student_photo/10051.jpg"; ?>" class="img_card" align="right">
    <div class="id_title">ID Card</div>
    <div style="margin-top: 14px;"></div>
      <div class="field">
      	<div class="name_field">
      		<span class="id_field">Student Name : </span> <span class="inf"><?php echo "name"; ?></span>
      	</div>

	      <div class="name_field">
	      	<span class="id_field">Id Number : </span> <span class="inf"><?php echo "id"; ?></span>
	      </div>

	      <div class="name_field">    
	      	<span class="id_field">Program :</span>
	      	<span class="inf"><?php echo "program_namsdaf sdaf dsfe"; ?></span>
	      </div>

	      <div class="name_field">    
	      <span class="id_field">Batch :</span> <span class="inf"><?php echo "batch_name (start - end)"; ?></span>
	      </div>
	      <div class="name_field">    
	      <span class="id_field">Duration :</span> <span class="inf"><?php echo "duration"; ?></span>
	      </div>
    </div>
  </div>

 
 	<div class="card_footer">
    	<center>
  		<b><span class="glyphicon glyphicon-phone"></span> Phone: </b><?php echo $db->phone; ?><br/>
  		<b><span class="glyphicon glyphicon-envelope"></span> Email: </b><?php echo $db->email; ?><br/>
  		If found please return to <?php echo $db->sort_name; ?>.
  		
  		</center>
  	</div>

</div>



 </div>

<!-- end id card -->
<?php } ?>

</div>
<!-- end  -->
<div class="col-md-3">
<div style="background-color: #000000; font-weight: bold; padding: 10px; color: #ffffff">Header Panel</div>
</div>

<div class="col-md-3">
<div id="header">
<div class="bgheader" id="bgheader">ID Card</div>
</div>

<input style="border-radius: 10%; width: 100px" class="jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'} form-control" name="bg_color" id="header_name10" value="" required="">


</div>

</div>
<input type="text" name="" id="">
<div id="color_code"></div>
<button onclick="print('id_card200')">Print ID Card</button>


