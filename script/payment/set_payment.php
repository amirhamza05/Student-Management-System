<?php


class set_payment {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->program_ob=new program();
     $this->program_info=$this->program_ob->get_program_info();

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection

  public function get_set_payment_list(){
  	 $sql="select * from set_payment ORDER BY id DESC";
     $res=$this->select($sql);
     $info=array();
     while($row=mysqli_fetch_array($res)) {
       $sub=$this->db->process_mysql_array($row);
       $id=$sub['id'];
       $sub['month_name']=$this->get_month_name($sub['month']);
       $info[$id]=$sub;
     }

    return $info;
  }

  public function get_month_name($month){
  	
  	$month_array=array("January","February","March","April","May","June","July","August","September","October","November","December");
  	return $month_array[$month-1];
  }

  public function get_set_payment_list_by_id($program_id){
  	
    $sql="select * from set_payment where program_id=$program_id ORDER BY id DESC";
    $info=$this->db->get_sql_array($sql);
    $res=array();
  	foreach ($info as $key => $value) {
      $per=$this->check_date_interver($program_id,$value['year'],$value['month']);
      $value['month_name']=$this->get_month_name($value['month']);
      if($per==1)array_push($res, $value);
  	}
  	return $res;
  }

  public function get_set_payment_by_id($condition,$data="*"){
    $sql="select $data from set_payment where  $condition";
    $info=$this->db->get_sql_array($sql);
    $info=$info[0];
    return $info;
  }
  
  public function get_payment_list($payment_id){
    $sql="select * from receive_payment where  payment_id=$payment_id";
    $info=$this->db->get_sql_array($sql);
    return $info;
  }

 public function get_payment_receive_list($condition){
  $sql="select id from student_payment where  $condition ORDER by id DESC";
  $info=$this->db->get_sql_array($sql);
  $res=array();
  $condition="";
  foreach ($info as $key => $value) {
    $payment_id=$value['id'];
    array_push($res, $payment_id);
  }
  $condition=implode(',',$res);
  if($condition=="")return $info;

  $sql="
    select receive_payment.*,student_payment.program_id,student_payment.month,student_payment.year,student_payment.type,program.name
    from receive_payment 
    INNER JOIN student_payment ON receive_payment.payment_id=student_payment.id 
    INNER JOIN program ON program.id=student_payment.program_id
    where receive_payment.payment_id IN ($condition) ORDER by receive_payment.id DESC";
  

  $info=$this->db->get_sql_array($sql);

  $sql="select id from student_payment where  $condition ORDER by id DESC";

  return $info;
 }


  public function get_student_payment_list($student_id,$program_id){
      $info=$this->get_set_payment_list_by_id($program_id);
      return $info;
  }

 public function check_date_interver($program_id,$year,$month){
  $p_info=$this->program_ob->get_separate_program_info("start,end",$program_id);
  $start=$p_info['start'];
  $end=$p_info['end'];
     $info=$this->get_month_list($start,$end);
     foreach ($info as $key => $value) {
        $year1=$key;
        foreach ($value as $key => $value1) {
           $month1=$value1;
           if($year1==$year && $month1==$month)return 1;
        }
     }
     return 0;
 }

  public function get_month_list($start,$end){
     
     $start=explode('-', $start);
     $end=explode('-', $end);

     $start_year=$start[0];
     $start_month=$start[1];

     $end_year=$end[0];
     $end_month=$end[1];
     $res=array();
     if($start_year==$end_year){
      $res1=array();
     	for($i=$start_month; $i<=$end_month; $i++){
            array_push($res1, (int)$i);
     	}

       $res[$start_year]=$res1;
     }
     else{
     	  $res1=array();
        for($i=$start_month; $i<=12; $i++){
          array_push($res1, $i);
     	  }

        $res[$start_year]=$res1;

     	  for($i=$start_year+1; $i<$end_year; $i++){
     		   $res1=array();
           for($j=1; $j<=12; $j++){
              array_push($res1, $j);
           }
           $res[$i]=$res1;
        }
          $res1=array();
     	  for($i=1; $i<=$end_month; $i++){
            array_push($res1, $i);
     	  }
        $res[$end_year]=$res1;

     }

     return $res;

  }

  public function get_program_payment_year_option($program_info){
       $info=$this->get_month_list($program_info['start'],$program_info['end']);
       echo "<option value='-1'>Select Year</option>";
       foreach ($info as $key => $value) {
         echo "<option value='$key'>$key</option>";
       }
  }

  public function get_program_payment_month_option($program_info,$year){

    $info=$this->get_month_list($program_info['start'],$program_info['end']);
    $info=$info[$year];
    echo "<option value='-1'>Select Month</option>";
    foreach ($info as $key => $value) {
      $month_name=$this->get_month_name($value);
       echo "<option value='$value'>$month_name</option>";
    }

  }


  public function check_insert($pid,$year,$month){
      $info=$this->get_set_payment_list_by_id($pid);
      foreach ($info as $key => $value) {
         $year1=$value['year'];
         $month1=$value['month'];
         if($year1==$year && $month1==$month)return 1;
      }
      return 0;
  }


}


?>

