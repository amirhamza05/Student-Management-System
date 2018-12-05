
url = "attend_action.php";
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


function add_attend(){
   pid=get_value("program_select");
   bid=get_value("batch_select_id");
   date=get_value("attend_date");
   error="";
   if(pid==-1)error="Select Program";
   else if(bid==-1)error="Select Batch";
   else if(date=="")error="Select Date";
   if(error!=""){
   	alert(error);
   	return;
   }
   
   program_id=pid;
   batch_id=bid;

   var data1 = {
   	 "program_id": program_id,
   	 "batch_id": batch_id,
   	 "date": date
   }

   var data = {
        "view_attend":data1
    }
    //modal_open(modal, "Payment");
    loader("res");
    get_ajax(get_action_data("res"), data);
}

function select_program(){
	program_id=get_value("program_select");
	
	var data = {
        "select_program": program_id
    }

    loader("loader_select",40);

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           set_html("loader_select","");
           set_html("batch_select_id",response);
        }
    });
}

function save_attend(data){
	console.log(data);
	var values = document.getElementsByName("attend");
	var radios = document.getElementsByName('attend[10001]');
    var length = radios.length; 
    console.log(length);
    for (var i = 0; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
        console.log(i);

        // only one radio can be logically checked, don't check the rest
        break;
    }
}
}

function attend_report(){
   
   var data = {
        "attend_report": 1
    }
    //modal_open(modal, "Attendence Report");
    loader("res");
    get_ajax(get_action_data("res"), data);
    $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
}

