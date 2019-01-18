<?php 

if(isset($_POST['save_set_fee_data'])){
  $info=$_POST['save_set_fee_data'];
  $info['add_by']=$user_id;
  $info['date']=$db->date();
  $db->sql_action("student_payment","insert",$info,"no");
  echo "Fee Sucessfully Set.";
}

if(isset($_POST['add_extra_fee'])){
  $info=$_POST['add_extra_fee'];
  $info['add_by']=$user_id;
  $info['date']=$db->date();
  $db->sql_action("student_payment","insert",$info,"no");
  echo "Fee Sucessfully Set.";
}

if(isset($_POST['save_payment'])){
  $info=$_POST['save_payment'];

  $info['add_by']=$user_id;
  $info['date']=$db->date();

  $db->sql_action("receive_payment","insert",$info,"no");
  echo "Fee Sucessfully Set.";
}

if(isset($_POST['select_program'])){
  $pid=$_POST['select_program'];
  echo "<option value=-1>Select Payment Type</option>";
  $program_ob->get_program_type_option($pid);
  echo "<option value=3>Extra Payment</option>";
}

if(isset($_POST['update_payment'])){
  $info=$_POST['update_payment'];
  $db->sql_action("student_payment","update",$info,"no");
}

if(isset($_POST['update_payment_form'])){
  $payment_id=$_POST['update_payment_form'];
  $condition="id=$payment_id";
  $data=array();
  $data=$program_ob->get_payment_month_status($data,$condition);
  $fee=$data['total_fee'];
  $type=$data['payment_id_info']['type'];
  $note=$data['payment_id_info']['note'];
  if($type==3)echo "<input class='fee_input' id='note' type='text' value='$note'>";
  echo "<input class='fee_input' id='payment_fee' type='number' value='$fee'>";
  echo "<div style='margin-top: 5px;'>";
  echo "<center><button class='view_btn' onclick='update_payment($payment_id,$type)'>Update Payment</button></center>";
}

if(isset($_POST['add_extra_payment_form'])){
  echo "<input class='fee_input' placeholder='Enter Extra Payment Name' id='note' type='text' value=''>";
  echo "<input class='fee_input' placeholder='Enter Fee' id='payment_fee' type='number' value=''>";

  echo "<center><button class='view_btn' onclick='add_extra_fee()'>Add Extra Fee</button></center>";

}


if(isset($_POST['add_pay_form'])){
  $payment_id=$_POST['add_pay_form'];
  $condition="id=$payment_id";
  $data=array();
  $data=$program_ob->get_payment_month_status($data,$condition);
  $total_fee=$data['total_fee'];
  $due=$data['due'];

  echo "<input class='fee_input' id='pay' placeholder='Enter Pay Ammount' type='number' plaser>";
  echo "<div style='margin-top: 5px;'>";
  echo "<center><button class='view_btn' onclick='save_pay_ammount($payment_id)'>Receive Payment</button></center>";
}

if(isset($_POST['delete_payment_form'])){
  $info=$_POST['delete_payment_form'];
  $id=$info['id'];
  $payment_id=$info['payment_id'];
  ?>

    <center>
    <h3>Are You Want To Delete This Payment</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="delete_payment(<?php echo "$id,$payment_id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>

  </center>

  <?php
} 

if(isset($_POST['delete_payment'])){
  $info['id']=$_POST['delete_payment'];;
  $db->sql_action("receive_payment","delete",$info,"no");
}

if(isset($_POST['get_payment_list'])){
  $student_id=$_POST['get_payment_list'];
  $condition="student_id=$student_id";
  
  $info=$set_payment_ob->get_payment_receive_list($condition);

	?>

<div class="row">
  	<div class="select_area_body" style="border-width: 0px; padding: 20px;">
 		<div class="col-md-1"></div>
  		<div class="col-md-4">
    		<select class="form-control" id="select_payment_program" onchange="select_payment_program()">
      			<option value="-1">Select Program</option>
              <?php $student_ob->get_student_program_option($student_id); ?>
    		</select>
  		</div>
  		<div class="col-md-4">
    		<select class="form-control" id="select_payment_type">
      			<option value='-1'>Select Payment Type</option>  
    		</select>
  		</div>
  		<div class="col-md-3" style="">
    		<button class="view_btn" onclick="view_payment()">View Payment</button>
  		</div>
  		<br/>
	</div>
</div>

<div style="margin-top: 10px;"></div>
<div id="payment_body_panel">
  
<table width="100%">
	<tr style="text-align: center;">
		<td class="td_list1">#</td>
		<td class="td_list1">Program Name</td>
    <td class="td_list1">Type</td>
    <td class="td_list1">Month</td>
    <td class="td_list1">Year</td>
		<td class="td_list1">Pay</td>
		<td class="td_list1">Receive By</td>
		<td class="td_list1">Date</td>
		<td class="td_list1">Action</td>
	</tr>
	<?php 

   foreach ($info as $key => $value) {
     $id=$value['id'];
     $pay=$value['pay'];
     $date=$value['date'];
     $add_by=$value['add_by'];
     $program_name=$value['name'];
     $type=$value['type'];
     
     $month=$value['month'];

     $month_name="-";
     $year="-";
     $type_string="Admission Fee";

     if($type==3)$type_string=$value['note'];
     if($type==2){
       $year=$value['year'];
       $type_string="Monthly";
       $month_name=$set_payment_ob->get_month_name($month);
     }
     $uname=$user[$add_by]['uname'];
   ?>
	<tr style="text-align: center;">
		<td class="td_list2"><?php echo "$id"; ?></td>
		<td class="td_list2"><?php echo "$program_name"; ?></td>
    <td class="td_list2"><?php echo "$type_string"; ?></td>
    <td class="td_list2"><?php echo "$month_name"; ?></td>
    <td class="td_list2"><?php echo "$year"; ?></td>
		<td class="td_list2"><?php echo "$pay tk"; ?></td>
		<td class="td_list2"><?php echo "$uname"; ?></td>
		<td class="td_list2"><?php echo "$date"; ?></td>
		<td class="td_list2">
        <button class="btn btn-danger btn-xs" title="Print Money Recept" onclick="print_money_recept(<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-print"></span></button>
        <button class="btn btn-danger btn-xs" title="Send Payment Receive SMS" onclick="send_sms_page('<?php echo "$id"; ?>')" ><span class="glyphicon glyphicon-send"></span></button>

    </td>
	</tr>
    <?php } ?>

</table>
</div>
<?php 

}


if(isset($_POST['view_payment'])){
  $info=$_POST['view_payment'];
  
  $student_id=$info['student_id'];
  $program_id=$info['program_id'];
  $type=$info['type'];

  $info=array();
  
  if($type==1){
    $res["month_name"]="Admission Fee";
    $fee=$program_ob->get_separate_program_info("fee",$program_id);
    $fee=$fee['fee'];
    $res['fee']=$fee;
    $info=array();
    $info[0]=$res;
  }
  else if($type==2)$info=$set_payment_ob->get_student_payment_list($student_id,$program_id);
  else $info=$set_payment_ob->get_student_payment_list_type($program_id,$student_id,3);
  //$site->myprint_r($info);

  if($type==3)echo "<center><button style='width: 130px;padding: 5px;' class='btn btn-lg btn-primary btn-block' onclick='add_extra_payment_form()'>Add Extra Fee</button></center>";
  
	?>

<div class="row">
  <div class="select_area_body" style="border-width: 0px; padding: 20px;">
  <?php 


      
  foreach ($info as $key => $value) {
    
    $month_name=(isset($value['month_name']))?$value['month_name']:$value['note'];
    $month_name=(strlen($month_name)>22)?$site->make_name($month_name,22)."...":$month_name;
    
    $year=(isset($value['year']))?$value['year']:"0";;
    $fee=(isset($value['fee']))?$value['fee']:"0";
    $month=(isset($value['month']))?$value['month']:"0";
    
    $data=array();
    $data['student_id']=$student_id;
    $data['program_id']=$program_id;
    $data['year']=$year;
    $data['month']=$month;
    $data['type']=$type;
    
    $con=($type==3)?"id=".$value['id']:"";
    $data=$program_ob->get_payment_month_status($data,$con);
    //$site->myprint_r($data);

    $paid=0; 

    $total_fee="-"; 
    $total_pay="-";
    $due="-";
    $status_msg="Due";
    $btn_text="Set Payment"; 
    $btn_onclick="set_payment($program_id,$year,$month,$type)";
   

    if($data!=-1){
        $paid=$data['paid'];
        $total_fee=$data['total_fee'];
        $total_pay=$data['total_pay'];
        $due=$data['due'];
        if($due<=0)$status_msg="Paid";
        $btn_text="View";
        $payment_id=($type==3)?$value['id']:$data['payment_id'];
        $btn_onclick="view_payment_panel($payment_id)";
   }



    $status="paid";
  	$td_cls="c_paid";

  	if($paid==0){
    	$status="unpaid";
  		$td_cls="c_unpaid";
  	}

  
  ?>
     <div class="col-md-6">
<div class="offer offer_<?php echo $status; ?>">
        <div class="shape">
          <div class="shape-text">
            <?php echo "$status_msg"; ?>              
          </div>
        </div>

        <div class="offer-content">
          <h3 class="lead">
             <label class="label label_<?php echo $status; ?>"> <?php echo $month_name; ?></label>
              <label class="label label_<?php echo $status; ?>"> <?php echo $year; ?></label>
          </h3>

          <table width="100%">
              <tr>
                <td class="cls_td_paid <?php echo $td_cls; ?>">Total Payment:</td>
                <td class="cls_td_set_payment_2"><?php echo $total_fee; ?></td>
              </tr>
              <tr>
                <td class="cls_td_paid <?php echo $td_cls; ?>">Total Pay:</td>
                <td class="cls_td_set_payment_2"><?php echo "$total_pay"; ?></td>
              </tr>
              <tr>
                <td class="cls_td_paid <?php echo $td_cls; ?>">Total Due:</td>
                <td class="cls_td_set_payment_2"><?php echo "$due"; ?></td>
              </tr>
              
            </table>
          <div style="margin-top: 8px;"></div>
            <center><button class="btn btn-md btn-block btn_view <?php echo $td_cls; ?>" onclick="<?php echo "$btn_onclick"; ?>"><b><?php echo "$btn_text"; ?></b></button></center> 
                 
                 </div> 
     </div>
</div>

      <?php } ?>
</div>
</div>

	<?php
}

if(isset($_POST['set_payment'])){
  $info=$_POST['set_payment'];
  
  $student_id=$info['student_id'];

  $program_id=$info['program_id'];
  $program_name=$program_ob->get_separate_program_info("*",$program_id);
  
  $fee=$program_name['fee'];
  $program_name=$program_name['name'];

  $type=$info['type'];

  if($type==2){
    $year=$info['year'];
    $month=$info['month'];
    $type_string="Monthly";
    $month_name=$set_payment_ob->get_month_name($month);
    $condition="program_id=$program_id and month=$month and year=$year";
    $fee=$set_payment_ob->get_set_payment_by_id($condition,"fee");
    $fee=$fee['fee'];
    $save_fee="$program_id,$month,$year,2";
  }
  else{
    $year="";
    $month_name="";
    $month="";
    $type_string="Admission Fee";
    $condition="program_id=$program_id and type=$type";
    $save_fee="$program_id,0,0,1";
  }
  

	?>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="payment_next_box">
        <div class="payment_next_body">
           <table width="100%">
             <tr>
                <td class="cls_payment_td_paid c_unpaid">Program Name:</td>
                <td class="cls_payment_td_paid2"><?php echo "$program_name"; ?></td>
              </tr>
               <tr>
                <td class="cls_payment_td_paid c_unpaid">Payment Type:</td>
                <td class="cls_payment_td_paid2"><?php echo "$type_string"; ?></td>
              </tr>
              <tr>
                <td class="cls_payment_td_paid c_unpaid">Payment Year:</td>
                <td class="cls_payment_td_paid2"><?php echo "$year"; ?></td>
              </tr>
              <tr>
                <td class="cls_payment_td_paid c_unpaid">Payment Month:</td>
                <td class="cls_payment_td_paid2"><?php echo "$month_name"; ?></td>
              </tr>
              <tr>
                <td class="cls_payment_td_paid c_unpaid">Total Fee</td>
                <td class="cls_payment_td_paid2"><input id="set_student_fee_value" class="payment_input" type="number" value="<?php echo $fee; ?>"></td>
              </tr>


           </table>
        </div>
        <button style="border-radius: 0px; padding: 10px;" class="btn btn-md btn-block btn_view c_unpaid" onclick="save_set_fee(<?php echo "$save_fee"; ?>)">Save Set Fee</button>
    </div>
	</div>
	<div class="col-md-3"></div>
</div>


	<?php
}



if(isset($_POST['payment_panel'])){
  $payment_id=$_POST['payment_panel'];
  $condition="id=$payment_id";

  $data=array();
  $data=$program_ob->get_payment_month_status($data,$condition);
 

  $payment_info=$data['payment_id_info'];
  $program_id=$payment_info['program_id'];
  
  $program_name=$program_ob->get_separate_program_info("name",$program_id);
  $program_name=$program_name['name'];

  $type=$payment_info['type'];

  $month="-";
  $year="-";
  $type_status=($type==1)?"Admission Fee":$payment_info['note'];

  if($type==2){
   $month=$payment_info['month'];
   $month=$set_payment_ob->get_month_name($month);
   $year=$payment_info['year'];
   $type_status="Monthly";
  }

  $fee=$payment_info['total_fee'];
  $total_pay=$data['total_pay'];
  $due=$data['due'];

  $status="Due";
  $status_color="c_unpaid";
  if($due<=0){
    $status="Paid";
    $status_color="c_paid";
  }
   
  $payment_list=$set_payment_ob->get_payment_list($payment_id); 

?>

 <div class="row">
 

<div class="col-md-12 margin-bottom-30">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption">
              <i class="glyphicon glyphicon-calendar"></i>
              <span class="caption-subject"> Payment Panel</span>
              
              <span class="payment_status_img <?php echo $status_color; ?>" style="padding: 0px 10px 0px 10px;">
                <?php echo "$status"; ?>
              </span>
            </div>
            <div class="actions">
              <a title="Reload Panel" href="javascript:;" onclick="view_payment_panel(<?php echo "$payment_id"; ?>)" class="btn">
                <i class="glyphicon glyphicon-refresh"></i>
              </a>
              <a href="javascript:;" onclick="update_payment_form(<?php echo "$payment_id"; ?>)" class="btn">
                <i class="glyphicon glyphicon-euro"></i>
                Update Fee
              </a>
              <a href="javascript:;" onclick="add_pay_form(<?php echo "$payment_id"; ?>)" class="btn">
                <i class="glyphicon glyphicon-plus"></i>
                Receive Payment
              </a>
             
            </div>
          </div>
          <div class="portlet-body">
             <div class="row" style="">
               <div class="col-md-5">
                 <table width="100%">
                  <tr>
                    <td class="td_profile1" style="width: 125px;">Program Name:</td>
                    <td class="td_profile2"><?php echo "$program_name" ?><br/></td>
                  </tr>
                   <tr>
                    <td class="td_profile1">Payment Type:</td>
                    <td class="td_profile2"><?php echo "$type_status" ?></td>
                  </tr>
                  <tr>
                    <td class="td_profile1">Year:</td>
                    <td class="td_profile2"><?php echo "$year" ?></td>
                  </tr>
                  <tr>
                    <td class="td_profile1">Month:</td>
                    <td class="td_profile2"><?php echo "$month" ?></td>
                  </tr>
                  
                 
                </table>
               </div>
               <div class="col-md-7">
                  <table width="100%">
                    <tr style="text-align: center;">
                      <td class="td_list1">#</td>
                      <td class="td_list1">Pay</td>
                      <td class="td_list1">Date</td>
                      <td class="td_list1">Receive By</td>
                      <td class="td_list1">Action</td>
                    </tr>
                    <?php 

                  foreach ($payment_list as $key => $value) {
                     $id=$value['id'];
                     $pay=$value['pay'];
                     $date=$value['date'];
                     $add_by=$value['add_by'];
                     $uname=$user[$add_by]['uname'];


                    ?>
                    <tr style="text-align: center;">
                      <td class="td_list2"><?php echo "$id"; ?></td>
                      <td class="td_list2"><?php echo "$pay"; ?></td>
                      <td class="td_list2"><?php echo "$date"; ?></td>
                      <td class="td_list2"><?php echo "$uname"; ?></td>
                      <td class="td_list2">
                        <button class="btn btn-danger btn-xs" title="Delete" onclick="delete_payment_form(<?php echo "$id,$payment_id"; ?>)" ><span class="glyphicon glyphicon-trash"></span></button>
                        <button class="btn btn-danger btn-xs" title="Print Money Recept" onclick="print_money_recept('<?php echo "$id"; ?>')" ><span class="glyphicon glyphicon-print"></span></button>
                        <button class="btn btn-danger btn-xs" title="Send Payment Receive SMS" onclick="send_sms_page('<?php echo "$id"; ?>')"><span class="glyphicon glyphicon-send"></span></button>
                      </td>
                    </tr>
                     <?php } ?>
                  </table>
                  <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">

                  <table width="100%">
                    <tr>
                    <td style="padding: 10px;"></td>
                    <td></td>
                  </tr>
                   <tr>
                    <td class="td_profile1 td_fee" style="width: 150px;">Total Fee:</td>
                    <td class="td_profile2"><?php echo "<b>$fee</b> tk" ?></td>
                  </tr>
                  <tr>
                    <td class="td_profile1 td_fee">Total Pay:</td>
                    <td class="td_profile2"><?php echo "<b>$total_pay</b> tk" ?></td>
                  </tr>
                  <tr>
                    <td class="td_profile1 td_fee">Total Due:</td>
                    <td class="td_profile2"><?php echo "<b>$due</b> tk" ?></td>
                  </tr>
                  <tr>
                    <td class="td_profile1 td_fee">Payment Status:</td>
                    <td class="td_profile2"><?php echo "$status"; ?></td>
                  </tr>

                  </table>
                  </div>
                  </div>
               </div>
               
              </div>
          </div>
        </div>
        <!-- END Portlet PORTLET-->
      </div>
</div>
<?php
}

 if(isset($_POST['print_money_recept'])){
  $payment_id=$_POST['print_money_recept'];
  
?>
<div id="print_recept_area">
  <?php $set_payment_ob->get_money_recept($payment_id); ?>
</div>

<center><a onclick="print('print_recept_area')" class='btn btn-default'> <i class='glyphicon glyphicon-print'></i> Print Money Recept</a></center>

<?php  
}

if(isset($_POST['send_sms_page'])){
  $data=$_POST['send_sms_page'];
  $payment_id=$data['payment_id'];
  $message=$set_payment_ob->money_recept_sms($payment_id);
  
   
?>

<div id="message_body">
  <textarea class="sms_text_area" id="message" readonly=""><?php echo "$message"; ?> </textarea>
      <?php $sms->get_sms_recever_option(); ?>
  <center>
    <button class='btn btn-default' onclick='send_sms()'>Send SMS</button>
  </center>
</div>
<div id="message_sending"></div>
<?php

}

if(isset($_POST['send_sms'])){
  $info=$_POST['send_sms'];
  $message=$info['message'];
  $receiver=$info['receiver'];
  $student_id=$info['student_id'];
  $info=$sms->get_student_mobile_number($student_id,$receiver);
  $list=array();
  foreach ($info as $key => $value) {
    $res=$sms->make_sms_array($value,$message);
    array_push($list, $res);
  }

  $sms->send_sms($list);

}
  

?>

<style type="text/css">
:root {
    --paid: #218c74; 
    --unpaid: #b33939; 
}

.sms_text_area{
  height: 150px;
  width: 100%;
}

/*payment field*/
.fee_input{
  padding: 5px;
  width: 100%;
  margin-bottom: 5px;
}
.td_fee{
  text-align: right;
  font-weight: bold;
}
.payment_status_img{
  width: 150px;
  margin-bottom: 10px;
  text-align: center;
  border-radius: 15px;
  font-size: 20px;
  font-weight: bold;
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  color: #fff;
}

/* Portlet */
.portlet {
  background: #fff;
  padding: 20px;
}

.portlet.portlet-gray {
  background: #f7f7f7;
}

.portlet.portlet-bordered {
  border: 1px solid #eee;
}

/* Portlet Title */
.portlet-title {
  padding: 0;
    min-height: 40px;
    border-bottom: 1px solid #eee;
    margin-bottom: 18px;
}

.caption {
  float: left;
  display: inline-block;
  font-size: 18px;
  line-height: 18px;
}

.caption.caption-green .caption-subject,
.caption.caption-green i {
  color: #4db3a2;
  font-weight: 200;
}

.caption.caption-red .caption-subject,
.caption.caption-red i {
  color: #e26a6a;
  font-weight: 200;
}

.caption.caption-purple .caption-subject,
.caption.caption-purple i {
  color: #8775a7;
  font-weight: 400;
}

.caption i {
  color: #777;
  font-size: 15px;
  font-weight: 300;
  margin-top: 3px;
}

.caption-subject {
  color: #666;
  font-size: 16px;
  font-weight: 600;
}


/* Actions */
.actions {
  float: right;
    display: inline-block;
}

.actions a {
  margin-left: 3px;
}

.actions .btn {
  color: #666;
  padding: 3px 9px;
  font-size: 13px;
    line-height: 1.5;
    background-color: #fff;
    border-color: #ccc;
    border-radius: 50px;
}

.actions .btn i {
  font-size: 12px;
}

.actions .btn:hover {
  background: #f2f2f2;
}
/* Btn Circle */
.actions .btn.btn-circle {
  width: 28px;
  height: 28px;
  padding: 3px 7px;
  text-align: center;
}

.actions .btn.btn-circle i {
  font-size: 11px;
}

/* Btn Grey Salsa */
.actions .btn.grey-salsa {
  border: none;
  margin-left: 3px;
  box-shadow: none;
  border-radius: 50px !important;
}

.actions .btn.grey-salsa.active {
  color: #fafcfb;
  background: #8e9bae;
}
  .actions .grey-salsa.btn:hover,
  .actions .grey-salsa.btn:focus,
  .actions .grey-salsa.btn:active,
  .actions .grey-salsa.btn.active {
  color: #fafcfb;
  background: #97a3b4;
}


/*payment panel css*/

.payment_panel_body{
  background-color: #ffffff;
  border-top: 1px solid #000000;
  padding: 18px;
}

.process{
  display:table;
  width:100%;
  position:relative; 
  background:#ECF0F1;
  padding:5px;
  border-radius:0px;
}
.process-row{
  display:table-row
}
.process-step button[disabled]{
  opacity:1 !important;
  filter: alpha(opacity=100) !important
}
.process-row:before{
  top:40px;
  bottom:0;
  position:absolute;
  content:" ";
  width:100%;
  height:0px;
  background-color:#ccc;
  z-order:0
}
.process-step{
  display:table-cell;
  text-align:center;
  position:relative
}
.process-step p{margin-top:4px}
.btn-circle{
  width:60px;
  height:60px;
  text-align:center;
  font-size:12px;
  border-radius:50%
}

.payment{
   padding: 5px;
}
.payment_header{
  background-color: var(--bg-color);
  color: var(--font-color);
  padding: 15px;
}
.payment_body{
   padding: 0px;
   border-width: 1px;
   border-color: var(--bg-color);
   border-style: solid;
}

/*end payment panel css*/


.payment_next_box{
  border: 1px solid var(--unpaid);
}
.payment_next_body{
  padding: 15px;
}
.payment_input{
  padding: 5px;
  font-weight: bold;
}
.cls_payment_td_paid,.cls_payment_td_paid2{
  padding: 15px;
  border-width: 1px;
  border-style: solid;
  border-color: #DDDDDD;
}
.cls_payment_td_paid{
  width: 170px;
  color: #fff;
  text-align: right;
}

.btn_view{color: #ffffff;}
.btn_view:hover{font-size: 16px;color: #ffffff;}
.btn_view:focus{color: #ffffff;}
	
	.view_btn{
		background-color: var(--bg-color);
		padding: 10px;
		color: #ffffff;
		border-width: 0px;
		border-radius: 5px;
	}
	.td_list1{
       padding: 10px;
       background-color: var(--bg-color);
       color: var(--font-color);
       border: 1px solid #DDDDDD; 
    }
    .td_list2{
       padding: 8px;
       background-color: #ffffff;
       color: #000000;
       border: 1px solid #DDDDDD; 
    }

.cls_td_paid,.cls_td_unpaid,.cls_td_set_payment_2{
  padding: 5px;
  border-width: 1px 0px 0px 0px;
  border-color: #DDDDDD;
  border-style: solid;
}

.cls_td_paid,.cls_td_unpaid{
  width: 120px;
  color: var(--font-color);
  text-align: right;
}
.c_paid{
	background-color: var(--paid);
}
.c_unpaid{
	background-color: var(--unpaid);
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
  background:#f5f5f5; border:2px solid #ddd; 
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
   margin: 15px 0; overflow:hidden;
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
.shape {
  border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}

.offer-radius{	border-radius:7px;	}

.label_paid{ background-color: var(--paid); }

.label_unpaid{ background-color: var(--unpaid); }

.offer_unpaid { border-color: var(--unpaid); }

.offer_unpaid .shape{
  border-color: transparent var(--unpaid); transparent transparent;
}

.offer_paid {  border-color: var(--paid); }

.offer_paid .shape{
  border-color: transparent var(--paid); transparent transparent;
}

.shape-text{
  color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
  -ms-transform:rotate(30deg); /* IE 9 */
  -o-transform: rotate(360deg);  /* Opera 10.5 */
  -webkit-transform:rotate(30deg); /* Safari and Chrome */
  transform:rotate(30deg);
} 

.offer-content{
  padding:0 20px 0px;
}

</style>
