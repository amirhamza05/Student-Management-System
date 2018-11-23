<?php
/**
* @author	Jibon Lawrence Costa
* @copyright Copyright (C) 2015, Jibon Lawrence Costa. All rights reserved.
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/
header('Content-type: application/json');
if (isset($_GET['exam'])){
	$url = "http://teletalk.comdexbd.com/boardresult/api_test/allresult?exam=".$_GET['exam']."&year=".$_GET['year']."&board=".$_GET['board']."&roll=".$_GET['roll'];
	$json=file_get_contents($url);
	echo $json;
}
?>