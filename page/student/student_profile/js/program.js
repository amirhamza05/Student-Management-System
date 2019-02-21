
function program() {
  bar_url="student_profile.php?get_id="+student_id+"&tab=program";
   window.history.pushState('', '', bar_url);
  set_html("profile_option","Program Panel");

  var data = {
        "get_program_list": student_id
    }

    loader(body);
    get_ajax(get_action_data(body), data);

}

function add_program(){
	
	var data = {
        "add_program": student_id
    }
    
    modal_open("sm", "Add Program");
    
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}

function edit_program_area(id){
  
  var data = {
        "edit_program_area": id
    }
    
    modal_open("sm", "Add Program");
    
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}

function update_program(admit_id){
  
  batch_id=get_value("edit_batch_id");
  if(batch_id==-1){
        alert("Select Program Batch");
    return;
  }
  var data1={
      "admit_id":admit_id,
      "batch_id":batch_id
  }

  var data={
    "update_program":data1
  }

  loader("modal_sm_body");
  $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           modal_open("sm", "Program Update Success","close");
           success(response);
           program();
        }
    });
}


function delete_program_form(id){
  var data={
    "delete_program_form":id
  }
  modal_open("sm", "Delete Program");
    
  loader("modal_sm_body");
  get_ajax(get_action_data("modal_sm_body"), data);
}

function delete_program(id){
  var data={
    "delete_program":id
  }
  loader("modal_sm_body");
  $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           modal_open("sm", "Program Update Success","close");
           success(response);
           program();
        }
    });

}

function add_batch(){
	program_id=get_value("select_program");
	if(program_id==-1){
		document.getElementById("add_batch_field").innerHTML="";
		return;
	}
	var data = {
        "add_batch_field": program_id
    }

    loader("add_batch_field");
    get_ajax(get_action_data("add_batch_field"), data);
}

function save_add_program(){
	program_id=get_value("select_program");
	batch_id=get_value("add_batch");
	if(batch_id==-1){
        alert("Select Program Batch");
		return;
	}
	var data1={
      "program_id":program_id,
      "batch_id":batch_id,
      "student_id":student_id
	}

	var data={
		"save_add_program":data1
	}
  loader("modal_sm_body");
	$.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           modal_open("sm", "Payment","close");
           //document.getElementById("res").innerHTML=response;
           success(response);
           program();
        }
    });
}

function view_program(admit_id){
  
  var data = {
        "view_program": admit_id
    }
    
    modal_open("lg", "Program Information");
    loader("modal_lg_body");

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
          set_html("modal_lg_body",response)
           program_view_info(admit_id);
        }
    });
}

function program_id_card(admit_id){
  
  var data = {
        "program_id_card": admit_id
    }
    
    loader("view_program_body");
    get_ajax(get_action_data("view_program_body"), data);
}

function program_view_info(admit_id){
  
  var data = {
        "program_view_info": admit_id
    }
    
    loader("view_program_body");
    get_ajax(get_action_data("view_program_body"), data);
}

function send_admission_sms(admit_id){
  
  var receiver=get_value("select_receiver");

  if(receiver==-1){
    alert("Please Select Receiver");
    return;
  }

  var data1 = {
    "admit_id": admit_id,
    "receiver": receiver
  }

  var data = {
        "send_admission_sms": data1
    }

  var msg_loading='<center><b>Message Sending Processing...Please Do Not Refresh Page or do not close tab</b></center>'
  set_html("message_sending",msg_loading);
  loader("message_body","140");

  get_ajax(get_action_data("view_program_body"), data);
}

function send_admission_sms_area(admit_id){
  
  var data = {
        "send_admission_sms_area": admit_id
    }
    
    loader("view_program_body");
    get_ajax(get_action_data("view_program_body"), data);
}

function admission_recept(admit_id){
  
  var data = {
        "admission_recept": admit_id
    }
    
    loader("view_program_body");
    get_ajax(get_action_data("view_program_body"), data);
}

 function printDiv(divName) {
        
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    
        
  }

