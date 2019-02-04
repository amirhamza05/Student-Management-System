<?php


class payment {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->student_ob=new student();

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection
public function get_set_payment_list($data){

  $program_id=$data['program_id'];
  $batch_id=$data['batch_id'];
  $type=$data['payment_type'];
  $month=$data['month'];
  $year=$data['year'];


  $student_list=$this->make_student_list($program_id,$batch_id);
  $student_main_list=$student_list;

  $student_list=implode(',', $student_list);
  $student_list=($student_list!="")?"student_id IN( $student_list)":"student_id=-1";
  
  $sql="
  select  
    student_payment.student_id,
    receive_payment.payment_id, 
    student_payment.total_fee,   
    sum(receive_payment.pay) as total_pay ,
    student_payment.total_fee-sum(receive_payment.pay) as total_due,
    IF(student_payment.total_fee <=  sum(receive_payment.pay), 'Paid', 'Due') AS status
    
    from student_payment

    INNER JOIN 
      ( select id, payment_id, sum(pay) as pay  from receive_payment GROUP by id)
    receive_payment ON receive_payment.payment_id=student_payment.id 
    
    where 
    program_id=$program_id and type=$type and month=$month and year=$year and $student_list 
    GROUP by payment_id
  ";


  $payment_list=$this->db->get_sql_array($sql);

  $info=array();
  foreach ($payment_list as $key => $value) {
    $student_id=$value['student_id'];
    $info[$student_id]=$value;
  }

  $info=$this->process_student_payment_list($student_main_list,$info,$program_id,$type);
  return $info;
}

public function make_student_list($program_id,$batch_id){
  $student_list= $this->student_ob->get_student_list($program_id,$batch_id);
  $student_new_list=array();
  foreach ($student_list as $key => $value) {
    array_push($student_new_list, $value['student_id']);
  }
return $student_new_list;
}

public function process_student_payment_list($student_list,$payment_list,$program_id,$type){
  $info=array();
  $payment_id=-1;
  
  $sql="select * from program where id=$program_id";
  $program_info=$this->db->get_sql_array($sql);
  $program_info=$program_info[0];
  $total_fee=($type==1)?$program_info['fee']:$program_info['monthly_fee'];

  foreach ($student_list as $key => $value) {
    $student_id=$value;
    $data=array();
    if(isset($payment_list[$student_id]))$data=$payment_list[$student_id];
    else {
      $data['student_id']=$student_id;
      $data['payment_id']=0;
      $data['total_fee']=$total_fee;
      $data['total_pay']=0;
      $data['total_due']=$total_fee;
      $data['status']="Due";
    }
    $info[$student_id]=$data;
  }

  return $info;
}

public function program_payment_info($data){
  $info=$this->get_set_payment_list($data);
  $total_student=count($info);
  $paid_student=0;
  
  $total_fee=0;
  $total_pay=0;
  foreach ($info as $key => $value) {
    $total_fee+=$value['total_fee'];
    $total_pay+=$value['total_pay'];
    $paid_student+=($value['status']=="Paid")?1:0;
  }
  $res=array();
  $res['total_student']=$total_student;
  $res['paid_student']=$paid_student;
  $res['due_student']=$total_student-$paid_student;
  $res['total_fee']=$total_fee;
  $res['total_pay']=$total_pay;
  $res['total_due']=$total_fee-$total_pay;
  $res['paid_percent']=($total_pay/$total_fee)*100;
  $res['paid_percent']=floor($res['paid_percent']);

  return $res;

}

public function get_payment_status_list($data){
  $program_id=$data['program_id'];
  $batch_id=$data['batch_id'];
  $type=$data['payment_type'];
  $month=$data['month'];
  $year=$data['year'];

  $student_list=$this->make_student_list($program_id,$batch_id);
  
  
}


}


?>

