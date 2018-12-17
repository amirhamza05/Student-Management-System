<div class="col-md-6">
            <div class="dashboard_box">
                <div class="box_header">Site Activity</div>
                <div class="box_body">
                     
                
                    <table id="" class="display" width="100%">
                        <thead style="width: 100%;">
                        <tr>
                            <td class="td_list1"></td>
                            <td class="td_list1">#</td>
                            <td class="td_list1">Expence Name</td>
                            <td class="td_list1">Ammount</td>
                            <td class="td_list1">Notes</td>
                            <td class="td_list1">Date</td>
                            <td class="td_list1">Add By</td>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                        $info=$account->expence_list();
                        foreach ($info as $key => $value) {
                            $id=$value['id'];
                         ?>
 
                        <tr>
                            <td class="td_list2"></td>
                            <td class="td_list2"><?php echo $value['id']; ?></td>
                            <td class="td_list2">
                                <?php echo $value['name']; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo $value['amount']; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo $value['notes']; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo $value['date']; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo $value['user']; ?>   
                            </td>

                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>