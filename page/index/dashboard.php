
<script type="text/javascript" src="page/index/js/dashboard.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
            $(document).ready(function() {
                 $('table.display').DataTable();
            } );
        </script>




<?php

$total_student=count($student);
$total_notice=count($notice_info);
$info=$sms->sms_balance();

?>

<?php
/**
* Show user information like IP address, useragent
**/

?>

<?php


?>



 <div class="row" style="margin-bottom: 10px;">
    <?php include 'dashboard_info.php'; ?>
</div>
 <div class="row" >

                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile">
                            <a href="">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Total Students
                                </div>
                                <div class="circle-tile-number text-faded">
                                    <?php echo "$total_student"; ?>
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile">
                            <a href="">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-money fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Total Teacher
                                </div>
                                <div class="circle-tile-number text-faded">
                                    -
                                </div>
                                <a href="" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile">
                            <a href="">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-bell fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    SMS Balance
                                </div>
                                <div class="circle-tile-number text-faded">
                                   <?php echo $info['balance']; ?>
                                </div>
                                <a href="" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Total Notice
                                </div>
                                <div class="circle-tile-number text-faded">
                                    <?php echo "$total_notice"; ?>
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
        </div>



    <div class="row">
    
    <script src="tool/chart_api/canvas_api.js"></script>


        <?php 
       
       if($user_permit<8){
        include "student_admit_graph.php"; 
        include "site_activity.php"; 
        
       }
        ?>

    </div>    

<link rel="stylesheet" type="text/css" href="page/index/style.css">
<style type="text/css">
    thead{
        background-color: #EFF0F2;
        border-width: 0px;
    }
    .td_list1{
        background-color: #EFF0F2;
        color: #000000;
        padding: 10px;
        font-weight: bold;
        border: 1px solid #C6C9D1;
        text-align: center;
    }
    .td_list2{
        background-color: #ffffff;
        color: #000000;
        padding: 8px;
        border: 1px solid #C6C9D1;
        text-align: center;
    }
</style>

<script type="text/javascript">
    live_site_action();
</script>