
<?php

include 'layout/header.php';


?>


<?php
 $site->myprint_r($student); 
 
 ?>
<br />
<center>
<form action="message.php" method="post" >
<input type="submit" name="send" value="Send SMS For This Information">

</form>
</center>

<?php

if(isset($_POST['send'])){
//$sms->welcome($student);
echo "Sucessfully Send Message";

}



?>


<?php include "layout/footer.php"; ?>
