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
     $this->site=new site_content();
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


$this->id_card_css();

echo "<div class='row' style=''>";
$c=0;
 $student_info=$this->student;
foreach ($data as $key => $info) {
  $c++;
  $student_id=$info['student_id'];
  $student_info1=$student_info[$student_id];

  $program_id=$info['program_id'];
  $batch_id=$info['batch_id'];

  $student_name=$this->student[$student_id]['name'];
  $program_name="MD.Anawar Bin Kalif MD.Anawar Bin Kalif Bin Kalif Bin Kalif";
  $batch_name=$this->batch[$batch_id]['name'];
  $batch_day=$this->batch[$batch_id]['day_string'];
  $batch_time=$this->batch[$batch_id]['start']." - ".$this->batch[$batch_id]['end'];
  $start=$this->program[$program_id]['start'];
  $end=$this->program[$program_id]['end'];
  $start=date("M Y",strtotime($start));
  $end=date("M Y",strtotime($end));
  if($start==$end)$duration=$start;
  else $duration="$start - $end";


  $photo=$student_info1['photo'];

  $father_name=$student_info1['father_name'];
  $father_name=$this->make_string($father_name,30);
  $father_name=($father_name=="")?"-":$father_name;

  $mother_name=$student_info1['mother_name'];
  $mother_name=$this->make_string($mother_name,30);
  $mother_name=($mother_name=="")?"-":$mother_name;

  $father_mobile=$student_info1['father_mobile'];
  $father_mobile=(strlen($father_mobile)<11)?"":$father_mobile;
  $mother_mobile=$student_info1['mother_mobile'];
  $mother_mobile=(strlen($mother_mobile)<11)?"":$mother_mobile;

  $mobile=$father_mobile.(($mother_mobile=="")?"":", ".$mother_mobile);
  $mobile=$this->make_string($mobile,30);
  $mobile=($mobile=="")?"-":$mobile;

  $address=$student_info1['address'];
  $address=$this->make_string($address,45);
  $address=($address=="")?"-":$address;

  $student_name=$this->make_string($student_name,27);
  $program_name1=$this->make_string($program_name,45);
  $program_name=$this->make_string($program_name,30);
  
  $batch_time=$this->make_string($batch_time,34);
  $barcode=$this->site->barcode($student_id);
  
  $title=$this->db->site_name;
  $title=$this->make_string($title,34);
  $in_add=$this->db->address;
  $in_add=$this->make_string($in_add,42);

  $margin_right=($c%2==1)?"margin_id_card":"";

 ?>



	
<div class="col-md-4 id_card <?php echo "$margin_right"; ?>" style='float: left;' id="" style="">


<div class="card_box">
  <div class="card_header">
  	<div style="float: left; margin-right: 5px;">
  		<img src="<?php echo $this->db->logo; ?>" class="card_logo">
  	</div>
  	<div style="">
  		<div class="font_name">
  			<?php echo "$title"; ?>	
  		</div>
  		<b></b><i class="fa fa-map-marker"></i> <?php echo $in_add; ?><br/>
  		<b></b><i class="fa fa-phone"></i> Phone: </b><?php echo $this->db->phone; ?>
  	</div>	
  </div>

  <div class="id_box_body">
    <img id="img_card" src="<?php echo "$photo"; ?>" class="img-tumb img_card" align="right">
    <div class="id_title">ID Card</div>
    <div style="margin-top: 8px;"></div>
      <div class="field">
        
      	<div class="name_field">
      		<span class="id_field">Student Name : </span> <span class="inf"><?php echo "$student_name"; ?></span>
      	</div>
    
	      <div class="name_field">
	      	<span class="id_field">Student ID : </span> <span class="inf"><?php echo "$student_id"; ?></span>
	      </div> 

	      <div class="name_field">    
	      	<span class="id_field">Father Name :</span>
	      	<span class="inf"><?php echo "$father_name"; ?></span>
	      </div>
	      <div class="name_field">    
	      	<span class="id_field">Mother Name :</span>
	      	<span class="inf"><?php echo "$mother_name"; ?></span>
	      </div>

	      <div class="name_field">    
	      <span class="id_field">Mobile :</span> <span class="inf"><?php echo "$mobile"; ?></span>
	      </div>
	      <div class="name_field">    
	      <span class="id_field">Address :</span> <span class="inf"><?php echo "$address"; ?></span>
	      </div>
        <div class="field1"></div>
    </div>
  </div>

 
 	<div class="card_footer">
    	<center>
  		<img src="<?php echo $barcode; ?>" class="barcode">
  		
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

@import "style/lib/font-awesome/css/font-awesome.css";
 .id_card{ 
 	height: auto;
 }

 @media print {
 	
   .margin_id_card{
       margin-right: 15px;
   }

    @page {
     	size: A4; /* DIN A4 standard, Europe */
      	margin:none !important;
      	content: counter(page);
    }
 }
 .img-tumb{
  display: inline-block;
  max-width: 100%;
  height: auto;
  padding: 4px;
  line-height: 1.42857143;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
 }	

 .img_card{
  height: 75px;
  width: 65px;
  overflow: visible;
  margin-top: 5px;
  margin-right: 5px;
  
  float: right;
}

 .box1{
  height: auto;
  overflow: auto;
  padding: 15px;
  overflow: auto;
  margin-left: 50px;

}

.field1 {
   background: url(<?php echo $this->db->logo; ?>) no-repeat;
   margin-top: -110px;
   margin-left: 125px;
   background-size: 100% 100%;
   height: 110px;
   width: 120px;
   
   opacity: 0.1;

  
}


.card_box{
	overflow: hidden;
	background: #eeeeee;
	height: 260px;
	width: 374px;
	border-radius: 0px;
	border-style: solid;
	border-color: #2E363F;
	border-width: 
    float: left;
    
	margin-bottom: 15px;
	page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
    page-break-inside: avoid; 
}
.card_header{
	background-color: #2E363F;
	padding: 5px;
	color: #EEEEEE;
	height: 60px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    overflow: hidden;
	font-size: 13px;
}
.font_name{
	font-size: 18px;
	margin-left: 0px;
	font-weight: bold;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: #ffffff;
} 

.id_title{
	background-color: #2E363F;
	height: 20px;
	width: 100px;
	margin-top: 0px;
	border-radius: 0% 0% 100px 100px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-weight: bold;
	text-align: center;
	font-size: 15px;
	margin-left: 33%;
	padding: 2px;
	color: #ffffff; 
	margin-bottom: 7px;
}
.card_footer{
	
	border-width: 1px 0px 0px 0px;
	border-color: #bdc3c7;
	border-style: solid;
	color: #ffffff; 
	overflow: hidden;
	height: 35px;
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
	width: 100px;
	font-size: 12px;
	font-weight: bold;
	padding: 1px 1px 1px 1px;
	
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
    height: 143px;
    margin-bottom: 5px;
    overflow: hidden;
    
}

.name_field{
	margin-bottom: 3px;
}
.card_logo{
	height: 60px;
	width: 50px;
}

</style>

<?php
}


}




?>

