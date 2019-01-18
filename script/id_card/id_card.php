<?php


class id_card {
   

//starting connection

public $student;
public $program;
public $batch;

 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $batch_ob=new batch();
     $this->batch=$batch_ob->batch_info();

	$program_ob=new program();
	$this->program=$program_ob->get_program_info();

    $this->student_ob=new student();
    $this->student=$this->student_ob->get_student_info();

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection

public function make_string($name,$size){
  $len=strlen($name);
  if($len<=$size)return $name;
  $name=substr($name, 0, $size-2);
  return $name."..";
}


public function get_id_card($data){


echo "<div class='row' style=''>";
$this->id_card_css();

foreach ($data as $key => $info) {
 
  $student_id=$info['student_id'];
  $program_id=$info['program_id'];
  $batch_id=$info['batch_id'];
  $photo=$this->student[$student_id]['photo'];
  $student_name=$this->student[$student_id]['name'];
  $program_name=$this->program[$program_id]['name'];
  $batch_name=$this->batch[$batch_id]['name'];
  $batch_day=$this->batch[$batch_id]['day_string'];
  $batch_time=$this->batch[$batch_id]['start']." - ".$this->batch[$batch_id]['end'];
  $start=$this->program[$program_id]['start'];
  $end=$this->program[$program_id]['end'];
  $start=date("M Y",strtotime($start));
  $end=date("M Y",strtotime($end));
  if($start==$end)$duration=$start;
  else $duration="$start - $end";
  
  $batch_time="$batch_name ($batch_time)";

  $student_name=$this->make_string($student_name,22);
  $program_name=$this->make_string($program_name,34);
  $batch_time=$this->make_string($batch_time,34);


 ?>



	
<div class="col-md-4 id_card" style='float: left;' id="" style="">


<div class="card_box">
  <div class="card_header">
  	<div style="float: left; margin-right: 5px;">
  		<img src="<?php echo $this->db->logo; ?>" class="card_logo">
  	</div>
  	<div style="">
  		<div class="font_name">
  			<?php echo $this->db->site_name; ?>	
  		</div>
  		<b></b><?php echo $this->db->address; ?><br/>	
  	</div>	
  </div>

  <div class="id_box_body">
    <img src="<?php echo "$photo"; ?>" class="img_card" align="right">
    <div class="id_title">ID Card</div>
    <div style="margin-top: 14px;"></div>
      <div class="field">
      	<div class="name_field">
      		<span class="id_field">Student Name : </span> <span class="inf"><?php echo "$student_name"; ?></span>
      	</div>

	      <div class="name_field">
	      	<span class="id_field">Student ID : </span> <span class="inf"><?php echo "$student_id"; ?></span>
	      </div>

	      <div class="name_field">    
	      	<span class="id_field">Program :</span>
	      	<span class="inf"><?php echo "$program_name"; ?></span>
	      </div>

	      <div class="name_field">    
	      <span class="id_field">Batch :</span> <span class="inf"><?php echo $batch_time; ?></span>
	      </div>
	      <div class="name_field">    
	      <span class="id_field">Duration :</span> <span class="inf"><?php echo "$duration"; ?></span>
	      </div>
    </div>
  </div>

 
 	<div class="card_footer">
    	<center>
  		<b><span class="glyphicon glyphicon-phone"></span> Phone: </b><?php echo $this->db->phone; ?><br/>
  		<b><span class="glyphicon glyphicon-envelope"></span> Email: </b><?php echo $this->db->email; ?><br/>
  		If found please return to <?php echo $this->db->sort_name; ?>.
  		
  		</center>
  	</div>

</div>



 </div>

<!-- end id card -->


<?php  
}

echo "</div>";

}


public function id_card_css(){
	
?>
<style type="text/css">
	
 .id_card{
 	height: auto;
 }	

 .box1{
  height: auto;
  overflow: auto;
  padding: 15px;
  overflow: auto;
  margin-left: 50px;

}
.card_box{
	overflow: hidden;
	background: #eeeeee;
	height: 260px;
	width: 350px;
	border-radius: 0px;
	border-style: solid;
	border-color: #2E363F;
	border-width: 
    float: left;
	margin-right: 10px;
	margin-bottom: 15px;
	page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-inside: avoid; 
}
.card_header{
	background-color: #2E363F;
	padding: 5px;
	color: #EEEEEE;
	font-size: 13px;
}
.font_name{
	font-size: 18px;
	margin-left: 0px;
	font-weight: bold;
	color: #ffffff;
} .img_card{
	height: 75px;
	width: 65px;
	overflow: visible;
	margin-top: -10px;
	margin-right: 5px;
	border: 1px solid #2E363F;
	border-radius: 10px;
	float: right;
}
.id_title{
	background-color: #2E363F;
	height: 20px;
	width: 100px;
	margin-top: 0px;
	border-radius: 0% 0% 100px 100px;
	font-weight: bold;
	text-align: center;
	font-size: 15px;
	margin-left: 33%;
	padding: 2px;
	color: #ffffff; 
	margin-bottom: 7px;
}
.card_footer{
	background-color: #2E363F;
	color: #ffffff; 
	overflow: hidden;
	height: 55px;
	font-size: 13px;
}

.id_field{
	background-color: #BDC1CB; 
	width: 100px;
	font-size: 12px;
	font-weight: bold;
	float: left;
	padding: 1px 1px 1px 1px;
	text-align: right;
	margin-right: 5px;
	display: block

}

.inf{
	margin-right: 5px;
	font-size: 12px;
	font-weight: bold;
}
	
.barcode{
   text-align: center;
   height: 30px;
   width: 200px;
   margin-top: 5px;
}	

.barcode_div{
	border-style: solid;
	border-width: 1px 0px 0px 0px;
	border-color: #BDC1CB;
	margin-top: 5px;

}

.id_box_body{
    height: 155px;
}

.name_field{
	margin-bottom: 3px;
}
.card_logo{
	height: 45px;
	width: 40px;
}

</style>

<?php
}


}




?>

