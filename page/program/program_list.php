
<script type="text/javascript" src="page/program/program_script.js"></script>

<link rel="stylesheet" type="text/css" href="page/index/style.css">

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
<div class="row" style="">
  <script type="text/javascript">
        $(document).ready(function() {
           $('table.display').DataTable();
      } );
      </script>
<div class="col-md-12">
            <div class="dashboard_box">
                <div class="box_header">Program List</div>
                <div class="box_body">
                   <div class="pull-rightt" style="margin-top: -20px;">
            <center><button class="button" onclick="get_program_form('insert')">+ Add Program</button></center>
          </div>
                
           <table id="" class="display" width="100%">
            <thead style="width: 100%;">
            <tr>
             
              <td class="td_list1">Program Name</td>
              <td class="td_list1">Program Start</td>
              <td class="td_list1">Program End</td>
              <td class="td_list1">Subject</td>
              <td class="td_list1">Batch</td>
              <td class="td_list1">Type</td>
              <td class="td_list1">Fee</td>
              <td class="td_list1">Monthly Fee</td>
              <td class="td_list1">Action</td>
              <td class="td_list1">Set Payment</td>
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
  $type=$value['type_string'];
?>
            <tr>
              <td class="td_list2"><?php echo "$name"; ?></td>
              <td class="td_list2"><?php echo "$start"; ?></td>
              <td class="td_list2"><?php echo "$end"; ?></td>
              <td class="td_list2"><?php echo "$subject"; ?></td>
              <td class="td_list2"><?php echo "$batch"; ?></td>
              <td class="td_list2"><?php echo "$type"; ?> </td>
              <td class="td_list2"><?php echo "$fee"; ?></td>
              <td class="td_list2"><?php echo "$monthly"; ?></td>

                
                <td class="td_list2"><div class="btn-toolbar list-toolbar"><center><button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Edit"  onclick="get_program_form('update',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-pencil"></span></button>
                  <button class="btn btn-danger btn-xs" title="Delete" onclick="get_program_form('delete',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-trash"></span></button></center></div>
                </td>
                <td class="td_list2">
                  <center>
                  <button class="btn btn-danger btn-xs" title="Delete" onclick="set_payment(<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-euro"></span> Set Payment</button>
                </center></div>
                </td>
    
            </tr>

            <!-- end edit model -->
<?php } ?>
          </tbody>
        </table>
  </table>
                </div>
            </div>
        </div>
        
    </div> 

