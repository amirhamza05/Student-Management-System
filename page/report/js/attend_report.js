url = "report_action.php";
modal_body = "modal_lg_body";
modal = "lg";

var program_id,batch_id;

function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}


function attend_report(){
   
   var data = {
        "attend_report": 1
    }
    //modal_open(modal, "Attendence Report");
    loader("report_area");
    get_ajax(get_action_data("report_area"), data);
}

function select_program(){
	
}