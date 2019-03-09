url = "id_card_action.php";
modal_body = "modal_lg_body";
modal = "lg";

function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}

function load_id_card(){
	var data={
		"load_id_card": 1
	}
	loader("editor_card_body");
	get_ajax(get_action_data("editor_card_body"), data);
}

function click_option(btn){
	var data={
		"click_option": btn
	}
	get_ajax(get_action_data("editor_area"), data);
}

function test(){
	var slider = document.getElementById("myRange");
	slider.oninput = function() {
		console.log(this.value);
  		document.getElementById("img_card").style.borderRadius = this.value+"px";
	}
}

//drag_script
var dropTarget = document.querySelector(".wrapperr");
var draggables = document.querySelectorAll(".task");

/*
What to Drag - ondragstart and setData()
Then, specify what should happen when the element is dragged.

In the example above, the ondragstart attribute calls a function, 
drag(event), that specifies what data to be dragged.

The dataTransfer.setData() method sets the data type and the 
value of the dragged data:
*/

for(let i = 0; i < draggables.length; i++) {
  draggables[i].addEventListener("dragstart", function (ev) {
     ev.dataTransfer.setData("srcId", ev.target.id);
  });
}

/*
Where to Drop - ondragover
The ondragover event specifies where the dragged data can be dropped.

By default, data/elements cannot be dropped in other 
elements. 
To allow a drop, we must prevent the default handling of 
the element.

This is done by calling the event.preventDefault() method for 
the ondragover event:
*/

dropTarget.addEventListener('dragover', function(ev) {
  ev.preventDefault();
});

dropTarget.addEventListener('drop', function(ev) {
  ev.preventDefault();
  let target = ev.target;
  let droppable  = target.classList.contains('box');
  let srcId = ev.dataTransfer.getData("srcId");
  
  if (droppable) {
    ev.target.appendChild(document.getElementById(srcId));
  }
});
