function fun(){
		
		document.getElementById("color_code").innerHTML="4548";
		alert("d");
	}  CCCC 
	function setTextColor(picker) {
		color='#' + picker.toString();
		//document.getElementById("card_header").innerHTML="hello";
        console.log(color);
		document.getElementById("header_name10").value="4548";
		set_color('card_header',color);
	}


	function set_color(div,color){
       $('.'+div).css({"background-color":color});
	}