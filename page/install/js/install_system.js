
url = "install_action.php";


function get_value(div){
  return document.getElementById(div).value;
}

function view_install_page(){
   var data={
   	'view_install_page': 1
   }
   document.getElementById('install_body').innerHTML="hamza";
    loader("install_body",160);

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
           document.getElementById('install_body').innerHTML=response;
        }
    });

}

function install_first_step(){
	div=document.getElementById('install_body');
	
   hostname=get_value("hostname");
   db_user=get_value("db_user");
   db_pass=get_value("db_pass");
   db_name=get_value("db_name");
   error="";
   if(hostname==""){
      error="Please Enter Host Name";
   }
   else if(db_user==""){
   	error="Please Enter db_user";
   }
   else if(db_name==""){
   	 error="Please Enter db_name";
   }


   if(error!=""){
   	alert(error);
   	return;
   }

   var data1={
   	 'hostname': hostname,
   	 'db_user': db_user,
   	 'db_pass':db_pass,
   	 'db_name':db_name
   }

	var data={
   	'install_first_step': data1
   }
    div.style.margin = "150px 0px 0px 0px";
	loader("install_body",250);

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
            document.getElementById('install_body').innerHTML=response;
        }
    });
}
