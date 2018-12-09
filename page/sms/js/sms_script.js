url = "program_action.php";
modal_body = "modal_md_body";
modal = "md";

var action_data = {
    'url': url,
    'div': modal_body, 
    'load': 0
};




function buy_sms_btn(){
	
	var data = {
        "set_payment": 1
    }
    modal_open(modal, "Add Balanced");
    loader(modal_body);
    
}

function phn_connect(){


	return 0;
}