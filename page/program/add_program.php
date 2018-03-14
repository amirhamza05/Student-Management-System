
<style>
  
.select_box{
  background-color: #414959;
  padding: 5px;
  color: #ffffff;
}
.select_box1{
  border-width: 2px;
  border-style: solid;
  border-color: #414959;
  padding: 15px;
}

</style>

  <div class="row">
      <div class="col-xs-12 col-sm-12">  
          <form  action="program_action.php" autocomplete="off" method="POST">
      

<?php

 //$site->form_input("Batch Name","name","name");
 //$site->form_input("Start Time","start","start");
 //$site->form_input("End time","end","end");
 ?>

  <div class="form-group">
    <label class="control-label" for="inputName"><b>Program Name</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter Program Name"  type="text" name="name"  required="" />
    </div>  
    <div id="err_product_date" class="error"></div>
  </div>



  <div class="form-group">
    <label class="control-label" for="inputName"><b>Start Program Time</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter Start Program Time"  type="date" name="start"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
  </div>



 <div class="form-group">
    <label class="control-label" for="inputName"><b>End Program Time</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter End Program Time"  type="date" name="end"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
  </div>


 <div class="form-group">
    <label class="control-label" for="inputName"><b>Admission Fee</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter Admission Fee"  type="number" name="fee"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
</div>

<div class="form-group">
    <label class="control-label" for="inputName"><b>Start Fee Date</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter End Batch Time"  type="date" name="start_fee"  />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
</div>

<div class="form-group">
    <label class="control-label" for="inputName"><b>End Fee Date</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter End Batch Time"  type="date" name="end_fee"   />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
</div>



  <b>


  <?php 
  echo "<div class='select_box'>Select Batch</div><div class='select_box1'>";
  $program_ob->select_batch();
 echo "</div><div class='select_box'>Select Subject</div><div class='select_box1'>";
  $program_ob->select_subject();
 echo "</div><br />";
   ?>
</b>
          <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
        </form>
      </div>
</div>
   
