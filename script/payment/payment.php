<?php


class payment {
   
 
//starting connection
public $student;
public $site;
 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;

     $this->student_ob=new student();
     $this->student=$this->student_ob->get_student_info();

     $this->site=new site_content();
 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }

//end dabtabase connection

  public function get_payment_info(){
    $info=array();
  	$id_in=array();
  	$sql="select * from payment ORDER BY id DESC";
     $res=$this->select($sql);
     while ($row=mysqli_fetch_array($res)) {
  		$id=$row['id'];
  		$id_in['id']=$row['id'];
  		$id_in['student_id']=$row['student_id'];
  		$id_in['paid']=$row['paid'];
  		$id_in['next_date']=$row['next_date'];
  		$id_in['date']=$row['date'];
  		$id_in['add_by']=$row['add_by'];
  		$info[$id]=$id_in;
  	}
  	return $info;
  }

public function get_last_id(){
    
   $info=$this->get_payment_info();
   $arr=array();
  $c=0;
   foreach ($info as $key => $value) {
     $id=$value['id'];
     array_push($arr, $id);
     $c++;
   }
 
    rsort($arr);
    return $arr[0];
   
  }


 public function update_payment($student_id){
     $info=$this->student;
     $pay_info=$this->get_payment_info();
     $fee=$info[$student_id]['fee'];
     $total=0;
     $flag=0;
     $next_date="";
     $today="";
     foreach ($pay_info as $key => $value) {
     	$sid=$value['student_id'];
     	$paid=$value['paid'];
     	if($sid==$student_id){
     		$total+=$paid;
        if($flag==0){
          $flag=1;
          $next_date=$value['next_date'];
     	    $today=$paid;
      }
     }
     }
     $due=$fee-$total;
     $data['fee']=$fee;
     $data['paid']=$total;
     $data['due']=$due;
     $data['next_date']=$next_date;
     $data['today_paid']=$today;
     return $data;
 }

public function get_sms($student_id){
  $info=$this->update_payment($student_id);
  
  $name=$this->student[$student_id]['nick'];
  $recent_payment=$info['today_paid'];

  $fee=$info['fee'];
  $pay=$info['paid'];
  $due=$info['due'];
  $next2=$info['next_date'];
  $next= strtotime($next2);
  $next=date('d M Y', $next);

  $name1="Dear ".$name.",\n";
  $recent_payment1="Your Payment ".$recent_payment." Tk. is Successfully Completed\n\n";
  $fee1="Your Fee: ".$fee." Tk.\n";
  $pay1="Paid: ".$pay." Tk.\n";
  $due1="Due: ".$due." Tk.\n";

  $next1="\nNext Payment Date: ".$next."\n";
  $title="\nYOUTH\n";
  $msg=$name1.$recent_payment1.$fee1.$pay1.$due1;
  if($due!=0)$msg.=$next1;
  return $msg.$title;
}

 public function paid_ammount($sid){
     $data=$this->update_payment($sid);
  return $data['paid'];
 }

 public function due_ammount($sid){
 	$data=$this->update_payment($sid);
  return $data['due'];
 }

 public function payment_table($student_id){
       $info=$this->get_payment_info();

?> 
 <table class="table table-striped table-bordered">
            <thead style="background-color: #414959; color: #ffffff;">
              <tr>
                <th><center>Payment Id</center></th>
                <th><center>Payment Ammount</center></th>
                <th><center>Payment Date</center></th>
                <th><center>Next Payment Date</center></th>
                <th><center>Received By</center></th>
                <th class="td-actions"><center>Delete</center></th>
              </tr>
            </thead>
            <tbody>
<?php
       foreach ($info as $key => $value) {
         $id=$value['id'];
         $sid=$value['student_id'];
         $paid=$value['paid'];
         $date=$value['date'];
         $next=$value['next_date'];
         $add_by=$value['add_by'];
         $add_name=$this->site->get_user_name($add_by);
         if($sid==$student_id){
 	?>

              <tr>
                <td><center><?php echo "$id"; ?></center></td>
                <td><center><?php echo "$paid"; ?></center></td>
                   <td><center><?php echo "$date"; ?></center></td>
                   <td><center><?php echo "$next"; ?></center></td>
                   <td><center><?php echo "$add_name"; ?></center></td>
                <td class="td-actions"><center>
                <button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo"$id"; ?>" ><span class="glyphicon glyphicon-trash"></span></button>                  
                  </a>
              </center>
                </td>
              </tr>
       <!-- start delete -->
          <!-- Start Delete Model -->
<div class="modal small fade" id="delete<?php echo"$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation </h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Payment Id?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
          
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" onclick="delete_table(<?php echo "$id"; ?>)" type="submit" name="delete">Delete</button>
            
        </div>
      </div>
    </div>
</div>
<!-- End Delete Model -->
             

 	<?php
}
}
echo "</tbody></table>";

 }

}


?>

