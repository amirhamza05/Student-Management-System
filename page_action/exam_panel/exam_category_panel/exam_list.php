<?php

if(isset($_POST['get_exam_list'])){
	$category_id=$_POST['get_exam_list'];
	?>
<div style="margin-bottom: 10px; text-align: center;">
	<button class="btn btn-danger">Add Exam</button>
</div>

<table class="table_class">
	<tr>
		<td class="td1_class">#</td>
		<td class="td1_class">Exam Name</td>
		<td class="td1_class">Subject Name</td>
		<td class="td1_class">Total Mark</td>
		<td class="td1_class">Action</td>
	</tr>
	<?php for($i=0; $i<15; $i++){ ?>
	<tr>
		<td class="td2_class">1</td>
		<td class="td2_class">Phy 1</td>
		<td class="td2_class">Physics</td>
		<td class="td2_class">15</td>
		<td class="td2_class">
			<button class="btn btn-danger btn-xs" onclick="view_exam(1)">View Panel</button>
			<button class="btn btn-danger btn-xs">Edit</button>
			<button class="btn btn-danger btn-xs">Delete</button>
		</td>
	</tr>
	<?php } ?>
</table>

<style type="text/css">

.td1_class{
	background-color: #EFF0F2;
	color: #000000;
	padding: 10px;
	font-weight: bold;
}

.td2_class{
	background-color: #ffffff;
	padding: 7px;
}
.td1_class,.td2_class{
	text-align: center;
	border: 1px solid #C6C9D1;
}
.btn_small{

}
</style>

<?php

}

?>