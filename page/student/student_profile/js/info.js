$(document).ready(function (e) {
  $("#update_student").on('submit',(function(e) {
    alert("d");
    e.preventDefault();
    $.ajax({
      url: "student_action1.php",
      type: "POST",        
      data: new FormData(this), 
      contentType: false,  
      cache: false,             
      processData:false,      
      beforeSend: function() {
      	document.getElementById('add_body').style.display="none";
      	loader("output");
      },
      success: function(data){
      	document.getElementById("add_student").reset();
      	var data = JSON.parse(data);
      	window.location.href = 'student_profile.php?get_id='+data.id;
        
    }
  });
}));

});

function info() {
  bar_url="student_profile.php?get_id="+student_id+"&tab=info";
   window.history.pushState('', '', bar_url);
  set_html("profile_option","Info Panel");

  var data = {
        "get_student_info": student_id
    }

    loader(body);
    get_ajax(get_action_data(body), data);
}

function update_profile_form(){
	var data = {
        "update_profile_form": student_id
    }

    modal_open("lg", "Payment");
    loader("modal_lg_body");
    get_ajax(get_action_data("modal_lg_body"), data);
}