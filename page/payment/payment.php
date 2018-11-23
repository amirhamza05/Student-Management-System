

<?php 

$id=$_GET['get_id'];
$flag=0;
foreach ($student as $key => $value) {
    $id1=$value['id'];
    $name=$value['name'];
    $photo=$value['photo'];
    $fee=$value['fee'];

    if ($id==$id1) {
        $paid=$payment->paid_ammount($id1);
        $due=$payment->due_ammount($id1);
        $flag=1;
        break;
    }
}
if($flag==1){
 ?>


<script src="script/payment/payment.js" type="text/javascript"></script>

<style type="text/css">
    .header_box{
        background-color: #414959;
        padding-top: 25px;
        padding-left: 15px;
        margin-bottom: -11px;
    }
    .box_body{
        background-color: #EEEEEE;

        padding: 20px;
    }
    .head_id{
        background-color: #414959;
        padding: 15px;
        margin-left: 80px;: 
        
    }

    .box_overview{
        background-color: #ffffff;
        padding: 15px;
        font-weight: bold;
        font-size: 20px;
    }
</style>

<div class="containerr">
   
    <div class="row">
    	
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="panel with-nav-tabs panel-primary">
                <div class="header_box">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">Payment Overview</a></li>

                            <li><a href="#tab2primary" data-toggle="tab">Add Payment</a></li>
                            <li><a href="#tab3primary" data-toggle="tab">Payment History</a></li>

                       
                           
                    
                        </ul>

                </div>
                <div class="box_body">
                    <div class="tab-content">

                        <div class="tab-pane fade in active" id="tab1primary">
                            
    <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" height="130px" src="<?php echo "$photo"; ?>" style="" class="img_c">
              <div><b><?php echo "$name"; ?></b></div>
              <div><b><?php //echo "Mobile: 01991223020"; ?></b></div>
              <div style="margin-top: 5px;"></div>
              <img src="barcode.php?text=<?php echo "$id"; ?>" class="barcode">
              <div><b><?php echo "$id"; ?></b></div>
<input type="number" id="id" value="<?php echo "$id"; ?>" hidden name="">
                 </div>

              
                <div class=" col-md-9 col-lg-9 "> 
<div class="box_overview">
    Payment: <?php echo "$fee"; ?><br/>
    Paid: <a id="overview_paid"><?php echo "$paid"; ?></a><br/>
    Due: <a id="overview_due"><?php echo "$due"; ?></a><br/>
</div>
<div id="meney_receipt" style="padding: 15px;">
<?php if($paid>0) { ?><button class="btn btn-primary" onclick ="print_money_receipt()">Print Last Money Receipt</button>
<?php } ?>
</div>

                </div></div>



                        </div>


                        <div class="tab-pane fade" id="tab2primary">
                            <?php include 'add_payment.php'; ?>
                        </div>


                        <div class="tab-pane fade" id="tab3primary">
                            <?php include 'payment_history.php'; ?>
                        </div>
                       
                    </div>
                </div>


            </div>
        </div>
	</div>
</div>

<br/>
<style type="text/css">
    
.alert-success-alt { 
  border-color: #19B99A;
  background: #20A286;
  color: #fff; 
  padding: 20px;
  float: right;
  border-radius: 15px;
}

.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
    border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
    margin-bottom: -1px;
}
/********************************************************************/

/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
    background-color: #292F3B;
    padding: 15px;
    border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
    color: #000000;
    font-weight: bold;
    background-color: #EEEEEE;
    border-color: #414959;
    margin-bottom: 2px;
    padding: 15px;
    border-bottom-color: transparent;
}

.price-box {
    margin: 0 auto;
    background: #E9E9E9;
    border-radius: 10px;
    padding: 40px 15px;
    width: 500px;
}

.ui-widget-content {
    border: 1px solid #bdc3c7;
    background: #e1e1e1;
    color: #222222;
    margin-top: 4px;
}

.ui-state-default, .ui-widget-content .ui-state-default{
background:transparent !important;
border:none !important;
}
.ui-slider .ui-slider-handle label{
    background: #428bca;
    border-radius: 20px;
    width:5.2em;
}

.ui-slider .ui-slider-handle {
    position: absolute;
    z-index: 2;
    width: 5.2em;
    height: 100px;
    cursor: default;
    margin: 0 -40px auto !important;
    text-align: center; 
    line-height: 35px;
    color: #FFFFFF;
    font-size: 15px;
    
}

.ui-slider .ui-slider-handle .glyphicon {
    color: #FFFFFF;
    margin: 0 3px; 
    font-size: 11px;
    opacity: 0.5;
}

.ui-corner-all {
    border-radius: 20px;
}

.ui-slider-horizontal .ui-slider-handle {
    top: -.9em;
}

.ui-state-default,
.ui-widget-content .ui-state-default {
    border: 1px solid #f9f9f9;
    background: #3498db;
}

.ui-slider-horizontal .ui-slider-handle {
    margin-left: -0.5em;
}

.ui-slider .ui-slider-handle {
    cursor: pointer;
}

.ui-slider a,
.ui-slider a:focus {
    cursor: pointer;
    outline: none;
}

.price, .lead p {
    font-weight: 600;
    font-size: 32px;
    display: inline-block;
    line-height: 60px;
}

h4.great {
    background: #00ac98;
    margin: 0 0 25px -60px;
    padding: 7px 15px;
    color: #ffffff;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    display: inline-block;
    -moz-box-shadow:    2px 4px 5px 0 #ccc;
    -webkit-box-shadow: 2px 4px 5px 0 #ccc;
    box-shadow:         2px 4px 5px 0 #ccc;
}

.total {
    border-bottom: 1px solid #7f8c8d;
    /*display: inline;
    padding: 10px 5px;*/
    position: relative;
    padding-bottom: 20px;
}

.total:before {
    content: "";
    display: inline;
    position: absolute;
    left: 0;
    bottom: 5px;
    width: 100%;
    height: 3px;
    background: #7f8c8d;
    opacity: 0.5;
}

.price-slider {
    margin-bottom: 70px;
}

.price-slider span {
    font-weight: 200;
    display: inline-block;
    color: #7f8c8d;
    font-size: 13px;
}

.form-pricing {
    background: #ffffff;
    padding: 20px;
    border-radius: 4px;
}

.price-form {
    background: #ffffff;
    margin-bottom: 10px;
    padding: 20px;
    border: 1px solid #eeeeee;
    border-radius: 4px;
    /*-moz-box-shadow:    0 5px 5px 0 #ccc;
    -webkit-box-shadow: 0 5px 5px 0 #ccc;
    box-shadow:         0 5px 5px 0 #ccc;*/
}

.form-group {
    margin-bottom: 0;
}

.form-group span.price {
    font-weight: 200;
    display: inline-block;
    color: #7f8c8d;
    font-size: 14px;
}

.help-text {
    display: block;
    margin-top: 32px;
    margin-bottom: 10px;
    color: #737373;
    position: absolute;
    /*margin-left: 20px;*/
    font-weight: 200;
    text-align: right;
    width: 188px;
}

.price-form label {
    font-weight: 200;
    font-size: 21px;
}

img.payment {
    display: block;
    margin-left: auto;
    margin-right: auto
}

.ui-slider-range-min {
    background: #2980b9;
}

/* HR */

hr.style {
    margin-top: 0;
    border: 0;
    border-bottom: 1px dashed #ccc;
    background: #999;
}
}

</style>

<?php } else echo "<script>alert('Sorry Student ID is not found!');</script><script>document.location='payment_add.php'</script>"; ?> 