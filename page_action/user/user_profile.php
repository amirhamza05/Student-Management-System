<?php


if (isset($_POST['load_profile_photo'])) {
    $uid     = $_POST['load_profile_photo'];
    $picture = $user[$uid]['photo'];
    echo "$picture";
}

else if (isset($_FILES["file"]["name"])) {
    $user_id = $_POST['user_id'];
    
    $test     = explode('.', $_FILES["file"]["name"]);
    $ext      = end($test);
    $name     = "user_$user_id.$ext";
    $location = './upload/user_photo/' . $name;
    move_uploaded_file($_FILES["file"]["tmp_name"], $location);
    
    $info['id']    = $user_id;
    $info['photo'] = $name;
    $db->sql_action("user", "update", $info, $msg = "no");
    
}


else if (isset($_POST['old_pass'])) {
    $uid         = $_POST['uid'];
    $pass        = $_POST['old_pass'];
    $pass_user   = $user[$uid]['pass'];
    $pass        = hash('sha256', $pass);
    $data['msg'] = 0;
    if ($pass == $pass_user)
        $data['msg'] = 1;
    $data = json_encode($data);
    echo "$data";
}

else if (isset($_POST['pass_field'])) {
    $per = $_POST['pass_field'];
    if ($per == "old")
        old_field();
    else
        new_field();
}

else if (isset($_POST['get_user_data'])) {
    $id   = $_POST['get_user_data'];
    $data = $user[$id];
    $data = json_encode($data);
    echo "$data";
}

else if (isset($_POST['save_password'])) {
    $pass         = $_POST['save_password'];
    $uid          = $_POST['pass_user'];
    $pass         = hash('sha256', $pass);
    $info['id']   = $uid;
    $info['pass'] = $pass;
    $db->sql_action("user", "update", $info, $msg = "no");
}


if (isset($_POST['profile_photo_form'])) {
    $uid = $_POST['profile_photo_form'];
    $picture = $user[$uid]['photo'];
    picture_upload_form($picture);
    
}

if(isset($_POST['update_profile_form'])){
  $id=$_POST['update_profile_form'];
  $info=$user[$id];
  user_update_form($info,$site);
}

if(isset($_POST['update_profile_info'])){
  $info=$_POST['update_profile_info'];
  $db->sql_action("user", "update", $info, $msg = "no");
  echo "Sucess";
}

if(isset($_POST['update_user_status_form'])){
  $user_id=$_POST['update_user_status_form'];
  $user_status=$user[$user_id]['status'];
  $btn_status=($user_status==0)?1:0;
  $text=($user_status==0)?"Active User":"Deactive User";
  $icon=($user_status==0)?"glyphicon glyphicon-ok-circle":"glyphicon glyphicon-ban-circle";
  echo "<button onclick='update_user_status($btn_status)' class='btn btn-primary' style='margin-top: 10px;width: 100%'><span class='$icon'></span> $text</button>";

  ?>

 <?php 
}

if(isset($_POST['update_user_status'])){

  $info=$_POST['update_user_status'];
  $user_id=$info['user_id'];
  $status=$info['status'];
  $data['id']=$user_id;
  $data['status']=$status;

  print_r($data);
  $db->sql_action("user", "update", $data, $msg = "no");
}

if(isset($_POST['update_user_role_form'])){
  $user_id=$_POST['update_user_role_form'];
  $user_role=$user[$user_id]['permit'];

  ?>
  <select class="form-control" id="select_update_user_role">
    <?php $user_ob->get_user_can_update_option($user_role,$login_user_role); ?>
  </select>
  <button id="btn_update_role" class="btn btn-primary" style='margin-top: 10px;width: 100%' onclick="update_user_role()">Update Role</button>
  <?php 
}
if(isset($_POST['update_user_role'])){
  $info=$_POST['update_user_role'];
  $user_role=$info['role'];
  $user_id=$info['user_id'];
  $user_role=max($login_user_role,$user_role);
  $data=array();
  $data['id']=$user_id;
  $data['permit']=$user_role;
  $db->sql_action("user", "update", $data, $msg = "no");
}

 
function old_field()
{
?>
   <center>
      <input type="Password" placeholder="Enter Current Password" class="input_field" name="" id="old_pass"><br/>
      <button class="btn btn-primary" onclick="next_step_press()">Next</button>
    </center>

<?php
}

function new_field()
{
?>

    <center>
      <input type="Password" placeholder="Enter New Password" class="input_field" onkeyup="new_pass_in()" name="" id="new_pass1"><br/>
      <input type="Password" placeholder="Confirm Password" class="input_field" onkeyup ="new_pass_in()"  name="" id="new_pass2"><br/>
      <button class="btn btn-primary" onclick="save_password()" id="update_pass_btn" disabled="">Update</button>
    </center>

<?php
}

function picture_upload_form($picture)
{
?>
   
    <div id="profile_upload_area">
    <center>
  
      <br />
      <span id="uploaded_image">
      <img id="add_profile_pic" class="preview_img img-circle" src="<?php
    echo $picture;
?>">
      </span>
      <br />
      <input type="file" name="file" id="file" onchange="loadFile(event)"  />
      <button style="margin-top: 10px;width: 100%" class="btn btn-primary" onclick="upload_profile_photo()" id="update_pass_btn">Upload Profile Photo</button>

      </center>
    </div>
    
    <style type="text/css">
      .preview_img{
        height: 150px;
        width: 150px;
        border: 2px solid var(--bg-color); 
      }
    </style>

<?php
}

function user_update_form($info,$site){
  $fname=$info['fname'];
  $email=$info['email'];
  $phone=$info['phone'];
  $address=$info['address'];

  $site->form_input("Full Name","fname","fname","text","exclamation-sign","$fname","","yes");
  $site->form_input("Email","email","email","text","exclamation-sign","$email","","yes");
  $site->form_input("Address","address","address","text","exclamation-sign","$address","","yes");
  $site->form_input("Phone","phone","phone","number","exclamation-sign","$phone","","yes");
  echo "<button style='width: 100%' class='btn btn-primary' onclick='update_profile_info()' id='update_pass_btn'><b>Update Profile</b></button>";
}

?>
