
<style type="text/css">
	.student_add .modal-dialog{max-width: 1000px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

 .modal-backdrop
{
    opacity:1.9 !important;
}
</style>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" data-title="Add Product" data-toggle="modal" data-target="#edit"><i class="fa fa-plus"></i>Add Student</button>
    
</div>

<div class="modal fade student_add" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 15px;" class="modal-body" style="background-color: #ecf0f1">
            <?php include "edit_id_card_panel.php"; ?>
        </div>
      </div>
    </div>
</div>

<?php include "edit_id_card_panel.php"; ?>