<?php

if(isset($_POST['update_exam_category'])){
	$info=$_POST['update_exam_category'];
	$db->sql_action("exam_category","update",$info,"no");
}
if(isset($_POST['delete_exam_category'])){
	$info=$_POST['delete_exam_category'];
	$db->sql_action("exam_category","delete",$info,"no");
}

if(isset($_POST['insert_exam_category'])){
	$info=$_POST['insert_exam_category'];
	$info['add_by']=$login_user_id;
	$info['date']=$db->date();
	unset($info['id']);
	$db->sql_action("exam_category","insert",$info,"no");
}

if(isset($_POST['get_exam_category_form'])){
	$site->form_input("Category Name","exam_category_name","exam_category_name","text","exclamation-sign","","");
	echo "<b>Select Program</b>";
	echo "<select class='form-control' id='select_program'>";
		echo "<option value='-1'>Select Program</option>";
		$program_ob->select_program();
	echo "</select>";
	?>
	<br/>
   <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="exam_category_action('insert')"><span class="glyphicon glyphicon-floppy-save"></span> Save Category</button>
<?php

}

if(isset($_POST['update_exam_category_form'])){
	$id=$_POST['update_exam_category_form'];

	$info=$exam->get_exam_category($id);
	$info=$info[0];
	$category_name=$info['category_name'];
	$program_id=$info['program_id'];
	$site->form_input("Category Name","exam_category_name","exam_category_name","text","exclamation-sign","$category_name","");

	echo "<b>Select Program</b>";
	echo "<select class='form-control' id='select_program'>";
		echo "<option value='-1'>Select Program</option>";
		$program_ob->select_program($program_id);
	echo "</select>";
	?>
	<br/>
   <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="exam_category_action('update',<?php echo $id; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Update Category</button>
<?php

}

if(isset($_POST['delete_exam_category_form'])){
	$id=$_POST['delete_exam_category_form'];
	?>
	<center>
    <h3>Are You Want To Delete This Category</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="exam_category_action('delete',<?php echo $id; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete Category</button>

  </center>		

<?php
}

?>