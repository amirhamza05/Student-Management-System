<style type="text/css">
	.bgheader{
		background-color: #000000;
		width: 200px;
		color: #ffffff;
		font-weight: bold;
		padding: 15px;
	}
</style>
<!-- <script src="tool/color_picker/jscolorr.js"></script> -->
<script src="page/id_card/js/id_card.js"></script>


<div class="row">
<div class="id_card" id="id_card200">

<style type="text/css">
	

.id_card .box1{
  height: auto;
  overflow: auto;
  padding: 15px;
  overflow: auto;
  margin-left: 50px;

}
.id_card .card_box{
	overflow: hidden;
	background: #eeeeee;
	height: 260px;
	width: 350px;
	border-radius: 0px;
	border-style: solid;
	border-color: #2E363F;
	border-width: 
	margin-right: 10px;
	margin-bottom: 15px;
	page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-inside: avoid; 
}

.id_card .card_header{
	background-color: #2E363F;
	padding: 5px;
	color: #EEEEEE;
	font-size: 13px;
}

.id_card .font_name{
	font-size: 18px;
	margin-left: 0px;
	font-weight: bold;
	color: #ffffff;
}

.id_card .img_card{
	height: 100px;
	width: 90px;
	overflow: visible;
	margin-top: -35px;
	margin-right: 5px;
	border: 2px solid #2E363F;
	border-radius: 10%;
	float: right;
}

.id_card .id_title{
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

.id_card .id_field{
	background-color: #BDC1CB; 
	width: 98px;
	font-size: 12px;
	font-weight: bold;
	float: left;
	padding: 1px;
	margin-right: 5px;

}

.id_card .inf{
	margin-right: 5px;
	font-size: 14px;
}
	
.id_card .barcode{
   text-align: center;
   height: 30px;
   width: 200px;
   margin-top: 5px;
}	

.id_card .barcode_div{
	border-style: solid;
	border-width: 1px 0px 0px 0px;
	border-color: #BDC1CB;
	margin-top: 5px;

}

.id_card .id_box_body{
    height: 140px;
}

.id_card .name_field{
	margin-bottom: 0px;
}

</style>

<div class="card_box">
  <div class="card_header">
  	<div class="font_name">
  		<?php echo $db->site_name; ?>	
  	</div>
  		<b></b><?php echo $db->address; ?><br/>	
  		
  </div>

  <div class="id_box_body">
    <img src="<?php echo "upload/student_photo/10051.jpg"; ?>" class="img_card" align="right">
    <div class="id_title">ID Card</div>
      <div class="field">
          <div class="name_field">
      <div class="id_field">Student Name : </div> <div class="inf"><b><?php echo "name"; ?></b></div>
      </div><div class="name_field">
      <div class="id_field">Id Number : </div> <div class="inf"><b><?php echo "id"; ?></b></div>
      </div>

      <div class="name_field">    
      <div class="id_field">Program :</div>
      <div class="inf"><b><?php echo "program_name"; ?></b></div>
      </div>

      <div class="name_field">    
      <div class="id_field">Batch :</div> <div class="inf"><b><?php echo "batch_name (start - end)"; ?></b></div>
      </div>
      <div class="name_field">    
      <div class="id_field">Duration :</div> <div class="inf"><b><?php echo "duration"; ?></b></div>
      </div>
    </div>
  </div> 
 
 <div class="">
    	<center>
  		<b>Phone: </b><?php echo $db->phone; ?>
  		<b>Email: </b><?php echo $db->email; ?>
  		</center>
  	</div>

</div>



 </div>


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
<button onclick="fun()">Print ID Card</button>



