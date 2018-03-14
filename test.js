function submit_prob1(){

res="5";
//alert("Yay!");
//document.getElementById("result").innerHTML="Loading";

   $.ajax({
        type: 'POST',
        url: 'contest_action.php',
        data: {
            timer: res
        },
      
        success: function(response) {
           
            //alert("Yay!");
          //var responseTextObject = jQuery.parseJSON(response.responseText);
          //alert(response);
        //window.location.href = 'addcust.php?new_sale=' + response;
            document.getElementById("problems").innerHTML=response; 
        }
    });

}

function timer_1(){
  res=5;

   $.ajax({
        type: 'POST',
        url: 'contest_action.php',
        data: {
            timer: res
        },
        beforeSend: function() {
          //document.getElementById("result").innerHTML="Submitting";
        },
        success: function(response) {
           // alert("Yay!");
        
            document.getElementById("timer").innerHTML=response;
  
            
        }
    });
} 

setInterval(function(){
     submit_prob1();
}, 1000);

    setInterval(function(){
     //timer_1();
}, 10000);

     
