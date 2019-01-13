
<style type="text/css">
  .top-alert { 
  position: fixed;
  top: 0px;
  width: 100%;
  z-index: 100000;
  left: 0;
  padding: 50px;
  display: inline-block;
  text-align: center;
}
.top-alert .alert {
  width: auto !important;
  height: 100%;
  display: inline;
  position: relative;
  margin: 0;
}
.top-alert .alert .close {
  position: absolute;
  top: 11px;
  right: 10px;
  color: inherit;
}

.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { 
  border-color: #19B99A;
  background: #20A286;
  color: #fff; 
  padding: 20px;
  float: right;
  border-radius: 15px;
}
.glyphicon { margin-right:10px; }
.alert a {color: gold;}



  .button_result{
    background: var(--bg-color);
    width: 31%;
    border-width: 0px;
    border-radius: 3%;
    color: var(--font-color);
    padding: 20px;
    font-weight: bold;
  }


</style>



<link rel="stylesheet" type="text/css" href="page/result/result.css">
<script type="text/javascript" src="page/result/js/result.js"></script>

  <div class="row">
    
    
        <div class="dropdown" style="padding: 50px">

          <div class="col-md-7" style="margin-right: -25px; margin-left: 25px;">
            <select onchange="select_program()" class="select" id="select_program" name="options">
              <option value="0">--Select Program--</option>
        <?php  foreach ($program as $key => $value) {
              $id=$value['id'];
              $name=$value['name'];
                 ?>
                <option value="<?php echo "$id"; ?>"><?php echo "$name"; ?></option>
               <?php } ?>
            </select>
            <a id="batch_div">
            <select class="dropdown-select-version select" name="options" id="select_subject" onchange ="select_subject()">
                <option value="0"> --Select Subject-- </option>
            </select>
         </a>   
         <a id="student_div">
            <select class="dropdown-select-version select" name="options" id="select_exam">
                <option value="0"> --Select Exam-- </option>
            </select>
        </a>
        </div>
        <div class="col-md-5">
 
             <button id="btnn"  onclick="add_result()" class="button_result" style="margin-right: 4px;" title="Add Result" alt="Download"><span style="margin-right: 2px;" class="glyphicon glyphicon-plus"></span>Add Result</button>

             <button id="btnn"  onclick="show_result('yes')" class="button_result" style="" title="Show Result" alt="Show Result"><span style="margin-right: 4px;" class="glyphicon glyphicon-th-list"></span>Show Result</button>

             <button id="btnn"  onclick="send_sms_form()" class="button_result" style="" title="Send SMS" alt="Download"><span style="margin-right: 6px;" class="glyphicon glyphicon-envelope"></span>Send SMS</button>
          </div>
        </div>
  </div>

 



<div id="exam_body">

</div>

