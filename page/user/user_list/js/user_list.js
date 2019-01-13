
url="user_action.php";
modal_body="list_body";
modal="md";


function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}



function add_user(){
  
  
  var data={
  	"add_user": 1
  }

  modal_open(modal, "Add User");
  loader("modal_md_body");
  get_ajax(get_action_data("modal_md_body"),data);
}

function get_user_list(type){
  bar_url="user_list.php?type="+type;
  window.history.pushState('', '', bar_url);
  
  var data={
  	"get_user_list": type
  }
  active_button();
  header="<span class='glyphicon glyphicon-user'></span> "+type+" User List";
  set_html("list_header",header);
  loader(modal_body);
  get_ajax(get_action_data(),data);

}


function active_button(){
  // Get the container element
var btnContainer = document.getElementById("btn_sidebar");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav_button");


// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    
    var current = document.getElementsByClassName("user_active");
    if (current.length > 0) { 
      current[0].className = current[0].className.replace(" user_active", "");
    }
    
    this.className += " user_active";
  });
}

}