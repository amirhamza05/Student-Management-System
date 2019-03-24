
action_url="nav_bar_action.php";


function get_theme_list(){
  modal_open("lg", "Theme");
  loader("modal_lg_body");

  var data={
  	'get_theme_list':1
  }

  $.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
           set_html("modal_lg_body",response);
        }
    });  
}

function change_theme(theme_id){
	loader("modal_lg_body");
	var data={
  		'change_theme':theme_id
  	}
  	$.ajax({
        type: 'POST',
        url: action_url,
        data:data,
        success: function(response) {
        	set_html("theme_color",response);
           	get_theme_list();
        }
    });  

}