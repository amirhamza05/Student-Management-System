





function nav_bar_student() {

    var data = {
        "nav_bar_student": 1
    }
    var action_data1 = {
        'url': "nav_bar_action.php",
        'div': "modal_sm_body",
        'load': 0
    }

    modal_open("sm", "Student");
    loader1("modal_sm_body");
    //nav_ajax(action_data1, data);
}

function nav_ajax(action_data,data){
  url=action_data['url'];
  div=action_data['div'];
  load=action_data['load'];
  
  $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
            document.getElementById(div).innerHTML=response;
        }
    });

}