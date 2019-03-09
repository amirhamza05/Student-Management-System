<?php


include "layout/header_script.php";

if(isset($_POST['update'])){
  $info['id']=$_POST['update'];
  $info['theme']=$_POST['theme'];

  $db->sql_action("user","update",$info,"no");
  
  $info=$theme->get_theme($_POST['theme']);
  $bg_color=$info['bg_color'];
  $font_color=$info['font_color'];
  ?>
<style type="text/css">
    :root {
      --bg-color: <?php echo "$bg_color"; ?>;
      --font-color: <?php echo "$font_color"; ?>;
    } 
 </style>   
<?php

}

else if(isset($_POST['insert'])){
  $info['name']=$_POST['name'];
  $st="#";
  $info['bg_color']=$st.$_POST['bg_color'];
  $info['sidebar_hover']=$st.$_POST['sidebar_hover'];
  $info['sidebar_list']=$st.$_POST['sidebar_list'];
  $info['sidebar_list_hover']=$st.$_POST['sidebar_list_hover'];
  $info['font_color']=$st.$_POST['font_color'];
  $info['date']=date("Y-m-d");
  $info['added_by']=$login_user['id'];
  $db->sql_action("theme","insert",$info,"yes");

}



?>