<?php

if(isset($_POST['insert_expence'])){
	$info=$_POST['insert_expence'];
	unset($info['id']);
	$info['date']=$db->date();
	$info['add_by']=$user_id;
	$db->sql_action("expence","insert",$info,"no");
}

if(isset($_POST['delete_expence'])){
  $info=$_POST['delete_expence'];    
  $db->sql_action("expence","delete",$info);
}

if(isset($_POST['update_expence'])){
	$info=$_POST['update_expence'];
	$db->sql_action("expence","update",$info,"no");  
}

if(isset($_POST['get_expence_form'])){

	$site->form_input("Expence Name","expence_name","expence_name","text","exclamation-sign","","");
	$site->form_input("Ammount","amount","amount","number","exclamation-sign","","");
	?>
	<b>Note</b><br/>
   <textarea class="textarea_design" id="note"></textarea>
   <br/>
   <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="expence_action('insert')"><span class="glyphicon glyphicon-floppy-save"></span> Save Expence</button>
	<?php
}

if(isset($_POST['update_expence_form'])){
  $id=$_POST['update_expence_form'];
  $info=$account->get_separate_expance($id);
  $expence_name=$info['name'];
  $ammount=$info['amount'];
  $notes=$info['notes'];
  $site->form_input("Expence Name","expence_name","expence_name","text","exclamation-sign","$expence_name","");
  $site->form_input("Ammount","amount","amount","number","exclamation-sign","$ammount","");
 ?>
	<b>Note</b><br/>
   <textarea class="textarea_design" id="note"><?php echo "$notes"; ?></textarea>
   <br/>
   <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="expence_action('update',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Save Expence</button>

<?php
}
if(isset($_POST['delete_expence_form'])){
  $id=$_POST['delete_expence_form'];
  ?>

  <center>
    <h3>Are You Want To Delete This Expence</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="expence_action('delete',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>
  </center>

  <?php
}


?>

<style type="text/css">
	.textarea_design{
		width: 100%;
		height: 80px;
		padding: 5px;
		margin-bottom: 5px;
	}
</style>