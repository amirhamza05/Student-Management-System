<?php 

if(isset($_POST['get_payment_list'])){
	?>

<div class="row">
  	<div class="select_area_body" style="border-width: 0px; padding: 20px;">
 		<div class="col-md-1"></div>
  		<div class="col-md-4">
    		<select class="form-control">
      			<option>Select Program</option>
    		</select>
  		</div>
  		<div class="col-md-4">
    		<select class="form-control">
      			<option>Select Type</option>
    		</select>
  		</div>
  		<div class="col-md-3" style="">
    		<button class="view_btn" onclick="view_payment()">View Payment</button>
  		</div>
  		<br/>
	</div>
</div>

<div style="margin-top: 10px;"></div>
<table width="100%">
	<tr>
		<td class="td_list1">#Payment ID</td>
		<td class="td_list1">Program Name</td>
		<td class="td_list1">Payment</td>
		<td class="td_list1">Receive By</td>
		<td class="td_list1">Date</td>
		<td class="td_list1">Action</td>
	</tr>
	<?php for($i=1; $i<10; $i++){ ?>
	<tr>
		<td class="td_list2">Payment ID</td>
		<td class="td_list2">Program Name</td>
		<td class="td_list2">Payment</td>
		<td class="td_list2">Receive By</td>
		<td class="td_list2">Date</td>
		<td class="td_list2">Action</td>
	</tr>
    <?php } ?>

</table>

<?php 

}

if(isset($_POST['view_payment'])){
	?>

<div class="row">
  <div class="select_area_body" style="border-width: 0px;">
  <?php for($i=0; $i<10; $i++){
  	$status="paid";
  	$td_cls="c_paid";
  	if($i%2==0){
    	$status="unpaid";
  		$td_cls="c_unpaid";
  	}
  

  ?>
     <div class="col-md-4">
<div class="offer offer_<?php echo $status; ?>">
        <div class="shape">
          <div class="shape-text">
            Paid              
          </div>
        </div>

        <div class="offer-content">
          <h3 class="lead">
             <label class="label label_<?php echo $status; ?>"> January</label> <label class="label label_<?php echo $status; ?>"> 2018</label>
          </h3>

          <table width="100%">
              <tr>
                <td class="cls_td_paid <?php echo $td_cls; ?>">Total Payment:</td>
                <td class="cls_td_set_payment_2">500</td>
              </tr>
              <tr>
                <td class="cls_td_paid <?php echo $td_cls; ?>">Total Pay:</td>
                <td class="cls_td_set_payment_2">300</td>
              </tr>
              <tr>
                <td class="cls_td_paid <?php echo $td_cls; ?>">Total Due:</td>
                <td class="cls_td_set_payment_2">200</td>
              </tr>
              <tr>
                <td class="cls_td_paid <?php echo $td_cls; ?>">Last Pay Date:</td>
                <td class="cls_td_set_payment_2">12 apr 2018</td>
              </tr>
            </table>
          <div style="margin-top: 8px;"></div>
            <center><button class="btn btn-md btn-block btn_view <?php echo $td_cls; ?>" onclick="view_payment_info()"><b>View</b></button></center> 
                 
                 </div> 
     </div>
</div>

      <?php } ?>
</div>
</div>

	<?php
}

if(isset($_POST['view_payment_info'])){

	?>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class=""></div>
	</div>
	<div class="col-md-3"></div>
</div>


	<?php
}

?>

<style type="text/css">
:root {
    --paid: #218c74; 
    --unpaid: #b33939; 
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
  height: 250px;
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
