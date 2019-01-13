
<?php


if(isset($_POST['load_profile_photo'])){
  $uid=$_POST['load_profile_photo'];
  $picture=$user[$uid]['photo'];
  echo "$picture";
}

  else if(isset($_FILES["file"]["name"])){
      $user_id=$_POST['user_id'];

      $test = explode('.', $_FILES["file"]["name"]);
      $ext = end($test);
      $name = "user_$user_id.$ext";
      $location = './upload/user_photo/' . $name;  
      move_uploaded_file($_FILES["file"]["tmp_name"], $location);

      $info['id']=$user_id;
      $info['photo']=$name;
      $db->sql_action("user","update",$info,$msg="no");
      
}


else if(isset($_POST['up_id'])){
	$info=$_POST;

	$info['id']=$info['up_id'];
	unset($info['up_id']);
    $id=$info['id'];
    $info['phone']=(int)$info['phone'];
    $imagename=$user[$id]['photo_orginal'];

   if(isset($_FILES['image'])){
 
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $f_type=$_FILES['image']['type'];
      $file_ext=(explode('.',$file_name));
      $file_ext=end($file_ext);
      
      $expensions= array("jpeg","jpg","png","PNG");
      
      if(in_array($file_ext,$expensions)== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"upload/user_photo/"."user_".$id.'.'.$file_ext);
         $imagename="user_".$id.'.'.$file_ext;
      }else{
         //print_r($errors);
      }
   }     
  //end image option

   $info['photo']=$imagename;
   $db->sql_action("user","update",$info,$msg="no");
   $data=json_encode($info);
    echo "$data";
}

else if(isset($_POST['old_pass'])){
	$uid=$_POST['uid'];
	$pass=$_POST['old_pass'];
    $pass_user=$user[$uid]['pass'];
    $pass=hash('sha256', $pass);
	$data['msg']=0;
	if($pass==$pass_user)$data['msg']=1;
	$data=json_encode($data);
    echo "$data";
}
else if(isset($_POST['pass_field'])){
	$per=$_POST['pass_field'];
	if($per=="old")old_field();
	else new_field();
}
else if(isset($_POST['get_user_data'])){
	$id=$_POST['get_user_data'];
    $data=$user[$id];
    $data=json_encode($data);
    echo "$data";
}
else if(isset($_POST['save_password'])){
	$pass=$_POST['save_password'];
	$uid=$_POST['pass_user'];
	$pass=hash('sha256', $pass);
	$info['id']=$uid;
	$info['pass']=$pass;
	$db->sql_action("user","update",$info,$msg="no");
}


if(isset($_POST['profile_photo_form'])){
  $user_id=$_POST['profile_photo_form'];
  $picture=$user[$user_id]['photo'];
?>

<div id="profile_upload_area">
<center>
  
  <br />
  <span id="uploaded_image">
    <img id="add_profile_pic" class="preview_img img-circle" src="<?php echo $picture; ?>">
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
<?php } ?>

<?php

function old_field(){
?>

<center>

<input type="Password" placeholder="Enter Current Password" class="input_field" name="" id="old_pass"><br/>

<button class="btn btn-primary" onclick="next_step_press()">Next</button>
</center>

<?php
}
	function new_field(){
?>

<center>

<input type="Password" placeholder="Enter New Password" class="input_field" onkeyup="new_pass_in()" name="" id="new_pass1"><br/>

<input type="Password" placeholder="Confirm Password" class="input_field" onkeyup ="new_pass_in()"  name="" id="new_pass2"><br/>
<button class="btn btn-primary" onclick="save_password()" id="update_pass_btn" disabled="">Update</button>
</center>

<?php
}

?>
