$(document).ready(function (e) {
  set_update_area();
  $("#update_profile").on('submit',(function(e) {
    e.preventDefault();
    $.ajax({
      url: "user_action.php",
      type: "POST",        
      data: new FormData(this), 
      contentType: false,  
      cache: false,             
      processData:false,      
      beforeSend: function() {
        document.getElementById("update_btn").disabled=true;
        document.getElementById("update_btn").innerHTML="<div class='lds-dual-ring'></div>";      
      },
      success: function(data){
        var data = JSON.parse(data);
        window.location.href = 'user_info.php?user_id='+data.id;
    }
     });
  })); 

});