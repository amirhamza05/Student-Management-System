
url="subject_action.php";
modal_body="modal_sm_body";
modal="sm";

var action_data={
  	'url':url,
  	'div':modal_body,
  	'load':0
};
 
function get_subject_form(type,id=0){
  if(type=="insert"){
  	header="Add Subject";
  	data_key="get_subject_form";
    val=1;
  }
  else if(type=="update"){
  	header="Update Subject";
  	data_key="update_subject_form";
    val=id;
  }
  else{
    header="Delete Subject";
    data_key="delete_subject_form";
    val=id;
  }

  modal_open(modal,header);
  loader(modal_body);

  var data={
    [data_key]:val
  }

  get_ajax(action_data,data);
}


function subject_action(type,id=0){
  
  delete_type=0;
  if(type=="insert"){
    data_key="insert_subject";
    val=0;
  }
  else if(type=="update"){
    data_key="update_subject";
    val=id;
  }
  else{
    data_key="delete_subject";
    val=id;
    delete_type=1;
  }

  if(delete_type==0){
    var data_val={
      'id':val,
    	'sub_name':get_value("sub_name"),
    	'sub_code':get_value("sub_code")
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
	name=data['sub_name'];
	code=data['sub_code'];
	error=0;
	if(name==""){
		alert("Enter Subject Name");
        error=1;
	}
	else if(code==""){
		alert("Enter Subject Code");
		error=1;
	}
	return error;
}
