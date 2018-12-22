<?php


if(isset($_POST['insert_program'])){

	  $info=$_POST['insert_program'];
    unset($info['id']);
    $info['add_by']=$user_id;
    $info['date']=$db->date();
    $db->sql_action("program","insert",$info);
	
}

else if(isset($_POST['update_program'])){
    
  $info=$_POST['update_program'];
  $db->sql_action("program","update",$info);
	
}

else if(isset($_POST['delete_program'])){
$info=$_POST['delete_program'];
$db->sql_action("program","delete",$info);

}

if(isset($_POST['add_program_form'])){

  //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
  $site->form_input("Program Name","insert_name","name");
  $site->form_input("Program Start","insert_name","start","date");
  $site->form_input("Program End","insert_name","end","date");
  
  echo "<div class='form-group'>
        <label class='control-label' for='inputName'><b>Select Program Type</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>     
            <select class='form-control' onchange='program_type_select()' id='program_type'>
            <option value='-1'>Select Program Type</option>
            <option value='1'>Package Program</option>
            <option value='2'>Monthly Program</option></select>
            </div></div>";
  echo "<div id='fee_area' style='display: none'>";         
  $site->form_input("Admission Fee","insert_name","fee","number");
  echo "</div><div id='monthly_fee_area' style='display: none'>";  
  $site->form_input("Monthly Fee","insert_name","monthly_fee","number");
  echo "</div>";

  echo "<div class='select_area_header'>Select Batch</div><div class='select_area_body'>";
  $program_ob->select_batch();
 echo "</div><div class='select_area_header'>Select Subject</div><div class='select_area_body'>";
  $program_ob->select_subject();
 echo "</div><br />";

?>

<button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="program_action('insert')"><span class="glyphicon glyphicon-floppy-save" ></span> Save Program</button>

<?php

}

if(isset($_POST['update_program_form'])){
  $id=$_POST['update_program_form'];
  $info=$program[$id];
  $type=$info['type'];
  $select_type1=($type==1)?"selected":"";
  $select_type2=($type==2)?"selected":"";
  $display=($type==2)?"block":"none";
  //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")

  $site->form_input("Program Name","insert_name","name","text","exclamation-sign",$info['name']);
  $site->form_input("Program Start","insert_name","start","date","exclamation-sign",$info['start']);
  $site->form_input("Program End","insert_name","end","date","exclamation-sign",$info['end']);
  
  echo "<div class='form-group'>
        <label class='control-label' for='inputName'><b>Select Program Type</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>     
            <select class='form-control' onchange='program_type_select()' id='program_type'>
            <option value='-1'>Select Program Type</option>
            <option value='1' $select_type1>Package Program</option>
            <option value='2' $select_type2>Monthly Program</option></select>
            </div></div>";
  echo "<div id='fee_area' style='display: block'>";         
  $site->form_input("Admission Fee","insert_name","fee","number","exclamation-sign",$info['fee']);
  echo "</div><div id='monthly_fee_area' style='display: $display'>";  
  $site->form_input("Monthly Fee","insert_name","monthly_fee","number","exclamation-sign",$info['monthly_fee']);
  echo "</div>";

  echo "<div class='select_area_header'>Select Batch</div><div class='select_area_body'>";
  $program_ob->select_batch($id);
 echo "</div><div class='select_area_header'>Select Subject</div><div class='select_area_body'>";
  $program_ob->select_subject($id);
 echo "</div><br />";

?>

<button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="program_action('update',<?php echo $id; ?>)"><span class="glyphicon glyphicon-floppy-save"></span> Update Program</button>

<?php
}
if(isset($_POST['delete_program_form'])){
  $id=$_POST['delete_program_form'];
  ?>

  <center>
    <h3>Are You Want To Delete This Program</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="program_action('delete',<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>
  </center>

  <?php
}

if(isset($_POST['select_year'])){
  $info=$_POST['select_year'];
  $year=$info['year'];
  $pid=$info['program_id'];
  if($year!=-1){
        $set_payment_ob->get_program_payment_month_option($program[$pid],$year); 
  }
  else echo "<option value='-1'>Select Month</option>";
}
if(isset($_POST['set_payment_list'])){
  $info=$_POST['set_payment_list'];
  $pid=$info['id'];
  if($program[$pid]['type']==1){
    echo "<center><h1>The Program Is Package Program</h1></center>";
    return;
  }
  $payment_list_info=$set_payment_ob->get_set_payment_list_by_id($pid,$program[$pid]);
  

  if(isset($info['insert'])){
    $info1=$info['insert'];
    $year=$info1['year'];
    $month=$info1['month'];
    $fee=$program[$pid]['monthly_fee'];
    $check=$set_payment_ob->check_insert($pid,$year,$month);
    if($check==1){
        echo "<b>This Month Fee Already Set.You Can Update This Fee</b>";
    }
    else{
      echo "<b>Sucessfully Added New Monthly Fee</b>";
      $data['program_id']=$pid;
      $data['year']=$year;
      $data['month']=$month;
      $data['fee']=$fee;
      $data['add_by']=$user_id;
      $data['last_update']=$user_id;
    $db->sql_action("set_payment","insert",$data,"no");
    }
  }
  $payment_list_info=$set_payment_ob->get_set_payment_list_by_id($pid);
  
   ?>

   <div class="row">
    <div class="select_area_headerr" style=""><b></b></div>
  <div class="select_area_body" style="border-width: 0px; padding: 20px;">
    <center>
      <div class="col-md-3"></div>
  <div class="col-md-3">
    <select class="form-control" id="select_year" onchange="select_year(<?php echo $pid; ?>)">
      <?php $set_payment_ob->get_program_payment_year_option($program[$pid]); ?>
    </select>
  </div>
  <div class="col-md-3">
    <select class="form-control" id="select_month">
      <option value='-1'>Select Month</option>
    </select>
  </div>
  </center>
  </div>
</div>
<div style="margin-top: 10px;"></div>
<center>
<button class="btn_set" onclick="set_payment_btn(<?php echo "$pid"; ?>)">Set Payment</button>
</center>

<div class="row">
  <div class="select_area_headerr" style=""><b></b></div>
  <div class="select_area_body" style="border-width: 0px;">
  <?php foreach ($payment_list_info as $key => $value) {
    $month_name=$value['month_name'];
    $status="primary";
    $id=$value['id'];
    $fee=$value['fee'];
    $year=$value['year'];
    $add_uname=$value['add_by'];
    $add_uname=$user[$add_uname]['uname'];
    $update_uname=$value['last_update'];
    $update_uname=$user[$update_uname]['uname'];
  ?>
     <div class="col-md-4">
<div style="background-color: #f5f5f5" class="offer offer-<?php echo $status; ?>">
        

        <div class="offer-content">
          <center>
          <h3 class="lead">
             <label class="label" style="background-color: var(--bg-color)"> <?php echo "$month_name"; ?></label> <label  style="background-color: var(--bg-color)" class="label"> <?php echo "$year"; ?></label>
          </h3>
        </center>

          <div id="update_payment_area_<?php echo $id; ?>">
            <table width="100%">
              <tr>
                <td class="cls_td_set_payment_1">Fee</td>
                <td class="cls_td_set_payment_2"><?php echo "$fee"; ?></td>
              </tr>
              <tr>
                <td class="cls_td_set_payment_1">Add By:</td>
                <td class="cls_td_set_payment_2"><?php echo "$add_uname"; ?></td>
              </tr>
              <tr>
                <td class="cls_td_set_payment_1">Last Update:</td>
                <td class="cls_td_set_payment_2"><?php echo "$update_uname"; ?></td>
              </tr>
            </table>
            
            <div style="margin-top: 10px;"></div>
            <center><button class="btn btn-md btn-block btn_payment_update" onclick="update_payment_input(<?php echo "$id,$fee"; ?>)"><b>Update</b></button></center> 
          </div>

        </div> 

     </div>
</div>

      <?php } ?>
</div>
</div>

   <?php
}

if(isset($_POST['payment_update_area'])){
   $info=$_POST['payment_update_area'];
   $id=$info['id'];
   $fee=$info['fee'];
   

?>
    <b>Fee:</b> <input id="fee_input_<?php echo $id; ?>" type="number" value="<?php echo "$fee" ?>" name="">
    <div style="margin-top: 10px;"></div>
    <center>
      <button class="btn btn-md btn-block btn_payment_update" onclick="update_payment_save(<?php echo $id; ?>)"><b>Update Fee</b></button>
    </center> 

<?php
}

if(isset($_POST['payment_update_save'])){
  $info=$_POST['payment_update_save'];
   $id=$info['id'];
   $fee1=$info['fee'];
   $data['fee']=$fee1;
   $data['id']=$id;
   $data['last_update']=$user_id;
   if($fee1==$set_payment_info[$id]['fee'])unset($data['last_update']);
   
   $db->sql_action("set_payment","update",$data,"no");

   $set_payment_info=$set_payment_ob->get_set_payment_list();
   $value=$set_payment_info[$id];
   $fee=$value['fee'];
   $add_uname=$value['add_by'];
   $add_uname=$user[$add_uname]['uname'];
   $update_uname=$value['last_update'];
   $update_uname=$user[$update_uname]['uname'];
  ?>
             <table width="100%">
              <tr>
                <td class="cls_td_set_payment_1">Fee</td>
                <td class="cls_td_set_payment_2"><?php echo "$fee"; ?></td>
              </tr>
              <tr>
                <td class="cls_td_set_payment_1">Add By:</td>
                <td class="cls_td_set_payment_2"><?php echo "$add_uname"; ?></td>
              </tr>
              <tr>
                <td class="cls_td_set_payment_1">Last Update:</td>
                <td class="cls_td_set_payment_2"><?php echo "$update_uname"; ?></td>
              </tr>
            </table>
           
            <div style="margin-top: 10px;"></div>
            <center><button class="btn btn-md btn-block btn_payment_update" onclick="update_payment_input(<?php echo "$id,$fee"; ?>)"><b>Update</b></button></center> 

  <?php
}

if(isset($_POST['payment_info'])){
   ?>

   <div class="row">
    <div class="select_area_headerr" style=""><b>Select Month</b></div>
  <div class="select_area_body" style="border-width: 0px; padding: 20px;">
  <div class="col-md-3">
    <select class="form-control">
      <option>Select Program</option>
    </select>
  </div>
  <div class="col-md-3">
    <select class="form-control">
      <option>Select Year</option>
    </select>
  </div>
  <div class="col-md-3">
    <select class="form-control">
      <option>Select Type</option>
    </select>
  </div>
  <center><button>View Payment</button></center>
  </div>
</div>


<div class="row">
  <div class="select_area_headerr" style=""><b>Month List</b></div>
  <div class="select_area_body" style="border-width: 0px;">
  <?php for($i=0; $i<10; $i++){
   $status=($i%2==0)?"success":"danger";

  ?>
     <div class="col-md-4">
<div style="background-color: #f5f5f5" class="offer offer-<?php echo $status; ?>">
        <div class="shape">
          <div class="shape-text">
            Paid              
          </div>
        </div>

        <div class="offer-content">
          <h3 class="lead">
             <label class="label label-<?php echo $status; ?>"> January</label> <label class="label label-<?php echo $status; ?>"> 2018</label>
          </h3>
          <p>
            <b>Total Payment: 500<br/>
            <b>Total Pay: 300<br/>
            <b>Total Due: 200<br/>
            <b>Pay Date: 12 apr 2018<br/></b>
            <center><button class="btn btn-md btn-block" onclick="view_payment_month_info()"><b>View</b></button></center> 
                    </p> 
                 </div> 
     </div>
</div>

      <?php } ?>
</div>
</div>
<?php }
?>
<style type="text/css">
.btn_payment_update{
  background-color: var(--bg-color);
  color: var(--font-color);
}
.btn_payment_update:hover{
  background-color: var(--bg-color);
  font-size: 16px;
  color: var(--font-color);
}
.cls_td_set_payment_1,.cls_td_set_payment_2{
  padding: 5px;
  border-width: 1px 0px 0px 0px;
  border-color: #DDDDDD;
  border-style: solid;
}
.cls_td_set_payment_1{
  width: 100px;
  background-color: var(--bg-color);
  color: var(--font-color);
  text-align: right;
}
.btn_set{
  background-color: var(--bg-color);
  color: var(--font-color);
  padding: 15px;
  border-width: 0px;
  border-radius: 5px;
  
}

.offer:hover {
      -webkit-transform: scale(1.1); 
      -moz-transform: scale(1.1); 
      -ms-transform: scale(1.1); 
      -o-transform: scale(1.1); 
      transform:rotate scale(1.1); 
      -webkit-transition: all 0.4s ease-in-out; 
      -moz-transition: all 0.4s ease-in-out; 
      -o-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
  }
.shape{    
    border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
  -ms-transform:rotate(360deg); /* IE 9 */
  -o-transform: rotate(360deg);  /* Opera 10.5 */
  -webkit-transform:rotate(360deg); /* Safari and Chrome */
  transform:rotate(360deg);
}
.offer{
  height: 220px;
  background:#fff; border:2px solid #ddd; 
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
   margin: 15px 0; overflow:hidden;
}

.offer-radius{
  border-radius:7px;
}

.offer-primary {  border-color: var(--bg-color); }



.shape-text{
  color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
  -ms-transform:rotate(30deg); /* IE 9 */
  -o-transform: rotate(360deg);  /* Opera 10.5 */
  -webkit-transform:rotate(30deg); /* Safari and Chrome */
  transform:rotate(30deg);
} 
.offer-content{
  padding:0px 20px 5px;
}



  .select_area_header{
    background-color: var(--bg-color);
    color: var(--font-color);
    padding: 5px;
    font-size: 15px;
    font-weight: bold;
    border-radius: 3px 3px 0px 0px;
  }
  .select_area_body{
    margin-bottom: 5px;
    padding: 15px;
    font-size: 15px;
    border-width: 2px;
    border-color: var(--bg-color);
    border-style: solid;
  }
</style>
