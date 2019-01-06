<?php

include "layout/header_script.php";


function valid_input($val){
  return !empty($val)?"{$val}": 0;
}

if(isset($_POST['test_data'])){
  $info=$_POST;
  unset($info['id']);
  $info['id1']=1;
  $data=json_encode($info);
  echo "$data";
}

if(isset($_POST['insert_name'])){
 
  $id=$student_ob->new_id();
	$info['id']=$id;
	$info['name']=$_POST['insert_name'];
	$info['nick']=$_POST['nick'];
	$info['father_name']=$_POST['father_name'];
	$info['mother_name']=$_POST['mother_name'];
	$info['personal_mobile']=$_POST['student_mobile'];
	$info['father_mobile']=$_POST['father_mobile'];
	$info['mother_mobile']=$_POST['mother_mobile'];
	$info['email']=$_POST['email'];
	$info['birth_day']=$_POST['birthday'];
	$info['gender']=$_POST['gender'];
	$info['religion']=$_POST['religion'];
	$info['address']=$_POST['address'];

	$info['school']=$_POST['school_name'];
	$info['ssc_rool']=valid_input($_POST['ssc_rool']);
	$info['ssc_reg']=valid_input($_POST['ssc_reg']);
	$info['ssc_board']=$_POST['ssc_board'];
	$info['ssc_result']=valid_input($_POST['ssc_result']);
    
  
	$info['date']=$db->date();

//image option
   $imagename="avatar.png";

   if(isset($_FILES['image'])){
 
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $f_type=$_FILES['image']['type'];
      $file_ext=(explode('.',$file_name));
      $file_ext=end($file_ext);
      
      $imagename="avatar.png";
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"upload/student_photo/".$id.'.'.$file_ext);
         $imagename=$id.'.'.$file_ext;
      }else{
         //print_r($errors);
      }
   }     
  //end image option

$info['photo']=$imagename;

$data=json_encode($info);
  echo "$data";
$db->sql_action("student","insert",$info,"no");
	
}

else if(isset($_POST['update'])){
    
  $info['id']=$_POST['student_id'];
  $id=$info['id'];
  $student_id=$_POST['student_id'];
  $info['name']=$_POST['name'];
  $info['nick']=$_POST['nick'];
  $info['father_name']=$_POST['father_name'];
  $info['mother_name']=$_POST['mother_name'];
  $info['personal_mobile']=valid_input($_POST['student_mobile']);

  $info['father_mobile']=valid_input($_POST['father_mobile']);
  $info['mother_mobile']=valid_input($_POST['mother_mobile']);
  $info['email']=$_POST['email'];
  $info['birth_day']=$_POST['birthday'];
  $info['gender']=$_POST['gender'];
  $info['religion']=$_POST['religion'];
  $info['address']=$_POST['address'];

  $info['school']=$_POST['school_name'];
  $info['ssc_rool']=valid_input($_POST['ssc_rool']);
  $info['ssc_reg']=valid_input($_POST['ssc_reg']);
  $info['ssc_board']=$_POST['ssc_board'];
  $info['ssc_result']=valid_input($_POST['ssc_result']);


//image option
$flag=0;
$imagename=$student[$student_id]['photo'];

   if(isset($_FILES['image'])){
 
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $f_type=$_FILES['image']['type'];
      $file_ext=(explode('.',$file_name));
      $file_ext=end($file_ext);
      
      $imagename=$imagename;
      $expensions= array("jpeg","jpg","png","PNG");
      
      if(in_array($file_ext,$expensions)== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 5097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"upload/student_photo/".$id.'.'.$file_ext);
         $imagename=$id.'.'.$file_ext;
         $flag=1;
      }else{
         //print_r($errors);
      }
   }     
  //end image option
if($flag==1){
 $info['photo']=$imagename;
} 


//$site->myprint_r($info);

  $db->sql_action("student","update",$info,"no");
  echo "<script>alert('Successfully Update Student Information!');</script><script>document.location='student_profile.php?get_id=$id'</script>";
	
}

else if(isset($_POST['delete'])){

$student_id=$_POST['id'];
$info['id']=$student_id;

$payment_info=$payment->get_payment_info();
foreach ($payment_info as $key => $value) {
   $id=$value['id'];
   $sid=$value['student_id'];
   if($sid==$student_id){
    $info['id']=$id;
    $db->sql_action("payment","delete",$info,'no');
   }
}

foreach ($result_info as $key => $value) {
   $id=$value['id'];
   $sid=$value['student_id'];
   if($sid==$student_id){
    $info['id']=$id;
    $db->sql_action("result","delete",$info,'no');
   }
}
$info['id']=$student_id;
$db->sql_action("student","delete",$info,'yes');


}

?>