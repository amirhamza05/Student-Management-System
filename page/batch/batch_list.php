
<script type="text/javascript" src="page/batch/batch_script.js"></script>


<div class="row">
<div class="col-md-12">
<center>
<div class="btn-toolbar list-toolbar">
    

    <button class="btn btn-primary" data-title="Add Batch"  onclick="get_batch_form('insert')"><i class="fa fa-plus"></i> Add Batch</button>
    
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%"> 
            <thead>
            <tr>
              <th></th>
              <th><center>Batch Name</center></th>
              <th><center>Batch Start</center></th>
              <th><center>Batch End</center></th>
               <th><center>Batch Day</center></th>
              <th><center>Action</center></th>
              
            </tr>
          </thead>
          <tbody>

<?php 

foreach ($batch as $key => $value) {
  $name=$value['name'];
  $start=$value['start'];
  $end=$value['end'];
  $batch_day=$value['day_string'];
  $id=$value['id'];
  $day=$value['day'];
?>
            <tr>
              <td width="5px;"></td>
              <td><center><?php echo "$name"; ?></center></td>
              <td><center><?php echo "$start"; ?></center></td>
              <td><center><?php echo "$end"; ?></center></td>
              <td><center><?php echo "$batch_day"; ?></center></td>
              <td><div class="btn-toolbar list-toolbar"><center>

                <button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Edit" data-title="Edit" ><span class="glyphicon glyphicon-pencil" onclick="get_batch_form('update',<?php echo "$id"; ?>)"></span></button>
                <button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" onclick="get_batch_form('delete',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-trash"></span></button></center></div></td>
            </tr>

<?php } ?>
          </tbody>
        </table>

</div>
</div>