<?php

include "layout/header_script.php";


if(isset($_POST['select_program'])){
  $program_id=$_POST['select_program'];
  $flag=0;

  if($program_id!=0){
  	$batch1=$program[$program_id]['batch'];
    $program_name="'".$program[$program_id]['name']."'";
  }
  else {
  	$flag=1;
  	$program_name="";
  }
	?>
<select onchange="batch()" class="dropdown-select-version select" name="options" id="batch_select" style="">
<option value="0"> <?php echo "All $program_name Batch"; ?></option>   
	<?php
   if($flag==1){
         foreach ($batch as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	   ?>
<option value="<?php echo"$id"; ?>"> <?php echo "$name"; ?></option>        
	<?php 
   }
}
   if($flag==0){

	  foreach ($batch1 as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	   ?>
<option value="<?php echo"$id"; ?>"> <?php echo "$name"; ?></option>        
	<?php
}
}
echo "</select>";

}

else if(isset($_POST['select_batch'])){
  $program_id=$_POST['program_id'];
  $batch_id=$_POST['select_batch'];
 $program_name=$program_ob->get_program_name($program_id);

  $batch_name=$batch_ob->get_batch_name($batch_id);


	?>
<select onchange="student_update()" class="dropdown-select-version select" name="options" id="student_select">
<option value="0"> <?php echo "All $program_name $batch_name Student"; ?></option>   

<?php 
if($program_id==0){
	 foreach ($student as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	$pid=$value['program'];
            	$bid=$value['batch'];
            	   ?>
<option value="<?php echo"$id"; ?>"> <?php echo "($id) $name"; ?></option>        
	<?php
}

}
else{

	 foreach ($student as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	$pid=$value['program'];
            	$bid=$value['batch'];
            	if(($pid==$program_id && $bid==$batch_id)||($batch_id==0 && $pid==$program_id)){
            	   ?>
<option value="<?php echo"$id"; ?>"> <?php echo "($id) $name"; ?></option>        
	<?php
}
}
}
echo "</select>";

}

else if(isset($_POST['preview_id_card'])){
	$program_id=$_POST['preview_id_card'];
	$batch_id=$_POST['batch_id'];
	$student_id=$_POST['student_id'];
	$info=$student_ob->get_select_student($program_id,$batch_id,$student_id);
$id_card->get_id_card($info);
}


?>