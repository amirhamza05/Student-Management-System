<?php


include "layout/header_script.php";

$start="2018-2-22 12:40:00";
$end="2018-2-22 14:16:00";

if(isset($_POST['timer'])){

 

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




if($flag==1){
       echo "p1)Hello Math<br/>We Are Love Math<br/>";
       if($running==1){
              echo "<form action='saf.php'><input type='submit' name='btn'></form>";
       }
}

     
}


if(isset($_POST['num1'])){
  $num1=$_POST['num1'];
  $num2=$_POST['num2'];
  $sum=$num1+$num2;
  echo "$sum";
}
if(isset($_POST['test'])){
  $st="10001";
  $en=$st;
  echo "$en";

?>

<form action="">
  <input type="text" name="" required="">
  <input type="submit" name="">
</form>

<?php

}

if(isset($_POST['test_h'])){
  echo "102";
  //header('Location: http://www.example.com/');
}


?>