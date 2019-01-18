<?php

if(isset($_POST['student_info_nav_bar'])){
	need_css();
	?>

			<a href="add_student.php">
            <button class="btn_tab_under"><i class="fa fa-home"></i> Add Student</button>
            </a>
            <button class="btn_tab_under" onclick="nav_bar_student_action(1)"><i class="fa fa-home"></i> View Student</button>
            <button class="btn_tab_under" onclick="nav_bar_student_action(2)"><i class="fa fa-home"></i> Payment Receive</button>

	<?php 
}

if(isset($_POST['nav_bar_student_action'])){
	$per=$_POST['nav_bar_student_action'];
	$btn=($per==1)?"View Student":"Receive Payment";
	need_css();
?>
    <input type="text" class="input_style" placeholder="Enter Student ID" name="" id="student_id">
    <button class="btn_tab_under" onclick="nav_bar_student_final_action(<?php echo $per; ?>)"><?php echo $btn; ?></button>

<?php

}

if(isset($_POST['check_student_id'])){
	$id=$_POST['check_student_id'];
    $info=array();
	$info['status']=0;
	if(isset($student[$id]))$info['status']=1;
    $info=json_encode($info);
    echo "$info";
}

function need_css(){

?>

<style type="text/css">
	.btn_tab_under{
		background-color: var(--bg-color);
		color: var(--font-color);
		padding: 15px 5px 15px 5px;
		margin-top: 5px;
		width: 100%;
		border-width: 0px;
	}
	.input_style{
		padding: 10px 5px 10px  5px;
		width: 100%;
		font-weight: bold;
	}
</style>


<?php } ?>