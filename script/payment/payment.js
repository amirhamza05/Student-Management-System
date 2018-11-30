function save_payment(){
	total=document.getElementById('total').value;
	paid=document.getElementById("paid").value;
    due=document.getElementById("due_ammount").value;
    id=document.getElementById("id").value;
    date=document.getElementById("date").value;
    if(due==""){
    	alert("Fill Due Ammount Field");
    }
    else if(paid==""){
       alert("Fill Paid Ammount Field");
    }
    else if(due>0 && date==""){
    	alert("Fill Next Payment Date");
    }
    else {
       save(total,paid,due,date,id);
    }
}

function save(total,paid,due,date,id){

     $.ajax({
        type: 'POST',
        url: 'payment_action.php',
        data: {
            total: total,
            paid: paid,
            due: due,
            date:date,
            id: id
        },
        beforeSend: function() {
          loader("sucess_payment");
        },
        success: function(response) {
           clear_val();
           success('Payment Is successfully Taken');
           document.getElementById("delete_msg").innerHTML="";
           document.getElementById("sucess_payment").innerHTML =response;
           document.getElementById("meney_receipt").innerHTML="<button class='btn btn-primary' id='print_money_receipt()'>Print Last Money Receipt</button>";
           update_field();
        } 
    });
}



function paid_fun(){
	total=document.getElementById('total').value;
	paid=document.getElementById("paid").value;
	due=total-paid;
   if(paid<0){
     alert("Paid Ammount Cannot Be negative");
     document.getElementById("due_ammount").value="";
   }
   else if(due<0){
   	alert("Paid Ammount must Be smaller or equal then total ammount");
   	document.getElementById("due_ammount").value="";
   }
   else{
   	document.getElementById("due_ammount").value=due;
   }
}

function clear_val(){
	document.getElementById("paid").value="";
    document.getElementById("due_ammount").value="";
    document.getElementById("date").value="";
}

function send_sms(id){
	payment_id=document.getElementById("payment_id").value;
	$.ajax({
        type: 'POST',
        url: 'payment_action.php',
        data: {
            send_sms: payment_id,
            send_id: id
        },
        beforeSend: function() {
          document.getElementById("Sending").disabled = true;
          document.getElementById("res").innerHTML ="<i class='fa fa-spinner fa-spin'></i> Sending";
          
        },
        success: function(response) {
           //clear_val();
            document.getElementById("res").innerHTML ="Sucessfully Send SMS";
            document.getElementById("Sending").disabled = true;
          
          
        }
    });
}
 
function update_field(){
	id=document.getElementById("id").value;
	table_info(id);
	payable_ammount(id);
	due_ammount(id);
}

function payable_ammount(id){
	$.ajax({
        type: 'POST',
        url: 'payment_action.php',
        data: {
            payable_id: id
        },
        beforeSend: function() {
          //document.getElementById("Sending").innerHTML="Sending";
        },
        success: function(response) {
          document.getElementById("overview_paid").innerHTML=response; 
        }
    });
}

function due_ammount(id){
	$.ajax({
        type: 'POST',
        url: 'payment_action.php',
        data: {
            due_id: id
        },
        beforeSend: function() {
          //document.getElementById("Sending").innerHTML="Sending";
        },
        success: function(response) {
          document.getElementById("overview_due").innerHTML=response;
          document.getElementById("total").value=response;
          document.getElementById("due_ammount").value=response;
          
        }
    });
}

function table_info(student_id){

  $.ajax({
        type: 'POST',
        url: 'payment_action.php',
        data: {
            table_info: student_id
        },
        success: function(response) {
        document.getElementById("table_info").innerHTML=response;  
        }
    });
}
  
function delete_table(id){
	model_name="dalete"+id;
	$.ajax({
        type: 'POST',
        url: 'payment_action.php',
        data: {
            delete_table: id
        },
        beforeSend: function() {
          //document.getElementById("Sending").innerHTML="Sending";
        },
        success: function(response) {
           hideModal()
           update_field();
           document.getElementById("delete_msg").innerHTML="Sucessfully Payment Id Deleted";
        }
    });
}

function hideModal(){
  $(".modal").removeClass("in");
  $(".modal-backdrop").remove();
  $('body').removeClass('modal-open');
  $('body').css('padding-right', '');
  $(".modal").hide();
}


function print_money_receipt(){

  success('Payment Is successfully Taken');
  
}

function loader(divname){
  document.getElementById(divname).innerHTML = "<center><img style='margin-top:35px' src='upload/site_content/processing1.gif' /></center>";
}
function close_loader(divname){
  document.getElementById(divname).innerHTML = "";
}

window.success = function(msg) {
    var dom = '<div class="top-alert"><div class="alert alert-success-alt alert-dismissable fade in " role="alert"><i class="glyphicon glyphicon-ok"></i> ' + msg + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div></div>';
    var jdom = $(dom);
    jdom.hide();
  $("body").append(jdom);
  jdom.fadeIn();
  setTimeout(function() {
    jdom.fadeOut(function() {
      jdom.remove();
    });
  }, 2000);
}
