
<style type="text/css">
	.img_up{
  height: 140px;
  width: 135px;
  margin-top: 15px;
  border-style: solid;
  border-color: #ffffff;
  border-width: 2px;
}
.box_btn{
  background-color: var(--bg-color);
  padding: 15px;
  color: var(--font-color);
  border-width: 0px;
  margin-top: 20px;
  width: 70%;
}

</style>

<div id="loader_update"></div>
<div style="padding: 5px;display: none;" id="update_modal_area">
<form action="" id="update_profile" method="post" enctype="multipart/form-data">
	<input type="text" id="up_id" name="up_id" hidden="">

			<div class='form-group'>
                <label class='control-label' for='inputName'><b>User Name</b></label>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>     
                  <input class='form-control' data-error='' id='up_uname' value='' placeholder=''  type='text' name='uname' readonly/>
                </div>  
                <div id='err_product_date' class='error'></div>
              </div>
<?php
//$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
		$site->form_input("Full Name","fname","up_full_name");
		$site->form_input("Email","email","up_email");
		$site->form_input("Phone","phone","up_phone","number");
		$site->form_input("Address","address","up_address","text","exclamation-sign","","","no");

?>

			<div class='form-group'>
              <label class='control-label' for='inputName'><b>Gender</b></label>
              <div class='input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 
                <select class='form-control'  name='gender' id='up_gender' class='cs-select cs-skin-border' required="">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>

            <div class="form-group upload_body" style="">
                  <label class="control-label" for="inputName"><b>Upload Photo</b></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*"  onchange="loadFile(event)" />
                    <br/>
                  </div>
                  <div id="err_product_image" class="error"></div>
                  <img id="add_thumbnil" class="img_up" style=""  src="<?php echo "upload/student_photo/avatar.png";?>" alt="image"/>
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

                 <center>
        <button class="box_btn" name="insert" type="submit" id="update_btn" style=""><span class="glyphicon glyphicon-floppy-save"></span>Update Information</button>
        </center>



</form>
</div>