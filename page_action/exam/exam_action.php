<?php

if(isset($_POST['insert_exam'])){
  $info=$_POST['insert_exam'];
  unset($info['id']);
  $info['add_by']=$user_id;
  $info['date']=$db->date();
  $db->sql_action("exam","insert",$info,"no");
}
if(isset($_POST['update_exam'])){
  $info=$_POST['update_exam'];
  print_r($info);
  $db->sql_action("exam","update",$info,"no");
}
if(isset($_POST['delete_exam'])){
  $info=$_POST['delete_exam'];
  $db->sql_action("exam","delete",$info,"no");
}


if(isset($_POST['get_exam_form'])){
  ?>
<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Program</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 

<select class='form-control'  name='add_program_select' id='program_select' class='cs-select cs-skin-border' onchange="select_program()"  required="">
  <option value="0">Select Program</option>
  <?php $program_ob->select_program(); ?>
</select>
</div></div>

<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Subject</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 

<select class='form-control'  name='subject' id='select_subject' class='cs-select cs-skin-border' onchange=""  required="">
</select>
</div>
</div></div>
<?php

$site->form_input("Exam Name","exam_name","exam_name","text");
$site->form_input("MCQ Mark","mcq","mcq","number");
$site->form_input("Written Mark","written","written","number");
$site->form_input("Exam Date","exam_date","exam_date","date");

?>

 <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="exam_action('insert')"><span class="glyphicon glyphicon-floppy-save"></span> Save Exam</button>

<?php

}


if(isset($_POST['update_exam_form'])){
 $id=$_POST['update_exam_form'];
 $info=$exam[$id];
 $exam_name=$info['exam_name'];
 $program_id=$info['program_id'];
 $subject_id=$info['sub_id'];
 $mcq=$info['mcq'];
 $written=$info['written'];
 $date=$info['exam_date'];

  ?>

<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Program</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 

<select class='form-control'  name='add_program_select' id='program_select' class='cs-select cs-skin-border' onchange="select_program()"  required="">
  <option value="0">Select Program</option>
  <?php $program_ob->select_program($program_id); ?>
</select>
</div></div>

<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Subject</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 

<select class='form-control'  name='subject' id='select_subject' class='cs-select cs-skin-border' onchange=""  required="">
  <?php $program_ob->option_subject($program_id,$subject_id); ?>
</select>
</div>
</div></div>

  <?php

  $site->form_input("Exam Name","exam_name","exam_name","text","exclamation-sign","$exam_name");
  $site->form_input("MCQ Mark","mcq","mcq","number","exclamation-sign","$mcq");
  $site->form_input("Written Mark","written","written","number","exclamation-sign","$written");
  $site->form_input("Exam Date","exam_date","exam_date","date","exclamation-sign","$date");

?>

<button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="exam_action('update',<?php echo $id; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Save Exam</button>

<?php

}




else if(isset($_POST['delete'])){

       $info['id']=$_POST['id'];
       $db->sql_action("exam","delete",$info);
}


else if(isset($_POST['select_subject1'])){
  $program_id=$_POST['select_subject'];

  echo "<select class='form-control'  name='subject' id='subject' class='cs-select cs-skin-border' onchange=''  required=''>";
  foreach ($program[$program_id]['subject'] as $key => $value) {
    $id=$value['id'];
    $name=$subject[$id]['name'];
    ?>
  <option value="<?php echo "$id"; ?>"><?php echo "$name"; ?></option>
    <?php
  }
  echo "</select>";
}


else if(isset($_POST['program_select'])){

  $program_id=$_POST['program_select'];

  foreach ($program[$program_id]['subject'] as $key => $value) {
    $id=$value['id'];
    $name=$subject[$id]['name'];
    echo "<option value='$id'>$name</option>";
  }
 
}


if(isset($_POST['delete_exam_form'])){
  $id=$_POST['delete_exam_form'];
  ?>

  <center>
    <h3>Are You Want To Delete This Expence</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="exam_action('delete',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>
  </center>

  <?php
}



?>