url="exam_category_action.php";
modal_body="modal_sm_body";
modal="sm";

 function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': _load
    }
    return data;
}

function get_exam_form(type,id=0){
  if(type=="insert"){
    header="Add Exam Category";
    data_key="get_exam_category_form";
    val=1;
  }
  else if(type=="update"){
    header="Update Exam Category";
    data_key="update_exam_category_form";
    val=id;
  }
  else{
    header="Delete Exam Category";
    data_key="delete_exam_category_form";
    val=id;
  }

  modal_open(modal,header);
  loader(modal_body);

  var data={
    [data_key]:val
  }

  get_ajax(get_action_data(),data);
}


function exam_category_action(type,id=0){
  
  delete_type=0;
  if(type=="insert"){
    data_key="insert_exam_category";
    val=0;
  }
  else if(type=="update"){
    data_key="update_exam_category";
    val=id;
  }
  else{
    data_key="delete_exam_category";
    val=id;
    delete_type=1;
  }

  if(delete_type==0){
    var data_val={
        'id':val,
        'category_name':get_value("exam_category_name"),
        'program_id':get_value("select_program")
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
         loader(modal_body);
         get_ajax(get_action_data(modal_body,1),data);
    }
}




function filter_data(data){
    exam_category=data['category_name'];
    program_id=data['program_id'];
    error=0;
    if(exam_category==""){
        alert("Enter exam_category Name");
        error=1;
    }
    else if(program_id=="" || program_id==-1){
        alert("Select Program");
        error=1;
    }
    return error;
}
