<?php

/**
*
*/

class subject
{
	
	 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }




  public function get_subject_info(){
      $info=array();
      $sub=array();
     $sql="select * from subject ORDER BY id DESC";
     $res=$this->select($sql);
     while ($row=mysqli_fetch_array($res)) {
     	$id=$row['id'];
      $sub['id']=$id;
     	$sub["name"]=$row['sub_name'];
     	$sub["code"]=$row['sub_code'];
     
      $info[$id]=$sub;
     }
	 return $info;
  }


 public function get_new_subject_id(){
    $info=$this->get_subject_info();
    $sub_id=array();
    array_push($sub_id, 0);
  foreach ($info as $key => $value) {
    $id=$value['id'];
    array_push($sub_id, $id);
  }
  rsort($sub_id);
  return $sub_id[0]+1;
  }

  

 
}

?>