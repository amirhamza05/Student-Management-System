
<script type="text/javascript">
	function add_theme(){
		var x = document.getElementById("add_theme");
		per=x.style.display;
     	if(per=="none")x.style.display = "block";
     	else x.style.display = "none";
	}
	function  edit_theme(id) {
		div_id="edit_area_"+id;
		var x = document.getElementById(div_id);
		per=x.style.display;
     	if(per=="none")x.style.display = "block";
     	else x.style.display = "none";
	}
</script>

<button class="btn btn-primary" onclick="add_theme()"><i class="fa fa-plus"></i>Add Theme</button>

<div id="add_theme" style="display: none;">
    <?php include "add_theme.php"; ?>   
</div>

<div class="row" style="">
	
<?php

$uid=$login_user['id'];
$theme=$login_user['theme'];
foreach ($theme_info as $key => $value) {
	$bg_color=$value['bg_color'];
	$font_color=$value['font_color'];
	$name=$value['name'];
	$id=$value['id'];

?>
<style type="text/css">
	
	.header_theme{
      
      height: 150px;
      padding-top: 60px;

      font-weight: bold;
      cursor: pointer;
      font-size: 20px;
      border-radius: 5% 5% 0% 0%;
	}
	.img_src{
		width: 60px;
		height: 60px;
	}
	.active{
		width: 100%;
        background-color: #27ae60;
	}
	.edit{
      
        background-color: #2980b9;
	}
	.delete{
        
        background-color: #e74c3c;
	}
	.edit,.delete,.active{
		padding: 5px;
		cursor: pointer;
		font-weight: bold;
		color: #ffffff;
	}
	

</style>
<script type="text/javascript">
	function fun(uid,theme_id){

		$.ajax({
          type: 'POST',
          url: 'theme_action.php',
          data: {
              update: uid,
              theme: theme_id
          },
          beforeSend: function() {
              //loader("loading");
          },
          success: function(response) {
             location.reload();
   
          }
      });
	}
</script>

<form action="" method="post">
<input type="text" name="" id="color_id" hidden="">
	<div class="col-md-3 col-sm-3" style="margin-top: 15px; margin-right: 0px;">
		<div class="theme">
			<div class="header_theme" style="background-color: <?php echo "$bg_color"; ?>; color: <?php echo "$font_color"; ?>"onclick="fun(<?php echo "$uid,$id"; ?>)" >
			<center>	
			<?php echo "$name"; ?>
			<?php
           if($theme==$id){
           	?>
           	
           	<span style="font-size: 40px" class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>

           
           <?php
			}
			?>
		</center>	
		
			</div>
		
			<div class="col-md-6 col-sm-6 edit" onclick="edit_theme(<?php echo "$id"; ?>)">Edit</div>

			<div class="col-md-6 col-sm-6 delete">Delete</div>


			<div id="edit_area_<?php echo "$id"; ?>" class="col-md-12" style="display: none;">
				dsaf
				sdaff
			</div>
		</div>
	</div>

</form>


<?php } ?>

</div>




