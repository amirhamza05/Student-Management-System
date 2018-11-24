url = "program_action.php";
modal_body = "modal_md_body";
modal = "md";

var action_data = {
    'url': url,
    'div': modal_body, 
    'load': 0
};


function get_program_form(type, id = 0) {
    if (type == "insert") {
        header = "Add program";
        data_key = "add_program_form";
        val = 1;
    } else if (type == "update") {
        header = "Update program";
        data_key = "update_program_form";
        val = id;
    } else {
        header = "Delete program";
        data_key = "delete_program_form";
        val = id;
    }

    modal_open(modal, header);
    loader(modal_body);

    var data = {
        [data_key]: val
    }
    action_data['div']="modal_md_body";

    get_ajax(action_data, data);
}


function select_year(pid){
    year=get_value("select_year");
    var data1 = {
        'program_id':pid, 
        'year': year
    }

    var data={
        'select_year': data1
    }

    action_data1=action_data;
    action_data1['div']="select_month";
    get_ajax(action_data, data);
}


function program_action(type, id = 0) {

    delete_type = 0;
    if (type == "insert") {
        data_key = "insert_program";
        val = 0;
    } else if (type == "update") {
        data_key = "update_program";
        val = id;
    } else {
        data_key = "delete_program";
        val = id;
        delete_type = 1;
    }

    if (delete_type == 0) {
        data_val = get_data(id);
        error = filter_data(data_val);
    } else {
        var data_val = {
            'id': val
        }
        error = 0;
    }

    var data = {
        [data_key]: data_val
    }

    if (error == 0) {
        action_data['load'] = 1;
        //console.log(data);

        loader(modal_body);
        get_ajax(action_data, data);
    }
}


function get_data(id) {
	type=get_value("program_type");
	fee=get_value("fee");
	fee=(fee=="")?0:fee;
	monthly_fee=get_value("monthly_fee");
	monthly_fee=(type==1)?0:monthly_fee;
	monthly_fee=(monthly_fee=="")?0:monthly_fee;

    var data_val = {
        'id': id,
        'name': get_value("name"),
        'start': get_value("start"),
        'end': get_value("end"),
        'type': type,
        'fee':fee,
        'monthly_fee':monthly_fee,
        'batch':get_checkbox_value('batch[]'),
        'subject':get_checkbox_value('subject[]')
    }

    return data_val;
}

function program_type_select(){
	type=document.getElementById('program_type').value;
    fee_div=document.getElementById('fee_area');
    monthly_fee_div=document.getElementById('monthly_fee_area');
    if(type==1){
      fee_div.style.display='block';
      monthly_fee_div.style.display='none';
    }
    else if(type==2){
      fee_div.style.display='block';
      monthly_fee_div.style.display='block';
    }
    else{
      fee_div.style.display='none';
      monthly_fee_div.style.display='none';
    }
}


function set_payment(id){
    data_key="set_payment_list";

    modal_open("lg", "Set Monthly Payment");
    loader("modal_lg_body");
    action_data1=action_data;
    action_data1['div']="modal_lg_body";
    
    var data1 = {
        'id': id
    }

    var data = {
        [data_key]: data1
    }

    get_ajax(action_data1, data);

}

function update_payment_input(id,fee){
   div="update_payment_area_"+id;
   data_key="payment_update_area";
   var data1={
      'id':id,
      'fee':fee
   }

   action_data1=action_data;
   action_data1['div']=div;

   loader(div,110);
   var data = {
        [data_key]: data1
    }
   get_ajax(action_data1, data);
}


function update_payment_save(id){
  fee="fee_input_"+id;
  div="update_payment_area_"+id;
  data_key="payment_update_save";

  fee=get_value(fee);

  if(fee==""){
    alert("Please Enter Fee");
    return;
  }

   var data1={
      'id':id,
      'fee':fee
   }

   action_data1=action_data;
   action_data1['div']=div;

   loader(div,110);
   var data = {
        [data_key]: data1
    }

   get_ajax(action_data1, data);


}

function set_payment_btn(id){
    data_key="set_payment_list";
    
    action_data1=action_data;
    action_data1['div']="modal_lg_body";
    
    year=get_value("select_year");
    month=get_value("select_month");

    if(year==-1){
        alert("Select Year");
        return;
    }
    if(month==-1){
        alert("Select Month");
        return;
    }

    loader("modal_lg_body");

    var data2={
       'month': month,
       'year': year
    }

    var data1 = {
        'id': id,
        'insert': data2
    }

    var data = {
        [data_key]: data1
    }

    get_ajax(action_data1, data);
}

function filter_data(data) {
    name = data['name'];
    start = data['start'];
    end = data['end'];


    error = 0;
    if (name == "") {
        alert("Enter program Name");
        error = 1;
    } else if (start == "") {
        alert("Enter program Start Time");
        error = 1;
    } else if (end == "") {
        alert("Enter program End Time");
        error = 1;
    }
    else if(data['type']==-1){
    	alert("Select Program Type");
        error = 1;
    }
    
    
    return error;
}