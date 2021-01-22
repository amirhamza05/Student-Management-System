 
<?php 

include "config/config.php";
include "layout/header_lib.php";
$db=new database();
?>

<link rel="stylesheet" type="text/css" href="page/login/style/style.css">
<script type="text/javascript" src="page/login/js/script.js"></script>
<script type="text/javascript" src="page/login/js/ajax.js"></script>

<!DOCTYPE html>
<html>
<head>
  <title>Login || <?php echo $db->site_name; ?></title>
</head>

<body style="background-size: 100%;">
<div class="container" style="width: 100%">

  <div class="row">
    <div class="col-md-4  col-sm-12"></div>
    <div class="col-md-4 col-sm-12">
    <div id="login-box" style="margin-top: 45px;">
        <div class="header_box">Login Your ID</div>
        <div class="logo">
            <h1 class="logo-caption"><?php echo $db->site_name; ?></h1>
        </div>
        <div id="loader_area" style="display: none;"><?php loader(); ?></div>
        <div class="controls" id="login_body">
            <div id="error_msg" class="error_msg" style="color: #F64343;display: none;">
              <span class="glyphicon glyphicon-remove error_icon"></span><br/>
              <span id="error_msg_text"></span>
            </div>
            
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" autocomplete="off" type="text" placeholder="Username" id="uname" name="uname">
            </div>
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" id="pass" name="pass" placeholder="Password">
            </div>
            
            <button type="submit" style="font-size: 16px;" id="login_btn" onclick="login()" name="login" class="btn btn-default btn-block btn-custom">Login</button> 
        </div>
        <div class="footer_login" style="">Developed By: <a href="https://github.com/amirhamza05/Student-Management-System"><font style="font-size: 19px;font-weight: bold;color: #F64343">Amir Hamza</font></a></div>
    </div>
    

</div>

</div>
<div id="particles-js"></div>
</div>

</body>
</html>


<?php

function loader(){
  ?>
<center>  
<div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-ellipsis"><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div></div>
 </center>

  <?php
}

?>

<style type="text/css">



  @keyframes lds-ellipsis3 {
  0%, 25% {
    left: 32px;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    left: 32px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  75% {
    left: 100px;
  }
  100% {
    left: 168px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@-webkit-keyframes lds-ellipsis3 {
  0%, 25% {
    left: 32px;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    left: 32px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  75% {
    left: 100px;
  }
  100% {
    left: 168px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  25%, 100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
}
@-webkit-keyframes lds-ellipsis2 {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  25%, 100% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
}
@keyframes lds-ellipsis {
  0% {
    left: 32px;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  25% {
    left: 32px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  50% {
    left: 100px;
  }
  75% {
    left: 168px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    left: 168px;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
}
@-webkit-keyframes lds-ellipsis {
  0% {
    left: 32px;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  25% {
    left: 32px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  50% {
    left: 100px;
  }
  75% {
    left: 168px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  100% {
    left: 168px;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
}
.lds-ellipsis {
  position: relative;
}
.lds-ellipsis > div {
  position: absolute;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 44px;
  height: 44px;
}
.lds-ellipsis div > div {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: #f00;
  position: absolute;
  top: 100px;
  left: 32px;
  -webkit-animation: lds-ellipsis 2s cubic-bezier(0, 0.5, 0.5, 1) infinite forwards;
  animation: lds-ellipsis 2s cubic-bezier(0, 0.5, 0.5, 1) infinite forwards;
}
.lds-ellipsis div:nth-child(1) div {
  -webkit-animation: lds-ellipsis2 2s cubic-bezier(0, 0.5, 0.5, 1) infinite forwards;
  animation: lds-ellipsis2 2s cubic-bezier(0, 0.5, 0.5, 1) infinite forwards;
  background: #be2222;
}
.lds-ellipsis div:nth-child(2) div {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
  background: #d72929;
}
.lds-ellipsis div:nth-child(3) div {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
  background: #d51515;
}
.lds-ellipsis div:nth-child(4) div {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  background: #d92c2c;
}
.lds-ellipsis div:nth-child(5) div {
  -webkit-animation: lds-ellipsis3 2s cubic-bezier(0, 0.5, 0.5, 1) infinite forwards;
  animation: lds-ellipsis3 2s cubic-bezier(0, 0.5, 0.5, 1) infinite forwards;
  background: #be2222;
}
.lds-ellipsis {
  width: 200px !important;
  height: 200px !important;
  -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
  transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
}
</style>