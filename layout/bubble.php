
<script type="text/javascript" src="layout/js/bubble.js"></script>

<style type="text/css">
	.theme_select .modal-dialog{max-width: 800px; width: 100%;}
</style>

<div class="containerr" style="">
	<div class="row" style="">
		        <div id="inbox" >
          <div style="position: fixed;" class="fab btn-group show-on-hover dropup">
          <div data-toggle="tooltip" data-placement="left" title="Select Option" style="margin-left: 42px;">
          <button type="button" class="btn btn-danger btn-io dropdown-toggle" data-toggle="dropdown"  style="">
            <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x fab-backdrop"></i>
                <i class="fa fa-plus fa-stack-1x fa-inverse fab-primary"></i>
                <i class="fa fa-pencil fa-stack-1x fa-inverse fab-secondary"></i>
            </span>
          </button></div>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">

            <li class="dropdown_sub" style=""><a onclick="get_theme_list()" style=""><i class="fa fa-tint"></i></a> </li>

          </ul>
        </div>
        </div>
	</div>
</div>


<div class="modal large fade theme_select" id="theme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
        <div class="modal-body" style="background-color: #ecf0f1">
        	<?php include 'page/theme/theme_list.php'; ?> 
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">
	$('.fab').hover(function () {
    $(this).toggleClass('active');
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<style type="text/css">



.fab {
  cursor: pointer;
}
.fab-backdrop {
  color: rgba(255, 255, 255, 0);
}
.fab-primary, .fab-secondary {
  transition: all 0.35s ease-in-out;
}
.fab.active .fab-primary {
  opacity: 0;
  transform: rotate(225deg);
}
.fab-secondary {
  opacity: 0;
  transform: rotate(-225deg);
}
.fab.active .fab-secondary {
  opacity: 1;
  transform: rotate(0);
  margin-top: -2px;
}



#inbox .show-on-hover:hover > ul.dropdown-menu {
    display: block;    
}
#inbox .show-on-hover {
    position: absolute;
    bottom: 40px;
    right: 20px;
}
#inbox .btn-io{
    height: 65px;
    width: 65px;
    padding: 0 !important;
    border: 3px solid rgba(255,255,255,0.3);
    border-radius: 100%;
}
#inbox .dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
top: auto;
bottom: 100%;
margin-bottom: 1px;
margin-bottom: -5px;
padding-bottom: 30px;
}
#inbox .dropdown-menu-right {
right: 0 !Important;
left: auto !Important;
}
#inbox .dropdown-menu {
position: absolute;
top: 100%;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 60px;
padding: 5px 0;
margin: 2px 0 0;
font-size: 14px;
text-align: center;
list-style: none;
background-color: rgba(255, 255, 255, 0) !Important;
-webkit-background-clip: padding-box;
background-clip: padding-box;
border: none;
border-radius: 0px;
-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0) !Important;
box-shadow: 0 6px 12px rgba(0, 0, 0, 0) !Important;
}
#inbox .fa-iox{
    font-size: 22px;
}
#inbox .dropdown-menu > li > a {
display: block;
padding: 0;
padding-top: 4px;
margin-top: 20px;
clear: both;
font-weight: normal;
line-height: 1.42857143;
color: #333;
background: #fff;
white-space: nowrap;
width: 40px;
height: 40px;
border: solid 1px #ccc;
border-radius: 50px;
font-size: 21px;
box-shadow: 0px 3px 7px 0px rgba(203, 203, 203, 0.72);
}
#inbox .dropdown-menu > li:first-child>a {
    background: #6E4320 !important;
    color: #fff !important;
}
#inbox .dropdown-menu > li:last-child>a {
    background: #D3A516;
    color: #fff;
}
#inbox .dropdown-menu > li:nth-child(3)>a {
    background: #3C80F6;
    color: #fff;
}
#inbox .dropdown-menu > li:nth-child(2)>a {
    background: #2CAC26;
    color: #fff;
}
#inbox .fa-iosm{
    
    margin-top: 7px;
}
</style>