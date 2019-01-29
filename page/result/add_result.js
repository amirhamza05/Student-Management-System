  

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
  student_id=document.getElementById(student_id).value;
 if(student_id=="" || student_id<10000)continue;

  student_id_info[i]=student_id;

  mcq="mcq_save_"+i;
  mcq=document.getElementById(mcq).value;
  mcq_save[i]=mcq;

  written="written_save_"+i;
  written=document.getElementById(written).value;
  written_save[i]=written;

  //alert(written_save[i]);
  //alert(mcq_save[i]);
}



exam_id = document.getElementById("exam_select").value;
program_id = document.getElementById("program_select").value;

$.ajax({
          type: 'GET',
          url: 'add_result_action.php',
          data: {
              save_student_result: student_id_info,
              save_mcq: mcq_save,
              save_written: written_save,
              count_student:room,
              exam_id_save:exam_id,
              program_id_save: program_id
          },
          beforeSend: function() {
              loader("result_add_body");
          },
          success: function(response) {
              //alert("Yay!");
              //alert(response);
              close_loader("result_add_body");
              show_result();
              success('Sucessfully Add Exam Result');
              //document.getElementById("exam_select").innerHTML = response;

          }
      });


}




  function test() {
      $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              test: 1
          },
          beforeSend: function() {
              //loader("loading");
          },
          success: function(response) {
              //alert("Yay!");
              document.getElementById("exam_body").innerHTML = response;

          }
      });
  }
 

  function program() {
      pid = document.getElementById("program_select").value;
      $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              program_select: pid
          },
          beforeSend: function() {
              //loader("loading");
          },
          success: function(response) {
              //alert("Yay!");
              document.getElementById("subject_select").innerHTML = response;
              document.getElementById("exam_select").innerHTML = "<option value=''>--Select Exam--</option>";
              document.getElementById("exam_body").innerHTML="";
          }
      });

  }

  function  exam() {
    document.getElementById("exam_body").innerHTML="";
    show_result("yes");
  }

  function subject() {
      subject_id = document.getElementById("subject_select").value;
      program_id = document.getElementById("program_select").value;
      //alert(subject_id);
      $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              subject_select: subject_id,
              program_select_sub: program_id
          },
          success: function(response) {
              //alert("Yay!");
              document.getElementById("exam_select").innerHTML = response;
              document.getElementById("exam_body").innerHTML="";

          }
      });

  }

  function add_result() {
      program_id = document.getElementById("program_select").value;
      exam_id = document.getElementById("exam_select").value;
      subject_id = document.getElementById("subject_select").value;
      if (exam_id == 0) {
          alert("Please Select Exam");
          return;
      }

      $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              add_result: exam_id,
              subject_id_add: subject_id,
              program_id_add: program_id

          },
          beforeSend: function() {
              loader("exam_body");
          },
          success: function(response) {
              //alert("Yay!");
              room=1;
              document.getElementById("exam_body").innerHTML = response;

          }
      });

  }

  function show_result(loader_msg) {

      program_id = document.getElementById("program_select").value;
      exam_id = document.getElementById("exam_select").value;
      subject_id = document.getElementById("subject_select").value;
      if (exam_id == 0) {
          alert("Please Select Exam");
          return;
      }

      $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              show_result: exam_id,
              subject_id_show: subject_id,
              program_id_show: program_id

          },
          beforeSend: function() {
              if(loader_msg=="yes")loader("exam_body");
          },
          success: function(response) {
              //alert("Yay!");
              document.getElementById("exam_body").innerHTML = response;

          }
      });

  }

  function update_result(id){
//alert("SAfd");
    mcq="update_mcq_"+id;
    mcq=document.getElementById(mcq).value;
    written="update_written_"+id;
    written=document.getElementById(written).value;

    $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              update_mark: id,
              update_mcq: mcq,
              update_written: written
          },

          beforeSend: function() {
              loader("ranklist_body");
          },
          success: function(response) {
              //alert("Yay!");
              close_loader("ranklist_body");
             show_result("no");
             hideModal();
             success('Sucessfully Update Exam Result');

          }
      });

  }




function delete_result(id){

  $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              delete_mark: id

          },
          beforeSend: function() {
              loader("ranklist_body");
          },
          success: function(response) {
              //alert("Yay!");

             show_result();
             hideModal();
             success('Sucessfully Delete Exam Result');

          }
      });
}



function send_sms(){
  
    program_id = document.getElementById("program_select").value;
    exam_id = document.getElementById("exam_select").value;
    subject_id = document.getElementById("subject_select").value;
    if (exam_id == 0) {
          alert("Please Select Exam");
          return;
    }

      $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              send_sms_exam: exam_id,
              send_sms_subject: subject_id,
              send_sms_program: program_id
          },

          beforeSend: function() {
              loader("exam_body");
          },

          success: function(response) {
              //alert("Yay!");
              document.getElementById("exam_body").innerHTML = response;

          }
      });

}


function send_sms_sending(){

      receive_by=document.getElementById("receive_by").value;
      exam_id = document.getElementById("exam_select").value;
      
      if (exam_id == 0) {
          alert("Please Select Exam");
          return;
      }
      if(receive_by==0){
        alert("Please Select Receiver");
        return;
      }

      $.ajax({
          type: 'POST',
          url: 'add_result_action.php',
          data: {
              send_sms_sending: exam_id,
              send_sms_sending_receive: receive_by
          },

          beforeSend: function() {
              loader("sms_body");
          },

          success: function(response) {
              //alert("Yay!");
              success('Sucessfully Send SMS');
              document.getElementById("sms_body").innerHTML = response;

          }
      });

}


function loader(divname){
  document.getElementById(divname).innerHTML = "<center><img style='margin-top:35px' src='upload/site_content/processing1.gif' /></center>";
}
function close_loader(divname){
  document.getElementById(divname).innerHTML = "";
}