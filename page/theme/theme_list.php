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
      border-radius: 100%;
	}
	.img_src{
		width: 60px;
		height: 60px;
	}
	.active{
		
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

<div id="response_theme"></div>
<script type="text/javascript">
	function themes_select(uid,theme_id){

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
             //location.reload();
             set_html("response_theme",response);
   
          }
      });
	}
</script>


<input type="text" name="" id="color_id" hidden="">
	<div class="col-md-3 col-sm-3" style="margin-top: 15px; margin-right: 0px;">
		<div class="theme">
			<div class="header_theme" style="background-color: <?php echo "$bg_color"; ?>; color: <?php echo "$font_color"; ?>"onclick="themes_select(<?php echo "$uid,$id"; ?>)" >
			<center>	
			
			<?php if($theme==$id){ ?>
           	<span style="font-size: 40px" class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
           <?php } ?>
		</center>	
		
			</div>
		
		
		</div>
	</div>



<?php } ?>

</div>




