<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;
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

<h2>Styling Tables</h2>

<table  id="t01">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>

  <?php for($i=0; $i<20; $i++){ ?>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
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