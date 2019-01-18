

function program(){
	program_id=document.getElementById('program_select').value;

	if(program_id==0){
		document.getElementById("batch").innerHTML = "<option>Select Batch</option>";
		return;
	} 
	 $.ajax({
          type: 'POST',
          url: 'student_list_action.php',
          data: {
              program_select: program_id              
          },
          beforeSend: function() {
              
          },
          success: function(response) {
           document.getElementById("batch_select").innerHTML = response;
          }
      });
}


function view(){
	program_id=document.getElementById('program_select').value;

	if(program_id==0){
		alert("Please Select Program");
		document.getElementById("program_dashboard").innerHTML = "";
		return;
	}

	$.ajax({
          type: 'POST',
          url: 'student_list_action.php',
          data: {
              view: program_id
          },
          beforeSend: function() {
              loader("program_dashboard");
          },
          success: function(response) {
           document.getElementById("program_dashboard").innerHTML = response;
           overview();
          }
      });

}

function overview(){
    
	program_id=document.getElementById('program_select').value;
  batch_id=document.getElementById('batch_select_id').value;
	
	$.ajax({
          type: 'POST',
          url: 'student_list_action.php',
          data: {
              overview: program_id,
              batch_id_ov: batch_id
          },
          beforeSend: function() {
              loader("overview_body");
          },
          success: function(response) {
           document.getElementById("overview_body").innerHTML = response;
          }
      });
}

function student_list(){
    program_id=document.getElementById('program_select').value;
    batch_id=document.getElementById('batch_select_id').value;

  $.ajax({
          type: 'POST',
          url: 'student_list_action.php',
          data: {
              student_list: program_id,
              batch_id: batch_id
          },
          beforeSend: function() {
              loader("student_body");
          },
          success: function(response) {
           document.getElementById("student_body").innerHTML = response;
           
          }
      });
}

function get_id_card(){

  program_id=document.getElementById('program_select').value;
  batch_id=document.getElementById('batch_select_id').value;

  $.ajax({
          type: 'POST',
          url: 'student_list_action.php',
          data: {
              get_id_card: program_id,
              batch_id: batch_id
          },
          beforeSend: function() {
              loader("id_card_body");
          },
          success: function(response) {
           document.getElementById("id_card_body").innerHTML = response;
          }
      });
}

function go_to_profile(id){
    st="student_profile.php?get_id=";
    url=st+id;
    var win = window.open(url, '_blank');
    win.focus();
}

function set_header(name){
 document.getElementById('profile_option').innerHTML=name;
}


function close_loader(divname){
  document.getElementById(divname).innerHTML = "";
}