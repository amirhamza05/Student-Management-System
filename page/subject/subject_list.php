
<script type="text/javascript" src="page/subject/subject_script.js"></script>
<center>
<div class="btn-toolbar list-toolbar">
    
     <button class="btn btn-primary" data-title="Add Product" onclick="get_subject_form('insert')"><i class="fa fa-plus"></i> Add Subject</button>
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="">
            <tr>
              <th><center></center></th>
              <th><center>Subject Name</center></th>
              <th><center>Subject Code</center></th>
              <th><center>Action</center></th>
              
            </tr>
          </thead>
          <tbody>

<?php 
 
foreach ($subject as $key => $value) {
  $subject_name=$value['name'];
  $subject_code=$value['code'];
  $id=$value['id'];
?>
            <tr>
             <td style="width: 2px;"><center></center></td>
              <td><center><?php echo "$subject_name"; ?></center></td>
              <td><center><?php echo "$subject_code"; ?></center></td>
                
                <td>
                  <div class="btn-toolbar list-toolbar">
                    <center>
                      <button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Update" data-title="Update" onclick="get_subject_form('update',<?php echo "$id"; ?>)" >
                        <span class="glyphicon glyphicon-pencil"></span>
                      </button>
                        <button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" onclick="get_subject_form('delete',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-trash"></span></button>
                      </center>
                    </div>
                  </td>
            </tr>
            <!-- end edit model -->

<?php } ?>
          </tbody>
        </table>

<!-- start Add model -->
