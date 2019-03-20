<?php

/**
* 
*/

class student_edit {
   

//starting connection
public $student_ob;
public $student;
public $program;



 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->student_ob=new student();
     $this->student=$this->student_ob->get_student_info();
     
 } 

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection


public function get_student_profile($student_id){
  $info=$this->get_student_info();
  $info=$info[$student_id];
  $site_ob=new site_content();
  $barcode=$site_ob->barcode($student_id);
?>

<div style="margin-top: 70px;"></div>
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-12">
      <div class="avatar">
        <center>
          <img src="<?php echo $info['photo']; ?>" class="img-circle img-thumbnail student_photo"><br/>
          <div class="profile_info_area">
            <?php echo $info['name']; ?><br/>
            ID: <?php echo $info['id']; ?><br/>
            <img class="barcode_profile" src="<?php echo "$barcode" ?>">
          </div>
          <a href="student_profile.php?get_id=<?php echo $student_id; ?>&tab=info" target="_blank"><button title='View Profile' class="btn btn_profile" >View Profile</button></a>
          <a href="student_profile.php?get_id=<?php echo $student_id; ?>&tab=program" target="_blank"><button title='View Program' class="btn btn_profile" >View Program</button></a>
          <a href="student_profile.php?get_id=<?php echo $student_id; ?>&tab=payment" target="_blank"><button title='View Payment' class="btn btn_profile" >View Payment</button></a>
         
        </center>
        <div style="margin-top: 10px;"></div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <table style="width: 100%">
            <tr>
              <td class="td_profile td_profile1">Full Names: </td>
              <td class="td_profile td_profile2"><?php echo $info['name']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Nick Name: </td>
              <td class="td_profile td_profile2"><?php echo $info['nick']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Student ID: </td>
              <td class="td_profile td_profile2"><?php echo $info['id']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Father Name: </td>
              <td class="td_profile td_profile2"><?php echo $info['father_name']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Mother Name: </td>
              <td class="td_profile td_profile2"><?php echo $info['mother_name']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Student Mobile: </td>
              <td class="td_profile td_profile2"><?php echo $info['personal_mobile']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Father Mobile: </td>
              <td class="td_profile td_profile2"><?php echo $info['father_mobile']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Mother Mobile: </td>
              <td class="td_profile td_profile2"><?php echo $info['mother_mobile']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Birthday: </td>
              <td class="td_profile td_profile2"><?php echo $info['birth_day']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Religion: </td>
              <td class="td_profile td_profile2"><?php echo $info['religion']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Gender: </td>
              <td class="td_profile td_profile2"><?php echo $info['gender']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">Address: </td>
              <td class="td_profile td_profile2"><?php echo $info['address']; ?></td>
            </tr>
            <tr>
              <td class="td_profile td_profile1">School/College: </td>
              <td class="td_profile td_profile2"><?php echo $info['school']; ?></td>
            </tr>
          </table>
        </div>
      </div>

      </div>

        
    </div>    
  
</div>




<style type="text/css">
.profile_info_area{
  font-size: 17px;
  margin-bottom: 8px;
}
.barcode_profile{
  height: 30px;
  width: 170px;
}

.student_photo{
    height: 150px;
    width: 150px;
    margin-top: -75px;
  }
  .avatar{
    background-color: #ffffff;
    height: auto;
    border-radius: 5px;
    border: 1px solid #B8B9B7;
    color: #4A4A4A;
    padding: 5px;
    
    font-weight: bold;
  }


  .td_profile1,.td_profile2{
    border-width: 1px;
    border-color: #DDDDDD;
    border-style: solid;
    padding: 10px;
  }

.td_profile1{
  width: 230px;
  text-align: right;
  background-color: #ECF0F1;
  color: #4A4A4A;
}
.btn_profile{
  background-color: var(--bg-color);
  color: var(--font-color);
  font-weight: bold;
}
.btn_profile:hover{
  font-size: 15px;
  color: var(--font-color);
}
.btn_profile:focus{
  font-size: 15px;
  color: var(--font-color);
}
</style>

<?php

}

public function test_edit(){
	echo "hello";
}

public function student_edit_form($id){
	$site=new site_content();;
	
	$student=$this->get_student_info();
	$info=$student[$id];
	$name=$info['name'];
	$nick=$info['nick'];
	$father_name=$info['father_name'];
	$mother_name=$info['mother_name'];
	$student_mobile=$info['personal_mobile'];
	$father_mobile=$info['father_mobile'];
	$mother_mobile=$info['mother_mobile'];
	$birthday=$info['birth_day'];
	$gender=$info['gender'];
	$religion=$info['religion'];
	$email=$info['email'];
	$image=$info['photo'];
	
	$school=$info['school'];
	$ssc_rool=$info['ssc_rool'];
	$ssc_reg=$info['ssc_reg'];
	$ssc_board=$info['ssc_board'];
	$ssc_result=$info['ssc_result'];
  $address=$info['address'];

	?>
<style type="text/css">
    .my_red{
      background-color: #414959;
    }
    .box_header{
        background-color: var(--bg-color);
        color: var(--font-color);
        padding: 15px;
        border-width: 0px;
        border-style: solid;
        border-color: var(--bg-color);

    }
    .box{
        border-width: 1px;
        border-style: solid;
        border-color: var(--bg-color);
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
      <input type="number" name="student_id" value="<?php echo "$id"; ?>" hidden>
      <?php

      //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
      
       $site->form_input("Student Full Name","name","name","text","exclamation-sign","$name","","yes");

      $site->form_input("Student Nick Name","nick","nick","text","exclamation-sign","$nick","","yes");

      $site->form_input("Father Name","father_name","father_name","text","exclamation-sign","$father_name","","no");
      $site->form_input("Mother Name","mother_name","mother_name","text","exclamation-sign","$mother_name","","no");
      $site->form_input("Sudent mobile","student_mobile","student_mobile","number","exclamation-sign","$student_mobile","","no");

      $site->form_input("Father mobile","father_mobile","number","number","exclamation-sign","$father_mobile","","no");

      $site->form_input("Mother mobile","mother_mobile","mobile","number","exclamation-sign","$mother_mobile","","no");

      $site->form_input("Email","email","mobile","text","exclamation-sign","$email","","no");
      $site->form_input("Birthday","birthday","mobile","date","exclamation-sign","$birthday","","yes");

      ?>


<div class='form-group'>
        <label class='control-label' for='inputName'><b>Religion</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 
<select class='form-control'  name='religion' id='brand_add' class='cs-select cs-skin-border' required="">

  <option value="Muslim" <?php if($religion=="Muslim")echo "selected"; ?>>Muslim</option>
  <option value="Hindu" <?php if($religion=="Hindu")echo "selected"; ?>>Hindu</option>
  <option value="Buddo" <?php if($religion=="Buddo")echo "selected"; ?>>Buddo</option>
  <option value="Cristan" <?php if($religion=="Cristan")echo "selected"; ?>>Cristan</option>
</select>
</div></div>

<div class='form-group'>
        <label class='control-label' for='inputName'><b>Gender</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 
<select class='form-control'  name='gender' id='brand_add' class='cs-select cs-skin-border' required="">
  <option value="Male" <?php if($gender=="Male")echo "selected"; ?>>Male</option>
  <option value="Female" <?php if($gender=="Female")echo "selected"; ?>>Female</option>
  
</select>
</div></div>


      <?php
      
       $site->form_input("Address","address","address","text","exclamation-sign","$address","","no");

       ?>   
  <div class="form-group">
    <label class="control-label" for="inputName"><b>Upload Student Photo</b></label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
      <input type="file" class="form-control" id="image" name="image" accept="image/*"  onchange="document.getElementById('edit_thumbnil_<?php echo $id; ?>').src = window.URL.createObjectURL(this.files[0])" />
        <br/>
    </div>
    <div id="err_product_image" class="error"></div>
  <img id="edit_thumbnil_<?php echo $id; ?>" style="width:20%; margin-top:10px;"  src="<?php echo "$image";?>" alt="image"/>
</div> 
     
</div>  

<!-- Start Academic Information -->

<div class="box_header">
        <div class="panel-title">Academic Information</div>                   
    </div>     

<div style="padding-top:30px" class="box_body" >
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                 
        
       <?php 

    $site->form_input("School Name","school_name","school_name","text","exclamation-sign","$school","","no");
    $site->form_input("SSC Rool Number","ssc_rool","ssc_rool","number","exclamation-sign","$ssc_rool","","no");
    $site->form_input("SSC Registration Number","ssc_reg","ssc_reg","number","exclamation-sign","$ssc_reg","","no");
    $site->form_input("SSC Board Name","ssc_board","ssc_board","text","exclamation-sign","$ssc_board","","no");
    
  ?>
<div class='form-group'>
        <label class='control-label' for='inputName'><b>SSC Result</b></label>
        <div class='input-group'>
            <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>     
            <input class='form-control' data-error='' id='ssc_result' value='<?php echo "$ssc_result" ?>' step="0.01" placeholder='Enter SSC Result'  type='number' name='ssc_result'  />
        </div>  
        <div id='err_product_date' class='error'></div>
</div>
          
</div>  

<!-- End Academic Information -->

<!-- Start Academic Information -->

<!-- End Academic Information -->

       <button class="box_btn" name="update" type="submit" style=""><span class="glyphicon glyphicon-floppy-save"></span> Update Information</button>                  
    
</form>

<!-- end body -->
        </div>
</div>
</div>
	<?php
}


}


?>

