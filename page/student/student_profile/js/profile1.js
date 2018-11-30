
id=document.getElementById("student_id").value;

function personal_info(){
	set_header("Personal Info");
	get_data("personal_info");
}

function program(){
	set_header("Program");
	get_data("program");
}

function payment(){
	set_header("Payment");
	get_data("payment");
}

function result(){
	set_header("Result");
	get_data("result");
}
function message(){
	set_header("Message");
	get_data("message");
}

function add_program(){

      $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              add_program: id
          },
          beforeSend: function() {
              loader("add_program_body");
          },
          success: function(response) {
              document.getElementById("add_program_body").innerHTML = response;
          }
      });
}


function view_payment_month_info(){
  $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              view_payment_month_info: 1
          },
          beforeSend: function() {
              loader("panel_profile_body");
          },
          success: function(response) {
              document.getElementById("panel_profile_body").innerHTML = response;
          }
      });
}

function get_data(per){

      $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              student_profile: per,
              student_id: id
          },
          beforeSend: function() {
              loader("panel_profile_body");
          },
          success: function(response) {
              document.getElementById("panel_profile_body").innerHTML = response;
          }
      });
}


function save_program(){
  program_id=document.getElementById("select_program1").value;
  program_id=parseInt(program_id);
  batch_id=document.getElementById("select_batch").value;
  batch_id=parseInt(batch_id);
  fee1=document.getElementById("fee").value;
  fee=parseInt(fee1);
  if(batch_id==-1){
    alert("Please Select Batch");
    return;
  }
  if(fee1==""){
    alert("Please Fill Fee Box");
    return;
  }

  $('#add_program').modal('hide');
  //open_dilog_view_program(15);

  $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              save_program: id,
              program_id: program_id,
              batch_id: batch_id,
              fee: fee
          },
          beforeSend: function() {
              loader("add_program_body");
          },
          success: function(response) {
            program();
            success("Successfully Add New Program");
             // document.getElementById("add_program_body").innerHTML = response;
          }
      });

  
}

function open_dilog_delete(id){
  $('#delete_program').modal('show');
  document.getElementById("delete_id").value=id;
}
function delete_program(){
  
  program_id=document.getElementById("delete_id").value;
  $('#delete_program').modal('hide');
   $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              delete_program: program_id
          },
          beforeSend: function() {
              
          },
          success: function(response) {
               program();
               success("Successfully Delete Program");

          }
      });

   
}

function edit_program(admit_id){
  $('#edit_program').modal('show');
  edit_program_action(admit_id,"no update");
}

function edit_program_action(admit_id,msg=""){

   $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              edit_program: admit_id
          },
          beforeSend: function() {
              loader("edit_program_body");
          },
          success: function(response) {
              document.getElementById("edit_program_body").innerHTML = response;
          }
      });

    if(msg=="updatee")
      document.getElementById("msg").innerHTML="<center>Secesscessfully Update</center>";
    else 
      document.getElementById("msg").innerHTML="";

  }


function update_program(admit_id){

batch_id=document.getElementById("edit_batch_id").value;
fee1=document.getElementById("edit_fee").value;
fee=parseInt(fee1);
if(batch_id==-1){
 alert("Please Select Batch");
  return;
}
if(fee1==""){
  alert("Please Fill Fee Box");
  return;
}
$('#edit_program').modal('hide');
   $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              update_program: admit_id,
              update_batch_id:batch_id,
              update_fee: fee
          },
          beforeSend: function() {
              loader("panel_profile_body");
          },
          success: function(response) {
              //document.getElementById("edit_program_body").innerHTML = response;
              //edit_program_action(admit_id,"update");
              
              program();
              success("Successfully Updated Program");

          }
      });

}
function open_dilog_view_program(program_id){
  $('#view_program').modal('show');
  $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              view_program: program_id
          },
          beforeSend: function() {
              loader("view_program_body");
          },
          success: function(response) {
              document.getElementById("view_program_body").innerHTML = response;
          }
      });
}

function add_batch(){

  program_id=document.getElementById("select_program1").value;
  program_id=parseInt(program_id);
  if(program_id==-1){
    document.getElementById("add_batch_field").innerHTML = "";
  return;
  }

      $.ajax({
          type: 'POST',
          url: 'student_profile_action.php',
          data: {
              add_batch: program_id
          },
          beforeSend: function() {
              loader("add_batch_field");
          },
          success: function(response) {
              document.getElementById("add_batch_field").innerHTML = response;
          }
      });
}


function set_header(name){
 document.getElementById('profile_option').innerHTML=name;
}

function loader(divname){
  document.getElementById(divname).innerHTML = "<center><img style='margin-top:35px' src='http://localhost/project/youth/upload/site_content/processing1.gif' /></center>";
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

//setInterval(personal_info, 2000);
setTimeout(personal_info, 100);

