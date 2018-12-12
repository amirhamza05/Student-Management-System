<link rel="stylesheet" type="text/css" href="page/report/css/payment_report.css">
<script type="text/javascript" src="page/report/js/payment_report.js"></script>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-2">
		<select class="select" id="program_select">
			<option value="0">All Program</option>
			<?php $program_ob->select_program(); ?>
		</select>
	</div>
	<div class="col-md-2">
		<select class="select"  id="type_select">
			<option value="0">Any Type</option>
			<option value="1">Admission Fee</option>
			<option value="2">Monthly Fee</option>
		</select>
	</div>
	<div class="col-md-2">
        <input type="date" id="date1" value="" class="input_date" name="">
     </div>
    <div class="col-md-2">
        <input type="date" id="date2" value="" class="input_date" name="">
    </div>
      <div class="col-md-2">
            <button class="btn_select" onclick="view_payment_report()">View Report</button>
       </div>

</div>


<div id="report_response">

</div>

<script type="text/javascript">
	 function printDiv(divName) {
        
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    
        
  }


  function print(divName){
  	var printContents = document.getElementById(divName).innerHTML;
  	w=1150;
  	h=750;
  	var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
  	myWindow=window.open('', '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);;
    myWindow.document.write(printContents);
    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();
  }
</script>

