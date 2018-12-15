<div class="col-md-6">
            <div class="dashboard_box">
                <div class="box_header">Buy SMS List</div>
                <div class="box_body">
                     
                
                    <table id="" class="display" width="100%">
                        <thead style="width: 100%;">
                        <tr>
                            <td class="td_list1"></td>
                            <td class="td_list1">#</td>
                            <td class="td_list1">Total Buy SMS</td>
                            <td class="td_list1">Total Use</td>
                            <td class="td_list1">Buy Date</td>
                            <td class="td_list1">Expire Date</td>
                            <td class="td_list1">Add By</td>
                            <td class="td_list1">Status</td>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 

                        $info=$sms->get_buy_sms_list();
                        foreach ($info as $key => $value) {
                            $id=$value['id'];
                            $end=$value['end'];
                            $now=strtotime($db->date());
                            $now=date("Y-m-d", $now);
                            $status="<font color='red'>Expired</font>";
                            if($end>=$now)$status="<font color='green'>Active</font>";
                         ?>
 
                        <tr>
                            <td class="td_list2"></td>
                            <td class="td_list2"><?php echo $value['id']; ?></td>
                            <td class="td_list2"><?php echo $value['total_sms']; ?></td>
                            <td class="td_list2"><?php echo $value['total_send']; ?></td>
                            <td class="td_list2"><?php echo $value['start']; ?></td>
                            <td class="td_list2"><?php echo $value['end']; ?></td>
                            <td class="td_list2"><?php echo $value['user']; ?></td>
                            <td class="td_list2"><?php echo $status; ?></td>
                            
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

         