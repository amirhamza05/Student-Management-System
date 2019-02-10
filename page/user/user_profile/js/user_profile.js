url = "user_action.php";
modal_body = "modal_md_body";
modal = "md";
var div_body="user_detail_body";
var user_id;
var photo_info = -1;

$(document).ready(function() {

    $(document).on('change', '#file', function() {
        photo_info = document.getElementById("file").files[0].name;
    });


});


var loadFile = function(event) {
                      var reader = new FileReader();
                      reader.onload = function(){
                      var output = document.getElementById('add_profile_pic');
                      output.src = reader.result;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                  };


function upload_profile_photo() {

    if (photo_info == -1) {
        alert("Please Select Photo");
        return;
    }

    var name = photo_info;
    var form_data = new FormData();
    var ext = name.split('.').pop().toLowerCase();

    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        alert("Invalid Image File");
        return;
    }

    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("file").files[0]);
    var f = document.getElementById("file").files[0];
    var fsize = f.size || f.fileSize;

    if (fsize > 2000000) {
        alert("Image File Size is very big");
        return;
    }

    form_data.append('user_id', user_id);
    form_data.append("file", document.getElementById('file').files[0]);
    
    loader("profile_upload_area");

    $.ajax({
        url: url,
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,

        beforeSend: function() {
            $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
        },

        success: function(data) {
            success("Successfully Update Profile Picture");
            window.location.href = "";

        }

    });


}

function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': _load
    }
    return data;
}


function set_user_id(id) {
    user_id = id;
}


function change_profile_photo() {

    var data = {
        "profile_photo_form": user_id
    }

    modal_open("sm", "Update Profile Picture");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);

}


function update_profile_form() {

    var data = {
        "update_profile_form": user_id
    }

    modal_open("md", "Update Profile");
    loader("modal_md_body");
    get_ajax(get_action_data("modal_md_body"), data);
}



function update_user_status_form(){
    var data = {
        "update_user_status_form": user_id
    }

    modal_open("sm", "Update User Status");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}

function update_user_status(status){
    var data1 = {
        "user_id": user_id,
        "status": status
    }
    var data = {
        "update_user_status": data1
    }
    loader("modal_sm_body");
    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        success: function(response) {   
           update_user_status_form();
        }
    });
    
}

function update_user_role_form(){
    var data = {
        "update_user_role_form": user_id
    }

    modal_open("sm", "Update User Role");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}

function update_user_role(){
    role=get_value("select_update_user_role");
    if(role==-1){
        alert("Please Select Role");
        return;
    }
    var data1 = {
        "user_id": user_id,
        "role": role
    }
    var data = {
        "update_user_role": data1
    }
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body",1), data);
}

function update_profile_info(){
    fname=get_value('fname');
    email=get_value('email');
    address=get_value('address');
    phone=get_value('phone');
   
    error="";
    if(fname=="")error="Enter Full Name";
    else if(email=="")error="Enter Email";
    else if(address=="")error="Enter Address";
    else if(phone=="")error="Enter Phone";
    
    if(error!=""){
        alert(error);
        return;
    }

    var data1={
        'id': user_id,
        'fname': fname,
        'email': email,
        'address': address,
        'phone': phone
    }
    var data={
        'update_profile_info': data1
    }

    loader("modal_md_body");
    get_ajax(action_data=get_action_data("modal_md_body",1), data);

}


function user_info() {

    var data = {
        "user_info": user_id
    }
    loader(div_body);
    get_ajax(get_action_data(div_body), data);

}

function user_activity(page=1) {
   
    var data1={
       "page": page,
       "user_id": user_id
    }

    var data = {
        "user_activity": data1
    }

    loader(div_body);
    get_ajax(get_action_data(div_body), data);

}

function change_profile_photo() {

    var data = {
        "profile_photo_form": user_id
    }

    modal_open("sm", "Update Profile Picture");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);

}


function change_password_form(){
    var data = {
        "change_password_form": user_id
    }

    modal_open("sm", "Update Password");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);
}
