<?php


include "layout/header_script.php";

if(isset($_POST['insert'])){

  $info['program_id']=$_POST['add_program_select'];
  $info['sub_id']=$_POST['subject'];
  $info['exam_name']=$_POST['exam_name'];
  $info['mcq']=$_POST['mcq'];
  $info['written']=$_POST['written'];
  $info['total']=$_POST['total'];
  $info['date']=$_POST['date'];
  $info['add_by']=$login_user['id'];


   $db->sql_action("exam","insert",$info,"yes");
  
}

else if(isset($_POST['update'])){
  $id=$_POST['update_id'];
  $info['id']=$_POST['update_id'];
  $info['program_id']=$_POST['update_program_id'];
  $info['sub_id']=$_POST["update_subject_id"];
  $info['exam_name']=$_POST['exam_name'];
  $info['mcq']=$_POST['mcq'];
  $info['written']=$_POST['written'];
  $total=$_POST['mcq']+$_POST['written'];
  $info['total']=$total;
  $info['date']=$_POST['date'];
  $info['add_by']=$login_user['id'];


   $db->sql_action("exam","update",$info,"yes");
  
}

else if(isset($_POST['delete'])){

       $info['id']=$_POST['id'];
       $db->sql_action("exam","delete",$info);
}


else if(isset($_POST['select_subject'])){
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


else if(isset($_POST['select_subject_id'])){

  $program_id=$_POST['select_subject_id'];
  $id=$_POST['select_id'];
  foreach ($program[$program_id]['subject'] as $key => $value) {
    $id=$value['id'];
    $name=$subject[$id]['name'];
    ?>
  <option value="<?php echo "$id"; ?>"><?php echo "$name"; ?></option>
    <?php
  }
 

  ?>

  <?php
}

?>