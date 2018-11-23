<style type="text/css">
	.bgheader{
		background-color: #000000;
		width: 200px;
		color: #ffffff;
		font-weight: bold;
		padding: 15px;
	}
</style>
 <link rel="stylesheet" type="text/css" href="page/id_card/id_card_style.css">

<div class="row">
<div class="col-md-5">
<div class="card_box">
	
	<div class="card_header"><div class="font_name">Creative Admission Care</div>Phone: +8801799398177</div>

  <div class="box_body">
	<img src="<?php echo "photo"; ?>" class="img_card" align="right">
	<div class="title">ID Card</div>

	<div class="field">
		<div class="name_field">
	 		<div class="id_field">Student Name : </div> <div class="inf"><b><?php echo "name"; ?></b></div>
		</div>
		<div class="name_field">
	 		<div class="id_field">Id Number : </div> <div class="inf"><b><?php echo "id"; ?></b></div>
		</div>
		<div class="name_field">	 	
	 		<div class="id_field">Program :</div> 
	 		<div class="inf"><b><?php echo "program_name"; ?></b></div>
		</div>
		<div class="name_field">	 	
	 		<div class="id_field">Batch :</div> 
	 		<div class="inf"><b><?php echo "batch_name (start - nd)"; ?></b></div>
		</div>
		<div class="name_field">	 	
	 	<div class="id_field">Duration :</div> <div class="inf"><b><?php echo "duration"; ?></b></div>
	 	</div>
	</div>

	<center>
		<div class="barcode_div">
	 		<img src="barcode.php?text=<?php echo "id"; ?>" class="barcode">
	 	</div>
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

<input type="color" value="" name="" id="header_name" onclick ="fun()">
</div>

</div>

<script type="text/javascript">
	function fun(){
		
		text=document.getElementById('header_name').value;
        document.getElementById('bgheader').innerHTML=text;
        color="red";
        $('.card_header').css({"background-color":text});
	}
</script>

<script type="text/javascript">
	

</script>