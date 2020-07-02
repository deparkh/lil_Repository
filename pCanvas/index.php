<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Canvas!</title>
</head>
<body style="margin:0;">
  <canvas id="canvas" style="display:block;">Your browser is not supported</canvas>
  <script type="text/javascript">
    var
         canv = document.getElementById('canvas'),
         ctx = canv.getContext('2d');

         canv.width=window.innerWidth;
         canv.height=window.innerHeight;
        // Code

        // setting bg to white (default = transparent)
        ctx.fillStyle = 'white';
        ctx.fillRect(0, 0, canv.width, canv.height);

        // Square
        var x=50
        ctx.fillStyle = 'magenta'; //Color
        ctx.strokeStyle='red';
        ctx.lineWidth=10;
        ctx.strokeRect(x, 50, 300, 200); //Stroke = border, fill = bg

        // Circle
        ctx.fillStyle='blue';
        ctx.arc(canv.width/2, canv.height/2, 100, 0, Math.PI); //X offset, Y offset, radius, start angle, end angle, anti clockwise(default=false)
        ctx.fill();

        // Triangle
        ctx.strokeStyle='green';
        ctx.lineWidth=5;
        ctx.scale(2, 1); //size changing in proportions
        ctx.rotate(-.2); //if you want to rotate on 3 degree, type  3 * Math.PI/180
        ctx.beginPath();
        ctx.moveTo(150, 300);
        ctx.lineTo(50, 500);
        ctx.lineTo(250, 500);
        ctx.closePath(); //connect the latest line to the first line OR ->
        // -> ctx.lineTo(150, 300);
        ctx.stroke();

        // Gradient
        var grad=ctx.createLinearGradient(0, 0, 400, 0)//beginning and ending positions XY
        grad.addColorStop('0', 'magenta');// 0 = 0%, beginning of the Gradient way
        grad.addColorStop('.50', 'blue');//.50 = 50%, half of the Gradient way
        grad.addColorStop('1', 'red');// 1 = 100%, end of the Gradient way

        // Text
        ctx.setTransform(1, 0, 0, 1, 0, 0);// resetting transformation
        ctx.scale(2, 2);
        ctx.fillStyle=grad;
        ctx.font='10px, Segoe UI';
        ctx.textAlign='center'
        ctx.fillText('Hello World! ( i am not a text))0) )', 300, 50);


        // Animation

        // setInterval(function(){
        //   ctx.fillStyle = 'white';
        //   ctx.fillRect(0, 0, canv.width, canv.height);
        //
        //   ctx.fillStyle = 'magenta';
        //   ctx.fillRect(x++, 50, 300, 200);
        // }, 10);
  </script>
</body>
</html>
