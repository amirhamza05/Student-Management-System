function roll_find(){

 id=document.getElementById("id").value;



 $.ajax({
        type: 'POST',
        url: 'result_action.php',
        data: {
            student_id: id
        },
        beforeSend: function() {
          loader("loading");
        },
        success: function(response) {
           //alert("Yay!");
            document.getElementById("select_subject").innerHTML =response;
            document.getElementById("select_exam").innerHTML ="<option value='0'>--Select Exam--</option>";
            close_loader("loading");
        }
    });
}


function exam_find(){
    sub_id=document.getElementById("select_subject").value;
    student_id_select=document.getElementById("id").value;
     $.ajax({
        type: 'POST',
        url: 'result_action.php',
        data: {
            subject_id_select: sub_id,
            student_id_select:student_id_select
        },
       
        success: function(response) {
            //alert("Yay!");
            document.getElementById("select_exam").innerHTML =response;
           
            //id_cheak(id);
        }
    });

}


function show_result(){
    result_exam=document.getElementById("select_exam").value;
    student_id_result=document.getElementById("id").value;

 if(result_exam==0){
    alert("Please Select Exam");
    return;
 }

     $.ajax({
        type: 'POST',
        url: 'result_action.php',
        data: {
            result_exam: result_exam,
            student_id_result:student_id_result
        },
        beforeSend: function() {
          loader("result");
        },
      
        success: function(response) {
            //alert("Yay!");
            close_loader("result")
            document.getElementById("result").innerHTML =response;
            
            //id_cheak(id);
        }
    });
}

function id_cheak(id){

	$.ajax({
        type: 'POST',
        url: 'result_action.php',
        data: {
            id_cheak: id
        },
        success: function(response) {
            //alert("Yay!");
            document.getElementById("cheikh").innerHTML =response;
        }
    });
}


function loader(divname){
	document.getElementById(divname).innerHTML = "<img src='https://public.udvash.com/Content/Image/ajax-loader.gif' />";
}
function close_loader(divname){
	document.getElementById(divname).innerHTML = "";
}