

<?php 

include "layout/header.php";

if(isset($_GET['type'])){
  $type=$_GET['type'];
  if ($type=="expence") {
  	include "page/account/expence.php";
  }
  else if($type=="income"){
  	include "page/account/income.php";
  }
}


include "layout/footer.php";


 ?>