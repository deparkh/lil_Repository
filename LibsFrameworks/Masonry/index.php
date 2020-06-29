<!-- https://masonry.desandro.com/ -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Masonry Grid Layout</title>
  <!-- jquery import -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Masonry import -->
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <!-- imagesLoaded import(REQUIRED!!!) -->
  <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
  <link rel="shortcut icon" type="img/png" href="img/icon.png">
  <link rel="stylesheet" href="css/master.css">
  <!-- Masonry RESPOSIVE script, also copy CSS. Non RESPOSIVE version https://masonry.desandro.com/ -->
  <script type="text/javascript">
  // Masonry activating
    $(document).ready(function(){
var $grid = $('.grid').imagesLoaded( function() {
// init Masonry after all images have loaded
$('.grid').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item',
  // use element for option
  columnWidth: '.grid-sizer',
  percentPosition: true
})
});
    })
  </script>
  <!-- Masonry JS file can also be connected via js folder (I use CDN) -->
  <!-- NON RESPOSIVE SCRIPT -->
  <!-- <script type="text/javascript">
    $(document).ready(function(){
      $('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 20
});
    })
  </script> -->
</head>
<body>
  <h1> Masonry lib</h1>
  <div class="grid">
    <div class="grid-sizer"></div>
    <div class="grid-item"><img src="img/1.jpg" alt=""></div>
    <div class="grid-item"><img src="img/2.png" alt=""></div>
    <div class="grid-item"><img src="img/3.png" alt=""></div>
    <div class="grid-item"><img src="img/4.png" alt=""></div>
    <div class="grid-item"><img src="img/5.png" alt=""></div>
    <div class="grid-item"><img src="img/6.png" alt=""></div>
    <div class="grid-item"><img src="img/7.png" alt=""></div>
    <div class="grid-item"><img src="img/8.png" alt=""></div>
    <div class="grid-item"><img src="img/9.png" alt=""></div>
    <div class="grid-item"><img src="img/10.jpg" alt=""></div>
    <div class="grid-item"><img src="img/11.png" alt=""></div>
    <div class="grid-item"><img src="img/12.png" alt=""></div>
    <div class="grid-item"><img src="img/13.png" alt=""></div>
    <div class="grid-item"><img src="img/14.png" alt=""></div>
    </div>
</body>
</html>
