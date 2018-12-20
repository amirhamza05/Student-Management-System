<script type="text/javascript" src="page/notice/js/notice.js"></script>

<center>
<div class="btn-toolbar list-toolbar">
   <button class="btn btn-primary" onclick="get_notice_form('insert')"><i class="fa fa-plus"></i> Add Notice</button>
</div>
</center>

<div id="sms_body_list">



<?php 

function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds')
{
  $sets = array();
  if(strpos($available_sets, 'l') !== false)
    $sets[] = 'abcdefghjkmnpqrstuvwxyz';
  if(strpos($available_sets, 'u') !== false)
    $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
  if(strpos($available_sets, 'd') !== false)
    $sets[] = '23456789';
  if(strpos($available_sets, 's') !== false)
    $sets[] = '!@#$%&*?';
  $all = '';
  $password = '';
  foreach($sets as $set)
  {
    $password .= $set[array_rand(str_split($set))];
    $all .= $set;
  }
  $all = str_split($all);
  for($i = 0; $i < $length - count($sets); $i++)
    $password .= $all[array_rand($all)];
  $password = str_shuffle($password);
  if(!$add_dashes)
    return $password;
  $dash_len = floor(sqrt($length));
  $dash_str = '';
  while(strlen($password) > $dash_len)
  {
    $dash_str .= substr($password, 0, $dash_len) . '-';
    $password = substr($password, $dash_len);
  }
  $dash_str .= $password;
  return $dash_str;
}
if(isset($_GET['id'])){
$id=$_GET['id'];
$en=(int)(($id%4)*(100%7)+35-4+3);
$id="#@".$id;
$en=base64_encode($id);
$en=generateStrongPassword(6,false,"hamza");
echo "$en";

}
foreach ($notice_info as $key => $value) {
  $title=$value['title'];
  $description=$value['description'];
  $id=$value['id'];
  $date=$value['date'];
  $day=date("d", strtotime($date));
  $month=date("M", strtotime($date));
  $year=date("Y", strtotime($date));
  
  for($i=0; $i<1; $i++){
?>
        <div class="row carousel-row">
        <div class="col-xs-10 col-xs-offset-1 slide-row">
          
<div id="carousel-1" style="" class="carousel slide slide-carousel">
  
              <!-- Wrapper for slides -->
        <div style="background-color: background-color: var(--bg-color);  
    color: var(--font-color)!important;height: 160px;">
              <div class="carousel-inner">
                  <div class="time_body">
              <span class="day"><?php echo "$day"; ?></span>
              <span class="month"><?php echo "$month"; ?></span>
              <span class="year"><?php echo "$year"; ?></span>
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
                  <button class="btn btn-sm btn-primary" data-toggle="modal" onclick="send_sms_form(<?php echo "$id"; ?>)" data-target="#send_sms"><i class="fa fa-fw fa-shopping-cart"></i><b>Send SMS</b></button>
                  <button class="btn btn-sm btn-primary" onclick="get_notice_form('update',<?php echo "$id"; ?>)"><i class="fa fa-fw fa-shopping-cart"></i><b>Edit</b></button>
                   <button class="btn btn-sm btn-primary" onclick="get_notice_form('delete',<?php echo "$id"; ?>)"><i class="fa fa-fw fa-shopping-cart"></i><b>Delete</b></button>
                </span>
            </div>
        </div>
    </div>

<?php } } ?>
        
</div>

  <input type="number" name="" id="notice_id" hidden="">

    <style type="text/css">

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
    background-color: var(--bg-color);  
    color: var(--font-color)!important;
    padding: 5px;
    text-align: center;
    text-transform: uppercase;
}
.day{
  display: block;
    font-size: 56pt;
    font-weight: 100;
    line-height: 1;
    
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
  }
.year{
  
}
  .time_body{
    background-color: var(--bg-color);  
    color: var(--font-color)!important;
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
    background-color: var(--bg-color);  
    color: var(--font-color)!important;
    
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