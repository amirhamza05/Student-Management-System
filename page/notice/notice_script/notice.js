function program(){

program_id=document.getElementById("program_select").value;

  $.ajax({
        type: 'POST',
        url: 'notice_action.php',
        data: {
            select_program: program_id
        },
        success: function(response) {
          //alert("Yay!");
            
            document.getElementById("batch_div").innerHTML =response;
            batch();
            
        }
    });
}

function batch(){

  program_id=document.getElementById("program_select").value;
  batch_id=document.getElementById("batch_select").value;

   $.ajax({
        type: 'POST',
        url: 'notice_action.php',
        data: {
            select_batch: batch_id,
            program_id:program_id
        },
        success: function(response) {
           //alert("Yay!");
            
            document.getElementById("student_div").innerHTML =response;
  
        }
    });
}

function send_btn(id){
    document.getElementById("notice_id").value=id;

    $.ajax({
        type: 'POST',
        url: 'notice_action.php',
        data: {
            send_body: id
        },
        success: function(response) {
          //alert(response);
            document.getElementById('send_body').innerHTML=response;
        }
    });
  
}
function send_sms(){
    
 program_id=document.getElementById("program_select").value;
 batch_id=document.getElementById("batch_select").value;
 student_id=document.getElementById("student_select").value;
 notice=document.getElementById("notice_id").value;
 recever=document.getElementById("select_receive").value;
 if(recever==0){
    alert("Please select recever");
    return;
 }
    $.ajax({
        type: 'POST',
        url: 'notice_action.php',
        data: {
            s_program_id: program_id,
            batch_id: batch_id,
            student_id: student_id,
            notice: notice,
            recever: recever

        },
        beforeSend: function() {
              loader1("sms_report");
          },
        success: function(response) {
            //alert("hey");
            close_loader1('sms_report');
            document.getElementById('sms_report').innerHTML=response;
        }
    });
}

function save_notice(){

title=document.getElementById("title").value;
notice=document.getElementById("editor").value;
if(title==""){
    alert("Please Enter Title");
    return;
}
if(notice==""){
    alert("Please Write Something Editor");
    return;
}
$('#myModal').modal('hide');
  $.ajax({
        type: 'POST',
        url: 'notice_action.php',
        data: {
            save_notice: title,
            notice : notice

        },
         beforeSend: function() {
              loader1("sms_body_list");
          },
        success: function(response) {
          //alert("hey");
            close_loader1('sms_body_list');
            document.getElementById('sms_body_list').innerHTML=response;

        }
    });
}

function send_notice_pre(id){
    document.getElementById("notice_id").value=id;
}

function send_notice(){
    notice=document.getElementById("notice_id").value;
}

function loader1(divname){
  document.getElementById(divname).innerHTML = "<center><img style='margin-top:35px; ' src='upload/site_content/processing1.gif' /></center>";
}
function close_loader1(divname){
  document.getElementById(divname).innerHTML = "";
}