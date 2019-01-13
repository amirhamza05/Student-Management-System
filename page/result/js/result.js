
url="result_action.php";
modal_body="modal_md_body";
modal="md";
div_body="exam_body";
var program_id,subject_id,exam_id;


function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}

  var room = 1;

  function add_btn() {
      room++;

      var objTo = document.getElementById('result')
      var divtest = document.createElement("div");

      divtest.setAttribute("class", "form-group removeclass" + room);
      var rdiv = 'removeclass' + room;
      divtest.innerHTML = '<div class="form-group removeclass"><div class="row" style="margin-bottom: -13px;"><div class="col-sm-1 nopadding"></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="student_id_' + room + '" name="student_id_save[]" required="" placeholder="Student ID"></div></div> <div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="mcq_save_'+ room +'" step="0.01" value="0" name="mcq[]" placeholder="MCQ Mark"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="number" class="form-control" id="written_save_'+ room +'" step="0.01" name="written[]" value="0" placeholder="Written Mark"></div></div><div class="col-sm-2 nopadding"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
      objTo.appendChild(divtest)
  }







  function add_btn_hwritten() {
      room++;

      var objTo = document.getElementById('result')
      var divtest = document.createElement("div");

      divtest.setAttribute("class", "form-group removeclass" + room);
      var rdiv = 'removeclass' + room;
      divtest.innerHTML = '<div class="form-group removeclass"><div class="row" style="margin-bottom: -13px;"><div class="col-sm-1 nopadding"></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="student_id_' + room + '" name="student_id_save[]" required="" placeholder="Student ID"></div></div> <div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="mcq_save_'+ room +'" step="0.01" value="0" name="mcq[]" placeholder="MCQ Mark"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="number" class="form-control" id="written_save_'+ room +'" step="0.01" name="written[]" readonly value="0" placeholder="Written Mark"></div></div><div class="col-sm-2 nopadding"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
      objTo.appendChild(divtest)
  }

  function add_btn_hmcq() {

     room++;

      var objTo = document.getElementById('result')
      var divtest = document.createElement("div");

      divtest.setAttribute("class", "form-group removeclass" + room);
      var rdiv = 'removeclass' + room;
      divtest.innerHTML = '<div class="form-group removeclass"><div class="row" style="margin-bottom: -13px;"><div class="col-sm-1 nopadding"></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="student_id_' + room + '" name="student_id_save[]" required="" placeholder="Student ID"></div></div> <div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="mcq_save_'+ room +'" readonly step="0.01" value="0" name="mcq[]" placeholder="MCQ Mark"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="number" class="form-control" id="written_save_'+ room +'" step="0.01" name="written[]" value="0" placeholder="Written Mark"></div></div><div class="col-sm-2 nopadding"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div>';
      objTo.appendChild(divtest)
  }


  function remove_education_fields(rid) {
      $('.removeclass' + rid).remove();
  }


function save_student_result(){

var student_id_info=[];
var mcq_save=[];
var written_save=[];

  for(i=1; i<=room; i++){

  student_id="student_id_"+i;
  student_id=get_value(student_id);

 if(student_id=="" || student_id<10000)continue;

  student_id_info[i]=student_id;

  mcq="mcq_save_"+i;
  mcq=document.getElementById(mcq).value;
  mcq_save[i]=mcq;

  written="written_save_"+i;
  written=document.getElementById(written).value;
  written_save[i]=written;

}


    var exam_id=get_value("select_exam");

    var data1={
        'exam_id': exam_id,
        'student_list': student_id_info,
        'mcq': mcq_save,
        'written': written_save
    }

    var data={
      'save_result': data1
    }
    
    loader(div_body);

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
            success("Result Successfully Save");
            show_result();
        }
    });

}


function select_program(){
    id=get_value("select_program");
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
            set_html("select_exam","<option value='0'> --Select Exam-- </option>");
        }
    });

}

function select_subject(){
  var program_id=get_value("select_program");
  var subject_id=get_value("select_subject");

   var data1={
    "subject_id":subject_id,
    "program_id":program_id
   }

   var data={
      "select_subject": data1
   }

   $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
            set_html("select_exam",response);
        }
    });
}


function add_result(){
   program_id=get_value("select_program");
   subject_id=get_value("select_subject");
   exam_id=get_value("select_exam");
   check_error=check_select_error(program_id,subject_id,exam_id);
   if(check_error==1)return;
   

   var data={
    "add_result": exam_id
   }
   loader(div_body);
   get_ajax(get_action_data(div_body),data);
}

function show_result(){
    program_id=get_value("select_program");
    subject_id=get_value("select_subject");
    exam_id=get_value("select_exam");
   check_error=check_select_error(program_id,subject_id,exam_id);
   if(check_error==1)return;
   

   var data={
    "show_result": exam_id
   }
   loader(div_body);
   get_ajax(get_action_data(div_body),data);
}

function update_result(id){
    mcq=get_value("mcq");
    written=get_value("written");
    mcq=(mcq=="")?0:mcq;
    written=(written=="")?0:written;
    total=parseInt(mcq)+parseInt(written);
    var data_val={
        'id':parseInt(id),
        'mcq':mcq,
        'written':written,
        'total':total,
        'sms': 0
    }
    var data={
      "update_result": data_val
    }

    loader(modal_body);

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
          success("Result Update Success");
          modal_open(modal,"","close");
          show_result();
            
        }
    });
}

function delete_result(result_id){
  
  var data={
    'delete_result': result_id
  }
  loader(modal_body);
  $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
          success("Result Delete Success");
          modal_open(modal,"","close");
          show_result();
            
        }
    });

}

function update_result_form(result_id){
   
   var data={
    "update_result_form": result_id
   }
   
   modal_open(modal,"Update Result");
   loader(modal_body);
   get_ajax(get_action_data(modal_body),data);
}

function delete_result_form(result_id){
   
   var data={
    "delete_result_form": result_id
   }
   
   modal_open(modal,"Delete Result");
   loader(modal_body);
   get_ajax(get_action_data(modal_body),data);
}

function send_sms(exam_id){
  receiver=get_value("receive_by");
  if(receiver==-1){
    alert("Please Select Receiver");
    return;
  }


  loader("sms_body");

  var data1={
    'exam_id': exam_id,
    "receiver": receiver
  }

  var data={
    "send_sms": data1
  }

  $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
          set_html("sms_body",response);     
        }
    });

}


function send_sms_form(){
   
   program_id=get_value("select_program");
   subject_id=get_value("select_subject");
   exam_id=get_value("select_exam");
   check_error=check_select_error(program_id,subject_id,exam_id);
   if(check_error==1)return;
   

   var data={
    "send_sms_form": exam_id
   }
   loader(div_body);
   get_ajax(get_action_data(div_body),data);
}


function check_select_error(program_id,subject_id,exam_id){
 error=0;
 if(program_id=="" || program_id==0)error=1;
 else if(subject_id=="" || subject_id==0)error=2;
 else if(exam_id=="" || exam_id==0)error=3;

 var error_text="Please Select ";
 if(error==1)error_text=error_text+"Program";
 else if(error==2)error_text=error_text+"Subject";
 else if(error==3)error_text=error_text+"Exam";

 if(error>0)alert(error_text);
 return (error==0)?0:1;
}

