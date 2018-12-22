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
   
   program_id=get_value("program_select");
   batch_id=get_value("batch_select_id");
   year=get_value("year_select");
   month=get_value("month_select");
   
   error="";
   if(program_id=="" || program_id==-1){
    error="Please Select Program";
   }
   else if(batch_id=="" || batch_id==-1){
    error="Please Select Batch";
   }
   else if(year=="" || year==-1){
    error="Please Select Year";
   }
   else if(month=="" || month==-1){
    error="Please Select Month";
   }
   if(error!=""){
    alert(error);
    return;
   }

   var data1={
    "program_id": program_id,
    "batch_id": batch_id,
    "year": year,
    "month": month
   }

   var data = {
        "attend_report": data1
    }
    //modal_open(modal, "Attendence Report");
    loader("report_area");
    get_ajax(get_action_data("report_area"), data);
}

function select_program(){
	program_id=get_value("program_select");
    var data = {
        "select_program": program_id
    } 
    
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           set_html("batch_select_id",response);
           year_set(program_id);
        }
    });
}

function year_set(program_id){
    

    var data = {
        "year_set": program_id
    }

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           set_html("year_select",response);
        }
    });
}

function select_year(){
    
    year=get_value("year_select");
    
    var data1={
        'year': year,
        'program_id': program_id
    }

    var data = {
        "select_year": data1
    }

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           set_html("month_select",response);
        }
    });
}