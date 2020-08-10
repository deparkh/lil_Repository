<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DeParkh's photogallery</title>
  <?include_once('config.php')?>
</head>
<body style="overflow-x:hidden; overflow-y:hidden;">
  <section>
    <div class="intro_">
    <h1 class="display-1 text-center">Look at the world differently</h1><br>
    <h2 class="display-2 text-center"><a href="work.php" id="intro_btn">Enter</a></h2>
    </div>
    <div class="intro_bg">
    <div class="autoplay text-white " style="">
      <div><img src="img/12.png" alt="" style="" class="w_100"></div>
      <div><img src="img/6.png" alt="" style="" class="w_100"></div>
      <div><img src="img/2.png" alt="" style="" class="w_100"></div>
      <div><img src="img/8.png" alt="" style="" class="w_100"></div>
      <div><img src="img/7.png" alt="" style="" class="w_100"></div>
      <div><img src="img/11.png" alt="" style="" class="w_100"></div>
    </div><br>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.autoplay').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows:false,
      autoplaySpeed: 2000,
    });
  });
</script>
</div>
  </section>
</body>
</html>