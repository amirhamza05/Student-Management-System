
action_url="nav_bar_action.php";

function sql_editor(){
    var data = {
        "sql_editor": 1
    }
    modal_open("lg", "SQL Editor");
    loader("modal_lg_body");
    $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           set_html("modal_lg_body",response);
        }
    });  
}
function sql_editor_run(){
  sql=get_value("sql_editor");
  var data = {
        "sql_editor_run": sql
  }
  loader("sql_editor_output");
  $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           set_html("sql_editor_output",response);
        }
  });  

}

function live_chat_nav(){

    var data = {
        "live_chat_nav": 1
    }
    modal_open("sm", "Live Chat");
    loader("modal_sm_body");
    
    $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           set_html("modal_sm_body",response);

           load_chat_body_data();
        }
    });   

}

function load_chat_body_data(){
  
  var data = {
        "load_chat_body_data": 1
  }
  
  loader("message_body",120);
    $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           set_html("message_body",response);
           var box = document.getElementById('message_body');
           box.scrollTop = box.scrollHeight;
        }
    });  
}

function send_message_chat(){
  message=get_value("message");
  if(message==""){
    alert("Enter Message");
    return;
  }
  var data1={
    "message": message
  }
  var data={
    "send_message_chat": data1
  }
  document.getElementById("message").value="";
  loader("message_body");


  $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           load_chat_body_data();
        }
    }); 

}


function student_info_nav_bar(){

    var data = {
        "student_info_nav_bar": 1
    }
    modal_open("sm", "Student Quick Access");
    loader("modal_sm_body");
    
    $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           set_html("modal_sm_body",response);
        }
    });   

}

function sms_state_nav(){

  var data = {
        "sms_state_nav": 1
    }
    modal_open("md", "SMS Statistics");
    loader("modal_md_body");
    $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           set_html("modal_md_body",response);
        }
    }); 
}

function nav_bar_student_action(type){
    var data = {
        "nav_bar_student_action": type
    }
    
    loader("modal_sm_body");
    $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           set_html("modal_sm_body",response);
        }
    });   
}

function nav_bar_student_final_action(type){
      id=get_value("student_id");
      error="";
      if(id=="")error="Please Enter Student ID";
      if(error!=""){
        alert(error);
        return;
      }
      
      type=(type==1)?"info":"payment";
      url="student_profile.php?get_id="+id+"&tab="+type;
      window.history.pushState('', '', url);
      window.location.href = "";
      
}