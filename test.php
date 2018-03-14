<?php
include "layout/header.php";

$id="10001";
  $id1=$id;
  
  
  $per=$result->permission_for_save(10032,4,2);
 
  $msg=$payment->get_sms(10037);
  echo "$msg";

?>



<?php
include "layout/footer.php";
?>