<?php

if(isset($_POST['select_program'])){
	$program_id=$_POST['select_program'];
	echo "<option value='0'>Select All Batch</option>";
    $program_ob->select_batch_option($program_id);
}

if(isset($_POST['insert_notice'])){
	$info=$_POST['insert_notice'];
	unset($info['id']);
	$info['date']=$db->date();
	$info['add_by']=$user_id;
	$db->sql_action("notice","insert",$info,"no");
}

if(isset($_POST['delete_notice'])){
  $info=$_POST['delete_notice'];    
  $db->sql_action("notice","delete",$info);
}

if(isset($_POST['update_notice'])){
	$info=$_POST['update_notice'];
	$db->sql_action("notice","update",$info,"no");
}


if(isset($_POST['get_notice_form'])){

	?>
 <div class="editor_boxx">
 	<div>
    <b>Notice Title</b>
	<input type="text" placeholder="Enter Notice Title" name="" id="title" style="padding: 10px;width: 100%">
</div>
<br/>
  <div class="editor_header">
 <select class="form-control" style="background: var(--bg-color); color: var(--font-color)" id="select_level" onchange="key()" style="" >
  <option value="" selected="">Select Action</option>
  <?php $sms->get_syntext(); ?>
</select>

 
  </div>
  <div class="editor_body">
  
  <textarea id="editor" onkeyup="count_len()" class="editor_area" rows="7" cols="7" placeholder=""></textarea>
  </div>
  
  <div style="padding: 15px;">
  	<li><b>Total Text Length: <span id="len_text">0</span></b></li>
    <li><b>Total SMS: <span id="len_sms">0</span></b></li>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="notice_action('insert')"><span class="glyphicon glyphicon-floppy-save"></span> Save SMS</button>
</div>

	<?php
}

if(isset($_POST['update_notice_form'])){
  $id=$_POST['update_notice_form'];
  $info=$notice_info[$id];
  $description=$info['description'];
  $title=$info['title'];
  $len=strlen($description);
  $len_msg=ceil($len/160);

?>
<div class="editor_boxx">
 	<div>
    <b>Notice Title</b>
	<input type="text" placeholder="Enter Notice Title" name="" value="<?php echo "$title" ?>" id="title" style="padding: 10px;width: 100%">
</div>
<br/>
  <div class="editor_header">
 <select class="form-control" style="background: var(--bg-color); color: var(--font-color)" id="select_level" onchange="key()" style="" >
  <option value="" selected="">Select Action</option>
  <?php $sms->get_syntext(); ?>
</select>

 
  </div>
  <div class="editor_body">
  
  <textarea id="editor" onkeyup="count_len()" class="editor_area" rows="7" cols="7" placeholder=""><?php echo "$description"; ?></textarea>
  </div>
  
  <div style="padding: 15px;">
  	<li><b>Total Text Length: <span id="len_text"><?php echo "$len"; ?></span></b></li>
    <li><b>Total SMS: <span id="len_sms"><?php echo "$len_msg"; ?></span></b></li>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="notice_action('update',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Update Notice</button>
</div>

<?php

}

if(isset($_POST['delete_notice_form'])){
  $id=$_POST['delete_notice_form'];
  ?>

  <center>
    <h3>Are You Want To Delete This Notice</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="notice_action('delete',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Delete Notice</button>
  </center>

  <?php
}

if(isset($_POST['send_sms_form'])){
  $id=$_POST['send_sms_form'];
  ?>
<div class="row">
		<div class="col-md-4">
            <select onchange="select_program()" class="select1" id="program_select" name="options">
                <option value="-1">Select Program</option>
                <?php $program_ob->select_program(); ?>
            </select>
         </div>
         
          <div class="col-md-4" id="batch_select">
            <select class="select1" id="batch_select_id">
                <option value="0">Select All Batch</option>
            </select>
            <br/>
            <div id='loader_select'></div>
         </div>
          <div class="col-md-4" id="">
            <select class="select1" id="recever">
                <?php $sms->get_sms_recever_only_option(); ?>
            </select>
            <br/>
            
         </div>
	
	<div class="col-md-12"></div>
	<div style="margin-top: 10px;"></div>
	<button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="send_sms(<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-send"></span> Send SMS</button>

	<div id="res_sms"></div>
</div>  
	<?php
}

if(isset($_POST['send_sms'])){
	$data=$_POST['send_sms'];
	$program_id=$data['program_id'];
	$batch_id=$data['batch_id'];
	$notice_id=$data['notice_id'];
	$recever=$data['recever'];
	$msg=$notice_info[$notice_id]['description'];
	
	$info= $student_ob->get_student_list($program_id,$batch_id);
	$list=array();
	foreach ($info as $key => $value) {
		$student_id=$value['student_id'];
		$message=$sms->get_sms($student_id,$msg);
	    $mobile_number_list=$sms->get_student_mobile_number($student_id,$recever);
	    foreach ($mobile_number_list as $key => $value1) {
	    	$number=$value1;
	    	$res=$sms->make_sms_array($value1,$message);
    		array_push($list, $res);
	    }
	}
	$sms->send_sms($list);
}


?>

<style type="text/css">
	.editor_box{
	border-top-width: 0px;
	border-color: #000000;
	border-style: solid;
	border-bottom-width: 0px;
}
.editor_header{
	padding: 10px;
	background-color: #C6C9D1;
}

.editor_area{
	
	height: 190px;
	width: 100%;
	resize: vertical;
	padding: 12px;
	background-color: #ffffff;
	color: #424242;
	font-family: cursive;
	border-width: 1px;
	border-color: #B7B7B7;
	border-style: solid;
	font-size: 16px;
	font-weight: bold;
}

.select1 {
  position: relative;
  display: block;
  height: 3.4em;
 
  width: 100%;
  padding: 10px;
  background: var(--bg-color);
  color: var(--font-color);
  overflow: hidden;
  border-radius: .25em;
  display: inline-block;
  display: -webkit-inline-box;
  border: 1px solid #667780;
  margin: 0.5em 0em 1em 0em;
}

.select1::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #34495e;
  pointer-events: none;
}
.select1:hover::after {
  color: #f39c12;
}
.select1::after {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}

</style>