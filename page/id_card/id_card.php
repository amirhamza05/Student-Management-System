

<style type="text/css">
	.select,
.download-target {
  width: 15em;

}
.select {
  position: relative;
  display: block;
  height: 3em;
  line-height: 3;
  background: var(--bg-color);
  overflow: hidden;
  border-radius: .25em;
  display: inline-block;
  display: -webkit-inline-box;
  border: 1px solid #667780;
  margin: 1em 0;
}
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: var(--font-color);
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #34495e;
  pointer-events: none;
}
.select:hover::after {
  color: #f39c12;
}
.select::after {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
</style>

<div class="container">
	<div class="row">
		<h2>Print/Preview ID Card </h2>
		
		<form>
		    <div class="dropdown">

		        <select onchange="program()" class="dropdown-select-version select" id="program_select" name="options">
		        	<option value="0">All Program</option>
		    <?php  foreach ($program as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	   ?>
		            <option value="<?php echo "$id"; ?>"><?php echo "$name"; ?></option>
		           <?php } ?>
		        </select>
            <a id="batch_div">
		        <select class="dropdown-select-version select" name="options" id="batch_select">
		            <option value="0"> All Batch </option>
		        </select>
		     </a>   
         <a id="student_div">
		        <select class="dropdown-select-version select" name="options" id="student_select">
		            <option value="0"> All Student </option>
		        </select>
		    </a>

		         <a id="btnn"  onclick="print_id_card()" class="btn btn-primary download-target" style="padding: 10px;" title="Download" alt="Download">Print ID Card</a>
		    </div>
		    

		   
		   
		</form>
	</div>
</div>

<input type="text" value="0" id="student_id_h" name="" hidden="">
<input type="text" value="0" id="batch_id_h" name="" hidden="">
<input type="text" value="0" id="program_id_h" name="" hidden="">


<div class="row" style="margin-left: 5px;">
<div class="box" id="preview_id_card">

<?php 

$info=$student_ob->get_select_student(0,0,0);
$id_card->get_id_card($info);

 ?>

</div>
</div>
