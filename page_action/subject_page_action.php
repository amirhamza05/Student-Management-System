<?php 

include "layout/header_script.php";

if(isset($_POST['insert_subject'])){
  $data=$_POST['insert_subject'];
  $info=$data;
  unset($info['id']);
  $db->sql_action("subject","insert",$info);
}


else if(isset($_POST['update_subject'])){
  $info=$_POST['update_subject'];   
  $db->sql_action("subject","update",$info);
}

if(isset($_POST['delete_subject'])){
  $info=$_POST['delete_subject'];    
  $db->sql_action("subject","delete",$info);
}

if(isset($_POST['get_subject_form'])){
  ?>
 <div class="row">
    <div class="col-xs-12 col-sm-12">  
      <?php
    //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
       $site->form_input("Subject Name","insert_name","sub_name");
       $site->form_input("Subject Code","insert_name","sub_code");
    ?> 
        <div id="err_product_date" class="error"></div>
        <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="subject_action('insert')"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>

    </div>
</div>
  <?php
}

if(isset($_POST['update_subject_form'])){
  $id=$_POST['update_subject_form'];
  $name=$subject[$id]['name'];
  $code=$subject[$id]['code'];
?>

<div class="row">
    <div class="col-xs-12 col-sm-12">  
      <?php
       $site->form_input("Subject Name","insert_name","sub_name","text","exclamation-sign",$name);
       $site->form_input("Subject Code","insert_name","sub_code","text","exclamation-sign",$code);
    ?> 
        <div id="err_product_date" class="error"></div>
        <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="subject_action('update',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Update</button>

    </div>
</div>
<?php
}

if(isset($_POST['delete_subject_form'])){
  $id=$_POST['delete_subject_form'];
  ?>

  <center>
    <h3>Are You Want To Delete This Subject</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="subject_action('delete',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>
  </center>

  <?php
}




?>