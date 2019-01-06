
<link rel="stylesheet" type="text/css" href="page/index/style.css">
<script type="text/javascript" src="page/account/js/income.js"></script>
<div class="row" style="">
    	<script type="text/javascript">
    		$(document).ready(function() {
   				 $('table.display').DataTable();
			} );
    	</script>
    	  
 
        <div class="col-md-12">
            <div class="dashboard_box">
                <div class="box_header">Income List</div>
                <div class="box_body">
                	 <div class="pull-rightt" style="margin-top: -20px;">
						<center><button class="button" onclick="get_income_form('insert')">+ Add Income</button></center>
					</div>
                
                	<table id="" class="display" width="100%">
                		<thead style="width: 100%;">
                		<tr>
                			<td class="td_list1"></td>
                			<td class="td_list1">#</td>
                			<td class="td_list1">Income Name</td>
                			<td class="td_list1">Ammount</td>
                            <td class="td_list1">Notes</td>
                			<td class="td_list1">Date</td>
                            <td class="td_list1">Add By</td>
                			<td class="td_list1">Action</td>
                			
                		</tr>
                	</thead>
                	<tbody>
                		<?php 

						$info=$account->income_list();
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
                            <td class="td_list2">
                                <button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Update" data-title="Update" onclick="get_income_form('update',<?php echo "$id"; ?>)" >
                                <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                                <button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" onclick="get_income_form('delete',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                			
                		</tr>
                		<?php } ?>
                		</tbody>
                	</table>
                </div>
            </div>
        </div>
        
    </div>  

    <style type="text/css">
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
</style>