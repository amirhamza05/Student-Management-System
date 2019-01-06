$(document).ready(function (e) {
  //set_update_area();
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

function update_password(){
  
  $('#update_password').modal('show');

  load_old_pass();
}

function get_user_data(){
  uid=document.getElementById('uid').value;
  $.ajax({
          type: 'POST',
          url: 'user_action.php',
          data: {
              get_user_data: uid
          },
          beforeSend: function() {
              
          },
          success: function(data) {

              var data = JSON.parse(data);
              set_data_field(data);
          }
      });
}

function set_data_field(data){
  uid=document.getElementById('uid').value;
  set_data("up_id",uid);
  set_data("up_uname",data.uname);
  set_data("up_full_name",data.fname);
  set_data("up_email",data.email);
  set_data("up_phone",data.phone);
  var element = document.getElementById("up_gender");
    element.value = data.gender;
  set_data("up_address",data.address);
  document.getElementById("add_thumbnil").src=data.photo;
  
}

function set_data(id,text){
  document.getElementById(id).value=text;
}

function set_update_area(){
  uid=document.getElementById('uid').value;
  lid=document.getElementById('login_id').value;
  if(uid==lid)document.getElementById('update_area').style.display="block";
}

function load_old_pass(){
   $.ajax({
          type: 'POST',
          url: 'user_action.php',
          data: {
              pass_field: "old"
          },
          beforeSend: function() {
              loader("update_password_body");
          },
          success: function(response) {
              document.getElementById("update_password_body").innerHTML = response;
          }
      });
}


function next_step_press(){
  old_pass1=document.getElementById("old_pass").value;
  uid=document.getElementById('uid').value;
  $.ajax({
          type: 'POST',
          url: 'user_action.php',
          data: {
              uid:uid,
              old_pass: old_pass1
          },
          beforeSend: function() {
              loader("update_password_body");
          },
          success: function(data) {
            var data = JSON.parse(data);
            
            if(data.msg==1){
              document.getElementById("incorrect_pass").style.display="none";
              load_new_pass();
            }
            else{
              load_old_pass();
              document.getElementById("incorrect_pass").style.display="block";

            }
          }
      });
}

function load_new_pass(){
   $.ajax({
          type: 'POST',
          url: 'user_action.php',
          data: {
              pass_field: "new"
          },
          beforeSend: function() {
              loader("update_password_body");
          },
          success: function(response) {
              document.getElementById("update_password_body").innerHTML = response;
          }
      });
}

function save_password(){
  uid=document.getElementById('uid').value;
  pass=document.getElementById('new_pass1').value;
  pass2=document.getElementById('new_pass2').value;
  if(pass!=pass2){
    document.getElementById("update_pass_btn").disabled="true";
    return;
  }

   $.ajax({
          type: 'POST',
          url: 'user_action.php',
          data: {
              pass_user:uid,
              save_password: pass
          },
          beforeSend: function() {
              loader("update_password_body");
          },
          success: function(response) {
              $('#update_password').modal('hide');
              success("Password Is Successfully Updated");
          }
      });
}

function new_pass_in(){
  var btn = document.getElementById("update_pass_btn");
  pass1=document.getElementById("new_pass1").value;
  pass2=document.getElementById("new_pass2").value;
  val=pass1+pass2;
  if(pass1=="" && pass2=="") btn.disabled = true;
  else if(pass1!=pass2) btn.disabled = true;
  else btn.disabled = false;
}

function update_profile(){
  loader("loader_update");
$('#update_profile_modal').modal('show');
 get_user_data();
 close_loader("loader_update");
 document.getElementById("update_modal_area").style.display="block";
 
}


function loader(divname){
  document.getElementById(divname).innerHTML = "<center><img style='margin-top:35px' src='upload/site_content/processing1.gif' /></center>";
}
function close_loader(divname){
  document.getElementById(divname).innerHTML = "";
}

window.success = function(msg) {
    var dom = '<div class="top-alert"><div class="alert alert-success-alt alert-dismissable fade in " role="alert"><i class="glyphicon glyphicon-ok"></i> ' + msg + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div></div>';
    var jdom = $(dom);
    jdom.hide();
  $("body").append(jdom);
  jdom.fadeIn();
  setTimeout(function() {
    jdom.fadeOut(function() {
      jdom.remove();
    });
  }, 2000);
}