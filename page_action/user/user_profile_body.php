
<?php

if(isset($_POST['user_info'])){
  
  // dasdf

  $id=$_POST['user_info'];
  $info=$user[$id];
  $user_name=$info['uname'];
  $permit=$info['permit'];
  $user_role=$user_ob->get_user_permission($permit);
   need_css();
  ?>

  <table class="" style="width: 100%">
  	<tr>
  		<td class="td_list1" style="width: 20%; text-align: right;">
  			User Name:
  		</td>
  		<td class="td_list2" style="text-align: left;">
  			<?php echo $info['uname']; ?>
  		</td>
  	</tr>
  	<tr>
  		<td class="td_list1" style="width: 20%; text-align: right;">
  			Full Name: 
  		</td>
  		<td class="td_list2" style="text-align: left;">
  			<?php echo $info['fname']; ?>
  		</td>
  	</tr>
  	<tr>
  		<td class="td_list1" style="width: 20%; text-align: right;">
  			Role:
  		</td>
  		<td class="td_list2" style="text-align: left;">
  			<?php echo "$user_role"; ?>
  		</td>
  	</tr>
  	<tr>
  		<td class="td_list1" style="width: 20%; text-align: right;">
  			Phone:
  		</td>
  		<td class="td_list2" style="text-align: left;">
  			<?php echo $info['phone']; ?>
  		</td>
  	</tr>
  	<tr>
  		<td class="td_list1" style="width: 20%; text-align: right;">
  			Email:
  		</td>
  		<td class="td_list2" style="text-align: left;">
  			<?php echo $info['email']; ?>
  		</td>
  	</tr>
    <tr>
  		<td class="td_list1" style="width: 20%; text-align: right;">
  			Gender:
  		</td>
  		<td class="td_list2" style="text-align: left;">
  			<?php echo $info['gender']; ?>
  		</td>
  	</tr>
  	 <tr>
  		<td class="td_list1" style="width: 20%; text-align: right;">
  			Address:
  		</td>
  		<td class="td_list2" style="text-align: left;">
  			<?php echo $info['address']; ?>
  		</td>
  	</tr>

  </table>


  <?php

}

else if(isset($_POST['user_activity'])){
  
  $info=$_POST['user_activity'];
  $user_id=$info['user_id'];
  $page=$info['page'];
  
  
  $toal_index=12000;
  $page_limit=10;
  $total_page=ceil($toal_index/$page_limit);
  
  $due_page=$total_page-$page;
  $plus=($due_page>=3)?3:$due_page;
  
  
  $start_page=1;
  $diff=$page-$start_page;

  $end_page=10;
  
  need_css();
  

?>

   <table id="" class="display" width="100%">
        <thead style="width: 100%;">
                        <tr>
                            <td class="td_list1">#</td>
                            <td class="td_list1">User Name</td>
                            <td class="td_list1">Table Name</td>
                            <td class="td_list1">Action</td>
                            <td class="td_list1">IP</td>
                            <td class="td_list1">Browser</td>
                            <td class="td_list1">Date</td>
                            <td class="td_list1">View Activity</td>
                            
                        </tr>
         </thead>
            <tbody>
        <?php           
                        $info=$site_activity->get_user_activity($user_id);
                        
                        $c=0;
                        foreach ($info as $key => $value) {
                            $id=$value['id'];
                            $user_id=$value['user_id'];
                            $user_name=$user[$user_id]['uname'];
                            $ago=$value['date'];
                            $ago=$site->timeAgo($ago);
                            if($c==10)break;
                            
                            $c++;
                         ?>
 
                        <tr>
                            <td class="td_list2">
                  				<?php echo $value['id']; ?> 
                            </td>
                            <td class="td_list2"><?php echo $user_name; ?></td>
                            <td class="td_list2">
                                <?php echo $value['table_name']; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo $value['action_type']; ?>    
                            </td>
                            
                            <td class="td_list2">
                                <?php echo $value['ip']; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo $value['browser']; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo $ago; ?>   
                            </td>
                            <td class="td_list2">
                                <button onclick="get_activity_info(<?php echo "$id"; ?>)" class="btn btn-danger btn-xs">View Activity</button>   
                            </td>

                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>

<div style="margin-top: 10px;"></div>
<center>
    <?php

    for ($i=$start_page; $i <=$end_page ; $i++) {
  		$cla="";
    	if($i==$page)$cla="active_page_btn"; 
     		echo "<button class='btn_page $cla' onclick='user_activity($i)'> $i </button>";
  	}

    ?>
</center>

	<?php
}

else if(isset($_POST['user_login_activity'])){

}

else if(isset($_POST['user_payment'])){

}


function need_css(){
?>

<style type="text/css">
	.active_page_btn{
		background-color: var(--bg-color);
		color: var(--font-color);
		font-size: 18px;
	}
	.btn_page{
       height: 40px;
       width: 40px;
       margin-left: 2px;
       border-radius: 100%;
       font-weight: bold;
	}
	.btn_page:hover{
		background-color: var(--bg-color);
		color: var(--font-color);
		
	}
	.btn_page:focus{
		outline:0;
	}
	

	thead{
        background-color: #EFF0F2;
        border-width: 0px;
    }

	.td_list1{
        background-color: #EFF0F2;
        color: #000000;
        padding: 10px;
        font-weight: bold;
        border: 1px solid #C6C9D1;
        text-align: center;
    }
    .td_list2{
        background-color: #ffffff;
        color: #000000;
        padding: 8px;
        border: 1px solid #C6C9D1;
        text-align: center;
    }
    .td_info_list1{
    	background-color: #EFF0F2;
    }
</style>



<?php } ?>