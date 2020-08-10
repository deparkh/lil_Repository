<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка</title>
	<?require_once '../includes/config.php'?>
	</head>
	<body>
	<?require_once '../includes/header.php'?>
		<!-- If cookie isn't exist -->
		<?
     		if (empty($_COOKIE['admin'])):
      	?>
		<h1 class="text-center my-5">К сожалению, вход не был выполнен. Пожалуйста, попробуйте <a href="login.php">ещё раз</a></h1>
		<!-- If cookie exists -->
      <?php else:?>
        <!-- Instruction -->
         <div class="container">
         	<h1 class="my-5 text-center">Админка</h1>
            <h3 class="my-4">Инструкция</h3>
            <p class="h4">Чтобы добавить статью, воспользуйтесь полями справа. В полях для цифр пишите только цифры, например если цена 10000$, то пишем просто 10 000.</p>
            <p class="h4">Не используйте апострофы ('), при добавлении админка выдаст ошибку и не добавит автомобиль</p>
            <p class="h4">Картинки лежат в папке img сайта. В поле ввода пишем название картинки, т.е если у нас картинка sample.png лежит в папке img, пишем просто sample.png. Не путайте png и jpg при добавлении картинок</p>
            <p class="h4">Если есть возможность, используйте картинки только горизонтальной (альбомной) ориентации (а не вертикальной). </p>
            <p class="h4">Превью фото это самое большое фото, которое будет отображаться, оно же главное. На примерах снизу мы видим только превью фото, больше увидим только при открытии страницы</p>
            <p class="h4">На странице каталога (index.php) отображаются только превью фото, фото 1, 2 и 3.</p>
            <p class="h4">На странице машины (car.php) отображаются все фото.</p>
            <p class="h4">Если хотите удалить машину - её ID на этой странице указан перед названием. В поле вводим только id машины которую хотите удалить</p>
         <div class="row mt-4">
         	<div class="col-md-6 col-sm-12">
         		<!-- Left part -->
         		<h1 class="col-12 text-left mb-3">Удалить:</h1>
         		<form method="post" action="remove.php">
         		<input type="text" class="form-control" name="removeId"><br>
         		<input type="submit" class="btn btn-danger form-control" value="Удалить машину с выбранным ID">
         		</form>
         		<h1 class="col-12 text-left mt-3">Машины:</h1>
         		<!-- Get cars from DB -->
         		<?
    $card=mysqli_query($connection, "SELECT * FROM `carinfo` ORDER BY `id` DESC LIMIT 10");
    while ($art=mysqli_fetch_assoc($card)) {?>
    <!-- Text Left Block -->
    <div class="my-md-3 col-12 pl-3 mb-3">
      <div class="roundedBlock bgDark text-left text-white overflow-hidden row infoBlock">
        <!-- First column -->
        <div class="my-3 py-3 col-lg-9 col-sm-6">
          <!-- Heading -->
          <h6 class="display-5"><a href="../car.php?id=<?echo $art['id']?>" class="text-white">ID=<?echo $art['id']?> <?=$art['title']?></a></h6>
          <!-- Description -->
          <p class="lead"><small><?= mb_substr($art['description'], 0, 100, 'utf-8') . "..."?></small></p>
        </div>
        <!-- Second column -->
        <div class="col">
          <div class="row mr-1 cPointer"><a data-lightbox="set<?echo $art['id']?>" href="../img/<?=$art['introimg']?>" class="float-right mt-1"><img src="../img/<?=$art['introimg']?>" alt="" class="w-100 mt-lg-5"></a></div>
          </div>
        </div>
    </div>
        <?}?>
         	</div>
         	<!-- Right part -->
         	<div class="col-md-6 col-sm-12 ">
         		<h1 class="col-12 text-center">Добавить:</h1>
         		<div class="col-12">
         		<!-- Adding car to SQL DB -->
         		<form method="post" action="add.php">
				<input type="text" name="title" class="form-control" placeholder="Название (Ford Focus)"><br>
				<input type="text" name="price" class="form-control" placeholder="Цена (12 000)"><br>
				<input type="text" name="year" class="form-control" placeholder="Год (2014)"><br>
				<input type="text" name="mileage" class="form-control" placeholder="Пробег (240 000)"><br>
				<input type="text" name="power" class="form-control" placeholder="Мощность (кол-во ЛС, 104)"><br>
				<input type="text" name="engine" class="form-control" placeholder="Двигатель (Бензин, Дизель, Гибрид, Электро)"><br>
				<input type="text" name="body" class="form-control" placeholder="Кузов (Седан, Купе)"><br>
				<input type="text" name="transmission" class="form-control" placeholder="Коробка передач (Ручная, Авто)"><br>
				<input type="text" name="description" class="form-control" placeholder="Описание"><br>
				<input type="text" name="introimg" class="form-control" placeholder="Превью фото (focus1.jpg)"><br>
				<input type="text" name="img1" class="form-control" placeholder="Фото 1 (focus2.png)"><br>
				<input type="text" name="img2" class="form-control" placeholder="Фото 2"><br>
				<input type="text" name="img3" class="form-control" placeholder="Фото 3"><br>
				<input type="text" name="img4" class="form-control" placeholder="Фото 4"><br>
				<input type="text" name="img5" class="form-control" placeholder="Фото 5"><br>
				<input type="text" name="img6" class="form-control" placeholder="Фото 6"><br>
				<input type="text" name="img7" class="form-control" placeholder="Фото 7"><br>
				<input type="text" name="img8" class="form-control" placeholder="Фото 8"><br>
				<input type="text" name="img9" class="form-control" placeholder="Фото 9"><br>
				<input type="text" name="img10" class="form-control" placeholder="Фото 10"><br>
				<input type="text" name="img11" class="form-control" placeholder="Фото 11"><br>
				<input type="text" name="img12" class="form-control" placeholder="Фото 12"><br>
				<input type="text" name="img13" class="form-control" placeholder="Фото 13"><br>
				<input type="text" name="img14" class="form-control" placeholder="Фото 14"><br>
				<input type="text" name="img15" class="form-control" placeholder="Фото 15"><br>
				<input type="submit" class="btn btn-block btn-success p-2" name="send" value="Добавить">
				</form>
				</div>
         	</div>
         </div>
         </div>
         <?php endif; ?>
<?require_once '../includes/footer.php'?>
</body>
</html>