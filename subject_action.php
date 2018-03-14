<?php 

include "layout/header_script.php";




if(isset($_POST['insert'])){
     
       $info['sub_name']=$_POST['name'];;
       $info['sub_code']=$_POST['code'];
       $db->sql_action("subject","insert",$info);
}
else if(isset($_POST['update'])){

       $info['sub_name']=$_POST['name'];
       $info['id']=$_POST['id'];
       $info['sub_code']=$_POST['code'];
       $db->sql_action("subject","update",$info);
}
else if(isset($_POST['delete'])){

       $info['sub_name']=$_POST['name'];
       $info['id']=$_POST['id'];
       $info['sub_code']=$_POST['code'];
       $db->sql_action("subject","delete",$info);
}


else if(isset($_POST['sol'])){
       function cmp($a, $b)
         {
              if ($a["fee"] == $b["fee"]) {
               return 0;
              }
              return ($a["fee"] > $b["fee"]) ? -1 : 1;
       }

usort($program,"cmp");
  $c=0;
       foreach ($program as $key => $value) {
              $c++;
              $fee=$value['fee'];
              $name=$value['name'];
              //echo "$c) $name :  $fee<br/>";
 
       }
   

$start="2018-1-21 21:24:00";
$end="2018-1-21 21:25:00";

$start_sec=strtotime($start);
$end_sec=strtotime($end);
$length=$end_sec-$start_sec;
$time=time();

$diff=$time-$start_sec;
$flag=0;
$running=0;

if($diff<0){
       $diff=($diff)*(-1);
       $duration=$diff;
       $msg="Contest is not started";
}
else if($diff>=0 && $diff<=$length){
      $duration=$length-$diff;
      $msg="Contest Running";
      $flag=1;
      $running=1;
     
}
else if($diff>$length){
       $duration=0;
       $msg="Contest Is End";
       $flag=1;
}



$days = floor($duration / 60*60*24);
$hours = floor($duration / 3600);
$mins = floor($duration / 60 % 60);
$secs = floor($duration % 60);


echo "$hours hours and $mins min left $secs<br/>";
echo "$msg<br/><br/>";

if($flag==1){
       echo "p1)Hello Math<br/>We Are Love Math<br/>";
       if($running==1){
              echo "<form action='saf.php'><input type='submit' name='btn'></form>";
       }
}

     
}


else{
       header('Location: index.php');
}




?>