<?php

if(isset($_POST['get_theme_list'])){

$theme_list=$theme->get_theme_info();
//print_r($theme_list);
$login_user_theme=$login_user['theme'];

?>


<div class="row">
	<?php foreach ($theme_list as $key => $value) { 
		$name=$value['name'];
		$theme_id=$value['id'];
		$bg_color=$value['bg_color'];
		$font_color=$value['font_color'];
		$style="background-color: $bg_color; color: $font_color";
		$active_class=($login_user_theme==$theme_id)?"theme_class_active":"hover_cls";

	?>

		<div class="col-md-3">
			<div onclick="change_theme(<?php echo "$theme_id"; ?>)" style="<?php echo $style; ?>" class="theme_cls <?php echo $active_class; ?>">
				<?php if($login_user_theme==$theme_id){ ?>
					<span style="font-size: 40px" class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
				<br/>
				<?php } ?>
				<?php echo "$name"; ?>
			</div>
		</div>

	<?php } ?>
</div>

<style type="text/css">
	.theme_cls{
		border: 1px solid #E8E8E8;
		padding: 15px;
		height: 90px;
		font-size: 20px;
		margin-bottom: 5px;
		cursor: pointer;
		text-align: center;
		font-weight: bold;
		border-radius: 10px;
	}
	.hover_cls:hover{
		font-size: 21px;
	}
	.theme_class_active{
		
	}
</style>

<?php

}
if(isset($_POST['change_theme'])){
	$theme_id=$_POST['change_theme'];
	$data['id']=$login_user['id'];
	$data['theme']=$theme_id;
	$db->sql_action("user","update",$data);
	$ut_info=$theme->get_theme($theme_id);
    $bg_color=$ut_info['bg_color'];
    $font_color=$ut_info['font_color'];
	?>
<style type="text/css">
		:root {
            --bg-color: <?php echo "$bg_color"; ?>;
            --font-color: <?php echo "$font_color"; ?>;
        } 

</style>
<?php

}


?>
