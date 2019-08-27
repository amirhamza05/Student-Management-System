<?php

if(isset($_POST['send_pending_sms'])){
    $id=$_POST['send_pending_sms'];
    $sms->send_pending_sms($id);
}

if(isset($_POST['insert_sms'])){
	$info=$_POST['insert_sms'];
	unset($info['id']);
	$info['date']=$db->date();
	$info['add_by']=$user_id;
	$db->sql_action("sms_add","insert",$info,"no");
}

if(isset($_POST['delete_sms'])){
  $info=$_POST['delete_sms'];
  print_r($info);    
  $db->sql_action("sms_add","delete",$info,"no");
}

if(isset($_POST['update_sms'])){
	$info=$_POST['update_sms'];
	$db->sql_action("sms_add","update",$info,"no");
}

if(isset($_POST['get_sms_form'])){

  if($user_permit>4){
    echo "<b>You Can Not Permit This Option.If You Need SMS then Please Connect TechSerm Authority</b>";
    return;
  }
  
	$site->form_input("Total Buy SMS","total_sms","total_sms","number","exclamation-sign","","");
	$site->form_input("Buy Date","date1","date1","date","exclamation-sign","","");
  $site->form_input("Expire Date","date2","date2","date","exclamation-sign","","");
  $site->form_input("Total Pay","pay","pay","number","exclamation-sign","","");
	?>
   <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="sms_action('insert')"><span class="glyphicon glyphicon-floppy-save"></span> Save SMS</button>
	<?php
}

if(isset($_POST['update_sms_form'])){
  $id=$_POST['update_sms_form'];
  $info=$sms->get_separate_sms_buy($id);

  $total_sms=$info['total_sms'];
  $pay=$info['pay'];
  $start=$info['start'];
  $end=$info['end'];
 
  $use=$info['total_send'];
  if($user_permit>4){
    echo "<b>You Can Not Permit This Option.If You Need SMS then Please Connect TechSerm Authority</b>";
    return;
  }
  
  $site->form_input("Total Buy SMS","total_sms","total_sms","number","exclamation-sign","$total_sms","");
  $site->form_input("Buy Date","date1","date1","date","exclamation-sign","$start","");
  $site->form_input("Expire Date","date2","date2","date","exclamation-sign","$end","");
  $site->form_input("Total Pay","pay","pay","number","exclamation-sign","$pay","");
 ?>

   <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="sms_action('update',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Update SMS</button>

<?php
}
if(isset($_POST['delete_sms_form'])){
  $id=$_POST['delete_sms_form'];
  $info=$sms->get_separate_sms_buy($id);
  $use=$info['total_send'];
  if($user_permit>4){
    echo "<b>You Can Not Permit This Option.If You Need SMS then Please Connect TechSerm Authority</b>";
    return;
  }
  if($use>0){
    echo "<b>Your Package Already Send Some SMS.So You Can Not Delete This Package</b>";
    return;
  }
  ?>

  <center>
    <h3>Are You Want To Delete This SMS Package</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="sms_action('delete',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>
  </center>

  <?php
}


?>