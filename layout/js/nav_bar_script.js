
action_url="nav_bar_action.php";

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