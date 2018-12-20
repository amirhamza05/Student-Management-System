<?php


?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript" src="page/install/js/install_system.js"></script>
<script language="JavaScript" src="layout/site_script.js" type="text/javascript"></script>
<div  style="padding: 0px 8px 0px 0px">

<div class="containerr register" style="padding: 8px">
                <div class="row">
                    <div class="col-md-4 col-sm-12 register-left">

                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <div style="margin-top: -65px;"><img src="upload/custom_content/techserm_full_logo.jpg" style="height: 80px;width: 300px;border-radius: 15px;" alt=""/></div>
                        
                        <b style="font-size: 25px;">TechSerm Education Software</b>
                        <div style="margin-top: 46px;"></div>
                        
                        <a href="http://techserm.com"><input type="submit" name="" value="TechSerm"/></a><br/>
                    </div>
                    <div class="col-md-8 col-sm-12 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" style="" id="install_body">
                            	<div style="margin-top: 100px;"></div>
                            	<center>
                                <button class="btnnext" onclick="view_install_page()">Install</button>
                                </center>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>

<script type="text/javascript">
	view_install_page();
</script>
            <style type="text/css">
          body{
          	background-color: #ffffff;
          	
          }  	
            	.register{
    background-color: #000000;
    margin-top: 0%;
    padding: 0%;
    color: #000000;
    animation: myanimation 10s infinite;
}
@keyframes myanimation {
  0% {background-color: #c0392b;}
  25%{background-color:#d35400;}
  50%{background-color:#8e44ad;}
  75%{background-color:#16a085;}
  100% {background-color: #27ae60;}
}


.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.btnnext{
	background-color: #0062CC;
	font-size: 22px;
	height: 100px;
	width: 100px;
	color: #ffffff;
	border-width: 1px;
	border-radius: 100%;
	cursor: pointer;

}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 70%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}

@keyframes myanimation1 {
  0% {background-color: #a4b0be;}
  25%{background-color:#f1f2f6;}
  50%{background-color:#dfe4ea;}
  75%{background-color:#ced6e0;}
  100% {background-color: #a4b0be;}
}
.register-right{
    background: #F1F1F1;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
	animation: myanimation1 10s infinite;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}

.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 230px;
    cursor: pointer;
}

.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
            </style>