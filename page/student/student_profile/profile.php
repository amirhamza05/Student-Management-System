



<?php

if(isset($_GET['get_id'])){
$flag=0;
$id=$_GET['get_id'];
foreach ($student as $key => $info) {
  $sid=$info['id'];
 $photo=$info['photo'];
 $name=$info['name'];
 $nick=$info['nick'];


if($sid==$id){
$flag=1;

 ?>
 <script type="text/javascript">
   $(document).ready(function() {
           $('table.display').DataTable();
      } );
 </script>


<div class="row">
  <div class="col-md-3 about_profile">
    <div class="profile_header">Profile</div>
    
  <div class="about_profile_body" style="text-align: center;">
    <img src="<?php echo "$photo" ?>" class="img_side">
    <div class="info_side">
      <div style="margin-top: 10px;"></div>
      <table width="100%">
        <tr>
          <td class="td_profile1">Full Name:</td>
          <td class="td_profile2"><?php echo "$name" ?><br/></td>
        </tr>
         <tr>
          <td class="td_profile1">Nick:</td>
          <td class="td_profile2"><?php echo "$nick" ?></td>
        </tr>
        <tr>
          <td class="td_profile1">ID:</td>
          <td class="td_profile2"><?php echo "$id" ?></td>
        </tr>
        <tr>
          <td class="td_profile1">ID Code:</td>
          <td class="td_profile2">
            <img src="barcode.php?text=<?php echo "$id" ?>" style="width: 100%" />
          </td>
        </tr>
      </table>
      
    </div>

  </div>
</div>

  <div class="col-md-8 panel_profile">
    
    <div style="position: static;">
<section class="buttons">
<div class="containerr">
<div class="row">
<div class="col-sm-12">
<div class="text-center" style="">

<div onclick="info()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Info</p>
</div>

<div onclick="program()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Program</p>
</div>

<div onclick="payment()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Payment</p>
</div>

<div onclick="result()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Result</p>
</div>

<div onclick="message()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Message</p>
</div>

</div>

</div>
</div>
</div>
</section>
</div>

    <div class="profile_header" id="profile_option">
    </div>
    <div class="panel_profile_body" id="panel_profile_body"></div>
  </div>
  
</div>

<input type="text" value="<?php echo "$id" ?>" id="student_id" hidden="">
 <?php include "profile_lib.php"; ?>
<script type="text/javascript">
  set_profile_data(<?php echo $id; ?>);
</script>

<?php

if(isset($_GET['tab'])){
  $tab=$_GET['tab'];
  if($tab=="payment")echo "<script>payment()</script>";
  else if($tab=="program")echo "<script>program()</script>";
  else echo "<script>info()</script>";
}
else echo "<script>info()</script>";

?>


<?php


?>

<div class="modal fade student_add" id="student_profile_update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1">
            <?php $student_ob->student_edit_form($id); ?>
          ?>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
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
</script>

<?php

}

}

}
if($flag==0) include "404.php";

 ?>



