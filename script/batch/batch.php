<?php

/**
*
*/

class batch
{
	
	 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     
 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

 public function day($st){
 	$day=array();
 	for($i=0; $i<strlen($st); $i++){
 		if($st[$i]!=','){

 			if($st[$i]=='1')$day[1]="Saturday";
 		    else if($st[$i]=='2')$day[2]="Sunday";
 		    else if($st[$i]=='3')$day[3]="Monday";
 		    else if($st[$i]=='4')$day[4]="Tuesday";
 		    else if($st[$i]=='5')$day[5]="Wednesday";
 		    else if($st[$i]=='6')$day[6]="Thursday";
 		    else if($st[$i]=='7')$day[7]="Friday"; 
 
 		}
 	}
 	return $day;
 }
 public function day_sort($st){
  $day=array();
  for($i=0; $i<strlen($st); $i++){
    if($st[$i]!=','){

      if($st[$i]=='1')$day[1]="Sat";
        else if($st[$i]=='2')$day[2]="Sun";
        else if($st[$i]=='3')$day[3]="Mon";
        else if($st[$i]=='4')$day[4]="Tue";
        else if($st[$i]=='5')$day[5]="Wed";
        else if($st[$i]=='6')$day[6]="Thu";
        else if($st[$i]=='7')$day[7]="Fri"; 
 
    }
  }
  return $day;
 }

 public function day_index(){
      $day[1]="Saturday";
      $day[2]="Sunday";
      $day[3]="Monday";
      $day[4]="Tuesday";
      $day[5]="Wednesday";
      $day[6]="Thursday";
      $day[7]="Friday";
      return $day;
 }

public function day_so_index(){
      $day[1]="Sat";
      $day[2]="Sun";
      $day[3]="Mon";
      $day[4]="Tue";
      $day[5]="Wed";
      $day[6]="Thu";
      $day[7]="Fri";
      return $day;
 }


public function num_array($st){
  $num=explode(',', $st);
  return $num;
 } 

 public function convert_arr($arr){
 //convert arr to string ex:a[2]={1,2} output: st="1,2";
   $st="";
   $st=implode(',', $arr);
   return $st;
 } 

  public function batch_info(){
      $info=array();
      $sub=array();
     $sql="select * from batch ORDER BY id DESC";
     $res=$this->select($sql);
     while ($row=mysqli_fetch_array($res)) {
     	$id=$row['id'];
     	$sub["id"]=$row['id'];
     	$sub["name"]=$row['name'];
     	$sub["start"]=$row['start'];
     	$sub["end"]=$row['end'];
      $sub['day_sort']=$this->day_sort($row['day']);
     	$sub["day"]=$this->day($row['day']);
      $sub["day_string"]=$this->convert_arr($sub["day"]);
      $sub['day_sort_string']=$this->convert_arr($sub['day_sort']);;
      $sub["day"]=$row['day'];
      $info[$id]=$sub;
     }
	 return $info;
  }

  public function selectd_day($st){
         $arr=$this->num_array($st);
         $day_index=$this->day_index();
         $mark=array();
         for($i=1; $i<=7; $i++)$mark[$i]=0;

         for($i=0; $i<sizeof($arr); $i++){
             $mark[$arr[$i]]=1;
         }

         echo "<div class='day_header'>Select Day</div>
    <div class='day_body'>";

         for($i=1; $i<=7; $i++){
           $day=$day_index[$i];
           if($mark[$i]==1){
             echo "<b><input type='checkbox' name='batch_day[]' value='$i' checked> $day<br></b>";
           }
           else{
             echo "<b><input type='checkbox' name='batch_day[]' value='$i'> $day<br></b>";
           }

         }

         echo "</div>";
  }


  public function get_batch_name($batch_id){
  $info=$this->batch_info();
  if($batch_id==0)$res="";
  else $res="'".$info[$batch_id]['name']."'";
  return $res;
}

}

?>