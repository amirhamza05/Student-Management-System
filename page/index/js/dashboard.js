url = "dashboard_action.php";
modal_body = "modal_lg_body";
modal = "lg";
first_load=0;
live_site_action_processing=0;


function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}


function live_site_action(){
   var data = {
        "live_site_action": 1
    }
    
    if(first_load==0)loader("site_activity");
    first_load=1;
    live_site_action_processing=1;
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {	
           set_html("site_activity",response);
           live_site_action_processing=0;
        }
    });
}

function get_activity_info(id){
    var data = {
        "get_activity_info": id
    }
    modal_open(modal, "Activity Detail");
    loader(modal_body);
    get_ajax(get_action_data(modal_body), data);
}


function reload_activity(id){
    var data = {
        "get_activity_info": id
    }
    loader(modal_body);
    get_ajax(get_action_data(modal_body), data);
}

setInterval(function(){ 
  if(live_site_action_processing==0)live_site_action(); 
}, 2000);