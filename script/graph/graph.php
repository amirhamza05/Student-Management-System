<?php


class graph {
   

//starting connection

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection

public function get_last_sms_data($days){
	
	$data=array();
    $today=$this->db->date();

	for ($i=$days-1; $i>=0; $i--)
	{
		$date=date('Y-m-d', strtotime($today ." +$i days ago"));
		$date1=date('Y-m-d', strtotime($date ." -1 days ago"));

    	$sql="select SUM(len) as total_sms from sms_list
    		where (date BETWEEN CAST('$date' AS DATE) AND CAST('$date1' AS DATE))
    	";
    	
    	$info=$this->db->get_sql_array($sql);
        
        $data1=array();
        $total_data=(int)$info[0]['total_sms'];
        
        $data1['y']=$total_data;
    	$data1['label']=date('d M Y', strtotime($date));
    	array_push($data, $data1);
	}

	$data=json_encode($data);
	return $data;
}

public function get_site_activity_data($days){
	$data=array();
    $today=$this->db->date();

	for ($i=$days-1; $i>=0; $i--)
	{
		$date=date('Y-m-d', strtotime($today ." +$i days ago"));
		$date1=date('Y-m-d', strtotime($date ." -1 days ago"));

    	$sql="select COUNT(*) as total_data from site_activity
    		where (date BETWEEN CAST('$date' AS DATE) AND CAST('$date1' AS DATE))
    	";
    	$info=$this->db->get_sql_array($sql);
        
        $data1=array();
        $total_data=(int)$info[0]['total_data'];
        
        $data1['y']=$total_data;
    	$data1['label']=date('d M Y (l)', strtotime($date));
    	array_push($data, $data1);
	}

	$data=json_encode($data);
	return $data;
}

}


?>

