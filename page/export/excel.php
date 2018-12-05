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
  for($c=0; $c<10; $c++) {

    ?>
  <tr>
    <td><?php echo "$c"; ?></td>
    <td><?php echo "name"; ?></td>
    <td><?php echo "student_mobile"; ?></td>
    <td><?php echo "program_name"; ?></td>
    <td><?php echo "batch_name"; ?></td>
  </tr>
  <?php } ?>
</table>
<br>



</body>
</html>


<?php

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment;filename=\"filename.xlsx\"");
header("Cache-Control: max-age=0");

/** Error reporting */
error_reporting(E_ALL);

/** Include path **/
ini_set('include_path', ini_get('include_path').';../Classes/');

/** PHPExcel */
include 'PHPExcel.php';

/** PHPExcel_Writer_Excel2007 */
include 'PHPExcel/Writer/Excel2007.php';
?>