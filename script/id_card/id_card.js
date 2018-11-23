function program(){

program_id=document.getElementById("program_select").value;

  $.ajax({
        type: 'POST',
        url: 'id_card_action.php',
        data: {
            select_program: program_id
        },
        success: function(response) {
          //alert("Yay!");
            
            document.getElementById("batch_div").innerHTML =response;
            student_update();
            batch();
            preview_id_card();
        }
    });
}

function student_update(){

   program_id=document.getElementById("program_select").value;
   batch_id=document.getElementById("batch_select").value;
   student_id=document.getElementById("student_select").value;
//test();
   //alert("gjf");
   preview_id_card();
  
}

function update_random(){
  
}


function batch(){

  program_id=document.getElementById("program_select").value;
  batch_id=document.getElementById("batch_select").value;

   $.ajax({
        type: 'POST',
        url: 'id_card_action.php',
        data: {
            select_batch: batch_id,
            program_id:program_id
        },
        success: function(response) {
           //alert("Yay!");
            generate_button(program_id,batch_id,0);
            document.getElementById("student_div").innerHTML =response;
            student_update();
            preview_id_card();

            
        }
    });
}

function test(){
  alert("asf");
}

function generate_button(program_id,batch_id,student_id){
  program_id="program="+program_id+"&";
  student_id="student="+student_id;
  batch_id="batch="+batch_id+"&"
  link="print_id_card.php?"+program_id+batch_id+student_id;

   //alert(link);
  
}

function get_link(){

 program_id=document.getElementById("program_select").value;
 batch_id=document.getElementById("batch_select").value;
 student_id=document.getElementById("student_select").value;

  program_id="program="+program_id+"&";
  student_id="student="+student_id;
  batch_id="batch="+batch_id+"&"
  link="print_id_card.php?"+program_id+batch_id+student_id;
return link;
}


function preview_id_card(){
  program_id=document.getElementById("program_select").value;
  batch_id=document.getElementById("batch_select").value;
  student_id=document.getElementById("student_select").value;
  $.ajax({
        type: 'POST',
        url: 'id_card_action.php',
        data: {
            preview_id_card: program_id,
            batch_id:batch_id,
            student_id:student_id
        },
        beforeSend: function() {
              loader("preview_id_card");
          },
        success: function(response) {
          //alert("Yay!");
            close_loader("preview_id_card");
            document.getElementById("preview_id_card").innerHTML =response;
            
            
        }
    });


}

function print_id_card(){

link=get_link();
//alert("hey");
 window.open(link, 'newwindow', 'width=900,height=600'); 
              return false;
}

function loader(divname){
  document.getElementById(divname).innerHTML = "<center><img style='margin-top:35px' src='upload/site_content/processing1.gif' /></center>";
}
function close_loader(divname){
  document.getElementById(divname).innerHTML = "";
}