
<script type="text/javascript" src="page/id_card/id_card_editor/js/script.js"></script>
<div class="row">
	<div class="col-md-5">
		<div class="id_card_info_area">
			<div class="editor_card_header">
				ID Card
			</div>
			<div class="editor_card_body" id="">

				<div id="editor_card_body" style="margin-left: 40px;"></div>
			</div>
			<div class="editor_card_header" style="height: auto;">
				<button class="card_option_btn" onclick="load_id_card()">Basic Setting</button>
				<button class="card_option_btn" onclick="click_option(1)">Image</button>
				<button class="card_option_btn" onclick="test()">Border</button>
				<button class="card_option_btn" onclick="click_option(3)">Color</button>
				<button class="card_option_btn" onclick="click_option(3)">Shadaw</button>
				<button class="card_option_btn" onclick="click_option(3)">Option</button>
				<button class="card_option_btn" onclick="click_option(3)">Barcode</button>
				<button class="card_option_btn" onclick="click_option(3)">Area Button 3</button>
			</div>
				
		</div>
	</div>
	<div class="col-md-7" style="margin-left: -30px;">
		<div class="editor_card_header">
				ID Card
		</div>
		<div id="editor_area" class="editor_area">
			
		</div>
		<div class="editor_area_footer">
			<button class="card_option_btn" onclick="click_option(1)">Image</button>
			<button class="card_option_btn" onclick="click_option(1)">Image</button>
		</div>
	</div>
</div>



<script type="text/javascript">
	click_option(1);
</script>

<style type="text/css">
	
	.card_option_btn{
  		background-color: rgba(0,0,0.1,0.1);
  		color: var(--font-color);
  		padding: 10px;
  		border-radius: 5px;
  		margin-left: 5px;
  		margin-bottom: 5px;
  		width: 31%;
  		border: 1px solid rgba(0,0,0.1,0.1);
  		font-size: 15px;
  		font-family: "Trebuchet MS", Helvetica, sans-serif;
}
	.card_option_btn:hover{
   		background-color: rgba(0,0,0,0.3);
	}
	.card_option_btn:focus {
    	outline: 0 !important;
    	background-color: rgba(0,0,0,0.3);
	}
	.editor_area{
		height: 410px;
		border: 1px solid var(--bg-color);
		padding: 15px;
		background-color: #C6C9D1;
		overflow: scroll;
		border-width: 0px 6px 0px 3px;
	}
	.editor_area_footer{
		background-color: var(--bg-color);
		padding: 7px;
		border: 1px solid var(--bg-color);
	}
	.id_card_info_area{
		border: 1px solid var(--bg-color);
		border-width: 0px 3px 0px 6px;
		height: auto;
	}
	.editor_card_header{
		border: 1px solid var(--bg-color);
		border-width: 0px 3px 0px 3px;
		background-color: var(--bg-color);
		color: var(--font-color);
		padding: 10px;
	}
	.editor_card_body{
		min-height: 310px;
		max-height: auto;
		padding: 15px;
	}
	.option1{
		height: 150px;
		padding-left: 15px;
		background-color: #ffffff;
	}
	.option2{
		height: 150px;
		padding-left: 15px;
		background-color: #eeeeee;
	}
	.option1 li{
		background-color: var(--bg-color);
		padding: 5px;
		color: var(--font-color);
		margin-bottom: 2px;
	}
</style>

