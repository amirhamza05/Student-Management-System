<?php


class set_payment {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->program_ob=new program();
     $this->program_info=$this->program_ob->get_program_info();
     $this->student_ob=new student();
     $this->site=new site_content();

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

  public function get_student_payment_list($student_id,$program_id){
      $info=$this->get_set_payment_list_by_id($program_id);
      return $info;
  }

  public function get_student_payment_list_type($program_id,$student_id,$type=0){
      $con="";
      if($type!=0)$con="and type=$type";
      $sql="select * from student_payment where program_id=$program_id and student_id=$student_id $con ORDER BY id DESC";
      $info=$this->db->get_sql_array($sql);
      return $info;
  } 

  public function receive_payment_info($payment_id){
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
    WHERE receive_payment.id=$payment_id

    ";

     $info=$this->db->get_sql_array($sql);
     if(!isset($info[0]))return -1;
     $info=$info[0];


     $payment_save_id=$info['payment_id'];
     $sql="select SUM(pay) as due from receive_payment where payment_id=$payment_save_id and id<$payment_id";
     $info1=$this->db->get_sql_array($sql);
     $total_pay=$info1[0]['due'];
     $total_pay=($total_pay=="")?0:$total_pay;
     $fee=$info['total_fee'];
     $due=$fee-($total_pay+$info['pay']);
     $info['total_pay']=$total_pay;
     $info['due']=$due;

     if($info['type']==2){
      $info['month']=$this->get_month_name($info['month']);
     }
     else{
      $info['month']="-";
      $info['year']="-";
     }
     $type=$info['type'];
     $info['type']=($info['type']==1)?"Admission Fee":"Monthly Fee";
     
     if($type==3)$info['type']=$info['note'];

     $info['status']=($due<=0)?"Paid":"Due";
     return $info;
  }

  public function get_set_payment_by_id($condition,$data="*"){
    $sql="select $data from set_payment where  $condition";
    $info=$this->db->get_sql_array($sql);
    $info=$info[0];
    return $info;
  }
  
  public function get_payment_list($payment_id){
    $sql="select * from receive_payment where  payment_id=$payment_id ORDER BY id DESC";
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
    select receive_payment.*,student_payment.program_id,student_payment.month,student_payment.year,student_payment.type,student_payment.note,program.name
    from receive_payment 
    INNER JOIN student_payment ON receive_payment.payment_id=student_payment.id 
    INNER JOIN program ON program.id=student_payment.program_id
    where receive_payment.payment_id IN ($condition) ORDER by receive_payment.id DESC";
  

  $info=$this->db->get_sql_array($sql);

  $sql="select id from student_payment where  $condition ORDER by id DESC";

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

  public function money_recept_sms($id){
    $info=$this->receive_payment_info($id);
    $nick=$info['nick'];
    $program_name=$info['program_name'];
    $month=$info['month'];
    $year=$info['year'];
    $payment_id=$info['id'];
    $pay=$info['pay'];
    $due=$info['due'];
    $type=$info['type'];
  
    $month_status=$type;

    if($type=="Monthly Fee"){
      $month_status="Monthly Fee '$month-$year'";
    }

    $site_msg=$this->db->msg;

    $msg="Dear $nick,\nYour Payment $pay Tk for '$month_status' in '$program_name' is Successfully Taken.\nYour Payment ID: $payment_id\n\n$site_msg";
    return $msg;
  }

  public function get_money_recept($id){
    $info=$this->receive_payment_info($id);
    if($info==-1){
      echo "Soory Money Recept Not Found";
      return;
    }

   $type=$info['type'];
   $max_len=30;
   $student_name=$info['student_name'];
   $program_name=$info['program_name'];

   $student_name=(strlen($student_name)>=$max_len)?$this->site->make_name($student_name,$max_len)."...":$student_name;
   $program_name=(strlen($program_name)>=$max_len)?$this->site->make_name($program_name,$max_len)."...":$program_name;
   $type=(strlen($type)>=$max_len)?$this->site->make_name($type,$max_len)."...":$type;
    ?>
  <style type="text/css">
    
.money_recept .title_logo{
  font-size: 18px;
  font-weight: bold;
  color: #2D2D2D;
}
.money_recept .comments{
  border-width: 0px 0px 1px 0px;
  border-style:solid;
  border-color: #000000;
  width: 300px;
  padding: 5px;
  height: 40px;
  margin-top: 5px;
}
.money_recept .title_detail{
  font-size: 14px;
}
.money_recept .payment_recept_body{
  padding: 5px;
}
.money_recept .payment_recept_body table{
  border: 0px solid #000000;
}
.money_recept .td_name,.td_value{
  padding: 3px 2px 2px 5px;
  border: 0px solid #000000;
}
.money_recept .td_name{
 text-align: right;
 font-weight: bold;
}

.money_recept{
  width: 100%;
  height: 357px;
  
  background-color: #ffffff;
  border: 1px solid #2D2D2D;
  border-radius: 5px;
  color: #464646;
  font-size: 14px;
  font-family: 'Trebuchet MS', Helvetica, sans-serif;
  margin-bottom: 15px;
  overflow: hidden;
}
.money_recept .barcode_recept{
  height: 30px;
  width: 150px;
}
.money_recept .money_logo{
  height: 100px;
  width: 90px;
}
.money_recept .money_recept_header{
  background: url('http://www.designbolts.com/wp-content/uploads/2012/12/White-Linen-Seamless-Pattern-For-Website-Backgrounds.jpg');
  border-width: 0px 0px 1px 0px;
  border-style:  solid;
  border-color: #2D2D2D;
  height: 130px;
  width: 100%;
  padding: 2px;
  overflow: hidden;
}
.money_recept .left_header{
  float: left;
  width:65%;
  padding: 3px 0px 0px 30px;
}
.money_recept .right_header{
  padding: 20px 15px 15px 15px;
}

.money_recept .left_body{
 padding-right: 15px;
  float: left;
  width:50%;
}
.money_recept .right_body{

}
  </style>
  <div class='money_recept'>
  <div class='money_recept_header' >
    <center><b>Payment Recept</b></center>
    <div class='left_header'>
      <table style='background-color: none'>
        <tr>
          <td style='padding-right: 15px; background-color: none'>
            <img class='money_logo' src='<?php echo $this->db->logo; ?>'>
          </td>
          <td style='background-color: none'>
            <font class='title_logo'><?php echo $this->db->site_name; ?></font><br/>
            <font class='title_detail'>
              <?php echo $this->db->address; ?><br/>
              <?php echo $this->db->phone; ?><br/>
              <?php echo $this->db->email; ?>
            </font>
          </td>
        </tr>
      </table>
      
    </div>
    <div class='right_header'>
      
      <b>Recept No:</b> <u><?php echo $info['id']; ?></u><br/>
      <b>Recept Date:</b> <?php echo $info['date']; ?><br/>
      <b>Receive By:</b> <?php echo $info['add_by']; ?><br/>
    </div>
  </div>
  <div class='payment_recept_body'>
     <div class='left_body'>
      <table>
        <tr>
          <td class='td_name'>Student ID: </td>
          <td class='td_value'><?php echo $info['student_id']; ?></td>
        </tr>
        <tr>
          <td class='td_name'>Name: </td>
          <td class='td_value'><?php echo $student_name; ?></td>
        </tr>
        
        <tr>
          <td class='td_name'>Program Name: </td>
          <td class='td_value'><?php echo $program_name; ?></td>
        </tr>
        <tr>
          <td class='td_name'>Type: </td>
          <td class='td_value'><?php echo $type; ?></td>
        </tr>
        <tr>
          <td class='td_name'>Year: </td>
          <td class='td_value'><?php echo $info['year']; ?></td>
        </tr>
        <tr>
          <td class='td_name'>Month: </td>
          <td class='td_value'><?php echo $info['month']; ?></td>
        </tr>
      </table>
     
     </div>
     <div class='right_body'>
      <table>
        <tr>
          <td class='td_name'>Total Fee: </td>
          <td class='td_value'><?php echo $info['total_fee']; ?> tk</td>
        </tr>
        <tr>
          <td class='td_name'>Previous Total Pay: </td>
          <td class='td_value'><?php echo $info['total_pay']; ?> tk</td>
        </tr>
        
        <tr>
          <td class='td_name'>Pay: </td>
          <td class='td_value'><?php echo $info['pay']; ?> tk</td>
        </tr>
        <tr>
          <td class='td_name'>Total Due: </td>
          <td class='td_value'><?php echo $info['due']; ?> tk</td>
        </tr>
        <tr>
          <td class='td_name'>Status: </td>
          <td class='td_value'><?php echo $info['status']; ?></td>
        </tr>
        <tr>
          
        </tr>
      </table>
      
     </div>
     <div style="margin-top: 0px; float: center">
<center><div class='comments'></div>
     <b>Signature</b></center>
     </div> 
  </div>

</div>

    <?php
  }


}


?>

