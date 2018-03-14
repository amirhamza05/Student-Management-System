
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
  background: #2c3e50;
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
  color: #fff;
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

.input_box{
	position: relative;
  display: block;
  height: 3em;
  color: #ffffff;
  padding: 10px;
  font-weight: bold;
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
  display: inline-block;
  display: -webkit-inline-box;
  border: 1px solid #667780;
}
</style>

<style type="text/css">
    
</style>

<body>
   

    <div class="container" style="background: transparent; max-width: 1140px;">
        <div class="body-content" style="margin: 0 auto; max-width: 970px;">
            <br />
            <div class="customMessage text-center">
            </div>




<div class="header_box text-center">
            Exam Details
        </div>
<form action="/Result" id="resultCheck" method="post">   

 <div class="box_body">
        
        <div class="panel-body">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4" for="PrnNo"><b>Program Roll :</b></label>
                        <div class="col-md-4 col-sm-4 col-xs-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-required="The Program Roll : field is required." id="id" maxlength="11" name="PrnNo" onkeyup ="roll_find()" type="text" value="" />
                            
                            <span class="field-validation-valid text-danger" data-valmsg-for="PrnNo" data-valmsg-replace="true"></span>
                        </div>
                        <span class="loading" id="loading" style="float: left; margin-right: 5px;"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4" for="SelectedCourse"><b>Subject :</b></label>
                        <div class="col-md-4 col-sm-4 col-xs-10">
                            <select class="form-control" onchange ="exam_find()" id="select_subject" name="SelectedCourse" required="required"><option value="">--Select Subject--</option>
</select>
                            <span class="field-validation-valid text-danger" data-valmsg-for="SelectedCourse" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4" for="ExamId"><b>Exam :</b></label>
                        <div class="col-md-4 col-sm-4 col-xs-10">
                            <select class="form-control" data-val="true" data-val-number="The field Exam : must be a number." data-val-required="The Exam : field is required." id="select_exam" onchange ="result_find()" name="ExamId" required="required"><option value="">--Select Exam--</option>
</select>
                            <span class="field-validation-valid text-danger" data-valmsg-for="ExamId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-10">
                            <input type="button" onclick="show_result()" value="Submit" class="btn btn-primary" id="displayResult" />
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>




<div id="result">


    </div>
    </div>
   




</div>