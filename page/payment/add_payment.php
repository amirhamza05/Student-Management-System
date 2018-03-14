<style type="text/css">
    .input_payment{
        padding: 5px;
    }
    .box_pament{
        background-color: #ffffff; 
        background-image: url("http://4.bp.blogspot.com/-D1xnfD4wFoY/UGGAJMhA3tI/AAAAAAAACkw/cQc1aije0Rc/s1600/gray_background_for_websites.jpg");
        padding: 15px;
    }

    .sucess_payment{
       background-color: #B6D7BF;
       border-style: solid;
       border-width: 1px;
       border-color: #414959;
       color: #000000;
       margin-bottom: 20px;
       padding: 15px;
    }

</style>


<div class="row">
<div class='col-md-2'></div>

<div class='col-md-8'>
<div id="sucess_payment">
   
</div>
    
</div>
<div class='col-md-2'></div>
</div>


<div class="row">
<div class='col-md-2'></div>

<div class='col-md-8'>
     <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >

                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="box_pament">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row" style="margin-bottom: 10px; ">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber"><b>Payable Ammount</b></label>
                                <div class="input-group">
                                    <input 
                                            type="tel" id="total" 
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            value="<?php echo"$due"; ?>" 
                                            autocomplete="cc-number"
                                            readonly="" 
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px; ">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber"><b>Paid</b></label>
                                    <div class="input-group">
                         <input 
                                 type="number" id="paid" 
                                 class="form-control"
                                 name="Paid Ammount"
                                placeholder="Paid Amount" onkeyup="paid_fun()"  
                            required 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 10px; ">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber"><b>Due</b></label>
                                    <div class="input-group">
                                        <input 
                                            type="number" value="<?php echo"$due"; ?>" id="due_ammount" 
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Total Due Ammount"
                                            readonly
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 10px; ">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber"><b>Next Patment Date</b></label>
                                    <div class="input-group">
                                        <input 
                                            type="date" id="date" 
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        
                        <br/>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" onclick="save_payment()" type="button">Pay</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
            


</div>

<div class='col-md-2'>
</div>

</div>

<style type="text/css">
    /* Padding - just for asthetics on Bootsnipp.com */

/* CSS for Credit Card Payment form */
.credit-card-box .panel-title {
    display: inline;
    font-weight: bold;
}
.credit-card-box .form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.credit-card-box label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box .payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box label {
    display: block;
}
/* The old "center div vertically" hack */
.credit-card-box .display-table {
    display: table;
}
.credit-card-box .display-tr {
    display: table-row;
}
.credit-card-box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 50%;
}
/* Just looks nicer */
.credit-card-box .panel-heading img {
    min-width: 180px;
}
</style>