<?php


class user {
   

//starting connection
public $login_user_id;
 public function __construct($id=""){
     $this->login_user_id=$id;
     $this->db=new database();
     $this->conn=$this->db->conn;

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection

public function get_user_info(){
	$info=array();
	$sub=array();
	$sql="select * from user";
	$res=$this->select($sql);
	while ($row=mysqli_fetch_array($res)) {
		$id=$row['id'];

			$id=$row['id'];

        $sub['id']=$id;
		$sub['uname']=$row['uname'];
		$sub['pass']=$row['pass'];
		$sub['email']=$row['email'];
		$sub['phone']=$row['phone'];
		$sub['permit']=$row['permit'];
		$info[$id]=$sub;
	}
	return $info;
}

public function get_login_user(){
	$info=$this->get_user_info();
	return $info[$this->login_user_id];
}



}


?>

