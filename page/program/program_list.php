
<script type="text/javascript" src="page/program/program_script.js"></script>
<center>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" title="Add Program" onclick="get_program_form('insert')"><i class="fa fa-plus"></i>Add Program</button>
    
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="width: 100%">
            <tr>
              <th></th>
              <th><center>Program Name</center></th>
              <th><center>Program Start</center></th>
              <th><center>Program End</center></th>
              <th><center>Subject</center></th>
              <th><center>Batch</center></th>
              <th><center>Type</center></th>
              <th><center>Fee</center></th>
              <th><center>Monthly Fee</center></th>
              <th><center>Action</center></th>
              <th><center>Set Payment</center></th>
            </tr>
          </thead>
          <tbody>

<?php 

foreach ($program as $key => $value) {
  $id=$value['id'];
  $name=$value['name'];
  $start=$value['start'];
  $end=$value['end'];
  $subject=$value['subject_string'];
  $batch=$value['batch_string'];
  $fee=$value['fee'];
  $monthly=$value['monthly_fee'];
  $type=$value['type_string']
?>
            <tr>
               <td width="0px;"></td>
              <td><center><?php echo "$name"; ?></center></td>
              <td><center><?php echo "$start"; ?></center></td>
              <td><center><?php echo "$end"; ?></center></td>
              <td><center><?php echo "$subject"; ?></center></td>
              <td><center><?php echo "$batch"; ?></center></td>
              <td><center><?php echo "$type"; ?></center></td>
              <td><center><?php echo "$fee"; ?></center></td>
              <td><center><?php echo "$monthly"; ?></center></td>

                
                <td><div class="btn-toolbar list-toolbar"><center><button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Edit"  onclick="get_program_form('update',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-pencil"></span></button>
                  <button class="btn btn-danger btn-xs" title="Delete" onclick="get_program_form('delete',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-trash"></span></button></center></div>
                </td>
                <td>
                  <center>
                  <button class="btn btn-danger btn-xs" title="Delete" onclick="set_payment(<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-euro"></span> Set Payment</button>
                </center></div>
                </td>
    
            </tr>

            <!-- end edit model -->
<?php } ?>
          </tbody>
        </table>

