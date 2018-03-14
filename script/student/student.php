<?php

/**
*
*/
include 'script/student/student_edit.php';

class student extends student_edit
{
  public $db;
  public $program_ob;
	
	 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->site_ob=new site_content();
     $this->program_ob=new program();
     
 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

public function valid_number($val){
  return ($val!=0)?"{$val}": "";
}
public function valid_mobile_number($val){
  return ($val!=0)?'0'.$val: "";
}

  public function get_student_info(){
    $info=array();
    $sub=array();
    $sql="select * from student ORDER BY id DESC;";
     $res=$this->select($sql);
     while ($row=mysqli_fetch_array($res)) {
      $url="upload/student_photo/";
      $id=$row['id'];
      $sub['id']=$id;
      $sub["name"]=$row['name'];
      $sub['nick']=$row['nick'];
      $sub['father_name']=$row['father_name'];
      $sub["mother_name"]=$row['mother_name'];

      $sub["personal_mobile"]=$this->valid_mobile_number($row['personal_mobile']);

      $sub["father_mobile"]=$this->valid_mobile_number($row['father_mobile']);
      $sub["mother_mobile"]=$this->valid_mobile_number($row['mother_mobile']);

      $sub["email"]=$row['email'];
      $sub["birth_day"]=$row['birth_day'];
      $sub["gender"]=$row['gender'];
      $sub["religion"]=$row['religion'];
      $sub["address"]=$row['address'];
      $sub['photo']=$url.$row['photo'];
      
      $sub["school"]=$row['school'];
      $sub["ssc_rool"]=$this->valid_number($row['ssc_rool']);
      $sub["ssc_reg"]=$this->valid_number($row['ssc_reg']);
      $sub["ssc_board"]=$row['ssc_board'];
      $sub["ssc_result"]=$this->valid_number($row['ssc_result']);

      $sub["program"]=$row['program'];
      $sub["batch"]=$row['batch'];
      $sub["fee"]=$row['fee'];
      $sub["date"]=$row['date'];

      $info[$id]=$sub;
     }
   return $info;
  }

  public function new_id(){
    

  $arr=array();
  $c=0;
  $sql="select * from student_id";
  $res=$this->select($sql);
   while($row=mysqli_fetch_array($res)) {
     $id=$row['id'];
     array_push($arr, $id);
     $c++;
   }
   if($c==0)return 10001;
   else {
    rsort($arr);
    return $arr[0]+1;
   }
   
  }

  public function get_batch($batch_id){
    $info=$this->get_student_info();
    $res_info=array();
    foreach ($info as $key => $value) {
      $id=$value['id'];
      $batch=$value['batch'];
      if($batch==$batch_id){
        $res_info[$id]=$value;
      }
    }
  return $res_info;
  }
 public function get_program($program_id){
    $info=$this->get_student_info();
    $res_info=array();
    foreach ($info as $key => $value) {
      $id=$value['id'];
      $program=$value['program'];
      if($program==$program_id){
        $res_info[$id]=$value;
      }
    }
  return $res_info;
  }

 public function get_program_batch($program_id,$batch_id){
    $info=$this->get_student_info();
    $res_info=array();
    foreach ($info as $key => $value) {
      $id=$value['id'];
      $program=$value['program'];
      $batch=$value['batch'];
      if($program==$program_id && $batch==$batch_id){
        $res_info[$id]=$value;
      }
    }
  return $res_info;
  }

public function get_student($student_id){
  $info=$this->get_student_info();
    $res_info=array();
    foreach ($info as $key => $value) {
      $id=$value['id'];
      if($id==$student_id){
        $res_info[$id]=$value;
      }
    }
  return $res_info;
}

public function get_select_student($program_id,$batch_id,$student_id){
    $info=$this->get_student_info();
    $res=array();
    if($student_id>0){
       $res=$this->get_student($student_id);
    }
    else{

      if($program_id==0 && $batch_id==0){
         $res=$info;
      }
      else if($program_id==0 && $batch_id>0){
         $res=$this->get_batch($batch_id);
      }
      else if($program_id>0 && $batch_id==0){
         $res=$this->get_program($program_id);
      }
      else if($program_id>0 && $batch_id>0){
         $res=$this->get_program_batch($program_id,$batch_id);
      }
    }
return $res;
}

public function find_student($student_id){
  $info=$this->get_student_info();
  $flag=0;
  foreach ($info as $key => $value) {
    $id=$value['id'];
    if($id==$student_id){
      $flag=1;
      break;
    }
  }
  return $flag;
}
public function test(){
  $this->site_ob->test();
}



}

?>