<html>
<head>
</head>
<body>
    <canvas id="canvas" style="height: 600px; width: 100%;">
    	
    </canvas>
    
</body>
</html>

<script type="text/javascript">
	var canvas=document.getElementById('canvas');
	var ctx=canvas.getContext("2d");
	var r_w=9;
	var balls= [
	           {x: 0, y:32 ,dx:1,dy:2,color:"#ED350A"},
	           {x: 0, y:1 ,dx:2,dy:2,color:"#ED350A"},
	           {x: 0, y:2 ,dx:2,dy:2,color:"#ED350A"},
	           {x: 0, y:3 ,dx:2,dy:2,color:"#ED350A"},
	           {x: 0, y:4 ,dx:2,dy:2,color:"#ED350A"},
	          ];

	var road=[
	 			[0,30,300,r_w],[15,30,r_w,30],[15,60,100,r_w],

	 		];

 
    var x=0;
    c=0;
    var flag=0;
    function animation() {
    	clear_data(flag);
    	flag=1;
    	var ball=balls[c];
    	if(ball.x>=300 || ball.x<0)ball.dx=-ball.dx;
    	if(ball.y>=120 || ball.y<0)ball.dy=-ball.dy;
    	
    	ctx.fillStyle="red";
    	ctx.fillRect(ball.x,ball.y,5,5);
    	ball.x+=ball.dx;
    	//ball.y+=ball.dy;
    	//c++;
    }

    function clear_data(flag){
    	clear_road();
    	if(flag==0){
    	  set_filed();
    	  set_home();
       }
    	set_road();
        //set_filed();
    	
    }

   function clear_road(){
   	for(i=0; i<road.length; i++){	
     ctx.clearRect(road[i][0],road[i][1],road[i][2],road[i][3]);
    }
  }

    function set_home(){
    	//ctx.clearRect(120,80,30,30);
    	ctx.fillStyle="#ED350A";
        //ctx.fillRect(120,80,30,30);
       set_image(120,80,'upload/site_content/tree1.jpg',30,30);
 
    }

    function set_filed(){
    	for(i=0; i<=300; i+=10){
    		for(j=0; j<=150; j+=10){
           set_image(i,j,'upload/site_content/bg.jpg',10,10);
    			ctx.fillRect(i,j,5,5);
    		}
    	}
    }

    function set_road(){
     for(i=0; i<road.length; i++){	
    	ctx.fillStyle="#0A5B80";
    	ctx.fillRect(road[i][0],road[i][1],road[i][2],road[i][3]);
      }
      set_image(56,0,'upload/site_content/tree1.png',15,15);
    }


    function set_image(x,y,src,height,width){
    	var imageObj = new Image();
        imageObj.onload = function() {
          ctx.drawImage(imageObj, x, y, height, width);
         };
       imageObj.src = src;
    }
    //animation();
    setInterval(animation, 100);

    

</script>