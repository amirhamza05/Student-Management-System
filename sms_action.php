<?php

include 'layout/header_script.php';


if(isset($_POST['send_sms'])){
	$id=$_POST['send_sms'];
	foreach ($student as $key => $value) {
		$id1=$value['id'];
		if($id==$id1){
			$name=$value['name'];
			$nick=$value['nick'];
			$program_id=$value['program'];
			$program_name=$program[$program_id]['name'];
			$batch_id=$value['batch'];
			$batch_name=$batch[$batch_id]['name'];
			$day=$batch[$batch_id]['day_string'];
			$start=$batch[$batch_id]['start'];
			$end=$batch[$batch_id]['end'];
			$fee=$value['fee'];
            $to=$value['personal_mobile'];

            $msg="Dear ".$nick." Congratulation For Admit our ".$program_name." Program";
            $msg.=".\n\nBatch Time: ( ".$start." - ".$end." ) \n\n";
            $msg.="Batch Day: ".$day."\n\n";
            $msg.="Fee: ".$fee."\n";
            
            $msg.="\n(Youth Admission Care)";
            $sms->send_sms_student($id,$msg,"a");
            echo "Sucessfully Send SMS.";
		}		
	}
}



?>