<button onclick="test_pos()">Test</button>
<div id="exam_panel_body"></div>
<script src="style/lib/jquery-1.11.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src=""></script>
<script type="text/javascript">
function test_pos(){

    var data={
        "get_student_info": 10001
    }
    url="http://localhost/project/youth/student_profile_action.php";

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success:function(responce){
            document.getElementById('exam_panel_body').innerHTML=responce;
        }
    })
}
</script>