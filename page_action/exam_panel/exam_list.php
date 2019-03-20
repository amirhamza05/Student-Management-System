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

if(isset($_POST['view_exam'])){
	?>
<input type="text" id="datepicker" />
<div class="row" style="padding: 15px;">
		<div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                    <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Exam Overview</a></li>
                            <li><a href="#tab2" data-toggle="tab">Result Report</a></li>
                            <li><a href="#tab3" data-toggle="tab">Add Result</a></li>
                            <li><a href="#tab4" data-toggle="tab">SMS Result</a></li>
                        </ul>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At</div>
                        <div class="tab-pane" id="tab2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                        <div class="tab-pane" id="tab3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                        <div class="tab-pane" id="tab4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</div>
                    </div>
                </div>
            </div>
        </div>
	</div>

<style type="text/css">
	/*Panel tabs*/
.panel-tabs {
    position: relative;
    bottom: 30px;
    clear:both;
    border-bottom: 1px solid transparent;
}

.panel-tabs > li {
    float: left;
    margin-bottom: 1px;
}

.panel-tabs > li > a {
    margin-right: 2px;
    margin-top: 3px;
    font-size: 14px;
    border: 1px solid transparent;
    font-weight: bold;
}

.panel-tabs > li > a:hover {
    border-color: transparent;
    color: var(--bg-color);
    font-size: 14px;
    
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #fff;
    cursor: default;
    font-size: 14px;
    background-color: var(--bg-color);
    color: var(--font-color);
    border-bottom-color: transparent;
}
</style>

<?php

}

?>