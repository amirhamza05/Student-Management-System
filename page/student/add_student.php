
<script src="script/student/add_ajax.js" type="text/javascript"></script>

<style type="text/css">
    .my_red{
      background-color: #414959;
    }
    .box_header{
        background-color: #2E363F;
        color: #ffffff;
        padding: 15px;
        border-width: 0px;
        border-style: solid;
        border-color: #2E363F;


    }
    .box{
      border-width: 1px;
        border-style: solid;
        border-color: #2E363F;
    }

    .box_body{
        padding: 15px;
        background-color: #DDDEE3;
    }
    .box_btn{
        background-color: #674172;
        padding: 15px;
        width: 100%;
        color: #ffffff;
        border-width: 0px;
        font-size: 19px;
    }

</style>
 
     <div class="row">
      <div class="col-xs-12 col-sm-12"> 
 <div class="box" >

  
<div class="box_header">
        <div class="panel-title">Personal Information</div>                   
    </div>  

<div style="padding-top:30px" class="box_body" >
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
    <form action="student_action.php" method="post" enctype="multipart/form-data">
      
      <?php

      //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
      

      $site->form_input("Student Full Name","name","name");
      $site->form_input("Student Nick Name","nick","nick");
      $site->form_input("Father Name","father_name","father_name");
      $site->form_input("Mother Name","mother_name","mother_name");
      $site->form_input("Sudent mobile","student_mobile","student_mobile","number","exclamation-sign","","","no");

      $site->form_input("Father mobile","father_mobile","number","number","exclamation-sign","","","no");

      $site->form_input("Mother mobile","mother_mobile","mobile","number","exclamation-sign","","","no");

      $site->form_input("Email","email","mobile","text","exclamation-sign","","","no");
      $site->form_input("Birthday","birthday","mobile","date","exclamation-sign","","","yes");

      ?>


<div class='form-group'>
        <label class='control-label' for='inputName'><b>Religion</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 
<select class='form-control'  name='religion' id='brand_add' class='cs-select cs-skin-border' required="">

  <option value="Muslim">Muslim</option>
  <option value="Hindu">Hindu</option>
  <option value="Buddo">Buddo</option>
  <option value="Cristan">Cristan</option>
</select>
</div></div>

<div class='form-group'>
        <label class='control-label' for='inputName'><b>Gender</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 
<select class='form-control'  name='gender' id='brand_add' class='cs-select cs-skin-border' required="">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  
</select>
</div></div>


      <?php
      
      $site->form_input("Address","address","address","text","exclamation-sign","","","no");

       ?>   
  <div class="form-group">
    <label class="control-label" for="inputName"><b>Upload Student Photo</b></label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
      <input type="file" class="form-control" id="image" name="image" accept="image/*"  onchange="loadFile(event)" />
        <br/>
    </div>
    <div id="err_product_image" class="error"></div>
  <img id="add_thumbnil" style="width:20%; margin-top:10px;"  src="<?php echo "upload/student_photo/avatar.png";?>" alt="image"/>
</div> 

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('add_thumbnil');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

         
</div>  

<!-- Start Academic Information -->

<div class="box_header">
        <div class="panel-title">Academic Information</div>                   
    </div>     

<div style="padding-top:30px" class="box_body" >
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                 
        
       <?php 

    $site->form_input("School Name","school_name","school_name","text","exclamation-sign","","","no");
    $site->form_input("SSC Rool Number","ssc_rool","ssc_rool","number","exclamation-sign","","","no");
    $site->form_input("SSC Registration Number","ssc_reg","ssc_reg","number","exclamation-sign","","","no");
    $site->form_input("SSC Board Name","ssc_board","ssc_board","text","exclamation-sign","","","no");
    
  ?>
<div class='form-group'>
        <label class='control-label' for='inputName'><b>SSC Result</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>     
            <input class='form-control' data-error='' id='ssc_result' value='' step="0.01" placeholder='Enter SSC Result'  type='number' name='ssc_result'  />
        </div>  
        <div id='err_product_date' class='error'></div>
</div>
           
</div>  

<!-- End Academic Information -->

<!-- Start Academic Information -->

<div class="box_header">
        <div class="panel-title">Admission</div>                   
    </div>     

<div style="padding-top:30px" class="box_body" >
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                 
<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Program</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 

<select class='form-control'  name='program' id='program' class='cs-select cs-skin-border' onchange="select_program()"  required="">
  <option value="0">Select Program</option>
  <?php $program_ob->select_program(); ?>
</select>
</div></div>


<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Batch</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 

<select class='form-control'  name='batch' id='batch' class='cs-select cs-skin-border' required="">
  <div id="batch_field">
  
  </div>
</select>

</div>
</div>
  <div class='form-group'>
        <label class='control-label' for='inputName'><b>Total Payment</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>     
            <input class='form-control' data-error='Please enter name field.' id='total' value='' onchange="cal_advanced()" placeholder='Total Payment'  type='text' name='total'  />
        </div>  
        <div id='err_product_date' class='error'></div>
</div>
          
</div>  

<!-- End Academic Information -->



       <button class="box_btn" name="insert" type="submit" style=""><span class="glyphicon glyphicon-floppy-save"></span> Save Information</button>                  
    
</form>

<!-- end body -->
        </div>
</div>
</div>