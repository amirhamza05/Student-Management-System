<div class="col-md-6">
            <div class="dashboard_box">
                <div class="box_header">Last 7 Days SMS Send Performance Graph</div>
                <div class="box_body">
                     

                     <div id="curve_chart" ></div>
                
                    
                </div>
            </div>
        </div>
        
<script type="text/javascript">
      
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'SMS Send'],
          ['2004',  100],
          ['2005',  110],
          ['2006',  6],
          ['2007',  20],
          ['2008',  104],
          ['2009',  10],
          ['20010',  100]
        ]);

    var options = {
        title: 'SMS Send Performance Graph',
        curveType: 'function',
        'is3D':true,
        'height':300,
        lineWidth: 3,
        'chartArea': {'width': '90%', 'height': '80%'},
        colors: [bg_color],
        pointSize: 15,
        pointShape: 'circle',
        'legend': {'position': 'bottom'}
        
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>