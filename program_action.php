<?php

include "layout/header_script.php";

if(isset($_POST['insert'])){

	$info['name']=$_POST['name'];
	$info['start']=$_POST['start'];
	$info['end']=$_POST['end'];

    $batch="";	
   	if(!empty($_POST['batch'])){
     $batch=$site->array_to_string($_POST['batch']);
   	}
    $info['batch']=$batch;

    $subject="";	
   	if(!empty($_POST['subject'])){
     $subject=$site->array_to_string($_POST['subject']);
   	}

    $info['subject']=$subject;
    $info['fee']=$_POST['fee'];
    $info['start_fee']=$_POST['start_fee'];
    $info['end_fee']=$_POST['end_fee'];
    $info['add_by']=4;
    $info['date']=date("Y/m/d");
    

   $db->sql_action("program","insert",$info);
	
}

else if(isset($_POST['update'])){
    
    $info['id']=$_POST['id'];
	$info['name']=$_POST['name'];
	$info['start']=$_POST['start'];
	$info['end']=$_POST['end'];

    $batch="";	
   	if(!empty($_POST['batch'])){
     $batch=$site->array_to_string($_POST['batch']);
   	}
    $info['batch']=$batch;

    $subject="";	
   	if(!empty($_POST['subject'])){
     $subject=$site->array_to_string($_POST['subject']);
   	}

    $info['subject']=$subject;
    $info['fee']=$_POST['fee'];
    $info['start_fee']=$_POST['start_fee'];
    $info['end_fee']=$_POST['end_fee'];
    $info['add_by']=4;
    $info['date']=date("Y/m/d");
    

   $db->sql_action("program","update",$info);
	
}

else if(isset($_POST['delete'])){

$info['id']=$_POST['id'];
$db->sql_action("program","delete",$info);

}


?>