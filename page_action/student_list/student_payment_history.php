<?php


if(isset($_POST['view_payment_history'])){
  
  need_payment_panel_css();
  $payment_id=$_POST['view_payment_history'];
  $condition="id=$payment_id";

  if($payment_id==0){
    echo "<center><h1>Can Not Set Any Payment.Please Go To This Student Profile and Set Payment.</h1></center>";

    return;
  }
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
              <span class="caption-subject"> Payment History</span>
              
              <span class="payment_status_img <?php echo $status_color; ?>" style="padding: 0px 10px 0px 10px;">
                <?php echo "$status"; ?>
              </span>
            </div>
           
          </div>
          <div class="portlet-body">
             <div class="row" style="">
               <div class="col-md-4">
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
               <div class="col-md-8">
                  <table width="100%">
                    <tr style="text-align: center;">
                      <td class="td_list1">#</td>
                      <td class="td_list1">Pay</td>
                      <td class="td_list1">Date</td>
                      <td class="td_list1">Receive By</td>
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
                    <td class="td_profile2"><?php echo " <b>$fee</b> tk" ?></td>
                  </tr>
                  <tr>
                    <td class="td_profile1 td_fee">Total Pay:</td>
                    <td class="td_profile2"><?php echo " <b>$total_pay</b> tk" ?></td>
                  </tr>
                  <tr>
                    <td class="td_profile1 td_fee">Total Due:</td>
                    <td class="td_profile2"><?php echo " <b>$due</b> tk" ?></td>
                  </tr>
                  <tr>
                    <td class="td_profile1 td_fee">Payment Status:</td>
                    <td class="td_profile2"><?php echo " $status"; ?></td>
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

function need_payment_panel_css(){
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
.td_profile1,.td_profile2{
  border-width: 1px;
  border-color: #DDDDDD;
  border-style: solid;
  padding: 7px;
}
.td_profile1{
  width: 100px;
  background-color: var(--bg-color);
  color: var(--font-color);
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

.offer-radius{  border-radius:7px;  }

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

<?php
} 

?>