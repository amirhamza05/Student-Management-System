function select_program() {
	
program_id=document.getElementById("add_program_select").value;
//alert(program_id);

    $.ajax({
      type: 'POST',
        url: 'exam_action.php',
        data: {
            select_subject: program_id
        },
        success: function(response) {
          //alert("Yay!");
            document.getElementById("subject_field").innerHTML =response;
            
        }
    });

}

function select_program_id(id){
	div_sub="subject_field_"+id;
	div_pro="update_program_id_"+id;
	program_id=document.getElementById(div_pro).value;
	make="update_select_subject_"+id;
   // alert(program_id);

    $.ajax({
      type: 'POST',
        url: 'exam_action.php',
        data: {
            select_subject_id: program_id,
            select_id:id
        },
        success: function(response) {
          //alert("Yay!");

            document.getElementById(make).innerHTML =response;

            document.getElementById(div_id).value="";
            
            
        }
    });
}


function select_subject(id){

	div_id="update_subject_id_"+id;
	sub_id="update_select_subject_"+id;

	subject_id=document.getElementById(sub_id).value;
	//alert(subject_id);
	document.getElementById(div_id).value=subject_id;
}

function total(){
	mcq=document.getElementById("mcq").value;
	written=document.getElementById("written").value;
	total=mcq+written;
	document.getElementById("total").value=total;
}

function test(id){
	alert("saf");
	m_id="test_"+id;
	document.getElementById(m_id).innerHTML="<option>hamza</option>";
}