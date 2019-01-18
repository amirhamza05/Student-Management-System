<?php


class report {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection
  public function get_payment_report_list($data){
    $date1=$data['date1'];
	 $date2=$data['date2'];
	 $program_id=$data['program_id'];
	 $type=$data['type'];
    $q_program="";
    $q_type="";
    $where="";

    if($program_id!=0)$q_program="student_payment.program_id=$program_id";
    if($type!=0)$q_type="student_payment.type=$type";
    
    if($q_program!="" && $q_type!=""){
    	$where="and $q_program and $q_type";
    }
    else if($q_program!="")$where="and $q_program";
    else if($q_type!="")$where="and $q_type";
    
    $sql="
    select 
    receive_payment.date,receive_payment.payment_id,receive_payment.pay,receive_payment.id,
    student.name as student_name,student.id as student_id,student.nick,
    program.name as program_name,
    student_payment.year,student_payment.month,student_payment.type,student_payment.note,
    student_payment.total_fee,
    user.uname as add_by
    from receive_payment  
    INNER JOIN student_payment ON student_payment.id=receive_payment.payment_id 
    INNER JOIN program ON program.id=student_payment.program_id 
    INNER JOIN student ON student.id=student_payment.student_id 
    INNER JOIN user ON user.id=receive_payment.add_by
    where (receive_payment.date BETWEEN CAST('$date1' AS DATE) AND CAST('$date2' AS DATE)) $where
    ORDER BY receive_payment.id ASC
    
    ";
    $info=$this->db->get_sql_array($sql);

   return $info;
  }

   public function get_month_name($month){
  	
  	$month_array=array("January","February","March","April","May","June","July","August","September","October","November","December");
  	return $month_array[$month-1];
  }

  public function get_expence_report($data){
    $date1=$data['date1'];
    $date2=$data['date2'];
    $sql="select expence.* from expence
    where (expence.date BETWEEN CAST('$date1' AS DATE) AND CAST('$date2' AS DATE))
    ";

    $info=$this->db->get_sql_array($sql);
    return $info;
  }

public function get_income_report($data){
    $date1=$data['date1'];
    $date2=$data['date2'];
    $sql="select income.* from income
    where (income.date BETWEEN CAST('$date1' AS DATE) AND CAST('$date2' AS DATE))
    ";

    $info=$this->db->get_sql_array($sql);
    return $info;
  }

  public function get_profit_report($data){
    $ex_rep=$this->get_expence_report($data);
    $data['program_id']=0;
    $data['type']=0;
    $pay_rep=$this->get_payment_report_list($data);
    $total_expence=0;
    foreach ($ex_rep as $key => $value) {
      $total_expence+=$value['amount'];
    }

    $total_income=0;
    $in_report=$this->get_income_report($data);
    foreach ($in_report as $key => $value) {
      $total_income+=$value['amount'];
    }
    
    $total_payment=0;
    foreach ($pay_rep as $key => $value) {
      $total_payment+=$value['pay'];
    }
    $info['total_expence']=$total_expence;
    $info['total_payment']=$total_payment;
    $info['total_income']=$total_income;
    $info['total_profit']=($total_payment+$total_income)-$total_expence;
return $info;
  }

  public function get_student_attend_info($date1,$date2,$program_id,$batch_id=0){
    $b_sql="";
    if($batch_id!=0){
       $b_sql="and batch_id=$batch_id";
    }
    $p_sql="";
    if($program_id!=0){
      $p_sql="and program_id=$program_id";
    }

    $sql="select * from student_attendence
    where (date BETWEEN CAST('$date1' AS DATE) AND CAST('$date2' AS DATE)) $p_sql $b_sql";
    $info=$this->db->get_sql_array($sql);
    $student_list=array();
    $info_index=array();
    foreach ($info as $key => $value) {
      $student_id=$value['student_id'];
      $status=$value['status'];
      $date=$value['date'];
      array_push($student_list, $student_id);
      $day=date("d", strtotime($date));
      $info_index[$student_id][(int)$day]=$status;
    }
    $student_list=array_unique($student_list);

    $res=array();
    $res['student_list']=$student_list;
    $res['info_index']=$info_index;
    
    return $res;
  }



}


?>

