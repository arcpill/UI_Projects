<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>16836PY- HTML5 Bouncing Ball</title>
<style type="text/css">
#myCanvas {
   clear: both;
   border-collapse: collapse;
   border: 1px solid black;
}
</style>
</head>
<body>

<h1>Bouncing a Ball Around with HTML5 and JavaScript - 
       Archana Pillai, Fall 2016</h1>
<div id="container">
   <table>
      <tr>
         <td colspan="3">
            <canvas id="myCanvas" width="300" height="300"></canvas>
         </td>
      </tr>
      <tr align="center">
         <td><input type="button" value="Start" onclick="fnstrtBtn()"></td>
         <td><input type="button" value="Stop" onclick="fnstopBtn()"></td>
		 <td><input type="button" value="Reverse" onclick="fnreverseBtn()"></td>
      </tr>
   </table>
</div>

<script type="text/javascript">
   var context;
   var dx = -2;
   var dy = -2;
   var y = 250;
   var x = 100;

   var intervalTime = 10
   var togglenumber = 1;
   var colorCode = "#0000ff";

   var boolStop = false;

   // Call the function draw
   // every #intervalTime ms
   var setIntr = setInterval(draw, intervalTime);

   // Start btn functioanlity
   function fnstrtBtn() {
      console.log("fnstrtBtn:");
      if (boolStop) {
         setIntr = setInterval(draw, intervalTime);
         boolStop = false;
      }
   }

   // Stop btn functioanlity
   function fnstopBtn() {
      console.log("fnstopBtn:");
      clearInterval(setIntr);
      boolStop = true

   }
   
   // Reverse btn functioanlity
   function fnreverseBtn() {
      console.log("fnstopBtn:");
      if( dx == -2 && dy == -2 )
	    {dx = 2; dy = 2;}
	 else
	    {dx = -2; dy = -2;}
   }
   

   // Drawing the circle functioanlity
   function draw() {
      context= myCanvas.getContext('2d');
      // To erase the old cirlces
      context.clearRect(0,0,300,300);
      context.beginPath();
      if( x<0 || x>300) 
		context.fillStyle="#0000ff";
	  if ( y<0 || y>300)
		context.fillStyle="#FF0000";
   
      // Draws a circle of radius 20 at the 
      // coordinates (x,y) on the canvas
      context.arc(x,y,20,0,Math.PI*2,true);
      context.closePath();
      context.fill();
   
      // Boundary Logic
      if ( x<0 || x>300)
         dx=-dx;
      if ( y<0 || y>300)
         dy=-dy;
      x+=dx;
      y+=dy;
   }
</script>
</body>
</html>
