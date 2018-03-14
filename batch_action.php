<?php
include "layout/header_script.php";

$info=array();

if(isset($_POST['insert'])){

	$info['name']=$_POST['name'];
	$info['start']=$_POST['start'];
	$info['end']=$_POST['end'];
    $day="";	
   if(!empty($_POST['batch_day'])){
     $day=$site->array_to_string($_POST['batch_day']);
   }
    $info['day']=$day;

   $db->sql_action("batch","insert",$info);
	
}

else if(isset($_POST['update'])){
    $info['id']=$_POST['id'];
	$info['name']=$_POST['name'];
	$info['start']=$_POST['start'];
	$info['end']=$_POST['end'];
    $day="";	
   if(!empty($_POST['batch_day'])){
     $day=$site->array_to_string($_POST['batch_day']);
   }
    $info['day']=$day;

   $db->sql_action("batch","update",$info);
	
}

else if(isset($_POST['delete'])){

	$info['id']=$_POST['id'];
	$db-$db->sql_action("batch","delete",$info);
}

else if(isset($_POST['send'])){
   $to = $_POST['number'];
   $message = $_POST['message'];

   $token = "2782dd388e780708ebc38ddecfe135e1";
   
   $url = "http://sms.greenweb.com.bd/api.php";


$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

}
 

?>