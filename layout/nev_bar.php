<!--
===============================
  Navbar
===============================
-->


<?php 

$name=$login_user['uname'];
$permit_role=($role<=5)?"techserm":"ins";
$chat_due=$chat->get_chat_last_list($permit_role);
$chat_due=($chat_due==0)?"":"($chat_due)";
?>

<script type="text/javascript" src="layout/js/nav_bar_script.js"></script>
 <div class="navbar navbar-default" role="navigation" style="position: auto; border-width: 0px 0px 1px 0px; border-color: rgba(0,0,0,0.2); padding: 10px;" >

        <div class="navbar-headerr"  style="position: auto; border-width: 0px;">

        <ul class="nav navbar-nav navbar-left">  
          <span onclick="action_side_bar()" class="sidebar-toggle-action">
          <button  class="btn_nav_toggle"><i class="fa fa-bars" id="icon_div"></i></button>
          </span> 
        
        
          <a class="" href="index.php"><span class="navbar-brand"  style="color:var(--font-color)"><font class="logo_title"> <?php echo $db->site_name; ?></font></span></a>
          <span class="nev_bar_button_area">
             <!-- here button -->
           <button onclick="student_info_nav_bar()" class="btn_tab" style="margin-left: 15px;"><span class="glyphicon glyphicon-fire"></span> Student Quick Access</button>
           <button onclick="sms_state_nav()" class="btn_tab" style="margin-left: 15px;"><span class="glyphicon glyphicon-envelope"></span> SMS Statistics</button>
           <button onclick="live_chat_nav()" class="btn_tab" style="margin-left: 15px;"><i class="fa fa-comments"></i> Live Chat <b><?php echo "$chat_due"; ?></b></button>
           <button onclick="sql_editor()" class="btn_tab" style="margin-left: 15px;"><span class="fa fa-database"></span> SQL Editor</button>
          


          </span>
        </ul>
        <ul class="nav navbar-nav navbar-right">
           <?php //include "page/nav_bar_dropdown.php"; ?>        
        </ul> 

         <!--  -->
        </div>
</div>

  
<style type="text/css">
  @media screen and (max-width: 800px) {
  .nev_bar_button_area {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  } 
}




</style>

        
<script type="text/javascript">
  function action_side_bar(){
    div=document.getElementById('content');
    icon_div=document.getElementById('icon_div');
    class_name=div.className;
    if(class_name=='content_with_sidebar'){
      div.className = 'content';
      icon_div.className='fa fa-bars';
    }
    else{
      div.className = 'content_with_sidebar';
      icon_div.className='fa fa-times';
    }
  }
</script>
<script type="text/javascript" src="layout/js/nav_bar_script.js"></script>
<link rel="stylesheet" type="text/css" href="style/css/nav_bar.css">

        </div>
  </div>

