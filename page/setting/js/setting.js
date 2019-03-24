url = "setting_action.php";
modal_body = "modal_lg_body";
modal = "lg";

var program_id,batch_id,date;

$(document).ready(function (e) {
  $("#update_info").on('submit',(function(e) {
    document.getElementById("update_btn").disabled=true;
    document.getElementById("update_btn").innerHTML="<div class='lds-dual-ring'></div>";
    e.preventDefault();
    $.ajax({
      url: url,
      type: "POST",        
      data: new FormData(this), 
      contentType: false,  
      cache: false,             
      processData:false,      
      success: function(data){
          success('Successfully Update Site Info');
          document.getElementById("update_btn").disabled=false;
          set_html("update_btn","<span class='glyphicon glyphicon-refresh'></span> Update Information");
          //document.getElementById("res").innerHTML=data;
         // window.location.href = '';
          
      }
  });
})); 

});

function reset_main_logo(){
    var data = {
        "reset_main_logo": 1
    }
    document.getElementById("reset_main_logo").innerHTML="<div class='lds-dual-ring'></div>";
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           window.location.href = '';  
        }
    }); 

}

function reset_logo(){
    var data = {
        "reset_logo": 1
    }
    document.getElementById("reset_logo").innerHTML="<div class='lds-dual-ring'></div>";
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           window.location.href = '';  
        }
    }); 

}

