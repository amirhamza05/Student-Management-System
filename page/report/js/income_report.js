url = "report_action.php";
modal_body = "modal_md_body";
modal = "md";



function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}

function view_income_report(){
  
  date1=get_value("date1");
  date2=get_value("date2");
  var error="";
  if(date1=="")error="Please Select Date1";
  if(date2=="")error="Please Select Date2";
  if(date1>date2)error="Date1 must be smaller then Date2";
  if(error!=""){
    alert(error);
    return;
  }
  var data1 = {
    "date1": get_value("date1"),
    "date2": get_value("date2")
  }

  var data = {
        "view_income_report": data1
    }

    
    loader("report_response");
    get_ajax(get_action_data("report_response"), data);
}
