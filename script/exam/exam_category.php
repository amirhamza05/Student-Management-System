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

  public function get_exam_category($category_id=0,$program_id=0){
  	
    $where_category=($category_id==0)?"":"exam_category.id=$category_id";
    $where_program=($program_id==0)?"":"exam_category.program_id=$program_id";
    if($where_program!="")
      $where_program=($where_category=="")?$where_program:" and $where_program";

    $where=($program_id==0 && $category_id==0)?"":"where $where_category $where_program";

  	$sql="
  	select 
  	exam_category.*,
  	program.name as program_name,program.id as program_id,
  	user.uname as add_by
  	from exam_category
  	INNER JOIN program ON program.id=exam_category.program_id
  	INNER JOIN user ON user.id=exam_category.add_by
  	$where
  	ORDER BY exam_category.id DESC
  	
  	";

  	$info=$this->db->get_sql_array($sql);
  	return $info;
  }

  public function get_exam_category_option($program_id){
    $option_list=$this->get_exam_category(0,$program_id); 
    foreach ($option_list as $key => $value) {
      $category_id=$value['id'];
      $category_name=$value['category_name'];
      echo "<option value='$category_id'>$category_name</option>";
    }
  }


}


?>

