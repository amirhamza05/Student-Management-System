
<script type="text/javascript" src="page/setting/js/setting.js"></script>


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
        <form action="" id="update_info" method="post" enctype="multipart/form-data">
  

        <div class="row">
          <div class="col-md-8 border">
            <div class="box_header">
            <div class="panel-title">Genaral Setting</div>                   
            </div>
            <div class="box_under_body">   
            <?php

            //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")
      
            $site->form_input("Institute Full Name","name","name","text","exclamation-sign","$db->site_name","","yes");
            $site->form_input("Institute Sort Name","sort_name","sort_name","text","exclamation-sign","$db->sort_name","","yes");
            $site->form_input("Institute Address","address","address","text","exclamation-sign","$db->address","","yes");
            $site->form_input("Institute Phone","phone","phone","text","exclamation-sign","$db->phone","","yes");
            $site->form_input("Institute Email","email","email","text","exclamation-sign","$db->email","","yes");
            
            ?>


       

          </div>
        </div>
       

<!-- Start Academic Information -->
          <div class="col-md-4">
            <div class="form-group upload_body" style="">
                  <label class="control-label" for="inputName"><b>Upload Institute Full Logo</b></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
                    <input type="file" class="form-control" id="image" name="main_logo" accept="main_logo/*"  onchange="loadFile(event)" />
                    <br/>
                  </div>
                  <div id="err_product_image" class="error"></div>
                  <img id="add_thumbnil" class="img_up1" style=""  src="<?php echo $db->main_logo; ?>" alt="image"/>
                  <div id="reset_main_logo" onclick="reset_main_logo()" style="cursor: pointer;background-color: var(--bg-color); color: var(--font-color)"><span class='glyphicon glyphicon-refresh'></span></div>
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
                    <input type="file" class="form-control" id="logo" name="logo" accept="logo/*"  onchange="loadFile1(event)" />
                    <br/>
                  </div>
                  <div id="err_product_image" class="error"></div>
                  <img id="add_thumbnil1" class="img_up" style=""  src="<?php echo $db->logo; ?>" alt="image"/>
                  <div id="reset_logo" onclick="reset_logo()" style="cursor: pointer;background-color: var(--bg-color); color: var(--font-color)"><span class='glyphicon glyphicon-refresh'></span></div>
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
        <button class="box_btn" name="insert" type="submit" id="update_btn" style=""><span class='glyphicon glyphicon-refresh'></span> Update Information</button>
        </center>
      </form>

<!-- end body -->
        </div>
</div>
</div>

</div>

<div id="res"></div>
<style type="text/css">
  /*animation loder*/
.lds-dual-ring {
  display: inline-block;
  width: 50px;
  height: 50px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 46px;
  height: 46px;
  margin: 1px;
  border-radius: 50%;
  border: 5px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(300deg);
  }
  100% {
    transform: rotate(600deg);
  }
}

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

.alert a {color: gold;}

</style>