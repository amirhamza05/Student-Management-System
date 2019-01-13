
url="exam_action.php";
modal_body="modal_md_body";
modal="md";

var action_data={
    'url':url,
    'div':modal_body,
    'load':0
};
 
function get_exam_form(type,id=0){
  if(type=="insert"){
    header="Add exam";
    data_key="get_exam_form";
    val=1;
  }
  else if(type=="update"){
    header="Update exam";
    data_key="update_exam_form";
    val=id;
  }
  else{
    header="Delete exam";
    data_key="delete_exam_form";
    val=id;
  }

  modal_open(modal,header);
  loader(modal_body);

  var data={
    [data_key]:val
  }

  get_ajax(action_data,data);
}


function exam_action(type,id=0){
  
  delete_type=0;
  if(type=="insert"){
    data_key="insert_exam";
    val=0;
  }
  else if(type=="update"){
    data_key="update_exam";
    val=parseInt(id);
  }
  else{
    data_key="delete_exam";
    val=parseInt(id);
    delete_type=1;
  }

  if(delete_type==0){
    mcq=get_value("mcq");
    written=get_value("written");
    mcq=(mcq=="")?0:mcq;
    written=(written=="")?0:written;
    total=parseInt(mcq)+parseInt(written);
    var data_val={
        'id':parseInt(id),
        'exam_name':get_value("exam_name"),
        'program_id':get_value("program_select"),
        'sub_id':get_value("select_subject"),
        'mcq':mcq,
        'written':written,
        'total':total,
        'exam_date':get_value("exam_date")
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

function select_program(){
   id=get_value("program_select");
   var data={
      "program_select": id
   }

   $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
            set_html("select_subject",response);
        }
    });
}


function filter_data(data){
    error="";
    if(data['program_id']==-1){
      error="Please Select Program";
    }
    else if(data['sub_id']==""){
      error="Please Select Subject";
    }
    else if(data['exam_name']==""){
      error="Please Enter Exam Name";
    }
    else if(data['exam_date']==""){
      error="Please Enter Exam Date";
    }

    if(error!="")alert(error);
    return (error!="")?1:0;
}
