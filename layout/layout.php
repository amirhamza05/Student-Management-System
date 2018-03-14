<?php

include "layout_style.php";
include "nev_bar.php";
include "side_bar1.php";

?>
<div class="content">
 

 <?php

$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sub_str=$site->get_page_sub_str($link);
$page_name=$site->get_page_name($sub_str);
$root=$site->get_url_root($sub_str);
  ?>

       <!--  <div class="header">
            <h1 class="page-title"><?php //echo "$page_name"; ?></h1>
        </div> -->

        <title><?php echo "$page_name"; ?></title>
        <center><?php //include 'menu_button.php'; ?></center>
        <div class="main-content" style=" padding-bottom: 30px;margin-top: 15px;" >

        	<?php include "loader.php"; ?>