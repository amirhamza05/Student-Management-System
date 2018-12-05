
<?php

$string = '';

?> 

<?php for($i=0; $i<3; $i++){ ?>

<div class='money_recept'>
  <div class='money_recept_header' >
    <center><b>Payment Recept</b></center>
    <div class='left_header'>
      <table style='background-color: none'>
        <tr>
          <td style='padding-right: 15px; background-color: none'>
            <img class='money_logo' src='https://britainstandardschool.com/wp-content/uploads/2018/11/rsz_master_logo2-1.jpg'>
          </td>
          <td style='background-color: none'>
            <font class='title_logo'>TechSerm Educational Software</font><br/>
            <font class='title_detail'>
            	Excellence in Education<br/>
            	South Keraniganj , Dhaka , Bangladesh<br/>
            	01716404120<br/>
            	britainstandard@gmail.com
            </font>
          </td>
        </tr>
      </table>
      
    </div>
    <div class='right_header'>
      <img class='barcode_recept' src='https://thewindowsclub-thewindowsclubco.netdna-ssl.com/wp-content/uploads/2011/11/Barcode.jpg'><br/>	
      <b>Recept No:</b> <u>450</u><br/>
      <b>Recept Date:</b> 23-8-2018 4:32:23<br/>
      <b>Receive By:</b> Hamza<br/>
    </div>
  </div>
  <div class='payment_recept_body'>
  	 <div class='left_body'>
  	 	<table>
  	 		<tr>
  	 			<td class='td_name'>ID: </td>
  	 			<td class='td_value'>10006</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Name: </td>
  	 			<td class='td_value'>Sk.Amir Hamza</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Type: </td>
  	 			<td class='td_value'>Monthly</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Program Name: </td>
  	 			<td class='td_value'>10006</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Year: </td>
  	 			<td class='td_value'>10006</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Month</td>
  	 			<td class='td_value'>10006</td>
  	 		</tr>
  	 	</table>
     
  	 </div>
  	 <div class='right_body'>
  	 	<table>
  	 		<tr>
  	 			<td class='td_name'>Total Fee: </td>
  	 			<td class='td_value'>10006</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Previous Total Pay: </td>
  	 			<td class='td_value'>Sk.Amir Hamza</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Previous Total Due: </td>
  	 			<td class='td_value'>Monthly</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Today Pay: </td>
  	 			<td class='td_value'>10006</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Total Due: </td>
  	 			<td class='td_value'>10006</td>
  	 		</tr>
  	 		<tr>
  	 			<td class='td_name'>Status: </td>
  	 			<td class='td_value'>10006</td>
  	 		</tr>
  	 	</table>
  	 	
  	 </div>
<center><div class='comments'></div>
     Signature</center>
    
  </div>
</div>

<?php } ?>

<style type='text/css'>
	/*meney recept section*/

.title_logo{
	font-size: 18px;
	font-weight: bold;
	color: #2D2D2D;
}
.comments,.comments1{
	border-width: 0px 0px 1px 0px;
	border-style:solid;
	border-color: #000000;
	width: 30%;
	padding: 5px;
	height: 20px;
	margin-top: 5px;
}
.title_detail{
	font-size: 14px;
}
.payment_recept_body{
  padding: 5px;
}
.payment_recept_body table{
	border: 0px solid #000000;
}
.td_name,.td_value{
	padding: 3px 2px 2px 5px;
	border: 0px solid #000000;
}
.td_name{
 text-align: right;
 font-weight: bold;
}

.money_recept{
  width: 100%;
  height: 357px;
  
  background-color: #ffffff;
  border: 1px solid #2D2D2D;
  border-radius: 5px;
  color: #464646;
  font-size: 14px;
  font-family: 'Trebuchet MS', Helvetica, sans-serif;
  margin-bottom: 15px;
  overflow: hidden;
}
.barcode_recept{
	height: 30px;
	width: 150px;
}
.money_logo{
  height: 100px;
  width: 90px;
}
.money_recept_header{
  background: url('http://www.designbolts.com/wp-content/uploads/2012/12/White-Linen-Seamless-Pattern-For-Website-Backgrounds.jpg');
  border-width: 0px 0px 1px 0px;
  border-style:  solid;
  border-color: #2D2D2D;
  height: 130px;
  width: 100%;
  padding: 2px;
  overflow: hidden;
}
.left_header{
  float: left;
  width:65%;
  padding: 3px 0px 0px 30px;
}
.right_header{
  padding: 20px 15px 15px 15px;
}

.left_body{
 padding-right: 15px;
  float: left;
  width:50%;
}
.right_body{

}


</style>