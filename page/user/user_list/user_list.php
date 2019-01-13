
<script type="text/javascript" src="page/user/user_list/js/user_list.js"></script>
<link rel="stylesheet" type="text/css" href="page/user/user_list/css/style.css">
<div class="row">
	<div class="col-md-3">
		<?php include "side_bar.php"; ?>
	</div>
	<div class="col-md-9" style="margin-left: -10px;">
		<div class="user_list_body">
			<div class="list_header" id="list_header">
				
			</div>
			<div class="list_body" id="list_body">
				
			</div>
		</div>
		
	</div>
</div>


<?php

$type="all";
if(isset($_GET['type'])){
   $type=$_GET['type'];
   if($type=="active" || $type=="deactive" ||$type=="institute" || $type=="techserm")$type=$type;
   else $type="all";

}

?>
<script type="text/javascript">get_user_list("<?php echo "$type"; ?>")</script>


<style type="text/css">
	
</style>