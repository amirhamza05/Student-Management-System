
<div style="margin-top: 45px;"></div>

<div class="container">
	<div id="login-box">
		<div class="header_box">Login Your Id</div>
		<div class="logo">
			
			<h1 class="logo-caption">
        <img src="upload/custom_content/logo.png" style="height: 180px;width: 180px;">
        <br/>
        <span class="tweak">B</span>ritain <span class="tweak">S</span>tandard School</h1>
		</div><!-- /.logo --> 
		<div class="controls">
      <div id="error_msg" style="color: #F64343; display: none;">Please Fill Up Correct User Name OR Password</div>
<!-- <form action="login_action.php" method="post"> -->
			<input type="text" autocomplete="off"
 id="uname" name="uname" placeholder="Username" class="form-control" required="" />
			<input type="password" id="pass" name="pass" placeholder="Password" class="form-control" required="" />

			<button type="submit"  style="font-size: 16px;" id="login_btn" onclick="login()" name="login" class="btn btn-default btn-block btn-custom">Login</button>
<!-- </form> -->
		</div><!-- /.controls -->
	</div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js"></div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>


<script type="text/javascript">
  function login(){
    uname=document.getElementById('uname').value;
    pass=document.getElementById('pass').value;
    document.getElementById("error_msg").style.display="none";

     $.ajax({
        type: 'POST',
        url: 'login_action.php',
        data: {
            login: uname,
            uname: uname,
            pass: pass
        },
        beforeSend: function() {
              document.getElementById("login_btn").disabled=true;
              document.getElementById("login_btn").innerHTML="<div class='lds-dual-ring'></div>";

        },
        success: function(response) {
          
          per=parseInt(response);
           setTimeout(function () {
                fun_wait(per);
           }, 2000); 
          
        }
    });

 
           
  }

  function fun_wait(per){
      if(per!=0)location.reload();
      else{
           document.getElementById("login_btn").disabled=false;
           document.getElementById("error_msg").style.display="block";
           document.getElementById("login_btn").innerHTML="Login";
      }
  }
</script>


<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Nunito');
@import url('https://fonts.googleapis.com/css?family=Poiret+One');

body, html {
	height: 100%;
	background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
	background:black;
	position: relative;
}

.header_box{
	background: #F64343;
	padding: 15px;
	margin-bottom: 25px;
	margin-top: -20px;
	margin-left: -20px;
	margin-right: -20px;
	color: #ffffff;
	font-size: 20px;
}
#login-box {
	position: absolute;
	top: 0px;
	left: 50%;
	transform: translateX(-50%);
	width: 350px;
	margin: 0 auto;
	border: 1px solid black;
	background: rgba(48, 46, 45, 1);
	min-height: 250px;
	padding: 20px;
	z-index: 9999;
}
#login-box .logo .logo-caption {
	font-family: 'Poiret One', cursive;
	color: white;
	text-align: center;
	margin-bottom: 0px;
}
#login-box .logo .tweak {
	color: #ff5252;
}
#login-box .controls {
	padding-top: 30px;
}
#login-box .controls input {
	border-radius: 0px;
	background: rgb(98, 96, 96);
	border: 0px;
	color: white;
	font-family: 'Nunito', sans-serif;
}
#login-box .controls input:focus {
	box-shadow: none;
}
#login-box .controls input:first-child {
	border-top-left-radius: 2px;
	border-top-right-radius: 2px;
}
#login-box .controls input:last-child {
	border-bottom-left-radius: 2px;
	border-bottom-right-radius: 2px;
}
#login-box button.btn-custom {
	border-radius: 2px;
	margin-top: 8px;
	background:#ff5252;
	border-color: rgba(48, 46, 45, 1);
	color: white;
	font-family: 'Nunito', sans-serif;
}
#login-box button.btn-custom:hover{
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	-ms-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
	background: rgba(48, 46, 45, 1);
	border-color: #ff5252;
}
#particles-js{
  	width: 100%;
  	height: 100%;
  	background-size: cover;
  	background-position: 50% 50%;
  	position: fixed;
  	top: 0px;
  	z-index:1;
}

/*animation loder*/
.lds-dual-ring {
  display: inline-block;
  width: 50px;
  height: 50px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 46px;
  height: 46px;
  margin: 1px;
  border-radius: 50%;
  border: 5px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(300deg);
  }
  100% {
    transform: rotate(600deg);
  }
}

</style>

<script type="text/javascript">
	$.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){
    particlesJS('particles-js',
      {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 5,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      }
    );

});


</script>