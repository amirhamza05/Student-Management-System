<?php

if(isset($_POST['admit_card'])){

function span_mark($mark,$total){
	echo "<span class='mark_box'>$mark<b>/</b><span class='total_mark_box'>$total</span></span>";
}

$total_exam=10;

$total_topics=1;
$width=40/$total_topics;
	
?>



<button class="btn" onclick="print('admit_card')">Print</button>

<div id="admit_card">
<table cellpadding="0" cellspacing="0" style="width: 100%" align="center">
    <tr>
    	<td class="td1" style="width: 5%; background-color: #8395a7"></td>
    	<td class="td1" style="width: 5%; background-color: #8395a7">#</td>
        <td class="td1" style="width: 25%; background-color: #8395a7">Exam Name</td>

         <?php for($k=0; $k<$total_topics; $k++){ ?>
        	<td class="td1" style="width: <?php echo $width; ?>%; background-color: #c8d6e5">MCQ</td>
        <?php } ?>
        
        

        <td class="td1" style="width: 10%; background-color: #8395a7">Total</td>
        <td class="td1" style="width: 10%; background-color: #8395a7">GPA</td>
        <td class="td1" style="width: 10%; background-color: #8395a7">Grade</td>
    </tr>
<?php for($i=0; $i<4; $i++){ ?>

    <tr>
        <td class='rotate' rowspan="<?php echo $total_exam+1; ?>"><div>Barshik Porikka Barshik Porikka</div></td>
    </tr>
    <?php for($j=0; $j<$total_exam; $j++){ ?>
    <tr <?php if($j==($total_exam-1))echo "class='border_bottom_bold'"; ?>>
        <td class="td2"><?php echo "$j"; ?></td>
        <td class="td2 border_right_bold">Bangla 1</td>

        <?php for($k=0; $k<$total_topics; $k++){ ?>
        	<td><?php span_mark(40,50); ?></td>
        <?php } ?>

        <td class="td2 border_left_bold">85</td>
        <td class="td2">5.00</td>
        <td class="td2">A+</td>
    </tr>

    <?php } ?>
    
   <?php } ?>
    
</table>
<style>
	td {
    	border: 1px #cfd1d6 solid;
    	padding: 7px;
    	text-align: center;
	}
	.mark_box{
		background-color: #eeeeee;
		padding: 5px;
		border-radius: 5px;
	}
	.total_mark_box{
		background-color: #eeeeee;
	}
	.td1{
		background-color: #eeeeee;
		padding: 8px;
		border-color: #b7bcc9!important;
	}
	.td2{
		background-color: #f5f5f5;
	}
	.border_right_bold{
		border-right: 2px solid #b7bcc9;
	}
	.border_left_bold{
		border-left: 2px solid #b7bcc9;
	}
	.border_bottom_bold{
		border-bottom: 2px solid #b7bcc9;
	}
.rotate {
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  width: 3em;
  color: #ffffff;
  font-weight: bold;
  background-color: #576574;
  border: 2px #b7bcc9 solid;
  border-width: 0px 0px 2px 0px;


}
.rotate div {
    	 -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
       	-o-transform: rotate(-90.0deg);  /* Opera 10.5 */
  		-webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
         margin-left: -10em;
         margin-right: -10em;
         height: auto;
}
      </style>

</div>
<?php

}



?>