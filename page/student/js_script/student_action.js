$(document).ready(function (e) {
  $("#add_student").on('submit',(function(e) {
    
    e.preventDefault();
    $.ajax({
      url: "student_action.php",
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



function loader(divname){
  document.getElementById(divname).innerHTML = "<center><img style='margin-top:35px' src='upload/site_content/processing1.gif' /></center>";
}

});

