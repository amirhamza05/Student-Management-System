
var student_row_list=[];

function add_result(){
    var data={
        "add_result": get_value("total")
    }

    loader("add_result");
    get_ajax(get_action_data("add_result"), data);
}

function check_id(row_num){
    row_name="check_"+row_num;
    student_row_id_name="student_id_"+row_num;
    
    loader(row_name,25);
    student_id=get_value(student_row_id_name);

    if(student_id==""){
        set_html(row_name,"");
        student_row_list[row_num]=0;
        return; 
    }
    student_id=parseInt(student_id);
    if(student_id<10000){
        process_check_id_response(row_name,add_result_resonse_data_make("not_found"));
        student_row_list[row_num]=0;
        return;
    }

    var data={
        'check_id': student_id
    }

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {
            response=JSON.parse(response);
            error=response.error;
            if(error=="found")student_row_list[row_num]=1;
            else student_row_list[row_num]=0;
            process_check_id_response(row_name,add_result_resonse_data_make(error));
        }
    });
}

function process_check_id_response(row_name,response){
    style="style='color:"+response.color+"'";
    class_icon=" class='icon glyphicon glyphicon-"+response.icon+"'";
    title="title='"+response.title+"'";
    span="<span"+class_icon+style+title+"</span>"
    set_html(row_name,span); 
}

function add_result_resonse_data_make(error){
    

    
    color="green";
    icon="ok";
    title="Student ID Valid";
    
    if(error=="not_found"){
        color="red";
        icon="remove";
        title="Student ID Not Found";
    }
    else if(error=="already_added"){
        color="blue";
        icon="ok";
        title="Student ID Already Added";
    }
    else if(error=="found_but_not_program"){
        color="blue";
        icon="remove";
        title="Student ID Not in this program";
    }
    
    response=[];
    response['color']=color;
    response['icon']=icon;
    response['title']=title;
    return response;
}

function save_result(){

    var valid_list=[];

    for (let [key, value] of Object.entries(student_row_list)) {
            if(value==1)valid_list.push(key);
    }
    console.log(valid_list);

}