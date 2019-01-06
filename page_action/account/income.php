<?php

if(isset($_POST['insert_income'])){
	$info=$_POST['insert_income'];
	unset($info['id']);
	$info['date']=$db->date();
	$info['add_by']=$user_id;
	$db->sql_action("income","insert",$info,"no");
}

if(isset($_POST['delete_income'])){
  $info=$_POST['delete_income'];    
  $db->sql_action("income","delete",$info);
}

if(isset($_POST['update_income'])){
	$info=$_POST['update_income'];
	$db->sql_action("income","update",$info,"no");
}

if(isset($_POST['get_income_form'])){

	$site->form_input("income Name","income_name","income_name","text","exclamation-sign","","");
	$site->form_input("Ammount","amount","amount","number","exclamation-sign","","");
	?>
	<b>Note</b><br/>
   <textarea class="textarea_design" id="note"></textarea>
   <br/>
   <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="income_action('insert')"><span class="glyphicon glyphicon-floppy-save"></span> Save income</button>
	<?php
}

if(isset($_POST['update_income_form'])){
  $id=$_POST['update_income_form'];
  $info=$account->get_separate_income($id);
  $income_name=$info['name'];
  $ammount=$info['amount'];
  $notes=$info['notes'];
  $site->form_input("income Name","income_name","income_name","text","exclamation-sign","$income_name","");
  $site->form_input("Ammount","amount","amount","number","exclamation-sign","$ammount","");
 ?>
	<b>Note</b><br/>
   <textarea class="textarea_design" id="note"><?php echo "$notes"; ?></textarea>
   <br/>
   <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="income_action('update',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Save income</button>

<?php
}
if(isset($_POST['delete_income_form'])){
  $id=$_POST['delete_income_form'];
  ?>

  <center>
    <h3>Are You Want To Delete This income</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="income_action('delete',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>
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