<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GRID Studio</title>
  <?include_once 'fwstemplates.php'?>
  <!-- Slow scrolling when clicking on link -->
  <script>
    function slowScroll(id) {
      var offset = 100;
      $('html, body').animate ({
        scrollTop: $(id).offset ().top - offset
      }, 500);
      return false;
    }
  </script>
</head>
<body>
  <?include_once 'header.php'?>
  <!-- Intro section -->
  <div class="bcircles"></div><div class="bcircleb"></div>
<section class="gridtop container">
  <div class="mtop200">
    <h1>Welcome to GRID Studio !</h1><br>
    <h3>We will help you reach your goal</h3><br><br>
    <a href="javascript://0" onclick="slowScroll('#pricing')" class="btntop btn btn-primary btn-lg text-white">Order your own Website</a>
    <a href="javascript://0" onclick="slowScroll('#about')" class="text-primary medium ml-5">Learn more</a>
  </div>
  <div>
    <img src="img/bman.png" alt="" height="700px;">
  </div>
</section>
<section class="bg-white" style="position:relative; z-index:2;"><br>
  <!-- Middle section -->
  <div class="container" id="about">
      <h2>Who we are ?</h2><br>
      <p>GRID Studio is making WEB-pages and Landing pages of different categories and difficulty actively since 2018. Colleagues from all over the World choose us accurately because of the quality of our work. We are valued and respected, and entrepreneurs
 trust us even the most complex projects</p><br><br>
      <div class="achievements">
        <div>
          <h1 class="text-center text-primary">2</h1>
          <p class="text-center">So many years we are regularly building Websites for you. <br> We have a bunch of experience</p>
        </div>
        <div>
          <h1 class="text-center text-primary">41</h1>
          <p class="text-center">So many complex projects we have already made. We can manage a project of any difficult</p>
        </div>
        <div>
          <h1 class="text-center text-primary">10</h1>
          <p class="text-center">So many days we need to run your project. Fast and skilled team allows us to build Websites in the shortest time</p>
        </div>
      </div>
      <!-- Examples -->
      <h2 class="text-center" id="projects">Our projects</h2>
      <div class="project">
        <div>
          <a href="bbc/index.html"><img src="img/bbc.jpg" alt="" class="w-100 rounded img-thumbnail"></a>
          <a href="" class="text-center d-block medium mt-3 text-dark">BBC Replica</a>
        </div>
        <div>
          <a href="kronofogden/index.html"><img src="img/kronofogden.png" alt="" class="w-100 rounded img-thumbnail"></a>
          <a href="" class="text-center d-block medium mt-3 text-dark">Kronofogden Replica</a>
        </div>
        <div>
          <a href="tst/index.html"><img src="img/tst.png" alt="" class="w-100 rounded img-thumbnail"></a>
          <a href="" class="text-center d-block medium mt-3 text-dark">The Straits Times Replica</a>
        </div>
        <!-- <div>
          <a href=""><img src="img/tst.png" alt="" class="w-100 rounded img-thumbnail"></a>
          <a href="" class="text-center d-block medium mt-3 text-dark">Portal sample</a>
        </div>
        <div>
          <a href=""><img src="img/tst.png" alt="" class="w-100 rounded img-thumbnail"></a>
          <a href="" class="text-center d-block medium mt-3 text-dark">Blog sample</a>
        </div>
        <div>
          <a href=""><img src="img/tst.png" alt="" class="w-100 rounded img-thumbnail"></a>
          <a href="" class="text-center d-block medium mt-3 text-dark">Shop landing page</a>
        </div> -->
      </div>
    <!-- Consulting section -->
      <div class="consulting" id="consulting">
        <p><br>
          <img src="img/consulting.png" alt="" class="tab-img float-left"><br>
          <h2 class="segoe">Our consulting is free. <br>You don't need to pay to ask us. <br>We will accurately answer your questions in the shortest time.</h2><br>
          <div class="mt-3">
          <a href="javascript://0" onclick="slowScroll('#contact')" class="btntop btn btn-primary btn-lg text-white mr-3">Order a consulting</a> <span class="small">We will contact you as soon as posible</span>
          </div>
        </p>
      </div>
      <!-- Pricing section -->
      <div class="card-deck mb-5 text-center" id="pricing">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h3 class="my-0 font-weight-normal">Landing</h3>
      </div>
      <div class="card-body">
        <h2 class="card-title pricing-card-title">From $100</h2>
        <ul class="list-unstyled mt-3 mb-4">
          <li>1-4 Pages</li>
          <li>Advertisement Page</li>
          <li>Feedback page</li>
          <li>Maps integration</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-success">Order now</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h3 class="my-0 font-weight-normal">Company</h3>
      </div>
      <div class="card-body">
        <h2 class="card-title pricing-card-title">From $175</h2>
        <ul class="list-unstyled mt-3 mb-4">
          <li>5-11 Pages</li>
          <li>Authorization system</li>
          <li>Comments integration</li>
          <li>Google AdSense integration</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-success">Order now</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h3 class="my-0 font-weight-normal">Marketplace</h3>
      </div>
      <div class="card-body">
        <h2 class="card-title pricing-card-title">From $250</h2>
        <ul class="list-unstyled mt-3 mb-4">
          <li>More than 12 Pages</li>
          <li>Automatic order processing</li>
          <li>Users database</li>
          <li>Payment integration</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-success">Order now</button>
      </div>
    </div>
  </div>
      <!-- Form section; php file is send.php -->
      <h1 id="contact">Contact with us!</h1>
      <div class="formsection">
          <div>
            <form name="feedback" action="send.php" method="post">
              <label for="">Your email: </label>
              <input type="email" name="email" value="<?= $_SESSION["from"] ?>" class="form-control w-75"><!--Краткая версия echo-->
              <span style="color:red"><?=$error_from?><br></span>
              <label for="">Your message:</label><br>
              <input type="message" name="message" rows="5" cols="40" class="form-control w-75"><?= $_SESSION["from"] ?></input>
              <span style="color:red"><?=$error_message?></span><br>
              <input type="submit" name="send" value="Send" class="btntop btn btn-primary btn-lg text-white w-75">
            </form>
          </div>
      </div>
      <?include_once 'footer.php'?>
    </div>
</section>
</body>
</html>
