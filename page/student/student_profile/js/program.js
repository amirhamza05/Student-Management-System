
function program() {

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
    
    modal_open(modal, "Add Program");
    
    loader(modal_body);
    get_ajax(get_action_data(modal_body), data);
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

	$.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           modal_open(modal, "Payment","close");
           //document.getElementById("res").innerHTML=response;
           success(response);
           program();
        }
    });
}