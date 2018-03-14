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
 	$num=array();
 	$n=0;
 	$c=0;
 	for($i=0; $i<strlen($st); $i++){
 		if($st[$i]==','){
 			array_push($num, $n);
 		    $n=1;
 		    $c=0;
 		}
 		else{
            
            $n=($n*$c)+(int)$st[$i];
            $c=10;
 		}
 	}
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
    $sql="select * from program";
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
        $sub['start_fee']=$row['start_fee'];
        $sub['end_fee']=$row['end_fee'];
        $sub['date']=$row['date'];
        $sub['add_by']=$row['add_by'];
        $info[$id]=$sub;
    }

return $info;
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

public function select_program(){
   $info=$this->get_program_info();
   foreach ($info as $key => $value) {
      $id=$value['id'];
      $name=$value['name'];
      
      echo "<option value='$id'> $name </option>";
   }

}

public function option_subject($program_id){
  $program=$this->get_program_info();
  $subject=$this->subject;
  foreach ($program[$program_id]['subject'] as $key => $value) {
    $id=$value['id'];
    $name=$subject[$id]['name'];
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

