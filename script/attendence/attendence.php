<?php


class attendence {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection
 public function get_attendence_info($program_id,$batch_id,$student_id,$date){
 	$date=date('Y-m-d', strtotime($date));
 	$sql="select * from student_attendence where program_id=$program_id and student_id=$student_id and batch_id=$batch_id and date='$date'";
 	$info=$this->db->get_sql_array($sql);
    if(isset($info[0]))return $info[0];

    return -1;
 }

 public function get_present_list($program_id,$batch_id,$date){
 	$date=date('Y-m-d', strtotime($date));
 	$sql="select * from student_attendence where program_id=$program_id and batch_id=$batch_id and date='$date' and status=1";
 	$info=$this->db->get_sql_array($sql);
    return $info;
 }

 public function get_absent_list($program_id,$batch_id,$date){
 	$date=date('Y-m-d', strtotime($date));
 	$sql="select * from student_attendence where program_id=$program_id and batch_id=$batch_id and date='$date' and status=0";
 	$info=$this->db->get_sql_array($sql);
    return $info;
 }

 public function get_absent_present_list($program_id,$batch_id,$date){
 	$date=date('Y-m-d', strtotime($date));
 	$sql="select * from student_attendence where program_id=$program_id and batch_id=$batch_id and date='$date'";
 	$info=$this->db->get_sql_array($sql);
    return $info;
 }

}


?>

