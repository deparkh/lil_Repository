<!-- https://kenwheeler.github.io/slick/ -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="img/png" href="img/icon.png">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Slick connection -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>Slick!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script type="text/javascript" src="slick/slick.min.js"></script>
  </head>
  <body class="bg-primary">
    <!-- Autoplay -->
    <h1 class="display-1 text-center text-light">Autoplay</h1><br>
    <h1 class="display-4 text-center text-light">Blue bg cause arrows are white(?*****LIVESMATTER)</h1><br>
    <div class="autoplay container text-white" style="">
      <div><img src="img/img1.jpg" alt="" style=""></div>
      <div><img src="img/img1.jpg" alt="" style=""></div>
      <div><img src="img/img1.jpg" alt="" style=""></div>
      <div><img src="img/img1.jpg" alt="" style=""></div>
      <div><img src="img/img1.jpg" alt="" style=""></div>
    </div><br>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.autoplay').slick({
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  });
</script>
<!-- Single item -->
<h1 class="display-1 text-center text-light">Single Item</h1><br>
<div class="single-item container text-white" style="">
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
</div><br>
<script type="text/javascript">
$(document).ready(function(){
$('.single-item').slick({
  dots: true,
});
});
</script>
<!-- Multiple Items -->
<h1 class="display-1 text-center text-light">Multiple Items</h1><br>
<div class="multiple-items container text-white" style="">
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
</div><br>
<script type="text/javascript">
$(document).ready(function(){
  $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
});
</script>
<!-- Variable Width -->
<h1 class="display-1 text-center text-light">Variable Width</h1><br>
<div class="variable-width container text-white" style="">
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
</div><br>
<script type="text/javascript">
$(document).ready(function(){
  $('.variable-width').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
  });
});
</script>
<!-- Center Mode -->
<h1 class="display-1 text-center text-light">Center Mode</h1><br>
<div class="center container text-white" style="">
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
  <div><img src="img/img1.jpg" alt="" width="100%" height="400px"></div>
</div><br>
<script type="text/javascript">
$(document).ready(function(){
  $('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
});
</script>
  </body>
  </html>
