<?php
if(isset($_POST['view_exam'])){
?>
<div class="row">
    <div class="col-md-3">asdf</div>
    <div class="col-md-9">asdf</div>
</div>
<button class="btn btn-danger btn-xs" onclick="view_exam(1)">View Panel</button>
<div class="row" style="padding: 15px;">
		<div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title" id="exam_panel_title">Panel title</h3>
                    <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active">
                                <a href="" onclick="exam_control('exam_overview')" data-toggle="tab">
                                    <span class="glyphicon glyphicon-list-alt icon_class">    
                                    </span> <br/>
                                    Exam Overview
                                </a>
                            </li>
                            <li class="">
                                <a href="" onclick="exam_control('exam_report')"  data-toggle="tab">
                                    <span class="glyphicon glyphicon-list-alt icon_class">    
                                    </span> <br/>
                                    Result Report
                                </a>
                            </li>
                            <li class="">
                                <a href="#tab1" onclick="exam_control('add_result')" data-toggle="tab">
                                    <span class="glyphicon glyphicon-list-alt icon_class">    
                                    </span> <br/>
                                    Add Result
                                </a>
                            </li>
                            <li class="">
                                <a href="#tab1" data-toggle="tab">
                                    <span class="glyphicon glyphicon-list-alt icon_class">    
                                    </span> <br/>
                                    SMS Result
                                </a>
                            </li>
                        </ul>
                    </span>
                </div>
                <div class="panel-body" id="exam_control_panel_body">
                    
                      
                </div>
            </div>
        </div>
	</div>

<style type="text/css">
	/*Panel tabs*/
.panel-title{
    padding-top: 5px;
    font-size: 22px;
    font-weight: bold;
}
.panel-heading{
    height: 62px;
}
.panel-tabs {
    position: relative;
    bottom: 44px;
    font-size: 14px;
}

.panel-tabs > li {
    float: left;
    text-align: center;
}

.panel-tabs > li > a {
    font-size: 14px;
    border: 0px solid transparent;
    font-weight: bold;
    margin-top: 5px;
    margin-right: 4px;
    
}

.panel-tabs > li > a:hover {
    color: #fff;
    cursor: pointer;
    font-size: 14px;
    height: 60px;
    margin-top: 5px;
    background-color: var(--bg-color);
    color: var(--font-color);
    border-bottom-color: transparent;
    
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #fff;
    cursor: default;
    font-size: 14px;
    height: 60px;
    margin-top: 0px;
    background-color: var(--bg-color);
    color: var(--font-color);
    border-bottom-color: transparent;
}
</style>

<?php

}

?>

