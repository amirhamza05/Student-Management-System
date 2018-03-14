
  <div class="row">
      <div class="col-xs-12 col-sm-12">  
          <form  action="batch_action" autocomplete="off" method="POST">
      
  <div class="form-group">
    <label class="control-label" for="inputName"><b>Batch Name</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter Batch Name"  type="text" name="name"  required="" />
    </div>  
    <div id="err_product_date" class="error"></div>
  </div>

  <div class="form-group">
    <label class="control-label" for="inputName"><b>Start Batch Time</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter Start Batch Time"  type="text" name="start"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;">Ex: 8:00 AM</div>
  </div>

 <div class="form-group">
    <label class="control-label" for="inputName"><b>End Batch Time</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="" placeholder="Enter End Batch Time"  type="text" name="end"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;">Ex: 10:20 AM</div>
  </div>
  <b>
  <?php 
  $day="";
  $batch_ob->selectd_day($day); ?>
</b>
          <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
        </form>
      </div>
</div>
   
