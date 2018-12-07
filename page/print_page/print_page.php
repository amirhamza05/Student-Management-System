<?php

if(isset($_GET['student_money_recept'])){
	$recept_id=$_GET['student_money_recept'];
	$recept_id=base64_decode($recept_id);
	$recept_id=(int)$recept_id;
	$set_payment_ob->get_money_recept($recept_id);
}


?>
