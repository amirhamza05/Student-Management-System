<script type="text/javascript" src="page/notice/notice_script/notice.js"></script>

<center>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" data-title="Add Product" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add Notice</button>
    
</div>
</center>

<div id="sms_body_list">
<?php 

foreach ($notice_info as $key => $value) {
  $title=$value['title'];
  $description=$value['description'];
  $id=$value['id'];
  for($i=0; $i<1; $i++){
?>
        <div class="row carousel-row">
        <div class="col-xs-10 col-xs-offset-1 slide-row">
          
<div id="carousel-1" style="" class="carousel slide slide-carousel">
  
              <!-- Wrapper for slides -->
              <div style="background-color: #2E363F;height: 160px;">
              <div class="carousel-inner">
                  <div class="time_body">
              <span class="day">4</span>
              <span class="month">Jul</span>
              <span class="year">2014</span>
                  </div>
              </div>
            </div>

    </div>


            <div class="slide-content">
               <div class="notice_des">
                <h4><?php echo "$title"; ?></h4>
                <p style="">
                    <?php echo "$description"; ?>
                </p>
                </div>
            </div>
            <div class="slide-footer">
                <span class="pull-right buttons">
                  <button class="btn btn-sm btn-primary" data-toggle="modal" onclick="send_btn(<?php echo "$id"; ?>)" data-target="#send_sms"><i class="fa fa-fw fa-shopping-cart"></i><b>Send SMS</b></button>
                  <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-shopping-cart"></i><b>Edit</b></button>
                   <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-shopping-cart"></i><b>Delete</b></button>
                </span>
            </div>
        </div>
    </div>

<?php } } ?>
        
</div>
<!-- start Add model -->

  <div class="modal large fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel">Add Notice</h4>
        </div>

        <div class="modal-body" style="background-color: #3D3D3D; margin-bottom: -15px ">
          <input id="title" type="text" placeholder="Enter Notice Title" name="" style="width: 100%; padding: 15px;margin-bottom: 5px; font-weight: bold;font-size: 20px;">
            <?php include "page/editor/sms_editor.php"; ?>
        </div>
          <div class="modal-footer" style="background-color: #414959; color: #ffffff">
       

        <button type="button" onclick="save_notice()" class="btn btn-primary">Save Notice</button>
      </div>
       
      </div>
    </div>
</div>


<div class="modal fade notice" id="send_sms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="">
            <button style="padding: 15px;" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel">Save Notice</h4>
        </div>
        <div class="modal-body" id="send_body" style="">

        </div>
       
      </div>
    </div>
</div>
  <input type="number" name="" id="notice_id" hidden="">

    <style type="text/css">
.notice .modal-dialog{max-width: 700px; width: 100%;}

  .modal-backdrop
{
    opacity: .9 !important;
} 
      /* FONT AWESOME & not necessary for functions */
  .btn_send{
    padding: 10px;
    background-color: #2B383B;
    color: #ffffff;
  }
  .btn_send:hover{
    padding: 10px;
    background-color: #2B383B;
    color: #ffffff;
  }

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

/*REQUIRED*/
.carousel-row {
    margin-bottom: 10px;
}

.slide-row {
    padding: 0;
    background-color: #F1F1F1;
    min-height: 160px;
    border: 0px solid #e7e7e7;
    overflow: hidden;
    height: auto;
    position: relative;
}
.time{
    display: inline-block;
    width: 100%;
    color: #ffffff;
    background-color: rgb(197, 44, 102);
    padding: 5px;
    text-align: center;
    text-transform: uppercase;
}
.day{
  display: block;
    font-size: 56pt;
    font-weight: 100;
    line-height: 1;
    color: #ffffff;
}
.notice_des{
  margin-left: -15px;
  margin-right: 5px;
  font-size: 16px;
  font-family: sans-serif;
}
.month {
    display: block;
    font-size: 24pt;
    font-weight: 900;
    line-height: 1;
    color: #ffffff;
  }
.year{
  color: #ffffff;
}
  .time_body{
      
    box-shadow: 0px 0px 5px rgb(51, 51, 51);
    box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
    padding: 0px;
    padding: 5px;
    text-align: center;
    margin: 0px 2px 0px 0px;
  }
 
.slide-carousel {
    width: 15%;
    float: left;
    background-color: #000000;
    
}


.slide-content {
    position: absolute;
    top: 0;
    left: 16%;
    display: block;
    float: left;
    width: 84%;
    max-height: 84%;
    padding: 1.5% 2% 2% 2%;
    overflow-y: auto;
}

.slide-content h4 {
    margin-bottom: 3px;
    margin-top: 0;
    font-weight: bold;
}

.slide-footer {
    position: absolute;
    bottom: 0;
    left: 15%;
    width: 85%;
    height: 25%;
    margin: -2px;
    padding: 3px;
    padding-right: 25px;
    
}

/* Scrollbars */
.slide-content::-webkit-scrollbar {
  width: 5px;
}
 
.slide-content::-webkit-scrollbar-thumb:vertical {
  margin: 5px;
  background-color: #999;
  -webkit-border-radius: 5px;
}
 
.slide-content::-webkit-scrollbar-button:start:decrement,
.slide-content::-webkit-scrollbar-button:end:increment {
  height: 5px;
  display: block;
}
    </style>