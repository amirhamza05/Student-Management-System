

<?php

if(isset($_GET['user_id'])){
 $uid=$_GET['user_id'];
 $cheikh=$user_ob->cheikh_user($uid);
 if($cheikh==1){
$lid=$login_user['id'];
$info=$user[$uid];
$uname=$info['uname'];
$fname=$info['fname'];
$photo=$info['photo'];
$email=$info['email'];
$address=$info['address'];
$gender=$info['gender'];
$phone=$info['phone'];
$permission=$info['permit'];

?>

<input type="number" id="uid" value="<?php echo "$uid"; ?>" hidden>
<input type="number" id="login_id" value="<?php echo "$lid"; ?>" hidden>

<script type="text/javascript" src="page/user/user_info.js"></script>

 <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad  box" >
   
          <div class="panel panel-info">
            <div class="panel_heading">
              <?php echo "$uname"; ?>
            </div>
            <div class="panel-bodyy">
              <div class="row info_box" id="data_body">
                <div class="col-md-3 col-lg-3 " align="center"> 
                  <img id="photo" alt="User Pic" src="<?php echo "$photo"; ?>" class="img_circle "> 
                </div>
                
                <div class="col-md-9 col-lg-9"> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Full Name:</td>
                        <td id="fname"><?php echo "$fname"; ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td id="email"><?php echo "$email"; ?></td>
                      </tr>
                      <tr>
                        <td>Phone</td>
                        <td id="phone"><?php echo "$phone"; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender:</td>
                        <td id="gender"><?php echo "$gender"; ?></td>
                      </tr>
                        <tr>
                        <td>Address:</td>
                        <td id="address"><?php echo "$address"; ?></td>
                      </tr>
                      <tr>
                        <td>Permission:</td>
                        <td id="permission"><?php echo "$permission"; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

         <?php if($user_id==$uid){ ?>   
          <div id="update_area" class="panel_footer" style="display: block;"> 
          <center>
                         <div class="bottom">
            <ul class="ul_cla">
            <center>
            <li class="li_cla" onclick="update_profile()" style="margin-left: 29%">
                    <div class="btn btn_custom  btn-twitter btn-sm">
                        <i class="fa fa-pencil"></i>
                    </div><br/>
                    <div class="font_li">Edit Profile</div>
             </li>
              <li class="li_cla" onclick="update_password()">     
                    <div class="btn btn_custom  btn-sm" rel="publisher"
                       >
                        <i class="fa fa-lock"></i>
                    </div><br/>
                    <div class="font_li">Update Password</div>
                </li>    
                <li class="li_cla">
                  <div class="btn btn_custom btn-sm" rel="publisher">
                        <i class="fa fa-flag"></i>
                    </div>
                    <br/>
                    <div class="font_li">Activity</div>
                  </li>
                <li class="li_cla">
                <a class="btn btn_custom btn-sm" rel="publisher" href="logout.php">
                        <i class="glyphicon glyphicon-log-out"></i>
                    </a>
                    <br/>
                    <div class="font_li">Logout</div>
                </li>
                </center>
            </ul>        
                </div>
              </center>
                    </div>

            <?php } ?>        
            
          </div>
        </div>
      </div>

<style type="text/css">
  

.ul_cla {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    }

.li_cla {
    float: left;
    margin-left: 10px;
    color: #000000;
    font-size: 10px;
    cursor: pointer;
}


.box{
 
    padding: 5px 5px 0px 5px;
    border: 1px solid #BFBFBF;
    box-shadow: 30px 30px 15px #aaaaaa;
}

.info_box{
 padding-left: 15px;

}

 .btn_custom {
  padding: 5px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
  font-size: 25px;
  border-width: 1px;
  border-color: #ffffff;
  border-style: solid;
  text-align: center;
  color: var(--font-color);
  background-color: var(--bg-color);
 }

 .btn_custom:hover{
  padding: 5px;
   height: 60px;
   width: 60px;
   border-radius: 50%;
   font-size: 30px;
   background-color: var(--bg-color);
   color: #eeeeee;
   text-align: center;
 }

.panel_heading{
  background-color: var(--bg-color);
  padding: 15px;
  color: var(--font-color);
  
  font-size: 20px;
}

.img_circle{
  border-radius: 50%;
  background-color: #000000;
  margin-top: 50%;
  height: 140px;
  width: 140px;
  border-style: solid;
  border-width: 1px;
  border-color: var(--bg-color);
}

.panel_footer{

  border-width: 1px 0px 0px 0px;
  border-style: solid;
  border-color: var(--bg-color);
  background-color: #dfe6e9;
  height: 85px;
  padding: 7px;
  color: var(--font-color);
  font-weight: bold;
  font-size: 18px;
}
.modal_header{
  background-color: var(--bg-color);
  padding: 15px;
  color: var(--font-color);
  font-size: 18px;
}
.update_password_body{
  background-color: #bdc3c7;
  color: #000000;
  padding: 10px;
}
.input_field{
    padding: 5px;
    width: 70%;
    margin-bottom: 5px;
    
    font-size: 15px;
  }
  .text_in{
    text-align: center;
    font-weight: bold;
    font-size: 15px;
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


</style>

<!-- Start Delete Model -->
<div class="modal small fade" id="update_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal_header">
            <button type="button" class="close" style="color: #ffffff" data-dismiss="modal" aria-hidden="true">×</button>
            Update Password
    </div>
    <div class="update_password_body">
      <div id="incorrect_pass" style="text-align: center;display: none; color: red">Your Current Password Is Incorrect</div>
      <div id="update_password_msg"></div>
      <div id="update_password_body"></div>
    </div>

    </div>
</div>
<!-- End Delete Model -->

<?php } } ?>

<!-- Start Delete Model -->
<div class="modal fade" id="update_profile_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal_header">
            <button type="button" class="close" style="color: #ffffff" data-dismiss="modal" aria-hidden="true">×</button>
            Update Profile
    </div>
    <div class="update_password_body">
      <?php include 'page/user/edit_profile.php'; ?>
    </div>

    </div>
</div>

