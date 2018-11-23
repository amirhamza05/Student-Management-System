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
  	
    $info=$this->get_set_payment_list();

    
    $res=array();
  	foreach ($info as $key => $value) {
  		$id=$value['id'];
  		$pid=$value['program_id'];
  		if($pid==$program_id){
        $per=$this->check_date_interver($this->program_info[$program_id],$value['year'],$value['month']);
        if($per==1)$res[$id]=$value;
        
      }
  	}

  	return $res;
  }

 public function check_date_interver($program_info,$year,$month){
  $start=$program_info['start'];
  $end=$program_info['end'];
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

