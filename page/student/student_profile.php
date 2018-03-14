 
<style type="text/css">
    
 .modal-backdrop
{
    opacity:0.9 !important;
} 


</style>

<?php
$id=$_GET['get_id'];
foreach ($student as $key => $info) {
  $sid=$info['id'];
 $image=$info['photo'];
 $name=$info['name'];
 $nick=$info['nick'];
 $father_name=$info['father_name'];
 $mother_name=$info['mother_name'];

  if($sid==$id){



?>

<!-- nav bar -->

<div class="container">
<div class="row">
    <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <center><div class="profile-userpic">
                    <img src="<?php echo "$image"; ?>" alt="">
                </div>
                </center>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?php echo "$name"; ?>
                    </div>
                    <div class="profile-usertitle-job">
                        ID: <?php echo "$id"; ?>
                        <input type="text" name="id" id="student_id" value="<?php echo "$id"; ?>" hidden>
                    </div>
                </div>

            </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <button type="button" class="btn btn-danger btn-block btn-compose-email" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Send SMS</button>

       
        <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
            <li id="personal" class="active" onclick="select('personal')">
                <a href="#">
                    <i class="fa fa-inbox"></i> Personal Information  <span class="label pull-right">7</span>
                </a>
            </li>
            <li id="exam" onclick="select('exam')">
                <a href="#mail-compose.html"><i class="fa fa-envelope-o"></i> Exam Result</a>
            </li>
            <li id="attends" onclick="select('attends')">
                <a href="#"><i class="fa fa-certificate"></i> Attendends</a>
            </li>
            <li id="payment" onclick="select('payment')">
                <a href="#">
                    <i class="fa fa-file-text-o"></i> Payment <span class="label label-info pull-right inbox-notification">35</span>
                </a>
            </li>
            <li><a href="#"> <i class="fa fa-trash-o"></i> ID Card</a></li>
        </ul><!-- /.nav -->

         <!-- END MENU -->
            
            
        </div>
    <div class="col-sm-7">
        <!--  statitics -->
         <!--  statitics -->
        <div class="panel rounded shadow panel-teal">
            <div class="profile_box_header" id="panel_title">
               Personal Information
            </div><!-- /.panel-heading -->
            
            <div class="panel-body no-padding" id="panel_body">
                
                 <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>
</div>






<div class="modal large fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #414959; color: #ffffff">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel">Send Message</h4>
        </div>
        <div class="modal-body" style="background-color: #3D3D3D; margin-bottom: -15px ">


  <div class="editor_boxx">
  <div class="editor_header">


 <select class="form-control" style="background: #424242; color: #ffffff" id="select_level" onchange="key()" style="" >
  <option value="" selected="">Select Action</option>
  <?php $sms->get_syntext(); ?>
</select>

  
  </div>
  <div class="editor_body">
  
  <textarea id="editor" onkeyup="count_len()" class="editor_area" rows="7" cols="7" placeholder=""></textarea>
  </div>
  <div id="sms_res" style="color: #000000"></div>
</div>


        </div>

        <div class="modal-footer" style="background-color: #414959; color: #ffffff">
        <div class="btn btn-primary" style="margin-right: 80px;" id="len">0</div>

        <div class="btn btn-primary" style="margin-right: 60px;" id="loader"></div>
        
        <select class="btn btn-primary" id="recever">
          <?php $sms->get_sms_recever_option(); ?>
        </select>

        <button type="button" onclick="send_sms()" class="btn btn-primary">Send message</button>
      </div>
       
      </div>
    </div>
</div>
  



<script>
    document.getElementById("trigger").addEventListener("click", function(){
        var myElement = document.getElementById('text-element');
        var startPosition = myElement.selectionStart;
        var endPosition = myElement.selectionEnd;
        
        // Check if you've selected text
        if(startPosition == endPosition){
            alert("The position of the cursor is (" + startPosition + "/" + myElement.value.length + ")");
        }else{
            alert("Selected text from ("+ startPosition +" to "+ endPosition + " of " + myElement.value.length + ")");
        }
    },false);



</script>

<?php
}

}


?>