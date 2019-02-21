url = "exam_panel_action.php";
modal_body = "modal_md_body";
div="exam_panel_body";




function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}

function view_exam_panel(){

	var data={
		"view_exam_panel": 1
	}
    loader("view_exam_panel");
	get_ajax(get_action_data("view_exam_panel"), data);
}

function admit_card(){

    var data={
        'admit_card': 1
    }

    loader("exam_panel_body");
    get_ajax(get_action_data("exam_panel_body"), data);
}
