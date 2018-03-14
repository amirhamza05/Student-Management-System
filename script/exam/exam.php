<?php


class exam {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection


public function get_exam_info(){
	$sql="select * from exam";
	$res=$this->select($sql);
	$info=array();
	$sub_array=array();
	while ($row=mysqli_fetch_array($res)) {
		$id=$row['id'];
		$sub_array['id']=$id;
		$sub_array['program_id']=$row['program_id'];
		$sub_array['subject_id']=$row['sub_id'];
		$sub_array['exam_name']=$row['exam_name'];
        $sub_array['total']=$row['total'];
        $sub_array['mcq']=$row['mcq'];
        
        $mcq=$row['mcq'];
        if($mcq==0 || $mcq=="")$sub_array['mcq']="N/A";

        $sub_array['written']=$row['written'];

        $written=$row['written'];
        if($written==0 || $written=="")$sub_array['written']="N/A";
        
        $sub_array['date']=$row['date'];
        $sub_array['add_by']=$row['add_by'];
	  $info[$id]=$sub_array;
	}
	return $info;
}


}


?>

