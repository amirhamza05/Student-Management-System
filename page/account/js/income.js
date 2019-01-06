
url="account_action.php";
modal_body="modal_sm_body";
modal="sm";

var action_data={
    'url':url,
    'div':modal_body,
    'load':0
};
 
function get_income_form(type,id=0){
  if(type=="insert"){
    header="Add income";
    data_key="get_income_form";
    val=1;
  }
  else if(type=="update"){
    header="Update income";
    data_key="update_income_form";
    val=id;
  }
  else{
    header="Delete income";
    data_key="delete_income_form";
    val=id;
  }

  modal_open(modal,header);
  loader(modal_body);

  var data={
    [data_key]:val
  }

  get_ajax(action_data,data);
}


function income_action(type,id=0){
  
  delete_type=0;
  if(type=="insert"){
    data_key="insert_income";
    val=0;
  }
  else if(type=="update"){
    data_key="update_income";
    val=id;
  }
  else{
    data_key="delete_income";
    val=id;
    delete_type=1;
  }

  if(delete_type==0){
    var data_val={
        'id':val,
        'name':get_value("income_name"),
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
    income_category=data['name'];
    ammount=data['amount'];
    error=0;
    if(income_name==""){
        alert("Enter income Name");
        error=1;
    }
    else if(ammount==""){
        alert("Enter income Ammount");
        error=1;
    }
    return error;
}
