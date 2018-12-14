<?php


class account {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection

  public function expence_list(){
    $sql="select expence.*,user.uname as user from expence
    INNER JOIN user ON expence.add_by=user.id  ORDER BY expence.id DESC
    ";
  	$info=$this->db->get_sql_array($sql);
  	return $info;
  }

  public function get_separate_expance($id){
    $sql="select * from expence where id=$id";
    $info=$this->db->get_sql_array($sql);
    return $info[0];
  }

  public function expence_category(){
  	$sql="select * from expence_category";
  	$info=$this->db->get_sql_array($sql);
  	return $info;
  }


}


?>

