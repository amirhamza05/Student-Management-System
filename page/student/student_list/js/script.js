
url = "student_list_action.php";
modal_body = "modal_md_body";
modal = "md";
body="program_dashboard";
tab_body="box_body";
var program_id,batch_id;



function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}

function program_select(){
	pid=get_value("program_select");
	var data={
		"program_select": pid
	}

	get_ajax(get_action_data("batch_select"), data);
}


function view_program(){
	pid=get_value("program_select");
	bid=get_value("batch_select");
	if(pid==0 || pid==""){
      alert("Please Select Program");
      return;
	}
	program_id=pid;
	batch_id=bid;

	var data1 = {
		"program_id": program_id,
		"batch_id": batch_id
	}

	var data={
		"view_program": data1
	}

	loader(body);
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           set_html(body,response);
           get_action("program_overview");
        }
    });  
}

function get_action(action){
	var data1={
		"program_id": program_id,
		"batch_id": batch_id
	}
	var data={};
	data[action]= data1;
	
 	loader(tab_body);
	get_ajax(get_action_data(tab_body), data);
}

function view_student(id){
	modal_open("lg", "Student Information");
    reload_profile(id);
}


function reload_profile(id){
   loader("modal_lg_body");
    var data={
    	"view_student": id
    }
    get_ajax(get_action_data("modal_lg_body"), data);
	
}

