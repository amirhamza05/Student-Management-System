function script_test(){
	alert("working");
}

function get_ajax(action_data,data){
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

            if(load==1)window.location.href = "";
            else document.getElementById(div).innerHTML=response;
        }
    });

}



function loader(divname,size=0){
  div_ob=document.getElementById(divname);
  img_size="";
  if(size!=0)img_size="height: "+size+"px; width:"+size+"px";
  img_url="src='upload/site_content/processing1.gif'";
  img_style="style='margin-top:35px"+img_size+"'";
  img="<center><img "+img_style+img_url+" /></center>";

  div_ob.innerHTML =img;
}

function btn_loader(btn){
 set_html(btn,"hello")
}


function get_value(div){
	val=document.getElementById(div).value;
	return val;
}

function set_html(div,val){
  document.getElementById(div).innerHTML=val;
}

function set_value(div,val){
  document.getElementById(div).value=val;
}

function get_checkbox_value(field_name){
  var checkboxes = document.getElementsByName(field_name);
  var vals = "";
  for (var i=0, n=checkboxes.length;i<n;i++) 
     {
        if (checkboxes[i].checked) 
        {
          vals += ","+checkboxes[i].value;
        }
   }

if (vals) vals = vals.substring(1);
return vals;
}


function print_action(url,width=1000,height=800){
  var w = width;
        var h = height;
        var left = Number((screen.width/2)-(w/2));
        var tops = Number((screen.height/2)-(h/2));

window.open(url, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+tops+', left='+left);
}

function print(divName){
    var printContents = document.getElementById(divName).innerHTML;
    w=1150;
    h=750;
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    myWindow=window.open('', '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);;
    myWindow.document.write(printContents);
    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();
  }