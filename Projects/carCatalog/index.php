<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="Бу машины, купить машину Запорожье, бу машины Запорожье, бу машины из Америки, бу Машины из Европы">
  <meta name="description" content="Машины со всего мира. Большой ассортимент. Лучшие цены.">
  <title>Каталог</title>
  <?require_once 'includes/config.php'?>
</head>
<body>
<!-- Header -->
  <?require_once 'includes/header.php'?>
    <img src="img/logoCropped.png" alt="" width="100%">
    <!-- Intro Text -->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-10 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal introText">Каталог автомобилей</h1>
        <p class="lead font-weight-normal">Машины со всего мира</p>
        <a href="filters.php" class="mobile btn btn-success btn-lg text-white mr-xl-5">Филтры</a>
        <a href="order.php" class="mobile btn btn-danger btn-lg text-white ml-xl-5 mr-xl-5">Заказать машину</a>
      </div>
    <!-- Intro End -->

    <!-- Catalog start -->
    <div class="row parentBlock">
    <!-- Row Start -->
    <? //Get 10 last cars from DB
    $card=mysqli_query($connection, "SELECT * FROM `carinfo` ORDER BY `id` DESC LIMIT 10");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
    <!-- Text Left Block -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 col-xl-6 col-md-12 mb-3">
      <div class="roundedBlock bgDark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-left text-white overflow-hidden row infoBlock">
        <!-- First column -->
        <div class="my-3 py-3 col-lg-6 col-sm-6">
          <!-- Heading -->
          <h2 class="display-5"><a href="car.php?id=<?echo $art['id']?>" class="text-white carHeading"><?=$art['title']?></a></h2>
          <h2 class="mb-3"><?echo $art['price']?> $</h2>
          <!-- Features -->
          <p class="h6 text-left">
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['year']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['mileage']?> КМ</span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['power']?> ЛС</span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['engine']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['body']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?echo $art['transmission']?> КП</span></a>
          </p>
          <!-- Description -->
          <p class="lead"><?= mb_substr($art['description'], 0, 150, 'utf-8') . "..."?></p>
        </div>
        <!-- Second column -->
        <div class="col">
          <div class="row cPointer"><a data-lightbox="set<?echo $art['id']?>" href="img/<?=$art['introimg']?>" class="float-right"><img src="img/<?=$art['introimg']?>" alt="" class="w-100"></a></div>
          <div class="row mb-5 mt-3">
            <!-- Include lightboxes to img -->
            <a href="img/<?=$art['img1']?>" class="col imgBg cPointer mr-2" style="background-image: url(img/<?=$art['img1']?>);" data-lightbox="set<?echo $art['id']?>"></a>
            <a href="img/<?=$art['img2']?>" class="col imgBg cPointer mr-2" style="background-image: url(img/<?=$art['img2']?>);" data-lightbox="set<?echo $art['id']?>"></a>
            <a href="img/<?=$art['img3']?>" class="col imgBg cPointer mr-2" style="background-image: url(img/<?=$art['img3']?>);" data-lightbox="set<?echo $art['id']?>"></a></div>
          </div>
        </div>
    </div>
    <!-- End of text block -->
        <?}?>
        <!-- Row End -->
      </div>
    </div>
    <!-- Catalog End -->
<?require_once 'includes/footer.php'?>
</body>
</html>
