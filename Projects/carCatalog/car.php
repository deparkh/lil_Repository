<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Автомобиль</title>
  <?require_once 'includes/config.php'?>
</head>
<body>
  <?require_once 'includes/header.php'?>
    <div class="container">
      <div class="row w-100 mx-auto bgGray rounded mt-3">
        <? // Get Article ID from $_GET Array
         $card=mysqli_query($connection, "SELECT * FROM `carinfo` WHERE `id` = " . (int) $_GET['id']);
    // If the page is not exist, print 404
    if (mysqli_num_rows($card)<=0)
    {?>
      <h1 class="col-12">Ошибка 404</h1>
      <p class="ml-3">Страница не найдена. Попробуйте ещё раз</p>
    <?}
    else { //If the page exists, get car info from db
      $art=mysqli_fetch_assoc($card)?>
        <!-- Info Block -->
        <!-- Left Column -->
        <div class="col-lg-9 col-md-8 col-sm-12 px-5 py-4"> 
          <div class="row cPointer"><a data-lightbox="roadtrip" href="img/<?echo $art['introimg']?>"  class="float-left rounded"><img src="img/<?echo $art['introimg']?>" alt="" width="100%"></a></div>
        </div>
        <!-- Right Column -->
        <div class="bgGray col-lg-3 col-md-4 col-sm-12 py-4 px-4">
          <!-- Name -->
          <h1><?echo $art['title']?></h1>
          <h2 class="text-success"><?echo $art['price']?> $</h2>
          <!-- Features -->
          <p class="h6 text-left">
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['year']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['mileage']?> КМ</span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['power']?> ЛС</span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['engine']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['body']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['transmission']?> КП</span></a>
          </p>
          <!-- Buttons -->
          <button class="btn btn-block btn-danger text-white mb-2" data-toggle="modal" data-target="#contactUs"><span class="py-1 h6 ml-2">Написать продавцу</span></button>

          <!-- Contact us Modal -->
          <div class="modal fade" id="contactUs">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Напишите нам!</h4>
                  <button class="close" data-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                  <p>
                  Наш Viber:<a href="viber://add?number=380689654418" class="text-primary"> +38 068 965 44 18</a>
                  </p>
                  <p>
                  Наш Instagram: <a href="https://instagram.com/auto.georgia_for_ukraine?igshid=1kpdgg8izz8og" class="text-primary">https://instagram.com/auto.georgia_for_ukraine</a>
                  </p>
                  <p>
                  Наш Email :<a href="mailto:auto.georgia2020@gmail.com" class="text-primary">auto.georgia2020@gmail.com</a>
                  </p>
                  <p>Или же, используйте чат в нижней части экрана &nbsp ^-^</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Modal -->

          <button class="btn btn-block btn-primary text-white" data-toggle="modal" data-target="#callUs"><span class="py-1 h6 ml-2">Позвонить продавцу</span></button>

                    <!-- Contact us Modal -->
          <div class="modal fade" id="callUs">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Позвоните нам!</h4>
          <button class="close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
          <p><span class="text-primary">Киевстар :</span> +38 068 965 44 18</p>
          <p>Или же, используйте чат в нижней части экрана &nbsp ^-^</p>
        </div>
      </div>
    </div>
  </div>
          <!-- End of Modal -->
        </div>

      
        <!-- Under columns Images -->
          <!-- First Row -->
          <div class="w-100 px-4 mx-auto row mb-4">
              <a href="img/<?echo $art['img1']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img1']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img2']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img2']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img3']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img3']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img4']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img4']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img5']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img5']?>);" data-lightbox="roadtrip"></a>
              <br>
          </div>
          <!-- Second Row -->
          <div class="w-100 px-4 mx-auto row mb-4">
              <a href="img/<?echo $art['img6']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img6']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img7']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img7']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img8']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img8']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img9']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img9']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img10']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img10']?>);" data-lightbox="roadtrip"></a>
              <br>
          </div>
          <!-- Third Row -->
          <div class="w-100 px-4 mx-auto row mb-4">
              <a href="img/<?echo $art['img11']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img11']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img12']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img12']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img13']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img13']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img14']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img14']?>);" data-lightbox="roadtrip"></a>
              <a href="img/<?echo $art['img15']?>" class="col imgBg cPointer mx-1" style="background-image: url(img/<?echo $art['img15']?>);" data-lightbox="roadtrip"></a>
              <br>
          </div>
        <!-- Under Pictures -->
        <article class="px-4">
          <!-- Description -->
          <h3 class="mb-3">Описание</h3>
          <p><?echo $art['description']?></p>
          <!-- Mobile buttons -->
          <a href="filters.php" class="mobile btn btn-primary btn-lg text-white mr-xl-5">Домой</a>
          <a href="filters.php" class="mobile btn btn-success btn-lg text-white mr-xl-5">Филтры</a>
        <a href="order.php" class="mobile btn btn-danger btn-lg text-white ml-xl-5 mr-xl-5">Заказать машину</a>
        </article>
        <?}?>
      </div>
<?require_once 'includes/footer.php'?>
    </div>
</body>
</html>