<?php

if(isset($_POST['sql_editor_run'])){
	
	$sql=$_POST['sql_editor_run'];
	if($sql==""){
		echo "<font style='color: red'><b>Query Is Empty.</b></font>";
		return;
	}

	$result=$db->select($sql);
	if($result==false){
		echo "<font style='color: red'><b>Query Is Not Valid.</b></font>";
	}
	else{
		$info=$db->get_sql_array($sql);
		
		echo "<pre class='data_array'>";
			print_r($info);
		echo "</pre>";
	}
	
	
}

if(isset($_POST['sql_editor'])){

?>

<div class="row">
	<div class="col-md-5">
		<div class="sql_header">Write SQL Query</div>
		<textarea placeholder="Write SQL Query Here" class="sql_editor" id="sql_editor"></textarea>
		<div class="sql_btn_area pull-right">
			<a target="_blank" href="https://www.w3schools.com/sql/default.asp"><button class="sql_btn" onclick=""><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> Read Documentation</button></a>
			<button class="sql_btn" onclick="sql_editor_run()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> Run</button>
			<button class="sql_btn" onclick="sql_editor()"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Reload</button>
		</div>
	</div>
	<div class="col-md-7">
		<div class="sql_header">Query Output</div>
		<div class="sql_editor_output" id="sql_editor_output"></div>
		<div class="sql_btn_area pull-right">
			<button class="sql_btn" onclick="print('sql_editor_output')"><span class="glyphicon glyphicon-save" aria-hidden="true"></span> Download Data</button>
			<button class="sql_btn" onclick="print('sql_editor_output')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print Data</button>
		</div>
	</div>
</div>

<style type="text/css">
	.sql_editor_output{
		height: 370px;
		
		background-color: #F5F5F5;
		padding: 5px;
		border: 1px solid var(--bg-color);
		
	}
	
	.data_array{
		color: #333333;
		font-size: 13px;
		border-width: 0px;
		height: 100%;
		overflow: scroll;
	}

	.sql_editor{
		width: 100%;
		height: 100%;
		height: 370px;
		padding: 10px;
		font-size: 20px;
		font-weight: bold;
		resize: none;
		border: 1px solid var(--bg-color);
		background-color: #F5F5F5;
		color: #1e272e;
	}
	.sql_editor:focus{
		outline: none;
		border: 1px solid var(--bg-color);
	}
	.sql_header{
		padding: 10px;
		background-color:var(--bg-color);
		color: var(--font-color);
		font-weight: bold;
	}
	.sql_btn{
		padding: 10px;
		font-weight: bold;
		background-color: var(--bg-color);
		color: var(--font-color);
		border-width: 0px;
		border-radius: 5px;
	}
	.sql_btn_area{
		padding: 5px;
	}

</style>

<?php

}