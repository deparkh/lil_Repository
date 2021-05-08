<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DeParkh's photogallery</title>
  <?include_once('config.php')?>
  <?include_once('modals.php')?>
</head>
<body>
  <section class="wrapper">
    <!-- Aside -->
    <aside>
      <!-- Company name -->
      <div class="fixed">
      <div class="pl-5 pt-1 company">
        <h3><a href="/">DANIEL PARKHOMENKO</a></h3>
        <h6>Street photography</h6><br><br>
      </div>
      <!-- First list -->
      <div class="list1 pl-3">
        <ul>
          <li><h5><a href="work.php" id="active">Projects 2018-2020</a></h5></li>
          <li><h5><a href="">Commissioned works</a></h5></li>
          <li><h5><a href="">Behind the scenes</a></h5></li>
        </ul>
      </div>
      <!-- Second list -->
      <div class="list2 pl-3 pt-3">
        <ul>
          <li><h6><a href="work.php">News</a></h6></li>
          <li><h6><a href="work.php">Buy prints</a></h6></li>
          <li><h6><a href="work.php">Books</a></h6></li>
          <li><h6><a href="work.php">EXHIBITIONS / EVENTS</a></h6></li>
          <li><h6><a href="about.php">About</a></h6></li>
          <li><h6><a href="work.php">Contact</a></h6></li>

        </ul>
      </div>
      </div>
    </aside>
    <!-- Masonry activation -->
    <script type="text/javascript">
    // Masonry activating
      $(document).ready(function(){
  var $grid = $('.grid').imagesLoaded( function() {
  // init Masonry after all images have loaded
  $('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 1
  });
  });
      })
    </script>
    <!-- Grid photos -->
    <div class="grid">
      <div class="grid-sizer"></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img1"><img src="img/1.jpg" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img2"><img src="img/2.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img3"><img src="img/3.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img4"><img src="img/4.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img5"><img src="img/5.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img6"><img src="img/6.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img7"><img src="img/7.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img8"><img src="img/8.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img9"><img src="img/9.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img10"><img src="img/10.jpg" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img11"><img src="img/11.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img12"><img src="img/12.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img13"><img src="img/13.png" alt=""></a></div>
      <div class="grid-item"><a href="" data-toggle="modal" data-target="#img14"><img src="img/14.png" alt=""></a></div>
      </div>
  </section>
</body>
</html>
