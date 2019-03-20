<?php

/**
*
*/
include 'script/student/student_edit.php';

class student extends student_edit
{
  public $db;
  public $program_ob;
  public $student_list;
	
	 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->program_ob=new program();
     $this->student_list=$this->get_student_info1();
     
 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

public function valid_number($val){
  return ($val!=0)?"{$val}": "";
}
public function valid_mobile_number($val){
  return (strlen($val)>=11)?$val: "";
}

 public function get_student_info(){
      return $this->student_list;
 }

  public function get_student_info1(){
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
      $sub['program_list']=$this->get_separate_program_list($id);
      
      $sub["date"]=$row['date'];

      $info[$id]=$sub;
     }
   return $info;
  }


public function get_info($student_id){
  $sql="select * from student where id=$student_id";
  $info=$this->db->get_sql_array($sql);
  $info=$info[0];
  $url="upload/student_photo/";
  $info['photo']=$url.$info['photo'];
  
  return $info;
}

public function get_admit_program_info($admit_id){
  $sql="
  select 
  admit_program.*,student.name as student_name,
  program.name as program_name, batch.name as batch_name,
  user.uname as admit_by
  from admit_program
  INNER JOIN program ON program.id=admit_program.program_id 
  INNER JOIN student ON student.id=admit_program.student_id 
  INNER JOIN user ON user.id=admit_program.admit_by 
  INNER JOIN batch ON batch.id=admit_program.batch_id 
  WHERE admit_program.id=$admit_id
  ";
  $info=$this->db->get_sql_array($sql);
  return $info[0];
}


public function stuednt_admission_sms($admit_id){
  
  $info=$this->get_admit_program_info($admit_id);

  $sms="Dear student_name,\nCongratulation for admit our program_name.\nYour ID: 10007\nBatch: Protassa\nBatch Time: Mon,Wed,Fry(10-11)\n\nBest Wish.

  TechSerm
  01991223020
  ";
  return $sms;
}

public function get_mobile_number($student_id,$per){
  $con="";
  if($per=="all")$con="personal_mobile,father_mobile,mother_mobile";
  else if($per=="ga")$con="father_mobile,mother_mobile";
  else if($per=="st")$con="personal_mobile";
  $sql="select $con from student where id=$student_id";
  $info=$this->db->get_sql_array($sql);
 return $info;
}


public function get_student_list($program_id,$batch_id=0){
  if($batch_id==0)$sql="select * from admit_program where program_id=$program_id";
  else $sql="select * from admit_program where program_id=$program_id and batch_id=$batch_id";
  $info=$this->db->get_sql_array($sql);
 return $info;
}


public function process_array($info){
  $res=array();
  $c=0;
  foreach ($info as $key => $value) {
    if($c%2==1)$res[$key]=$value;
    $c++;
  }
  return $res;
}

public function get_separate_program_list($student_id){
   $info=array();
   $sub=array();
   $sql="select * from admit_program where student_id=$student_id ORDER BY id DESC;";
   $res=$this->select($sql);
   while($row=mysqli_fetch_array($res)){
      $id=$row['id'];
      $info[$id]=$this->process_array($row);
   }

return $info;
}



public function get_admit_program_option($student_id){
   $sql="select * from admit_program  where student_id= '$student_id'";
   $info=$this->db->get_sql_array($sql);
   return $info;
}


public function get_student_program_info($student_id){
  $sql="select admit_program.program_id,program.name from admit_program LEFT JOIN program ON admit_program.program_id = program.id WHERE admit_program.student_id='$student_id'";
  $info=$this->db->get_sql_array($sql);
  return $info;
}

public function get_student_program_option($student_id){
  $info=$this->get_student_program_info($student_id);
  foreach ($info as $key => $value) {
        $program_id=$value['program_id'];
        $program_name=$value['name'];
        echo "<option value='$program_id'>$program_name</option>";
  }
  return $info;
}

public function get_program_list(){
   $info=array();
   $sub=array();
   $sql="select * from admit_program ORDER BY id DESC";
   $res=$this->select($sql);
   while($row=mysqli_fetch_array($res)){
      $id=$row['id'];
      $info[$id]=$this->process_array($row);
   }

return $info;
}


public function cheikh_student($program_id,$student_id){
  $info=$this->get_student_info();
  $info=$info[$student_id]['program_list'];

  foreach ($info as $key => $value) {
     $id=$value['program_id'];
     if($program_id==$id)return 1;
  }
  return 0;
}

public function select_pending_program_by_student($student_id){
  $sql="select DISTINCT(program_id) from admit_program where student_id=$student_id"; 
  $info=$this->db->get_sql_array($sql);
  $admit_program=array();
  foreach ($info as $key => $value){
    array_push($admit_program, $value);
  }
 
  $people = array(3,20,2);
  $criminals = array( 2, 4, 8, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
  $fastfind = array_diff($people,$criminals);
   echo "<pre>";
   print_r($fastfind);
   echo "</pre>";
}


public function select_program_by_student($s_id){
   $info=$this->program_ob->get_program_info();
   
   foreach ($info as $key => $value) {
      $id=(int)$value['id'];
      $student_id1=(int)$s_id;
      $per=$this->cheikh_student($id,$student_id1);
      if($per==0){
        $name=$value['name'];
        echo "<option value='$id'> $name </option>";
      }
   }
}

  public function new_id(){

  $arr=array();
  $c=0;
  $info=$this->get_student_info();
   foreach ($info as $key => $value) {
     $id=$value['id'];
     array_push($arr, $id);
     $c++;
   }
   if($c==0)return 10001;
   else {
    rsort($arr);
    return $arr[0]+1;
   }
   
  }

  public function cheikh_student_program($student_id,$program_id){
    $info=$this->get_student_info();
    $info=$info[$student_id]['program_list'];
    foreach ($info as $key => $value) {
      $id=$value['program_id'];
      if($id==$program_id)return 1;
    }
    return 0;
  }


  public function cheikh_student_batch($student_id,$program_id,$batch_id){
    $info=$this->get_student_info();
    $info=$info[$student_id]['program_list'];
    foreach ($info as $key => $value) {
      $id=$value['program_id'];
      $batch=$value['batch_id'];
      if($id==$program_id){
        if($batch_id==$batch)return 1;
      }
    }
    return 0;
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




public function get_total_student($program_id,$batch_id){
  $info=$this->get_student_list($program_id,$batch_id);
  return count($info);
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




}

?>

