<script src="script/sms/sms_ajax.js" type="text/javascript"></script>


<?php 
if(isset($_GET['success_new_student_admission'])){
$get_id=$_GET['success_new_student_admission'];
} 
else $get_id="";
$flag=0;
foreach ($student as $key => $value) {
  
	$id1=$value['id'];
  $enc_id="new_student_".$id1;
  $enc_id=md5($enc_id);
  $enc_id=hash('sha256', $enc_id);
	if($enc_id==$get_id){
     $flag=1;
     $id=$value['id'];
      $name=$value['name'];
      $photo=$value['photo'];
      $nick=$value['nick'];
      $father_name=$value['father_name'];
      $mother_name=$value['mother_name'];
      $personal_mobile=$value['personal_mobile'];
      $father_mobile=$value['father_mobile'];
      $mother_mobile=$value['mother_mobile'];
      $gender=$value['gender'];
      $address=$value['address'];
      $fee=$value['fee'];
      $email=$value['email'];
      $ssc_rool=$value['ssc_rool'];
      $ssc_reg=$value['ssc_reg'];
      $ssc_board=$value['ssc_board'];
      $ssc_result=$value['ssc_result'];

      $program_id=$value['program'];
      $program_name=$program[$program_id]['name'];
      $batch_id=$value['batch'];
      $batch_name=$batch[$batch_id]['name'];
 ?>
<style type="text/css">
	.img_c{
        height: 170px;
        width: 140px;
        margin-top: 40px;
        border-width: 1px;   
        border-color: #414959; 
        border-style: solid;
	}
	.barcode{
		
        height: 30px;
        width: 140px;

	}

	.box_header{
        background-color: #414959;
        color: #ffffff;
        padding: 15px;
        border-width: 2px;
        border-style: solid;
        border-color: #414959;
    }
    .box{
      border-width: 1px;
        border-style: solid;
        border-color: #414959;
    }

    .box_body{
        padding: 15px;
        background-color: #EEEEEE;
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




<div class="container">
      <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-1 toppad" >
   
   
          <div class="panel panel-info">
            <div class="box_header">
              <h3 class="panel-title">Student Info</h3>
            </div>


            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo "$photo"; ?>" style="" class="img_c">
              <div><b><?php echo "$name"; ?></b></div>
              <div style="margin-top: 5px;"></div>
              <img src="barcode.php?text=<?php echo "$id"; ?>" class="barcode">
                 <?php echo "<b>$id</b>"; ?>
                 </div>
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Student Name:</td>
                        <td><?php echo "$name"; ?></td>
                      </tr>
                      <tr>
                        <td>Nick Name:</td>
                        <td><?php echo "$nick"; ?></td>
                      </tr>
                      <tr>
                        <td>Father Name:</td>
                        <td><?php echo "$father_name"; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Mother Name:</td>
                        <td><?php echo "$mother_name"; ?></td>
                      </tr>
                        <tr>
                        <td>Student Mobile:</td>
                        <td><?php echo "$personal_mobile"; ?></td>
                      </tr>
                      <tr>
                        <td>Father Mobile:</td>
                        <td><?php echo "$father_mobile"; ?></td>
                      </tr>
                      <tr>
                        <td>Mother Mobile:</td>
                        <td><?php echo "$mother_mobile"; ?></td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td><?php echo "$address"; ?></td>
                      </tr>

                      <tr>
                        <td>Email:</td>
                        <td><?php echo "$email"; ?></td>
                      </tr>

                      <tr>
                        <td>SSC Rool:</td>
                        <td><?php echo "$ssc_rool"; ?></td>
                      </tr>

                      <tr>
                        <td>SSC Registration:</td>
                        <td><?php echo "$ssc_reg"; ?></td>
                      </tr>

                      <tr>
                        <td>SSC Board:</td>
                        <td><?php echo "$ssc_board"; ?></td>
                      </tr>
                      
                       <tr>
                        <td>SSC Result:</td>
                        <td><?php echo "$ssc_result"; ?></td>
                      </tr>  

                      <tr>
                        <td>Program Name:</td>
                        <td><?php echo "$program_name"; ?></td>
                      </tr> 

                      <tr>
                        <td>Batch Name:</td>
                        <td><?php echo "$batch_name"; ?></td>
                      </tr> 
                     
                    </tbody>
                  </table>
                  
               
                </div>
              </div>
            </div>

                 <div class="panel-footer">
                      
 <button class="btn btn-primary" id="send_btn"  onclick="send_sms(<?php echo "$id"; ?>)"><div id="res">SEND SMS</div></button>
                        <span class="pull-right">
                          <a id="btnn"  onclick="print_id_card(<?php echo "$id"; ?>)" class="btn btn-primary" style="" title="Download" alt="Download">Print ID Card</a>
                        	<a target="_blank" href="student_profile.php?student_id=<?php echo "$id"; ?>" class="btn btn-primary">Student Profile</a>
                  <a target="_blank" href="payment.php?get_id=<?php echo "$id"; ?>" class="btn btn-primary">Payment</a>
 
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
<?php
}
}
if($flag==0) echo "<script>alert('Sorry..Your Action Is failed!');</script><script>document.location='student_list.php'</script>";

?>


<script src="script/student/add_ajax.js" type="text/javascript"></script>
<script src="page/student/js_script/student_action.js" type="text/javascript"></script>

<style type="text/css">
   

</style>

     <div class="row">
      <div class="col-xs-12 col-sm-12"> 
 <div class="box" >
<div id="output"></div>

<form id="add_student1" method="POST">
 <input type="text" name="test_data">
 <input type="text" name="id">
  <input type="submit" name="">
  
</form>
  
<div class="box_header">
        <div class="panel-title">Personal Information</div>                   
    </div>  

<div style="padding-top:30px" class="box_body" >
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
    <form action="student_action.php" id="add_student" method="post" enctype="multipart/form-data">
      
      <?php

      //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
      

      $site->form_input("Student Full Name","insert_name","name");
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



       <button class="box_btn" name="insert" id="insert_btn" type="submit" style=""><span class="glyphicon glyphicon-floppy-save"></span> Save Information</button>                  
    
</form>

<!-- end body -->
        </div>
</div>
</div>