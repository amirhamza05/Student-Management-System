
url = "student_profile_action.php";
modal_body = "modal_lg_body";
modal = "lg";



function get_action_data(_div=modal_body,_load=0,_url=url){
	var data = {
    'url': _url,
    'div': _div, 
    'load': 0
   }
return data;
}

function payment(){

	var data={
        "get_payment_list": student_id
	}

	loader(body);
	get_ajax(get_action_data(body), data);
}


function view_payment(){
	modal_open(modal, "Payment");
	var data={
        "view_payment": student_id
	}
	loader(modal_body);
	get_ajax(get_action_data(), data);
}

function view_payment_info(){
	var data={
        "view_payment_info": student_id
	}
	modal_open(modal, "Payment");
	loader(modal_body);
	get_ajax(get_action_data(), data);
}