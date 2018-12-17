<style type="text/css">
   
.box_header,.box{
  background-color: var(--bg-color);
  color: #ffffff;
  padding: 15px;
  box-shadow:  4px 4px 5px 6px #ccc; 
}
.box_under_body{
  padding: 15px;
  background-color: #dfe6e9;
}
.box_under_body,.box_header{
  border-style: solid;
  border-width: 1px;
  border-color: var(--bg-color);
}
.upload_body{
  background-color: var(--bg-color);
  padding: 15px;
  color: var(--font-color);
}
.box_btn{
  background-color: var(--bg-color);
  padding: 15px;
  color: var(--font-color);
  border-width: 0px;
  margin-top: 20px;
  width: 30%;
}
.img_up{
  height: 80px;
  width: 75px;
  border-radius: 5px;
  margin-top: 15px;
  border-style: solid;
  border-color: #ffffff;
  border-width: 2px;
}
.img_up1{
  height: 100px;
  width: 100%;
  border-radius: 5px;
  margin-top: 15px;
  border-style: solid;
  border-color: #ffffff;
  border-width: 2px;
}
</style>


<div id="output"></div>
<div class="row" id="add_body">
  <div class="col-xs-10 col-sm-12"> 
    <div class="boxz" >
        <div style="" class="box_bodyy" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
        <form action="student_action.php" id="add_student" method="post" enctype="multipart/form-data">
  

        <div class="row">
          <div class="col-md-8 border">
            <div class="box_header">
            <div class="panel-title">Genaral Setting</div>                   
            </div>
            <div class="box_under_body">  
            <?php

            //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
      
            $site->form_input("Institute Full Name","insert_name","name");
            $site->form_input("Institute Sort Name","insert_name","name");
            $site->form_input("Institute Address","nick","nick");
            $site->form_input("Institute Phone","father_name","father_name","text","exclamation-sign","","","no");
            $site->form_input("Institute Email","mother_name","mother_name","text","exclamation-sign","","","no");
            
            ?>


       

          </div>
        </div>
       

<!-- Start Academic Information -->
          <div class="col-md-4">
            <div class="form-group upload_body" style="">
                  <label class="control-label" for="inputName"><b>Upload Institute Full Logo</b></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*"  onchange="loadFile(event)" />
                    <br/>
                  </div>
                  <div id="err_product_image" class="error"></div>
                  <img id="add_thumbnil" class="img_up1" style=""  src="<?php echo "upload/custom_content/techserm_full_logo.jpg";?>" alt="image"/>
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


              <div class="form-group upload_body" style="">
                  <label class="control-label" for="inputName"><b>Upload Institute Small Logo</b></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*"  onchange="loadFile1(event)" />
                    <br/>
                  </div>
                  <div id="err_product_image" class="error"></div>
                  <img id="add_thumbnil1" class="img_up" style=""  src="<?php echo "upload/custom_content/techserm_small_logo.png";?>" alt="image"/>
            </div> 

                <script>
                  var loadFile1 = function(event) {
                      var reader = new FileReader();
                      reader.onload = function(){
                      var output = document.getElementById('add_thumbnil1');
                      output.src = reader.result;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                  };
                </script> 
          </div>

                            
        </div>
        <center>
        <button class="box_btn" name="insert" type="submit" id="insert_btn" style=""><span class="glyphicon glyphicon-floppy-save"></span>Save Information</button>
        </center>
      </form>

<!-- end body -->
        </div>
</div>
</div>

</div>
