<?php


class theme {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection
  public function get_theme_info(){
    $info=array();
    $sub=array();
    $sql="select * from theme";
     $res=$this->select($sql);
     while ($row=mysqli_fetch_array($res)) {
      $id=$row['id'];
      $sub['id']=$id;
      $sub['name']=$row['name'];
      $sub['bg_color']=$row['bg_color'];
      $sub['font_color']=$row['font_color']; 
      $sub['date']=$row['date'];
      $sub['added_by']=$row['added_by'];
      $info[$id]=$sub;
     }
    
   return $info;
  }

  public function get_theme($theme_id){
    $info=$this->get_theme_info();
    $flag=0;
    foreach ($info as $key => $value) {
    	$id=$value['id'];
    	if($id==$theme_id){
    		$flag=1;
    		break;
    	}
    }
    if($flag==0)$theme_id=1;
    
    return $info[$theme_id];
  }



}


?>

