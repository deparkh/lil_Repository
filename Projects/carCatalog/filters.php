<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Фильтры</title>
  <?require_once 'includes/config.php'?>
</head>
<body>
  <?require_once 'includes/header.php'?>

    <!-- Filters start -->
    <!-- Don't forget to use .show and .filterDiv with !important, it won't work with bootstrap either -->
      <div>
        <!-- Heading -->
        <h1 class="m-5">Фильтры</h1>
        <!-- Filters buttons -->
        <!-- Filter names are in Text blocks classes -->
        <div class="m-5">
          <!-- Year -->
          <div class="myFont row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-sm-2 mobMB">
            Год: 
            <!-- Filter name: 2014, 2018-->
            <button class="btn btn-primary my-1" onclick="filterSelection('2000')">2000</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('2002')">2002</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('2004')">2004</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('2008')">2008</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('2010')">2010</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('2012')">2012</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('2014')">2014</button>
            <button class="btn btn-primary my-1 ml-1" onclick="filterSelection('2016')">2016</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('2018')">2018</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-sm-2 mobMB">
            Коробка передач: 
            <!-- Filter name: Авто, Ручная-->
            <button class="btn btn-primary ml-1 my-1" onclick="filterSelection('Авто')">Автомат</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Ручная')">Ручная</button>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 mb-sm-2 mobMB">
            Двигатель: 
            <!-- Filter name: Бензин, Дизель, Гибрид, Электро-->
            <button class="btn btn-primary ml-1 my-1" onclick="filterSelection('Бензин')">Бензин</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Дизель')">Дизель</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Гибрид')">Гибрид</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Электро')">Электро</button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-sm-2 mobMB">
            Кузов: 
            <!-- Filter name: Седан, Купе-->
            <button class="btn btn-primary ml-1 my-1" onclick="filterSelection('Седан')">Седан</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Купе')">Купе</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Универсал')">Универсал</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Хэтчбэк')">Хэтчбэк</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Внедорожник')">Внедорожник</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Пикап')">Пикап</button>
            <button class="btn btn-primary my-1" onclick="filterSelection('Минивэн')">Минивэн</button>
            </div>
            <!-- Reset filtering -->
            <br><br>
            <div class="col-sm-12 col-md-12 col-lg-12 mb-sm-2"> 
            <button class="btn btn-success btn-lg ml-1 my-1" onclick="filterSelection('all')">Сбросить фильтры</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Filters End -->

    <div class="container">
      <a href="index.php" class="mobile btn btn-primary btn-lg text-white mr-xl-5">Домой</a>
      <a href="order.php" class="mobile btn btn-danger btn-lg text-white ml-xl-5 mr-xl-5">Заказать машину</a>
    </div>

    <!-- Cars List -->
    <div class="row ml-sm-0 ml-md-3">
    
    <?//Get car info from DB
    $card=mysqli_query($connection, "SELECT * FROM `carinfo` ORDER BY `id` DESC");
    while ($art=mysqli_fetch_assoc($card)) {?>
    <!-- Text Block -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 col-xl-6 col-md-12 mb-3 filterDiv <?=$art['engine']?> <?=$art['year']?> <?=$art['body']?> <?=$art['transmission']?> <?=$art['manufacturer']?>">
      <div class="roundedBlock bgDark mr-md-3 pt-3 px-3 py-5 pt-md-5 px-md-5 text-left text-white overflow-hidden row infoBlock fixedHeight">
        <!-- First column -->
        <!-- Car features -->
        <div class="my-3 py-3 col-lg-6 col-sm-5">
          <h2 class="display-5"><a href="car.php?id=<?=$art['id']?>" class="text-white"><?=$art['title']?></a></h2>
          <p class="h6 text-left">
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?=$art['year']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?=$art['mileage']?> КМ</span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?=$art['power']?> ЛС</span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?=$art['engine']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?=$art['body']?></span></a>
            <a class="btn btn-secondary text-white py-0 px-1 mb-1" href=""><span class="h6 font-weight-normal"><?=$art['transmission']?> КП</span></a>
          </p>
        </div>
        <!-- Second column -->
        <div class="col">
          <!-- Car images -->
          <div class="row cPointer"><img src="img/<?=$art['introimg']?>" alt="" width="100%" class="float-right"></div>
        </div>
      </div>
    </div>
    <!-- End of text Block -->
    <?}?>
    </div>
    <!-- Cars list End -->
    <div class="container containerNew">


<?require_once 'includes/footer.php'?>
  </div>
  <!-- Filter Script -->
  <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>
