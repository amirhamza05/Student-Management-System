<?php

/**
*
*/

class contest
{
	
	 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }




  public function submission_info(){
      $info=array();
      $sub=array();
     $sql="select * from submission";
     $res=$this->select($sql);
     while ($row=mysqli_fetch_array($res)) {
           $id=$row['id'];
           $sub['id']=$id;
           $sub['user']=$row['user'];
           $sub['pid']=$row['pid'];
           $sub['status']=$row['status'];
           $sub['date']=$row['date'];
          $info[$id]=$sub;
     }
	 return $info;
  }

public function user(){
   $info=$this->submission_info();
   $user_id=array();
   $visit=array();
   for($i=0; $i<50; $i++)$visit[$i]=0;
   $user_array=array();
   foreach ($info as $key => $value) {
      $uid=$value['user'];
      if($visit[$uid]==0){
          $visit[$uid]=1;
          array_push($user_array, $uid);
      }
   }
   return $user_array;
}






}

?>