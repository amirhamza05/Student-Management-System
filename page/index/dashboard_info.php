
   
     <div class="col-lg-8">
     	<div class="row">
     		<div class="col-ms-12 col-sm-12">
                        <div class="circle-tile">
                            <a href="">
                                <div class="circle-tile-heading dark-blue">
                                    <img src="<?php echo $db->logo; ?>" class="logo_img">
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <center>
                                <div class="description_area">
                                  <font class="site_title"><?php echo $db->site_name; ?></font><br/>
                                      <font class="site_description">
                                        <span class="glyphicon glyphicon-map-marker"></span> <?php echo $db->address; ?><br/>
                                        <span class="glyphicon glyphicon-phone"></span> Phone: <?php echo $db->phone; ?> | <span class="glyphicon glyphicon-envelope"></span> Email: <?php echo $db->email; ?>
                                  </font>
                                </div>
                              </center>
                               
                            </div>
                        </div>
        </div>
     	
     	</div>
         
    </div>

     <div class="col-lg-4">
        <center><font style="font-weight: bold;text-align: center; font-size: 18px"> 
        	<?php
        	$uname=$login_user['uname'];
        	$date=date("d M Y h:i:A", strtotime($db->date()));
        	$day=date("l", strtotime($db->date()));
          $user_permission=$user_ob->get_user_permission($role);
         	
         ?>
         	<marquee style='color: var(--bg-color)' behavior="scroll" direction="left"><?php echo $site->welcome_time($uname); ?></marquee>

         </font></center>
                <table width="100%">
                    <tr>
                        <td class="td_info1">Today Date: </td>
                        <td class="td_info2"><?php echo $date; ?></td>
                    </tr>
                    <tr>
                        <td class="td_info1">Today Day: </td>
                        <td class="td_info2"><?php echo $day; ?></td>
                    </tr>
                    <tr>
                        <td class="td_info1">Your IP: </td>
                        <td class="td_info2"><?php echo $ip; ?></td>
                    </tr>
                    <tr>
                        <td class="td_info1">Your Browser: </td>
                        <td class="td_info2"><?php echo $browser; ?></td>
                    </tr>
                    <tr>
                        <td class="td_info1">Your Permission: </td>
                        <td class="td_info2"><?php echo $user_permission; ?></td>
                    </tr>
                    
                </table>
                           
    </div>

    <style type="text/css">

    .site_title{
          font-weight: bold;
          font-size: 33px;
          color: var(--font-color);
          font-family: "Times New Roman", Times, serif;
    }
    .site_description{
          font-weight: bold;
          font-size: 18px;
          color: var(--font-color);
    }

    	.td_info1,.td_info2{
  border-width: 1px;
  border-color: #DDDDDD;
  border-style: solid;
  padding: 10px;
}
.td_info1{
  width: 150px; 
  background-color: var(--bg-color);
  color: var(--font-color);
}
.logo_img{

height: 75px;
width: 75px;
padding: 5px;

}
.description_area{
	background-color: var(--bg-color); 
	color: var(--font-color);

	padding: 5px 10px 30px 10px;

}

    </style>

