<?php


?>


<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;
    font-size: 20px;
    text-align: center;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
</style>
</head>
<body>

<div style="text-align: center; font-size: 20px">Student List</div>
<div style="float: left; font-size: 20px">Shift: Morning</div>
<div style="text-align: right; font-size: 20px">Class: 7</div>

<table  id="t01">
  <tr>
    <th>Student Id</th>
    <th>Student Name</th>
    <th>Student Mobile</th>
    <th>Program Name</th>
    <th>Batch Name</th>
    
  </tr>

  <?php
  //print_r($student);
$c=0;
  foreach ($student as $key => $value) {
    # code...
  $c++;
  if($c>20)break;
  $name=$value["name"];
  $nick=$value["nick"];
  $id=$value["id"];
  $student_mobile=$value["personal_mobile"];
  $program_name=$program[$value["program"]]["name"];
  $batch_name=$batch[$value["batch"]]["name"];

    ?>
  <tr>
    <td><?php echo "$id"; ?></td>
    <td><?php echo "$name"; ?></td>
    <td><?php echo "$student_mobile"; ?></td>
    <td><?php echo "$program_name"; ?></td>
    <td><?php echo "$batch_name"; ?></td>
  </tr>
  <?php } ?>
</table>
<br>



</body>
</html>


<?php

 header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=download4.xls');


?>