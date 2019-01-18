
function graph(data,data1){

  CanvasJS.addColorSet("greenShades",
    [
      bg_color              
    ]);

  var message_send = new CanvasJS.Chart("message_send_graph", {
      animationEnabled: true,
      colorSet: "greenShades",
      theme: "light2", // "light1", "light2", "dark1", "dark2"
      title:{
        text: "Last 7 Days SMS Send Performance Graph"
      },
      axisY: {
       title: "Total SMS Send (Daily)"
      },
      data: [{        
        type: "column",  
        showInLegend: true, 
        legendMarkerColor: "grey",
        legendText: "Daily Total SMS Send",
        dataPoints: data
      }]
    });


    var site_activity = new CanvasJS.Chart("site_activity_graph", {
      animationEnabled: true,
      colorSet: "greenShades",
      theme: "light2",
      title:{
        text: "Last 7 Days Site Activity Graph"
      },
      axisY:{
        includeZero: false
      },
      data: [{        
        type: "line",
        lineThickness: 4,
        markerSize: 16,       
        dataPoints: data1
      }]
    });

    site_activity.render();
    message_send.render();

}