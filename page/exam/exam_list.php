
<link rel="stylesheet" type="text/css" href="page/index/style.css">
<script type="text/javascript" src="page/exam/js/exam.js"></script>
<div class="row" style="">
      <script type="text/javascript">
        $(document).ready(function() {
           $('table.display').DataTable();
      } );
      </script>
        
 
        <div class="col-md-12">
            <div class="dashboard_box">
                <div class="box_header">Exam List</div>
                <div class="box_body">
                   <div class="pull-rightt" style="margin-top: -20px;">
            <center><button class="button" onclick="get_exam_form('insert')">+ Add Exam</button></center>
          </div>
                
                  <table id="" class="display" width="100%">
                    <thead style="width: 100%;">
                    <tr>
                      <td class="td_list1"></td>
                      <td class="td_list1">#</td>
                      <td class="td_list1">Income Name</td>
                      <td class="td_list1">Program Name</td>
                      <td class="td_list1">Subject Name</td>
                      <td class="td_list1">MCQ</td>
                      <td class="td_list1">Written</td>
                      <td class="td_list1">Total</td>
                      <td class="td_list1">Date</td>
                      <td class="td_list1">Action</td>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    
                    foreach ($exam as $key => $value) {
                            $id=$value['id'];
                            $program_id=$value['program_id'];
                            $sub_id=$value['sub_id'];

                     ?>
 
            <tr>
              <td class="td_list2"></td>
                      <td class="td_list2"><?php echo $value['id']; ?></td>
                      <td class="td_list2">
                                <?php echo $value['exam_name']; ?>    
                            </td>
                      <td class="td_list2">
                                <?php echo $program[$program_id]['name']; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo $subject[$sub_id]['name']; ?>    
                            </td>
                      <td class="td_list2">
                                <?php echo $value['mcq']; ?>    
                            </td>
                      <td class="td_list2">
                                <?php echo $value['written']; ?>   
                            </td>
                            <td class="td_list2">
                                <?php echo $value['total']; ?>   
                            </td>
                          
                            <td class="td_list2">
                                <?php echo $value['exam_date']; ?>   
                            </td>
                            <td class="td_list2">
                                <button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Update" data-title="Update" onclick="get_exam_form('update',<?php echo "$id"; ?>)" >
                                <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                                <button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" onclick="get_exam_form('delete',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-trash"></span></button>
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