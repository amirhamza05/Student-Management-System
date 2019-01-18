url = "student_profile_action.php";
modal_body = "modal_md_body";
modal = "md";



function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}

function payment() {
   bar_url="student_profile.php?get_id="+student_id+"&tab=payment";
   window.history.pushState('', '', bar_url);

   set_html("profile_option","Payment Panel");

    var data = {
        "get_payment_list": student_id
    }

    loader(body);
    get_ajax(get_action_data(body), data);
}

function select_payment_program() {

    var data = {
        "select_program": get_value("select_payment_program")
    }
    div = document.getElementById("select_payment_type");
    div.innerHTML = "<option value='-1'>Select Payment Type</option>";
    get_ajax(get_action_data("select_payment_type"), data);
}


function view_payment() {

    program_id = get_value("select_payment_program");
    type = get_value("select_payment_type");
    error = "";
    if (program_id == -1) error = "Select Program";
    else if (type == -1) error = "Select Payment Type";

    if (error != "") {
        alert(error);
        return;
    }

    var data1 = {
        "student_id": student_id,
        "program_id": program_id,
        "type": type
    }

    var data = {
        "view_payment": data1
    }

    loader("payment_body_panel");
    get_ajax(get_action_data("payment_body_panel"), data);
}

function view_payment_panel(payment_id) {
    
    

    var data = {
        "payment_panel": payment_id
    }
    
    loader("payment_body_panel");
    get_ajax(get_action_data("payment_body_panel"), data);
}

function set_payment(program_id, year, month,type) {
 
    var data1 = {
        "student_id": student_id,
        "program_id": program_id,
        "year": year,
        "month": month,
        "type" : type
    }
    var data = {
        "set_payment": data1
    }
    modal_open(modal, "Payment");
    loader(modal_body);
    get_ajax(get_action_data(), data);
}


function save_set_fee(program_id,month,year,type){
    
    fee=get_value("set_student_fee_value");
    if(fee==""){
    	alert("Please Input Payment Fee");
    	return;
    }

    var data1={
        "student_id": student_id,
        "program_id": program_id,
        "month": month,
        "year": year,
        "total_fee": fee,
        "type": type 
    }

    var data = {
        "save_set_fee_data": data1
    }

    loader(modal_body);
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {

           modal_open(modal, "Payment","close");
           success('Payment successfully Set');
           view_payment();
        }
    });    
}

function add_extra_payment_form(){
    var data = {
        "add_extra_payment_form": 1
    }
    
    modal_open("sm", "Add Extra Payment Fee");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}


function add_extra_fee(){
  note="";
  if(type==3)note=get_value("note");

  fee=get_value("payment_fee");
  if(fee==""){
    alert("Enter Payment Fee");
    return;
  }
  else if(note=="" && type==3){
    alert("Enter Name Of Payment");
    return;
  }
  var data1={
    'program_id': program_id,
    'student_id': student_id,
    'type': 3,
    'total_fee': fee,
    'note': note
  }

  var data = {
        "add_extra_fee": data1
   }

  loader("modal_sm_body");

  $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) { 
           view_payment();
           modal_open("sm", "Payment","close");
           success('Payment successfully Update');
        }
    }); 
}


function update_payment_form(payment_id){
   var data = {
        "update_payment_form": payment_id
    }
    
    modal_open("sm", "Update Payment Fee");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}


function add_pay_form(payment_id){
   
   var data = {
        "add_pay_form": payment_id
    }
    
    modal_open("sm", "Add Payment");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}

function update_payment(payment_id,type){
  note="";
  if(type==3)note=get_value("note");

  fee=get_value("payment_fee");
  if(fee==""){
  	alert("Enter Payment Fee");
  	return;
  }
  else if(note=="" && type==3){
    alert("Enter Name Of Payment");
    return;
  }
  var data1={
  	'id': payment_id,
  	'total_fee': fee,
    'note': note
  }

  var data = {
        "update_payment": data1
   }
  loader("modal_sm_body");
   $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {	
        	view_payment_panel(payment_id);
            modal_open("sm", "Payment","close");
            success('Payment successfully Update');
        }
    }); 
}

function save_pay_ammount(payment_id){
  fee=get_value("pay");
  if(fee==""){
  	alert("Enter Payment Ammount");
  	return;
  }
  var data1={
  	'payment_id': payment_id,
  	'pay': fee
  }

  var data = {
        "save_payment": data1
   }
  loader("modal_sm_body");
   $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {	
        	view_payment_panel(payment_id);
            modal_open("sm", "Payment","close");
            success('Payment Successfully Add');
        }
    }); 
}

function payment_panel() {
    var data = {
        "payment_panel": student_id
    }
    
    loader(body);
    get_ajax(get_action_data(body), data);
}

function delete_payment_form(pay_id,payment_id){
   var data1={
   	 "id": pay_id,
   	 "payment_id": payment_id
   }

   var data = {
        "delete_payment_form": data1
    }
    
    modal_open("sm", "Update Payment Fee");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}

function delete_payment(pay_id,payment_id){
   var data = {
        "delete_payment": pay_id
    }
    
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {	
            view_payment_panel(payment_id);
            modal_open("sm", "Payment","close");
            success('Payment Successfully Delete');
        }
    });
}

function print_money_recept(id){
	var data = {
        "print_money_recept": id
    }
    
    modal_open("lg", "Print Payment Recept");
    loader("modal_lg_body");
    get_ajax(get_action_data("modal_lg_body"), data);
}
function send_sms_page(id){

    var data1 = {
      "student_id": student_id,
      "payment_id": id
    }
  
    var data = {
        "send_sms_page": data1
    }
    
    modal_open("sm", "Send Payment Info");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}

function send_sms(){
  message=get_value("message");
  receiver=get_value("select_receiver");
  if(receiver==-1){
    alert("Select Receiver");
    return;
  }
  var data1 = {
      "student_id": student_id,
      "message": message,
      "receiver": receiver
  }
  var data = {
        "send_sms": data1
  }

  var msg_loading='<center><b>Message Sending Processing...Please Do Not Refresh Page or do not close tab</b></center>'
  set_html("message_sending",msg_loading);
  loader("message_body","120");
  get_ajax(get_action_data("modal_sm_body"), data);

}