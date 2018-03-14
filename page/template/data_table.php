<center>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary"><i class="fa fa-plus"></i>Add Subject</button>
    <button class="btn btn-default">Import</button>
    <button class="btn btn-default">Export</button>
  <div class="btn-group">
  </div>
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="background-color: #ecf0f1">
            <tr>
              <th><center>Subject Name</center></th>
              <th><center>Subject Code</center></th>
              <th><center>Edit</center></th>
              <th><center>Delete</center></th>
            </tr>
          </thead>
          <tbody>

<?php 

foreach ($subject as $key => $value) {
  $subject_name=$value['name'];
  $subject_code=$value['code'];
?>
            <tr>
               
              <td><center><?php echo "$subject_name"; ?></center></td>
              <td><center><?php echo "$subject_code"; ?></center></td>
                <td><center><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></center></td>
    <td><center><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></center></td>
    
            </tr>
<?php } ?>
          </tbody>
        </table>



  