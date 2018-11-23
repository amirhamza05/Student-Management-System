

<style type="text/css">
	


.select {
  position: relative;
  display: block;
  height: 3.4em;
 
  width: 100%;
  padding: 10px;
  background: var(--bg-color);
  color: var(--font-color);
  overflow: hidden;
  border-radius: .25em;
  display: inline-block;
  display: -webkit-inline-box;
  border: 1px solid #667780;
  margin: 0.5em 0em 1em 0em;
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

.img{
    height: 40px;
    width: 30px;
}

.btn_select{
  position: relative;
  display: block;
  height: 3.5em;
 
  width: 100%;
  padding: 10px;
  background: var(--bg-color);
  color: var(--font-color);
  overflow: hidden;
  border-radius: .25em;
  display: inline-block;
  display: -webkit-inline-box;
  border: 1px solid #667780;
  margin: 0.5em 0em 1em 0em;
}

.header_box{
        background-color: var(--bg-color);
        color: var(--font-color);
        padding-top: 15px;
        padding-left: 15px;
        margin-bottom: -17px;
    }
    .box_body{
        background-color: #E1E2E1;
        padding: 20px;
        border-color: var(--bg-color);
        border-width: 1px;
        color: #000000;

    }
    .head_id{
        background-color: var(--bg-color);
        color: var(--font-color);
        padding: 15px;
        margin-left: 80px;: 
        
    }

    .box_overview{
        background-color: #ffffff;
        padding: 15px;
        font-weight: bold;
        font-size: 20px;
    }

</style>

 <div class="row">
    
        <div class="dropdown" style="">
          <div class="col-md-2"></div>
          <div class="col-md-3">
            <select onchange="program()" class="select" id="program_select" name="options">
            	<option value="0">Select Program</option>
            	<?php $program_ob->select_program(); ?>
            </select>
          </div>

          <div class="col-md-3" id="batch_select">
            <select onchange="program()" class="select" id="batch_select_id" name="options">
            	<option>Select Batch</option>
            </select>
          </div>
          <div class="col-md-2">
          	<button class="btn_select" onclick="view()">View</button>
          </div>
    </div>
</div> 

<div style="padding: 10px;"></div>

 <div class="row"  id="program_dashboard">	</div>


<br/>
<style type="text/css">
    


.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
    border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
    margin-bottom: -1px;
}
/********************************************************************/

/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;

}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
    background-color: rgba(0,0,0,0.4);
    padding: 17px;
    margin-bottom: 0px;
    border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
    color: #000000;
    font-weight: bold;
    background-color: #E1E2E1;
    margin-bottom: 2px;
    padding: 17px;
   
}


.tab-pane{
	color: #000000;
	cursor: unset;
}


</style>

<script type="text/javascript" src="page/student/student_list.js"></script>

