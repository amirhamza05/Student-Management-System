
function send_sms(student_id){

 $.ajax({
        type: 'POST',
        url: 'sms_action.php',
        data: {
            send_sms: student_id
        },
         beforeSend: function() {
          document.getElementById("send_btn").disabled = true;
          document.getElementById("res").innerHTML ="<i class='fa fa-spinner fa-spin'></i> Sending";
        },
        success: function(response) {
          //alert("Yay!");
            document.getElementById("res").innerHTML =response;
            document.getElementById("send_btn").disabled = true;
            
        }
    });

}

function print_id_card(student_id){

link="print_id_card.php?student="+student_id;
//alert("hey");
 window.open(link, 'newwindow', 'width=900,height=600'); 
              return false;
}




