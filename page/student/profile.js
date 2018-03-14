  function select(className){

    clear(className);
    title=title_name(className);
    set_header_title(title);
    ajax_enjin(className);

  }

  function ajax_enjin(className){

        $.ajax({
        type: 'POST',
        url: 'student_profile_action.php',
        data: {
            test: className
        },
        beforeSend: function() {
          //document.getElementById("result").innerHTML="Submitting";
        },
        success: function(response) {
           //alert("Yay!");
            document.getElementById("panel_body").innerHTML=response; 
        }
    });

  }



  function clear(className){
  	document.getElementById("exam").className="";
    document.getElementById("personal").className = "";
    document.getElementById("payment").className = "";
    document.getElementById("attends").className = "";
    document.getElementById(className).className = "active";
  }

  function set_header_title(title){
     document.getElementById("panel_title").innerHTML=title;

  }

  function title_name(className){
  	title="";
  	if(className=="exam")title="Exam Result";
  	else if(className=="personal")title="Personal Information";

  	return title;
  }

  function key(){
  	//alert("sdaf");
  	per=document.getElementById("select_level").value;
    var country = document.getElementById("select_level");
    country.options[country.options.selectedIndex].selected = false;

  	text=document.getElementById("editor").value;

  	var myElement = document.getElementById('editor');
    var startPosition = myElement.selectionStart;
    var endPosition = myElement.selectionEnd;

    var text1 = text.substring(0, startPosition);

    len=text.length;
    var text2= text.substring(startPosition, len);

    
    len1=text1+per;
    len1=len1.length;
  	text=text1+per+text2;
    document.getElementById("editor").value=text;

    setCaretToPos(myElement, len1);
    count_len();

  }

  function count_len(){
    
  	text=document.getElementById("editor").value;
  	len=text.length;
  	document.getElementById("len").innerHTML=len;
  }

  function test(){
  	alert("sdaf");
  }


  function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
  }
  else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
  }
}

function setCaretToPos (input, pos) {
  setSelectionRange(input, pos, pos);
}

function loader(divname){
  document.getElementById(divname).innerHTML = "<img src='https://public.udvash.com/Content/Image/ajax-loader.gif' />";
}
function close_loader(divname){
  document.getElementById(divname).innerHTML = "Sucess";
}



  function send_sms(){
   
  text=document.getElementById("editor").value;
  id=document.getElementById('student_id').value;
  recever=document.getElementById("recever").value;

if(recever==0){
  alert("Please Select Recever");
  document.getElementById("sms_res").innerHTML=0; 
  document.getElementById("sms_res").innerHTML=""; 
  return;
}
if(text==""){
  alert("Please Fill SMS Box");
  document.getElementById("sms_res").innerHTML=0; 
  document.getElementById("sms_res").innerHTML=""; 
  return;
}


   $.ajax({
        type: 'POST',
        url: 'student_profile_action.php',
        data: {
            send_sms: text,
            id: id,
            recever:recever
        },
        beforeSend: function() {
          loader("loader");
        },
        success: function(response) {
           //alert("Yay!");
           close_loader('loader');
            document.getElementById("sms_res").innerHTML=""; 
        }
    });

}
