<?php

include 'layout/header_script.php';

if(isset($_POST['select_program'])){
	$id=$_POST['select_program'];
	 $program_ob->select_batch_option($id); 
}
if(isset($_POST['total_pament'])){
	$id=$_POST['total_pament'];
	if($id!=0){$total=$program[$id]['fee'];
	echo "$total";
      }
      else{
      	echo "";
      }

}


if(isset($_POST['attend'])){
	$id=$_POST['attend'];
	$currentDateTime = date('Y-m-d H:i:s', time() - 6*3600);
    $newDateTime = date('h:i A', strtotime($currentDateTime));
    $date=date('Y-m-d');
	$flag=0;
	foreach ($student as $key => $value) {
		$id1=$value['id'];
		$name=$value['name'];
		$nick=$value['nick'];
		$to=$value['personal_mobile'];
		if($id==$id1){
         $msg="Hello ".$name." Gurdians.\n\nToday Is ".$date.".\n";
         $msg.=$nick." Comes Today Coaching at ".$newDateTime.".\n\n";
         $msg.="\n\nYouth Admission Care\nArambag,Dhaka"; 
        $sms->send_sms($to,$msg);
			$flag=1;
			break;
		}
	}
	if($flag==1)echo "<font color='green'>Sucessfully Attendends</font>";
	else echo "<font color='red'>Sorry Student is Not Found</font>";
}

if(isset($_POST['edit_student']))
{
   $id=$_POST['edit_student'];
   $info=$student[$id];
   $name=$info['name'];
     ?>


 
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

      $site->form_input("Email","email","mobile","text","exclamation-sign","$name","","no");
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
  <img id="add_thumbnil1" style="width:20%; margin-top:10px;"  src="<?php echo "upload/student_photo/avatar.png";?>" alt="image"/>
</div> 



         
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
<?php
}



?>