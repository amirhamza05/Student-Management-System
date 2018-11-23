
<style type="text/css">

.panel_profile,.about_profile{
  margin-left: 30px;
}
.panel_profile_body,.about_profile_body{
  height: auto;
  padding: 10px;
  background-color: #ffffff;
  border-radius: 0px 0px 5px 5px;
  border-color: #DDDDDD;
  border-width: 1px;
  border-style: solid;
}
.about_profile_body{
  box-shadow: 10px 5px 8px 5px #888888;
}

.profile_header{
  background-color: var(--bg-color);
  color: var(--font-color);
  padding: 15px;
  border-radius: 10px 10px 0px 0px;
}

.panel_profile{
    margin-left: 15px;
}

.img_side{
    height: 160px;
    width: 154px;
    border-width: 1px;
    border-color: var(--bg-color);
    border-style: solid;
    border-radius: 10%;
}

.info_side{
    font-weight: bold;

}

.btn_header{
    padding: 15px;
    background-color: var(--bg-color);
    color: var(--font-color);
}
.btn_box{
    text-align: center;
    padding: 40px;
    height: 100px;
    width: 100px;
    background-color: var(--bg-color);
    color: var(--font-color);
}

   .buttons{
padding: 5px 0;
font-weight: bold;
}
.nb-btn-circle{
  cursor: pointer;
text-decoration: none;
outline: none!important;
position: relative;
display: inline-block;
height: 80px;
width: 80px;
margin: 0 10px 10px 0;
color: #555;
border: 1px solid #ddd;
border-radius: 20%;
box-shadow: 5px 5px 5px rgba(0, 0, 0, .5);
background-color: #fff;
background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#eeeeee));
background-image: -webkit-linear-gradient(top, #ffffff, #eeeeee);
background-image: -moz-linear-gradient(top, #ffffff, #eeeeee);
background-image: -ms-linear-gradient(top, #ffffff, #eeeeee);
background-image: -o-linear-gradient(top, #ffffff, #eeeeee);
background-image: linear-gradient(to bottom, #ffffff, #eeeeee);
transition:all 0.3s ease-in-out;
}
.nb-btn-circle:hover{
background: var(--bg-color);
border-color: var(--bg-color);
color: var(--font-color);
} 




.nb-btn-circle .fa {
float: left;
height: 24px;
width: 100%;
margin: 18px 0 2px 0;
font-size: 24px;
line-height: 26px;
text-align: center;
}
.nb-btn-circle p{
float: left;
width: 100%;
margin: 0;
font-size: 11px;
text-align: center;
}
.nb-btn-circle .indicator-dot {
position: absolute;
top: 0px;
right: 0px;
height: 16px;
width: 16px;
font-size: 10px;
font-weight: bold;
text-align: center;
line-height: 14px;
border-radius: 50%;
-webkit-border-radius: 50%;
-khtml-border-radius: 50%;
-moz-border-radius: 50%;
color: #fff;
background-color: #D9534F;
background-image: none;
}



.nb-btn-circle1 {
text-decoration: none;
outline: none!important;
position: relative;
display: inline-block;
height: 80px;
width: 80px;
margin: 0 10px 10px 0;
color: #ffffff;
border: 1px solid #3B5999;
background-color: #3B5999;
transition:all 0.9s ease-in-out;
}

.td_profile1,.td_profile2{
  border-width: 1px;
  border-color: #DDDDDD;
  border-style: solid;
  padding: 7px;
}
.td_profile1{
  width: 100px;
  background-color: var(--bg-color);
  color: var(--font-color);
}

.nb-btn-circle1:hover{
background: #ffffff;
border-color: #ffffff;
color: #000000;
}

.nb-btn-circle1:focus{
color: #ffffff;
}


 
.nb-btn-circle1 .indicator-dot {
position: absolute;
top: 0px;
right: 0px;
height: 16px;
width: 16px;
font-size: 10px;
font-weight: bold;
text-align: center;
line-height: 14px;
border-radius: 50%;
-webkit-border-radius: 50%;
-khtml-border-radius: 50%;
-moz-border-radius: 50%;
color: #fff;
background-color: #ffffff;
background-image: none;
}
</style>


<?php

$id=$_GET['get_id'];
foreach ($student as $key => $info) {
  $sid=$info['id'];
 $photo=$info['photo'];
 $name=$info['name'];
 $nick=$info['nick'];


  if($sid==$id){


 ?>

<div class="row">
  <div class="col-md-3 about_profile">
    <div class="profile_header">Profile</div>
    
  <div class="about_profile_body" style="text-align: center;">
    <img src="<?php echo "$photo" ?>" class="img_side">
    <div class="info_side">
      <div style="margin-top: 10px;"></div>
      <table width="100%">
        <tr>
          <td class="td_profile1">Full Name:</td>
          <td class="td_profile2"><?php echo "$name" ?><br/></td>
        </tr>
         <tr>
          <td class="td_profile1">Nick:</td>
          <td class="td_profile2">1245</td>
        </tr>
        <tr>
          <td class="td_profile1">ID:</td>
          <td class="td_profile2"><?php echo "$id" ?></td>
        </tr>
        <tr>
          <td class="td_profile1">ID Code:</td>
          <td class="td_profile2">
            <img src="barcode.php?text=<?php echo "$id" ?>" style="width: 100%" />
          </td>
        </tr>
      </table>
      
    </div>

  </div>
</div>

  <div class="col-md-8 panel_profile">
    
    <div style="position: static;">
<section class="buttons">
<div class="containerr">
<div class="row">
<div class="col-sm-12">
<div class="text-center" style="">

<div onclick="personal_info()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Info</p>
</div>

<div onclick="program()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Program</p>
</div>

<div onclick="payment()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Payment</p>
</div>

<div onclick="result()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Result</p>
</div>

<div onclick="message()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Message</p>
</div>

</div>

</div>
</div>
</div>
</section>
</div>

    <div class="profile_header" id="profile_option">
    </div>
    <div class="panel_profile_body" id="panel_profile_body"></div>
  </div>
  
</div>

<input type="text" value="<?php echo "$id" ?>" id="student_id" hidden="">


<script type="text/javascript" src="page/student/profile_action.js"></script>

<?php

}

}

 ?>


<div class="modal fade student_add" id="student_edit_<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1">
            <?php 
       $student_ob->student_edit_form($id);
          ?>
        </div>
      </div>
    </div>
</div>

<div class="modal fade program_add" id="add_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1;" >
           <div style="padding: 30px;" id="add_program_body">
            
          </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade program_add" id="edit_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1;" >
           <div style="padding: 30px;" id="">
            <div id="msg"></div>
            <div id="edit_program_body"></div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Start Delete Model -->
<div class="modal small fade" id="delete_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Program?<br>This cannot be undone.</p>
            <input type="number" name="" id="delete_id" hidden="">
        </div>
        <div class="modal-footer">
          
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" onclick="delete_program()" name="delete">Delete</button>
        </div>
      </div>
    </div>
</div>
<!-- End Delete Model -->

<div class="modal fade student_add" id="view_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1">
          <button type="button" style="padding: 5px 15px 10px 10px; color: #000000" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <div id="view_program_body" style="padding: 20px;">
            
          </div>
        </div>
      </div>
    </div>
</div>


<style type="text/css">
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