
  <div class="row">
      <div class="col-xs-12 col-sm-12">  
          <form  action="exam_action.php" autocomplete="off" method="POST">
     
<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Program</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 

<select class='form-control'  name='add_program_select' id='add_program_select' class='cs-select cs-skin-border' onchange="select_program()"  required="">
  <option value="0">Select Program</option>
  <?php $program_ob->select_program(); ?>
</select>
</div></div>

<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Subject</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 

<div id="subject_field">
<select class='form-control'  name='subject' id='program' class='cs-select cs-skin-border' onchange=""  required="">
  
</select>
</div>
</div></div>


  <?php

$site->form_input("Exam Name","exam_name","exam_name","text");
$site->form_input("MCQ Mark","mcq","mcq","number");
$site->form_input("Written Mark","written","written","number");
$site->form_input("Total Mark","total","total","number");
$site->form_input("Exam Date","date","date","date");

  ?>
          <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
        </form>
      </div>
</div>
   

 
