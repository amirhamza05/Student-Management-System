
function select_program(){

program_id=document.getElementById("program").value;



 $.ajax({
        type: 'POST',
        url: 'student_add_ajax.php',
        data: {
            select_program: program_id
        },
        success: function(response) {
          //alert("Yay!");
            document.getElementById("batch").innerHTML =response;
            total_pament(program_id);
        }
    });

}
 
function total_pament(pid){
     $.ajax({
        type: 'POST',
        url: 'student_add_ajax.php',
        data: {
            total_pament: pid
        },
        success: function(response) {
          //alert("Yay!");
            document.getElementById("total").value =response;
            cal_advanced()
        }
    });
}


function cal_advanced(){
      $ad=document.getElementById("advenced").value;
      $total=document.getElementById("total").value;
      $due=$total-$ad;
      document.getElementById("due").value=$due;
}


function test(argument) {
	alert("work");
}

function attend(){

  id=document.getElementById("id").value;

 $.ajax({
        type: 'POST',
        url: 'student_add_ajax.php',
        data: {
            attend: id
        },
        beforeSend: function() {
          document.getElementById("load").innerHTML="Saving";
        },
        success: function(response) {
            //alert("Yay!");
            document.getElementById("id").value="";
            document.getElementById("load").innerHTML="Save Attendence";
            document.getElementById("msg").innerHTML =response;
            
            
            
        }
    });

}

function loader(){
    document.getElementById("looding").innerHTML="<div class='loader'></div>";
}
function close_loader(){
    document.getElementById("looding").innerHTML="";
}

function edit_student(id){
     $.ajax({
        type: 'POST',
        url: 'student_add_ajax.php',
        data: {
            edit_student: id
        },
        beforeSend: function() {
          //document.getElementById("load").innerHTML="Saving";
        },
        success: function(response) {
            //alert("Yaysd!");
            document.getElementById("edit_body").innerHTML=response;
 
        }
    });
}

