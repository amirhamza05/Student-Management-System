<?php
/**
* @author	Jibon Lawrence Costa
* @copyright Copyright (C) 2015, Jibon Lawrence Costa. All rights reserved.
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

/*
If your application located in different folder etc..

$request = parse_url($_SERVER['REQUEST_URI']);
$result = rtrim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $request["path"]), '');
$url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$result;
*/
?>
<!DOCTYPE html>
<html xml:lang="en-gb" lang="en-gb">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Education Board Result API</title>
	<script src="jquery.js"></script>
</head>
<body>
	<script type="text/javascript">
	jQuery("document").ready(function(){
		var $ = jQuery;
		$("#submit").click(function(){
			var exam = $("#exam").val();
			var year = $("#year").val();
			var board = $("#board").val();
			var roll = $("#roll").val();
			var url = "helper.php?exam="+exam+"&year="+year+"&board="+board+"&roll="+roll;
			$("#result").html("<img src='loading.gif' alt= 'loading...'>");
			$.ajax({
				url: url,
				method: 'GET',
				crossDomain: true,
				cache: false
			}).done (function (msg){
				$.each(msg, function(key, val){
					if(val[0]['ISSUCCESS'] == "Y") {
						$("#result").html(val[0]['results']);
					}
					else {
						$("#result").html("<span style='color: red;'>RESULT NOT FOUND!</span>");
					}
				});
			});
		});
	});
	</script>
	<select name="exam" id="exam" >
		<option value="">Select One</option>
		<option value="jsc">JSC/JDC</option>
		<option value="ssc">SSC/Dakhil</option>
		<option value="ssc_voc">SSC(Vocational)</option>
		<option value="hsc">HSC/Alim</option>
		<option value="hsc_voc">HSC(Vocational)</option>
		<option value="hsc_hbm">HSC(BM)</option>
		<option value="hsc_dic">Diploma in Commerce</option>
		<option value="hsc_dibs">Diploma in Business Studies</option>
	</select>
	<br>
	<select name="year" id="year">		
		<option value="2015" selected="">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
		<option value="1999">1999</option>
		<option value="1998">1998</option>
		<option value="1997">1997</option>
		<option value="1996">1996</option>
	</select>
	<br>
	<select name="board"  id="board">
		<option value="" selected="">Select One</option>
		<option value="barisal">Barisal</option>
		<option value="chittagong">Chittagong</option>
		<option value="comilla">Comilla</option>
		<option value="dhaka">Dhaka</option>
		<option value="dinajpur">Dinajpur</option>
		<option value="jessore">Jessore</option>
		<option value="rajshahi">Rajshahi</option>
		<option value="sylhet">Sylhet</option>
		<option value="madrasah">Madrasah</option>
		<option value="tec">Technical</option>
		<option value="dibs">DIBS(Dhaka)</option>
	</select>
	<br>
	<input name="roll" id="roll" maxlength="6" type="text">
	<br>
	<button id="submit">Submit</button>						   
	
	<div id="result">
	</div>
</body>
</html>



