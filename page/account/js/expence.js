
url="account_action.php";
modal_body="modal_sm_body";
modal="sm";

var action_data={
    'url':url,
    'div':modal_body,
    'load':0
};
 
function get_expence_form(type,id=0){
  if(type=="insert"){
    header="Add Expence";
    data_key="get_expence_form";
    val=1;
  }
  else if(type=="update"){
    header="Update Expence";
    data_key="update_expence_form";
    val=id;
  }
  else{
    header="Delete Expence";
    data_key="delete_expence_form";
    val=id;
  }

  modal_open(modal,header);
  loader(modal_body);

  var data={
    [data_key]:val
  }

  get_ajax(action_data,data);
}


function expence_action(type,id=0){
  
  delete_type=0;
  if(type=="insert"){
    data_key="insert_expence";
    val=0;
  }
  else if(type=="update"){
    data_key="update_expence";
    val=id;
  }
  else{
    data_key="delete_expence";
    val=id;
    delete_type=1;
  }

  if(delete_type==0){
    var data_val={
        'id':val,
        'name':get_value("expence_name"),
        'amount':get_value("amount"),
        'notes':get_value("note")
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
    expence_category=data['name'];
    ammount=data['amount'];
    error=0;
    if(expence_name==""){
        alert("Enter Expence Name");
        error=1;
    }
    else if(ammount==""){
        alert("Enter Expence Ammount");
        error=1;
    }
    return error;
}
