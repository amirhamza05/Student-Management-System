<!--
===============================
  Navbar
===============================
-->

<style type="text/css">
  .profile_nav{
    background-color: var(--bg-color);
    color: var(--font-color);
    border: 1px solid;
    max-height: 45px;
    overflow: hidden;
    max-width: 100px;
    border-color: var(--font-color); 
    padding: 13px;
    border-radius: 7%;
    margin-right: 5px;
    width: 100px;
    box-shadow: 2px 3px var(--font-color);
  }
</style>

<?php 

$name=$login_user['uname'];

?>
 <div class="navbar navbar-default" role="navigation" style="position: auto; border-width: 0px 0px 1px 0px; border-color: rgba(0,0,0,0.2); padding: 10px;" >

        <div class="navbar-headerr"  style="position: auto; border-width: 0px;">

        <ul class="nav navbar-nav navbar-left">  
          <span onclick="action_side_bar()" class="sidebar-toggle-action">
          <button  class="btn_toggle"><i class="fa fa-bars" id="icon_div"></i></button>
          </span>

          <a class="" href="index.php"><span class="navbar-brand"  style="color:var(--font-color)"><font> TechSerm Education Software</font></span></a>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <span class="sidebar-toggle-action" style="border-radius: 100%">
          <button style="border-radius: 100%" title="Student ID Find" class="btn_toggle"><i class="fa fa-flag" id=""></i></button>
           </span>
          
        </ul>
        </div>
</div>

<style type="text/css">

.mainbody {
    background:#f0f0f0;
}
/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 20;
  margin-left: -15px;
  margin-right: -15px;
}

.navbar_button{
  padding: 10px !important;
  border-radius: 100%;
  padding-left: 15px;
  padding-right: 15px;
  margin-right: 10px;
  border-width: 0px;
}

.navbar_button:hover{
  padding: 10px !important;
  border-width: 0px;
}
.navbar_button:active{
  padding: 10px !important;
  border-width: 0px;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper .container {
  padding-left: 0;
  padding-right: 0;
}
.navbar-wrapper .navbar {
  padding-left: 15px;
  padding-right: 15px;
}

.navbar-content
{
    width:320px;
    padding: 15px;
    padding-bottom:0px;
}
.navbar-content:before, .navbar-content:after
{
    display: table;
    content: "";
    line-height: 0;
}
.navbar-nav.navbar-right:last-child {
    margin-right: 15px !important;
}
.navbar-footer 
{
    background-color:#DDD;
}
.navbar-footer-content { padding:15px 15px 15px 15px; }
.dropdown-menu {
padding: 0px;
overflow: hidden;
}

.brand_network {
    color: #9D9D9D;
    float: left;
    position: absolute;
    left: 70px;
    top: 30px;
    font-size: smaller;
}

.post-content {
    margin-left:58px;
}

.badge-important {
    margin-top: 3px;
    margin-left: 25px;
    position: absolute;
}

              </style>

        </div>
  </div>


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