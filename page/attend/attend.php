

<script src="page/attend/js/attend.js"></script>
<?php 
$date=date("Y-m-d",strtotime($db->date()));
?>
 <div class="row">
    
        <div class="dropdown" style="">
          
          <div class="col-md-3">
            <select onchange="select_program()" class="select" id="program_select" name="options">
                <option value="-1">Select Program</option>
                <?php $program_ob->select_program(); ?>
            </select>
          </div>

          <div class="col-md-3" id="batch_select">
            <select class="select" id="batch_select_id">
                <option value="-1">Select Batch</option>
            </select>
            <br/>
            <div id='loader_select'></div>
          </div>
          <div class="col-md-3">
              <input type="date" id="attend_date" value="<?php echo "$date"; ?>" class="input_date" name="">
          </div> 
          <div class="col-md-3">
            <button class="btn_select" onclick="attend_panel()">Attendence Panel</button>
          </div>
    </div> 
</div>

<div id="res" style="margin-top: 15px"></div>
<div id="attend_reportt" style="margin-top: 15px"></div>

<style type="text/css">
    .btn_attend{
        padding: 20px;
        font-size: 20px;
        background-color: var(--bg-color);
        color: var(--font-color);
        border-width: 0px;
    }
    .btn_attend:hover{
       font-size: 21px;
       padding: 19px;
    }
    .btn_area{
       align-content: center;
       margin-top: 10px;
    }

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
.input_date{
    width: 100%;
    background-color: var(--bg-color);
    color: var(--font-color);
    margin: 0.5em 0em 1em 0em;
    height: 3.5em;
    padding: 10px;
    border-width: 0px;
    border-radius: .25em;
}

.top-alert { 
  position: fixed;
  top: 0px;
  width: 100%;
  z-index: 100000;
  left: 0;
  padding: 50px;
  display: inline-block;
  text-align: center;
}
.top-alert .alert {
  width: auto !important;
  height: 100%;
  display: inline;
  position: relative;
  margin: 0;
}
.top-alert .alert .close {
  position: absolute;
  top: 11px;
  right: 10px;
  color: inherit;
}

.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { 
  border-color: #19B99A;
  background: #20A286;
  color: #fff; 
  padding: 20px;
  float: right;
  border-radius: 15px;
}

.alert a {color: gold;}


</style>