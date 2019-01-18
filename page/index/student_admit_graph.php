
<script type="text/javascript" src="page/index/js/graph.js"></script>

<div class="col-md-6">
            <div class="dashboard_box" style="overflow: hidden;">
                <div class="box_header">Last 7 Days Site Activity Graph</div>
                <div class="box_body">
                     <div id="site_activity_graph" style="height: 300px; width: 100%;"></div>
                    
                </div>
            </div>
</div>
<div class="col-md-6">
            <div class="dashboard_box" style="overflow: hidden;">
                <div class="box_header">Last 7 Days SMS Send Performance Graph</div>
                <div class="box_body">
                     
                    <div id="message_send_graph" style="height: 300px; width: 100%;"></div>       
                   
                </div>
            </div>
</div>
  
<?php

$sms_send_data=$graph->get_last_sms_data(7);
$site_activity_data=$graph->get_site_activity_data(7);

?>

<script>

sms_send_data=<?php echo "$sms_send_data"; ?>;
site_activity_data=<?php echo "$site_activity_data"; ?>;

window.onload = function () {
  graph(sms_send_data,site_activity_data);

}

</script>


