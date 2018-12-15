
url="sms_action.php";
modal_body="modal_sm_body";
modal="sm";

var action_data={
    'url':url,
    'div':modal_body,
    'load':0
};
 
function get_sms_form(type,id=0){
  if(type=="insert"){
    header="Add SMS";
    data_key="get_sms_form";
    val=1;
  }
  else if(type=="update"){
    header="Update SMS";
    data_key="update_sms_form";
    val=id;
  }
  else{
    header="Delete SMS";
    data_key="delete_sms_form";
    val=id;
  }

  modal_open(modal,header);
  loader(modal_body);

  var data={
    [data_key]:val
  }

  get_ajax(action_data,data);
}


function sms_action(type,id=0){
  
  delete_type=0;
  if(type=="insert"){
    data_key="insert_sms";
    val=0;
  }
  else if(type=="update"){
    data_key="update_sms";
    val=id;
  }
  else{
    data_key="delete_sms";
    val=id;
    delete_type=1;
  }

  if(delete_type==0){
    var data_val={
        'id':val,
        'total_sms':get_value("total_sms"),
        'start':get_value("date1"),
        'end':get_value("date2"),
        'pay':get_value("pay")
    }
    error=filter_data(data_val);
  }
  else{
    var data_val={
      'id':val
    }
    error=0;
  }
    
    var data={
        [data_key]:data_val
    }
    
    if(error==0){
         action_data['load']=1;
         loader(modal_body);
         get_ajax(action_data,data);
    }
}




function filter_data(data){
    total_sms=data['total_sms'];
    total_pay=data['total_pay'];
    date1=data['start'];
    date2=data['end'];
    pay=data['pay'];
    error=0;
    if(total_sms==""){
        alert("Total SMS Field Empty");
        error=1;
    }
    else if(date1==""){
        alert("Buy Date Field Empty");
        error=1;
    }
    else if(date2==""){
        alert("Expire Date Field Empty");
        error=1;
    }
    else if(pay==""){
        alert("Total Pay Field Empty");
        error=1;
    }
    return error;
}
