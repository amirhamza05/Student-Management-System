<?php

/**
*
*/

class sms
{

public $student;
public $student_ob;
	
	 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->student_ob=new student();
     $this->student=$this->student_ob->get_student_info();
     
 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

 public function send_sms($to,$message){

$token="2782dd388e780708ebc38ddecfe135e1";
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


public function attend($info){

   foreach ($info as $key => $value) {
   	 $nick=$value['nick'];
   	 $to=$value['mobile'];
   	 $date=$value['date'];
   	 $attend=$value['attend'];
   	 $msg="Hello ".$nick." Guardians Today is ".$date.". ";
   	 if($attend==0){
   	 	$msg.=$nick." Is Not Attend In Today Class.";
   	 }
   	 else{
   	 	$time=$value['attend_time'];
   	 	$msg.=$nick." Is Attend In Today Class at ".$time.".";
   	 }
   	 $msg.="\n\n";
   	 $msg.="(Techserma Team)";
   	 //$this->send_sms($to,$msg);
   	 //echo "$msg";
   }
}
public function welcome($info){
    foreach ($info as $key => $value) {
       $to=$value['personal_mobile'];
       $name=$value['name'];
       $fee=$value['fee'];
       $id=$value['id'];
       $msg="Dear ".$name." Congratulation for Admission. Your\n";
       $msg.="\nId : ". $id;
       $msg.="\nFee : ". $fee;
       $msg.="\n\nYouth Admission Care\n";
       $this->send_sms($to,$msg);
    }
}


public function valid_mobile($number){
  $c=strlen($number);
  $flag=0;
  if($c==11)$flag=1;
  return $flag;
}

public function all_number($student_id){
   $info=array();
   $value=$this->student[$student_id];

   $mobile=$value['personal_mobile'];
   $ch=$this->valid_mobile($mobile);
   if($ch==1)array_push($info, $mobile);

   $mobile=$value['father_mobile'];
   $ch=$this->valid_mobile($mobile);
   if($ch==1)array_push($info, $mobile);

   $mobile=$value['mother_mobile'];
   $ch=$this->valid_mobile($mobile);
   if($ch==1)array_push($info, $mobile);

   return $info;
}

public function student_only($student_id){

 $info=array();
   $value=$this->student[$student_id];

   $mobile=$value['personal_mobile'];
   $ch=$this->valid_mobile($mobile);
   if($ch==1)array_push($info, $mobile);


   return $info;


}
public function guardians_only($student_id){

   $info=array();
   $value=$this->student[$student_id];

   $mobile=$value['father_mobile'];
   $ch=$this->valid_mobile($mobile);
   if($ch==1)array_push($info, $mobile);

   $mobile=$value['mother_mobile'];
   $ch=$this->valid_mobile($mobile);
   if($ch==1)array_push($info, $mobile);

   return $info;

}


public function send_sms_student($student_id,$msg,$condition="s"){
  $info=array();

  if($condition=="a")$info=$this->all_number($student_id);
  else if($condition=="s")$info=$this->student_only($student_id);
  else if($condition=="g")$info=$this->guardians_only($student_id);
$c=0;
 foreach ($info as $key => $value) {
   $c++;
   $number=$value;
   $this->send_sms($number,$msg);
   echo "$number<br/>$msg<br/><br/>";
 }

return $c;
}

public function syn_info($id){
   $info1=$this->student;
   $st_info=$info1[$id];
   $info['{{student_name}}']=$st_info['name'];
   $info['{{nick_name}}']=$st_info['nick'];
   $info['{{id}}']=$st_info['id'];
 
return $info;
}

public function get_sms_recever_option(){
  echo " <option value='0'> --Select Recever-- </option>
                <option value='a'> ALL </option>
                <option value='s'> Student </option>
                <option value='g'> Guardians </option>";
}

public function get_syn(){
  $info=array();
  $info['{{student_name}}']="Student Name";
  $info['{{nick_name}}']="Nick Name";
  $info['{{id}}']="Student Id";
  return $info;
}

public function get_syntext(){
   $info=$this->get_syn();
   foreach ($info as $key => $value) {
      echo "<option value='$key'>$value</option>";
   }
}


public function get_sms($student_id,$text){
   $info=$this->syn_info($student_id);
   $syn=$this->get_syn();
   foreach ($syn as $key => $value) {
       $syn_val=$key;
       $info_val=$info[$key];
       $text = str_replace($syn_val, $info_val, $text);
   }

  return $text;
}

 public function test(){
 	echo "hello";
 }



}

?>