<?php
include "layout/header_script.php";

$info=array();

if(isset($_POST['insert_batch'])){

	$info=$_POST['insert_batch'];
  unset($info['id']);
  $db->sql_action("batch","insert",$info);
	
}

else if(isset($_POST['update_batch'])){
  $info=$_POST['update_batch'];
  $db->sql_action("batch","update",$info);
}

else if(isset($_POST['delete_batch'])){

	$info=$_POST['delete_batch'];
	$db->sql_action("batch","delete",$info);
}

if(isset($_POST['add_batch_form'])){
   $day="";
   //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
    $site->form_input("Batch Name","insert_name","batch_name");
    $site->form_input("Start Batch Time","insert_name","batch_start","text","exclamation-sign","","Ex: 8:00 AM");
    $site->form_input("End Batch Time","insert_name","batch_end","text","exclamation-sign","","Ex: 10:00 AM");
    ?>
      
      <?php $batch_ob->selectd_day($day); ?>
      <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="batch_action('insert')"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
 
<?php

} 

if(isset($_POST['update_batch_form'])){
  $id=$_POST['update_batch_form'];
  $info=$batch[$id];
  $name=$info['name'];
  $start=$info['start'];
  $end=$info['end'];
  $day=$info['day'];
  $site->form_input("Batch Name","insert_name","batch_name","text","exclamation-sign","$name","");
  $site->form_input("Start Batch Time","insert_name","batch_start","text","exclamation-sign","$start","Ex: 8:00 AM");
  $site->form_input("End Batch Time","insert_name","batch_end","text","exclamation-sign","$end","Ex: 10:00 AM");
  $batch_ob->selectd_day($day);

?>
  <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="batch_action('update',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Update Batch</button>

<?php

}

if(isset($_POST['delete_batch_form'])){
  $id=$_POST['delete_batch_form'];
  ?>

  <center>
    <h3>Are You Want To Delete This Batch</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="batch_action('delete',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>
  </center>

  <?php
}

?>

<style type="text/css">
  .day_header{
    background-color: var(--bg-color);
    color: var(--font-color);
    padding: 5px;
    font-size: 17px;
    border-radius: 5px 5px 0px 0px;
  }
  .day_body{
    margin-bottom: 10px;
    padding: 15px;
    font-size: 15px;
    border-width: 1px;
    border-color: var(--bg-color);
    border-style: solid;
  }
</style>