<?php


class exam_old {
   

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
	$sql="select * from exam  ORDER BY id DESC";
	$info=$this->db->get_sql_array($sql);
	$res=array();
	foreach ($info as $key => $value) {
		$id=$value['id'];
		$mcq=$value['mcq'];
        if($mcq==0 || $mcq=="")$value['mcq']="N/A";
        $written=$value['written'];
        if($written==0 || $written=="")$value['written']="N/A";
        $res[$id]=$value;
	}

  	return $res;
}


}


?>

