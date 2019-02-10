<?php

if(isset($_POST['live_site_action'])){
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
                         
                        $info=$site_activity->site_activity_list(1000);
                        $c=0;
                        foreach ($info as $key => $value) {
                            $id=$value['id'];
                            $user_id=$value['user_id'];
                            $user_name=$user[$user_id]['uname'];
                            $ago=$value['date'];
                            $ago=$site->timeAgo($ago);
                            if($c==10)break;
                            //if($user_name=="hamza05")continue;
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

	<?php
}

if(isset($_POST['get_activity_info'])){
	$id=$_POST['get_activity_info'];
	$site_activity->get_activity_detail($id);
?>
<center>
<button onclick="reload_activity(<?php echo "$id"; ?>)">reload</button>
<button onclick="print('activity_detail')">Print</button>
</center>
<?php
}


?>
