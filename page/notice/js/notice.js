
url="notice_action.php";
modal_body="modal_md_body";
modal="md";

var action_data={
  	'url':url,
  	'div':modal_body,
  	'load':0
};

function send_sms_form(id){
  modal_open(modal,"Send SMS");
  loader(modal_body);

  var data={
      "send_sms_form":id
  }

  get_ajax(action_data,data);
}

function select_program(){
  program_id=get_value("program_select");
  
  var data = {
        "select_program": program_id
    }

    loader("loader_select",40);

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           set_html("loader_select","");
           set_html("batch_select_id",response);
        }
    });
}

function send_sms(id){
  program_id=get_value("program_select");
  batch_id=get_value("batch_select_id");
  recever=get_value("recever");
  if(program_id==-1){
    alert("Select Program");
    return;
  }
  else if(recever==-1){
    alert("Select Recever");
    return;
  }

  var data1={
    "program_id": program_id,
    "batch_id":batch_id,
    "notice_id": id,
    "recever": recever
    
  }

  loader(modal_body);


  var data={
    "send_sms":data1
  }

  get_ajax(action_data,data);
}

 
function get_notice_form(type,id=0){
  if(type=="insert"){
  	header="Add Notice";
  	data_key="get_notice_form";
    val=1;
  }
  else if(type=="update"){
  	header="Update Notice";
  	data_key="update_notice_form";
    val=id;
  }
  else{
    header="Delete Notice";
    data_key="delete_notice_form";
    val=id;
  }

  modal_open(modal,header);
  loader(modal_body);

  var data={
    [data_key]:val
  }

  get_ajax(action_data,data);
}


function notice_action(type,id=0){
  
  delete_type=0;
  if(type=="insert"){
    data_key="insert_notice";
    val=0;
  }
  else if(type=="update"){
    data_key="update_notice";
    val=id;
  }
  else{
    data_key="delete_notice";
    val=id;
    delete_type=1;
  }

  if(delete_type==0){
    var data_val={
      'id':val,
      'title': get_value("title"),
    	'description':get_value("editor")
    }
    error=filter_data(data_val);
  }
  else{
    var data_val={
      'id':val
    }
    error=0;
  }
    
    var data={
    	[data_key]:data_val
    }
	
	if(error==0){
         action_data['load']=1;
         loader(modal_body);
         get_ajax(action_data,data);
	}
}




function filter_data(data){
	title=data['title'];
	description=data['description'];
	error=0;
	if(title==""){
		alert("Enter Notice Title");
        error=1;
	}
	else if(description==""){
		alert("Enter Notice Description");
		error=1;
	}
	return error;
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
    len_sms=Math.ceil(len/160);
    document.getElementById("len_text").innerHTML=len;
    document.getElementById("len_sms").innerHTML=len_sms;
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

