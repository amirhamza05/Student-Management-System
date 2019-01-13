url = "user_action.php";
modal_body = "modal_md_body";
modal = "md";
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
        'load': 0
    }
    return data;
}


function set_user_id(id) {
    user_id = id;
}

function load_site_data() {

}

function load_profile_photo() {

    var data = {
        "load_profile_photo": 1
    }
    img = document.getElementById('load_profile_photo');
    img.src = "upload/site_content/loader1.gif";
    
    var data={
      "load_profile_photo": user_id
    }

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        beforeSend: function() {
        },
        success: function(response) {
            img.src=response;  
        }
    });

}

function load_cover_photo() {

    var data = {
        "load_cover_photo": 1
    }
    img = document.getElementById('load_cover_photo');
    img.src = "upload/site_content/loader1.gif";

    loader("load_cover_photo", 45);
    return;
    get_ajax(get_action_data("load_profile_photo"), data);
}


function change_profile_photo() {

    var data = {
        "profile_photo_form": user_id
    }

    modal_open("sm", "Update Profile Picture");
    loader("modal_sm_body");
    get_ajax(get_action_data("modal_sm_body"), data);

}


function add_user() {


    var data = {
        "add_user": 1
    }

    modal_open(modal, "Add User");
    loader("modal_md_body");
    get_ajax(get_action_data("modal_md_body"), data);
}

function get_user_list(type) {
    bar_url = "user_list.php?type=" + type;
    window.history.pushState('', '', bar_url);

    var data = {
        "get_user_list": type
    }
    active_button();
    header = "<span class='glyphicon glyphicon-user'></span> " + type + " User List";
    set_html("list_header", header);
    loader(modal_body);
    get_ajax(get_action_data(), data);

}