url = "exam_panel_action.php";
modal_body = "modal_md_body";
div="exam_panel_body";
var exam_category="";
var panel_title="panel_title";


function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}

function program_select(){
    var pid=get_value("program_select");
    
    var data={
        "program_select": pid
    }
    loader("select_loader",50);

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(responce){
            set_html("exam_category_select",responce);
            set_html("select_loader","");
        }
    });

}

function view_exam_panel(){
    
    var exam_cat=get_value("exam_category_select");
    
    if(exam_cat==-1 || exam_cat==""){
        alert("Please Select Program");
        return;
    }

    exam_category=exam_cat;

	var data={
		"view_exam_panel": exam_category
	}

    loader("view_exam_panel");
	
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success:function(responce){
            set_html("view_exam_panel",responce);
            get_dashboard();

        }
    })
}



function view_exam(exam_id){

    var data={
        "view_exam": exam_id
    }
    loader("exam_panel_body");
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success:function(responce){
            set_html("exam_panel_body",responce);
        }
    })
}

function get_dashboard(){
    var data={
        "get_dashboard": exam_category
    }
    set_html(panel_title,"Exam Dashboard")
    loader("exam_panel_body");
    get_ajax(get_action_data("exam_panel_body"), data);

}

function get_exam_list(){

    var data={
        "get_exam_list": exam_category
    }
    set_html(panel_title,"Exam List")
    loader("exam_panel_body");
    get_ajax(get_action_data("exam_panel_body"), data);
}

function admit_card(){

    var data={
        'admit_card': 1
    }

    loader("exam_panel_body");
    get_ajax(get_action_data("exam_panel_body"), data);
}

// function for exam panel
function exam_control(type){

    var data={};
    data[type]=1;

    set_html("exam_panel_title",type);
    loader("exam_control_panel_body");
    get_ajax(get_action_data("exam_control_panel_body"), data);
}


