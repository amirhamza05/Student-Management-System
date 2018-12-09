
<?php 

$bg_color="#000000";

?>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Submission Date", "Total Submission", { role: "style" } ],
        ["08 Dec", 40, "#00b894"],
        ["07 Dec", 10, "#0984e3"],
        ["06 Dec", 0, "#6c5ce7"],
        ["05 Dec", 0, "#d63031"],
        ["04 Dec", 0, "#e84393"],
        ["03 Dec",0 , "#e17055"],
        ["02 Dec", 330, "#ffaf40"],
        ["01 Dec", 0, "#0fbcf9"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"],
        ["30 Nov", 0, "#f53b57"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        chartArea:{left:20,top:15,bottom:30,right:5,width:"100%",height:"90%"},
        'backgroundColor': {
                'fill': '#ffffff',
                'opacity': 100
            },     
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

<script type="text/javascript">
       google.charts.load('current', {'packages':['line', 'corechart']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var button = document.getElementById('change-chart');
      var chartDiv = document.getElementById('chart_div');

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Month');
      data.addColumn('number', "Average Temperature");

      data.addRows([
        [new Date(2014, 0),  0],
        [new Date(2014, 1),   .4],
        [new Date(2014, 2),   .5],
        [new Date(2014, 3),  2.9],
        [new Date(2014, 4),  6.3],
        [new Date(2014, 5),    9],
        [new Date(2014, 6), 10.6],
        [new Date(2014, 7), 10.3],
        [new Date(2014, 8),  7.4],
        [new Date(2014, 9),  4.4],
        [new Date(2014, 10), 1.1],
        [new Date(2014, 11), .2]
      ]);

      var materialOptions = {
        chart: {
          //title: 'Average Temperatures and Daylight in Iceland Throughout the Year'
        },
        width: '100%',
        height: 250,
        series: {
          // Gives each series an axis name that matches the Y-axis below.
          0: {axis: 'Temps'},
          1: {axis: 'Daylight'}
        },
        axes: {
          // Adds labels to each axis; they don't have to match the axis names.
          y: {
            Temps: {label: 'Temps (Celsius)'},
            Daylight: {label: 'Daylight'}
          }
        }
        'backgroundColor': {
                'fill': '#ffffff',
                'opacity': 100
            },     
        bar: {groupWidth: "95%"},


      };

     

      function drawMaterialChart() {
        var materialChart = new google.charts.Line(chartDiv);
        materialChart.draw(data, materialOptions);
        button.innerText = 'Change to Classic';
        button.onclick = drawClassicChart;
      }


      drawMaterialChart();

    }
  </script>