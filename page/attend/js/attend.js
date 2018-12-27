
url = "attend_action.php";
modal_body = "modal_lg_body";
modal = "lg";

var program_id,batch_id,date;
 
function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}


function attend_panel(){
   pid=get_value("program_select");
   bid=get_value("batch_select_id");
   date=get_value("attend_date");
   error="";
   if(pid==-1)error="Select Program";
   else if(bid==-1 || bid=="")error="Select Batch";
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
        "attend_panel":data1
    }
    //modal_open(modal, "Payment");
    loader("res");
     $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           set_html("res",response);
           take_attend();
        }
    });
    
}


function take_attend(){
    var data1 = {
      "program_id": program_id,
      "batch_id": batch_id,
      "date": date
    }

   var data = {
        "take_attend":data1
    }

    loader("take_attend");
    get_ajax(get_action_data("take_attend"), data);
}

function attend_report(status=2){
    var data1 = {
      "program_id": program_id,
      "batch_id": batch_id,
      "date": date,
      "status": status
    }

   var data = {
        "attend_report":data1
    }

    loader("attend_report");
    get_ajax(get_action_data("attend_report"), data);
}

function attend_sms(){
  var data1 = {
      "program_id": program_id,
      "batch_id": batch_id,
      "date": date
    }

   var data = {
        "attend_sms":data1
    }

    loader("attend_sms");
    get_ajax(get_action_data("attend_sms"), data);
}

function send_attend_sms(){
  type=get_value("attend_type");
  receiver=get_value("select_receiver");
  error="";
  if(type==-1){
     error="Please Select Attendence Type";
  }
  else if(receiver==-1){
        error="Please Select Receiver";
  }

  if(error!=""){
    alert(error);
    return;
  }

  var data1 = {
      "program_id": program_id,
      "batch_id": batch_id,
      "date": date,
      "type": type,
      "receiver": receiver
    }

   var data = {
        "send_attend_sms":data1
    }

    loader("attend_sms");
    get_ajax(get_action_data("attend_sms"), data);
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
          "batch_id": info.batch_id,
        	"date": info.date,
        	"student_list":attend_list
        }

        var data = {
          "save_attend": data1
    	}
        loader("take_attend");
        $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
        	success("Successfully Taken Student Attendence");
          take_attend();
        }
    });

}

function p(val){
	console.log(val);
}
