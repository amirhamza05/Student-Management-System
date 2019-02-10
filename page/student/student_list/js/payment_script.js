
var payment_type=1,payment_month=0,payment_year=0;

function select_payment_type(){
	type=get_value("payment_type");
	var div,data;
	if(type==1){
		div="payment_panel_body";
		payment_year=0;
		payment_month=0;
		payment_type=1;
		show_payment_panel();
		set_html("payment_month_area","");
	}
	else if(type==2){
		div="payment_month_area";
		var data={
    		"select_monthly_program": program_id
    	}
    	set_html("payment_panel_body","");
	}
	else{
		set_html("payment_month_area","");
		set_html("payment_panel_body","");
		return;
	}
	loader(div);
	
    get_ajax(get_action_data(div), data);
}

function select_payment_year(){
	year=get_value("payment_year");

	var data1={
		"year": year,
		"program_id": program_id
	}

	var data={
    		"select_payment_year": data1
    }
	get_ajax(get_action_data("payment_month"), data);
}
 
function select_payment_month(){
	month=get_value("payment_month");
	if(month==-1){
		set_html("payment_panel_body","");
	}
	else{
		payment_year=get_value("payment_year");
		payment_month=get_value("payment_month");
		payment_type=2;
		show_payment_panel();
	}
}


function show_payment_panel(){
	div="payment_panel_body";
		var data={
    		"payment_panel": program_id
    	}

    	loader(div);
    	$.ajax({
        	type: 'POST',
        	url: url,
        	data:data,
        	success: function(response) {
           		set_html(div,response);
           		get_payment_option("payment_option_overview");
           
        	}
    	});  
}

function get_payment_option(category) {
	var data1={
		"payment_type": payment_type,
		"year": payment_year,
		"month": payment_month,
		"program_id":program_id,
		"batch_id": batch_id
	}
	var data={};
	data[category]= data1;
	loader("payment_overview_body");
	get_ajax(get_action_data("payment_overview_body"), data);
	
}

function get_list_payment(status){
	var data1={
		"payment_type": payment_type,
		"year": payment_year,
		"month": payment_month,
		"program_id":program_id,
		"batch_id": batch_id,
		"status": status
	}
	header=status+" Student List";
	set_html("payment_overview_header",header);
	var data={};
	data["get_list_payment"]= data1;

	loader("payment_overview_body");
	get_ajax(get_action_data("payment_overview_body"), data);
}

function view_payment_history(payment_id){
	modal_open("lg", "Payment Received History");
	loader("modal_lg_body");
    var data={
    	"view_payment_history": payment_id
    }
    get_ajax(get_action_data("modal_lg_body"), data);
}

function program_overview_send_sms(){
	var status=get_value("sms_payment_type");
	var receiver=get_value("select_receiver");
	var last_payment_date=get_value("last_payment_date");
	if(status==0){
		alert("Select Payment Status Type");
		return;
	}
	else if(receiver==-1){
		alert("Select Receiver");
		return;
	}
	var data1={
		"payment_type": payment_type,
		"year": payment_year,
		"month": payment_month,
		"program_id":program_id,
		"batch_id": batch_id,
		"status": status,
		"receiver": receiver,
		"last_payment_date": last_payment_date
	}
	var data={
    	"program_overview_send_sms": data1
    }
    loader("sms_info_area");
    get_ajax(get_action_data("sms_info_area"), data);
}