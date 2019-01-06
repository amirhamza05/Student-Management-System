<?php


if(isset($_POST['add'])){
	$no=$_POST['add'];
	$no1=$no+1;
	echo "
	<input type='text' value='$no'>
	<button onclick='delete_res($no)'>-</button>
	<div id='add$no1'></div>

	";
}

if(isset($_POST['name'])){
	$info=$_POST;

    $db_info=$setting->genaral_setting_info();
    
	foreach ($db_info as $key => $value) {
        $option_name=$value['option_name'];
        $option_value=$value['option_value'];
        $id=$value['id'];
        
		if(isset($info[$option_name])){
			if($info[$option_name]!=$option_value){
				
				$data=array();
				$data['id']=$id;
				$data['option_name']=$option_name;
				$data['option_value']=$info[$option_name];
				$db->sql_action("setting","update",$data);

			}
		}
	}


	//image option

   if(isset($_FILES['main_logo'])){
 
      $errors= array();
      $file_name = $_FILES['main_logo']['name'];
      $file_size = $_FILES['main_logo']['size'];
      $file_tmp = $_FILES['main_logo']['tmp_name'];
      $file_type = $_FILES['main_logo']['type'];
      $f_type=$_FILES['main_logo']['type'];
      $file_ext=(explode('.',$file_name));
      $file_ext=end($file_ext);
      
      

      $imagename="avatar.png";
      $expensions= array("jpeg","jpg","png","JPEG","PNG","JPG");
      
      if(in_array($file_ext,$expensions)== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"upload/custom_content/"."main_logo".'.'.$file_ext);
         $imagename="main_logo.$file_ext";
         $data=array();
         $data['id']=4;
         $data['option_value']=$imagename;
         $db->sql_action("setting","update",$data);

      }else{
         //print_r($errors);
      }


   }     
  //end image option
//image option

   if(isset($_FILES['logo'])){
 
      $errors= array();
      $file_name = $_FILES['logo']['name'];
      $file_size = $_FILES['logo']['size'];
      $file_tmp = $_FILES['logo']['tmp_name'];
      $file_type = $_FILES['logo']['type'];
      $f_type=$_FILES['logo']['type'];
      $file_ext=(explode('.',$file_name));
      $file_ext=end($file_ext);
      
      

      $imagename="avatar.png";
      $expensions= array("jpeg","jpg","png","JPEG","PNG","JPG");
      
      if(in_array($file_ext,$expensions)== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"upload/custom_content/"."logo".'.'.$file_ext);
         $imagename="logo.$file_ext";
         $data=array();
         $data['id']=5;
         $data['option_value']=$imagename;
         $db->sql_action("setting","update",$data);

      }else{
         //print_r($errors);
      }


   }     
  //end image option
    


}

if(isset($_POST['reset_logo'])){
	$data['id']=5;
    $data['option_value']="techserm_small_logo.png";
    $db->sql_action("setting","update",$data);
}
if(isset($_POST['reset_main_logo'])){
	$data['id']=4;
    $data['option_value']="techserm_full_logo.jpg";
    $db->sql_action("setting","update",$data);
}


?>