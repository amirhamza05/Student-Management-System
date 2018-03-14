<?php


include 'layout/header_script.php';


if(isset($_POST['test'])){
   $test=$_POST['test'];

   $id=10001;
	if($test=="personal")personal_info($id,$student);
	else if($test=="exam")exam_result($id);
}


function personal_info($id,$student){

 $info=$student[$id];
 $name=$info['name'];
 $nick=$info['nick'];
 $father_name=$info['father_name'];
 $mother_name=$info['mother_name'];

 $student_mobile=$info['personal_mobile'];
 $father_mobile=$info['father_mobile'];
 $mother_mobile=$info['mother_mobile'];
 $email=$info['email'];

 

	?>
 <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Full Name:</td>
                        <td><?php echo "$name"; ?></td>
                      </tr>
                      <tr>
                        <td>Nick Name:</td>
                        <td><?php echo "$nick"; ?></td>
                      </tr>
                      <tr>
                        <td>Father Name</td>
                        <td><?php echo "$father_name"; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Mother Name</td>
                        <td><?php echo "$mother_name"; ?></td>
                      </tr>
                      <tr>
                        <td>Student Mobile</td>
                        <td><?php echo "$student_mobile"; ?></td>
                      </tr>

                     <tr>
                        <td>Father Mobile</td>
                        <td><?php echo "$father_mobile"; ?></td>
                      </tr>

                       <tr>
                        <td>Mother Mobile</td>
                        <td><?php echo "$mother_mobile"; ?></td>
                      </tr>


                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:<?php echo "$email"; ?>"><?php echo "$email"; ?></a></td>
                      </tr>
                        
                           
                      </tr>
                     
                    </tbody>
                  </table>
	<?php
}

function exam_result($id){

for($i=0; $i<15; $i++){

	?>
<div class="header_box text-center" style="margin-top: 25px;">
            Result Details
     </div>
<div class="box_body" style="margin-bottom: 10px;">
  <center>
    <div style="font-weight: bold;font-size: 16px;">
        <?php echo "Exam Name"; ?><br/>
        <?php echo "subject"; ?><br/>
        <?php echo "Exam Date"; ?><br/>
        Individual Performance<br/>
      </div>

<table style="width: 100%; margin-left: -0px;">
  <center></center>
  <tr>
    
    <th><center>Full Marks</center></th>
    <th><center>MCQ Marks</center></th>
    <th><center>Written Marks</center></th>
    <th><center>Total Marks</center></th>
    <th><center>Highest Marks</center></th>
    <th><center>Branch Merit</center></th>
    <th><center>Central Merit</center></th>
  </tr>
  <tr>
   
    <td><center><?php echo "full_marks"; ?></center></td>
    <td><center><?php echo "mcq"; ?></center></td>
    <td><center><?php echo "written"; ?></center></td>
    <td><center><?php echo "total"; ?></center></td>
    <td><center><?php echo "highest"; ?></center></td>
    <td><center><?php echo "batch_merit"; ?></center></td>
    <td><center><?php echo "center_merit"; ?></center></td>
  </tr>
</table>

</center>
</div>

	<?php
}
}

if(isset($_POST['send_sms'])){
  $text=$_POST['send_sms'];
  $student_id=$_POST['id'];
  $receive_by=$_POST['recever'];
  $msg=$sms->get_sms($student_id,$text);
  $sms->send_sms_student($student_id,$msg,$receive_by);

}

?>