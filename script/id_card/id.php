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
	$this->site=new site_content();
	$this->program=$program_ob->get_program_info();

    $this->student_ob=new student();
    $this->student=$this->student_ob->get_student_info();

 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection
public function get_printable_id($program_id,$batch_id,$student_id){
	$visit_program=array();
	$visit_batch=array();
	$visit_student=array();

	for($i=0; $i<300007; $i++){
		$visit_program[$i]=0;
	    $visit_batch[$i]=0;
	    $visit_student[$i]=0;
	}

	foreach ($this->program as $key => $value) {
		$id=$value['id'];
		if($id==$program_id || $program_id==0){
			$visit_program[$id]=1;
		}
	}

   foreach ($this->batch as $key => $value) {
		$id=$value['id'];
		if($id==$batch_id || $batch_id==0){
			$visit_batch[$id]=1;
		}
	}

	
	foreach ($this->student as $key => $value) {
		$id=$value['id'];
		$batch1=$value['batch'];
		$program1=$value['program'];
		if($visit_program[$program1]==1){
			if($visit_batch[$batch1]==1){
				if($id==$student_id || $student_id==0){
					$visit_student[$id]=1;
				}
			}
		}
	}

 return $visit_student;
}

public function make_name($name){
  $name=substr($name, 0, 17);
  return $name;
}

public function get_separate_id_card($student_id,$program_id,$batch_id){
  

}

public function get_id_card($type="single"){
	$float="";
	if($type!="single")$float="float: left;";
 ?>

<div class="id_card">
<div class="card_box">
  <div class="card_header">
  	<div class="font_name">
  		<?php echo $this->db->site_name; ?>	
  	</div>
  		<b>Address: </b><?php echo $this->db->address; ?><br/>	
  		<b>Phone: </b><?php echo $this->db->phone; ?><br/>
  		<b>Email: </b><?php echo $this->db->email; ?>
  </div>

  <div class="box_body">
    <img src="<?php echo "upload/student_photo/10051.jpg"; ?>" class="img_card" align="right">
    <div class="title">ID Card</div>
        <div class="field">
          <div class="name_field">
      <div class="id_field">Student Name : </div> <div class="inf"><b><?php echo "name"; ?></b></div>
      </div><div class="name_field">
      <div class="id_field">Id Number : </div> <div class="inf"><b><?php echo "id"; ?></b></div>
      </div>

      <div class="name_field">    
      <div class="id_field">Program :</div>
      <div class="inf"><b><?php echo "program_name"; ?></b></div>
      </div>

      <div class="name_field">    
      <div class="id_field">Batch :</div> <div class="inf"><b><?php echo "batch_name (start - end)"; ?></b></div>
      </div>
      <div class="name_field">    
      <div class="id_field">Duration :</div> <div class="inf"><b><?php echo "duration"; ?></b></div>
      </div>
    </div>
    
  </div> 
</div>
 </div>
<style type="text/css">
	

.id_card .box1{
  height: auto;
  overflow: auto;
  padding: 15px;
  overflow: auto;
  margin-left: 50px;

}
.id_card .card_box{
	overflow: hidden;
	background: #eeeeee;
	height: 260px;
	width: 350px;
	border-radius: 0px;
	border-style: solid;
	border-color: #2E363F;
	border-width: 2px;
	<?php echo "$float"; ?>
	margin-right: 10px;
	margin-bottom: 15px;
	page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-inside: avoid; 
}

.id_card .card_header{
	background-color: #2E363F;
	padding: 5px;
	color: #f5f5f5;
	font-size: 12px;
}

.id_card .font_name{
	font-size: 18px;
	margin-left: 0px;
	font-weight: bold;
}

.id_card .img_card{
	height: 100px;
	width: 80px;
	overflow: visible;
	margin-top: -35px;
	margin-right: 5px;
	border-style: solid;
	border-width: 1px;
	border-radius: 2px;
	float: right;
}

.id_card .title{
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

.id_card .id_field{
	background-color: #BDC1CB; 
	width: 98px;
	font-size: 12px;
	font-weight: bold;
	float: left;
	padding: 1px;
	margin-right: 5px;

}

.id_card .inf{
	margin-right: 5px;
	font-size: 14px;
}
	
.id_card .barcode{
   text-align: center;
   height: 30px;
   width: 200px;
   margin-top: 5px;
}	

.id_card .barcode_div{
	border-style: solid;
	border-width: 1px 0px 0px 0px;
	border-color: #BDC1CB;
	margin-top: 5px;

}

.id_card .box_body{

}

.id_card .name_field{
	margin-bottom: 0px;
}

</style>

<?php
}


}


?>

