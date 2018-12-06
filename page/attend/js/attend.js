
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



function attend_report(){
   
   var data = {
        "attend_report": 1
    }
    //modal_open(modal, "Attendence Report");
    loader("res");
    get_ajax(get_action_data("res"), data);
}

function save_attend(info){
    
   var arr=[];

    $(':radio').each(function () {
            var myval = $(this).val();

            name=$(this).attr('name');
            student_id = name.split(/(\d+)/);
            student_id=parseInt(student_id[1]);
            val=$("input:radio[name='"+name+"']:checked").val();
            arr[student_id]=val;
        });
        

        var attend_list=[];
        for (var student_id in arr) {
    		var status = arr[student_id];
            if(!status){
            	alert("Please Select Student " + student_id);
            	return;
            }
            attend_list.push({student_id,status});
		}
        
        var data1={
        	"program_id": info.program_id,
        	"date": info.date,
        	"student_list":attend_list
        }

        var data = {
          "save_attend": data1
    	}
        loader("res");
        $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
        	success("Successfully Taken Student Attendence");
            add_attend();
        }
    });

}

function p(val){
	console.log(val);
}
