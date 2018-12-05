<?php
require('../fpdf.php');

class PDF extends FPDF
{
protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';

function WriteHTML($html)
{
	// HTML parser
	$html = str_replace("\n",' ',$html);
	$a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
	foreach($a as $i=>$e)
	{
		if($i%2==0)
		{
			// Text
			if($this->HREF)
				$this->PutLink($this->HREF,$e);
			else
				$this->Write(5,$e);
		}
		else
		{
			// Tag
			if($e[0]=='/')
				$this->CloseTag(strtoupper(substr($e,1)));
			else
			{
				// Extract attributes
				$a2 = explode(' ',$e);
				$tag = strtoupper(array_shift($a2));
				$attr = array();
				foreach($a2 as $v)
				{
					if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
						$attr[strtoupper($a3[1])] = $a3[2];
				}
				$this->OpenTag($tag,$attr);
			}
		}
	}
}

function OpenTag($tag, $attr)
{
	// Opening tag
	if($tag=='B' || $tag=='I' || $tag=='U')
		$this->SetStyle($tag,true);
	if($tag=='A')
		$this->HREF = $attr['HREF'];
	if($tag=='BR')
		$this->Ln(5);
}

function CloseTag($tag)
{
	// Closing tag
	if($tag=='B' || $tag=='I' || $tag=='U')
		$this->SetStyle($tag,false);
	if($tag=='A')
		$this->HREF = '';
}

function SetStyle($tag, $enable)
{
	// Modify style and select corresponding font
	$this->$tag += ($enable ? 1 : -1);
	$style = '';
	foreach(array('B', 'I', 'U') as $s)
	{
		if($this->$s>0)
			$style .= $s;
	}
	$this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
	// Put a hyperlink
	$this->SetTextColor(0,0,255);
	$this->SetStyle('U',true);
	$this->Write(5,$txt,$URL);
	$this->SetStyle('U',false);
	$this->SetTextColor(0);
}
}

$html1="

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


";

$html = "

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
";


$pdf = new PDF();
// First page
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
$pdf->Write(5,"To find out what's new in this tutorial, click ");
$pdf->SetFont('','U');
$link = $pdf->AddLink();
$pdf->Write(5,'here',$link);
$pdf->SetFont('');
// Second page
$pdf->AddPage();
$pdf->SetLink($link);
$pdf->Image('logo.png',10,12,30,0,'','http://www.fpdf.org');
$pdf->SetLeftMargin(45);
$pdf->SetFontSize(14);
$pdf->WriteHTML($html);
$pdf->Output();
?>
