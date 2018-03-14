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

public function get_id_card($info){
	foreach ($info as $key => $value) {
	$name=$value['nick'];
	$name=$this->make_name($name);
	$id=$value['id'];
	$photo=$value['photo'];
	$mobile=$value['personal_mobile'];
	if($mobile=="")$mobile=$value['father_mobile'];
	if($mobile=="")$mobile=$value['mother_mobile'];
	$batch_id=$value['batch'];
	$batch=$this->batch;
	$batch_name=$batch[$batch_id]['name'];
	$start=$batch[$batch_id]['start'];
	$end=$batch[$batch_id]['end'];
	
	$program_id=$value['program'];
	$program_name=$this->program[$program_id]['name'];
	$duration=$this->program[$program_id]['end'];
	$duration=date('F, Y', strtotime($duration));
   
 ?>

<div class="card_box">
	<div class="card_header"><div class="font_name">Youth Admission Care</div>Phone: +8801799398177</div>

	<div class="box_body">
       

	 	<img src="<?php echo "$photo"; ?>" class="img_card" align="right">
	 	<div class="title">ID Card</div>

<div class="field">
<div class="name_field">
	 	<div class="id_field">Student Name : </div> <div class="inf"><b><?php echo "$name"; ?></b></div>
</div><div class="name_field">
	 	<div class="id_field">Id Number : </div> <div class="inf"><b><?php echo "$id"; ?></b></div>
</div><div class="name_field">	 	
	 	<div class="id_field">Program :</div> <div class="inf"><b><?php echo "$program_name"; ?></b></div>
</div><div class="name_field">	 	
	 	<div class="id_field">Batch :</div> <div class="inf"><b><?php echo "$batch_name ($start - $end)"; ?></b></div>
</div><div class="name_field">	 	
	 	<div class="id_field">Duration :</div> <div class="inf"><b><?php echo "$duration"; ?></b></div>
	 </div>
</div>
<center>
	<div class="barcode_div">
	 	<img src="barcode.php?text=<?php echo "$id"; ?>" class="barcode">
	 </div>
</center>
	</div>

	

</div>
 
<?php }
}


}


?>

