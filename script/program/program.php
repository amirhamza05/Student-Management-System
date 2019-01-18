<?php


class program {
   

//starting connection

public $batch=array();
public $subject=array();

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->batch=new batch();
     $this->batch=$this->batch->batch_info();
     $this->subject=new subject();
     $this->subject=$this->subject->get_subject_info();

 }

 public function select($query){
   return $this->result=$this->db->select($query);
}

 public function num_array($st){
 	$num=explode(',', $st);
 	return $num;
 } 

 public function in_batch($in){
 	$info=array();
        foreach ($in as $key => $in) {
        	$id=$in;
        	foreach ($this->batch as $key => $batch) {
        		$id1=$batch['id'];
        		if($id1==$id){
        			$info[$id]=$batch;
        		}
        	}
        }
        return $info;
 }

 public function in_subject($in){
 	$info=array();
        foreach ($in as $key => $in) {
        	$id=$in;
        	
        	foreach ($this->subject as $key => $batch) {
        		$id1=$batch['id'];
        		if($id1==$id){
        			$info[$id]=$batch;
        		}
        	}
        }
        return $info;
 }

 public function convert_arr($arr){
 //convert arr to string ex:a[2]={1,2} output: st="1,2";
   $st="";
   $c=0;
   $si=sizeof($arr);
   foreach ($arr as $key => $value) {
      $c++;
      $s=$value['name'];
      $st=$st.$s;
     if($si!=$c) $st=$st.' , ';
   }
return $st;
 } 

 public function get_program_info(){
    $info=array();
    $sub=array();
    $sql="select * from program  ORDER BY id DESC";
    $res=$this->select($sql);
    while ($row=mysqli_fetch_array($res)) {
    	$id=$row['id'];
        $sub["id"]=$row['id'];
        $sub["name"]=$row['name'];
        $sub['start']=$row['start'];
        $sub['end']=$row['end'];
        $sub['subject']=$this->in_subject($this->num_array($row['subject']));
        $sub['subject_string']=$this->convert_arr($sub['subject']);
        $sub['batch']=$this->in_batch($this->num_array($row['batch']));
        $sub['batch_string']=$this->convert_arr($sub['batch']);
        $sub['fee']=$row['fee'];
        $sub['date']=$row['date'];
        $sub['type']=$row['type'];
        $sub['monthly_fee']=$row['monthly_fee'];
        $sub['type_string']=($sub['type']==1)?"Package":"Monthly";
        $sub['add_by']=$row['add_by'];
        $info[$id]=$sub;
    }

return $info;
 } 
 

public function get_separate_program_info($select_value="*",$program_id){
  $sql="select $select_value from program where id=$program_id";
  $info=$this->db->get_sql_array($sql);
  if(isset($info[0]))$info=$info[0];
  return $info;
}

public function get_program_type_option($program_id){
   $info=$this->get_separate_program_info("type",$program_id);
   $type=$info['type'];
   if($type==1 || $type==2)echo "<option value='1'>Admission Fee</option>";
   if($type==2)echo "<option value='2'>Monthly Fee</option>";
}

function get_payment_month_status($info,$condition=""){

  if($condition==""){
    $student_id=$info['student_id'];
    $year=(int)$info['year'];
    $month=$info['month'];
    $program_id=$info['program_id'];
    $type=$info['type'];

    if($type==1){
      $condition="student_id=$student_id and program_id=$program_id and type=1";
   }
   
    else{
      $condition="student_id=$student_id and program_id=$program_id and month=$month and year=$year";
 }
}

  
  $sql="select * from student_payment where $condition";
  
  $info=$this->db->get_sql_array($sql);
  if(!isset($info[0]))return -1;
  
  $res=array();

  $info=$info[0];

  $res['payment_id_info']=$info;
  
  $payment_id=$info['id'];
  $total_fee=$info['total_fee'];
  $pay=0;

  $sql="select SUM(pay) from receive_payment where payment_id=$payment_id";
  
  $info=$this->db->get_sql_array($sql);
  $info=$info[0];
  if($info["SUM(pay)"]!="")$pay=$info["SUM(pay)"];

  $paid=0;
  $due=$total_fee-$pay;
  if($due<=0)$paid=1;
  $res['total_fee']=$total_fee;
  $res['paid']=$paid;
  $res['total_pay']=$pay;
  $res['due']=$due;
  $res['payment_id']=$payment_id;

 
return $res;

}


function sum_of_payment(){
  $sql="SELECT SUM(pay) FROM receive_payment where date='2018-11-15 00:00:00'";
  $info=$this->db->get_sql_array($sql);
}


public function conver_string_table_id($st,$table){
  $sql="select * from batch where id in($st)";
  $info=$this->db->get_sql_array($sql);
  echo "<pre>";
  print_r($info);
  echo "</pre>";
}


public function select_subject($pro_id=-1){
       $subject=$this->subject;
       $info=$this->get_program_info();
     
      $mark=array();
      foreach ($subject as $key => $value) {
          $id=$value['id'];
          $mark[$id]=0;
      }

     if($pro_id!=-1){
         foreach ($info[$pro_id]['subject'] as $key => $value) {
             $id=$value['id'];
             $mark[$id]=1;
         }
     }

       foreach ($subject as $key => $value) {
        $id=$value['id'];
        $name=$value['name'];
        if($mark[$id]==0){
           echo "<input type='checkbox' name='subject[]' value='$id'> $name<br>";
        }
        else{
             echo "<input type='checkbox' name='subject[]' value='$id' checked> $name<br>";

        }
    
       }
}

public function select_batch($pro_id=-1){
       
       $batch=$this->batch;
       $info=$this->get_program_info();
     
      $mark=array();
      foreach ($batch as $key => $value) {
          $id=$value['id'];
          $mark[$id]=0;
      }

     if($pro_id!=-1){
         foreach ($info[$pro_id]['batch'] as $key => $value) {
             $id=$value['id'];
             $mark[$id]=1;
         }
     }
        foreach ($batch as $key => $value) {
         $id=$value['id'];
         $name=$value['name']; 
         $start=$value['start'];
         $end=$value['end'];
         if($mark[$id]==0){
           echo "<input type='checkbox' name='batch[]' value='$id'> $name ( $start - $end )<br>";
       }
       else{
        echo "<input type='checkbox' name='batch[]' value='$id' checked> $name ( $start - $end )<br>";
       }
    }
}



public function select_program($program_id=0){
  $selected="";
   $info=$this->get_program_info();
   foreach ($info as $key => $value) {
      $id=$value['id'];
      $name=$value['name'];
      if($program_id==$id)$selected="selected";
      else $selected="";
      echo "<option value='$id' $selected> $name </option>";
   }
}

public function option_subject($program_id,$subject_id=0){
  $selected="";
  $program=$this->get_program_info();
  $subject=$this->subject;
  foreach ($program[$program_id]['subject'] as $key => $value) {
    $id=$value['id'];
    $name=$subject[$id]['name'];
    if($id==$subject_id)$selected="selected";
      else $selected="";
    echo "<option value='$id' $selected>$name</option>";
  }
}



public function get_program_batch($program_id){
  $sql="select batch from program where id=$program_id";
  $info=$this->db->get_sql_array($sql);
  $info=array_unique(explode(',', $info[0]['batch']));
  $res=array();
  foreach ($info as $key => $value) {
    $sql="select * from batch where id=$value";
    $sub=$this->db->get_sql_array($sql);
    array_push($res, $sub[0]);
  }
  return $res;
}



public function get_select_option_batch($program_id){
  $info=$this->get_program_batch($program_id);
  print_r($info);
  foreach ($info as $key => $value) {
    $id=$value['id'];
    $name=$value['name'];
    echo "<option value='$id'>$name</option>";
  }
}


 
public function select_batch_option($pro_id){
   $info=$this->get_program_info();
   foreach ($info[$pro_id]['batch'] as $key => $value) {
      $id=$value['id'];
      $name=$value['name'];
      $start=$value['start'];
      $end=$value['end'];
      echo "<option value='$id'>$name ( $start - $end )</option>";
   }


}

public function select_program_batch($program_id,$batch_id){
  $info=$this->get_program_info();
  echo "hey";
   foreach ($info[$program_id]['batch'] as $key => $value) {
      $id=$value['id'];
      $name=$value['name'];
      $start=$value['start'];
      $end=$value['end'];
      $st=($batch_id==$id)?"selected":"";
      echo "<option value='$id' $st>$name ( $start - $end )</option>";
   }
}


public function get_program_name($program_id){
  $info=$this->get_program_info();
  if($program_id==0)$res="";
  else $res="'".$info[$program_id]['name']."'";
  return $res;
}


public function test(){
   echo "test";
}



//end dabtabase connection


}


?>

