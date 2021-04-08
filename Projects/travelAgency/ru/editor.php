<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка</title>
	<?require_once 'config.php'?>
	</head>
	<body style="background: #fff">
		<!-- If cookie isn't exist -->
		<?
     		if (empty($_COOKIE['admin'])):
      	?>
		<h1 class="text-center my-5">К сожалению, вход не был выполнен. Пожалуйста, попробуйте <a href="login.php">ещё раз</a></h1>
		<!-- If cookie exists -->
      <?php else:?>
        <!-- Instruction -->
         <div class="container">
            <a href="index.php" class="mt-5 btn btn-success btn-lg">Вернутся на сайт</a>
         	<h1 class="my-3 text-center">Админка</h1>
            <h3 class="my-4">Инструкция</h3>
            <p class="h4">Чтобы добавить статью, воспользуйтесь полями справа. В полях для цифр пишите только цифры с валютой (Например 170$, а не просто 170</p>
            <p class="h4">Не используйте апострофы ('), при добавлении админка выдаст ошибку и не добавит/не отредактирует статью</p>
            <p class="h4">Картинки лежат в папке img сайта. В поле ввода пишем название картинки, т.е если у нас картинка sample.png лежит в папке img, пишем просто sample.png. Не путайте png и jpg при добавлении картинок</p>
            <p class="h4">Если хотите удалить статью - её ID на этой странице указан перед в поле ссылки (например/article.php?id=2, где id=2 это наш ID. В поле вводим только id статьи которую хотите удалить</p>
         <div class="row mt-4">
         	<div class="col-12">
         		<!-- Left part -->
         		<h1 class="col-12 text-left mt-3">Блок Почему Мы (Предпросмотр):</h1>
         	</div>
            <? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `whyBlock` WHERE `whyid`=1");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                <a href="">
                    <div class="card mb-4 box-shadow rounded">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/img/<?=$art[whyImgSrc]?>">
                        <div class="card-body">
                          <h5><?=$art[whyText]?></h5>
                        </div>
                    </div>
                </a>
            </div>
            <?}?>
            <? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `whyBlock` WHERE `whyid`=2");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                <a href="">
                    <div class="card mb-4 box-shadow rounded">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/img/<?=$art[whyImgSrc]?>">
                        <div class="card-body">
                          <h5><?=$art[whyText]?></h5>
                        </div>
                    </div>
                </a>
            </div>
            <?}?>
            <? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `whyBlock` WHERE `whyid`=3");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                <a href="">
                    <div class="card mb-4 box-shadow rounded">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/img/<?=$art[whyImgSrc]?>">
                        <div class="card-body">
                          <h5><?=$art[whyText]?></h5>
                        </div>
                    </div>
                </a>
            </div>
            <?}?>
            <? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `whyBlock` WHERE `whyid`=4");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                <a href="">
                    <div class="card mb-4 box-shadow rounded">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/img/<?=$art[whyImgSrc]?>">
                        <div class="card-body">
                          <h5><?=$art[whyText]?></h5>
                        </div>
                    </div>
                </a>
            </div>
            <?}?>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="whyUpdate1.php">
                            <input type="text" name="img1" class="form-control" placeholder="Картинка(например 1.jpg)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст карточки"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="whyUpdate2.php">
                            <input type="text" name="img1" class="form-control" placeholder="Картинка(например 2.jpg)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст карточки"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="whyUpdate3.php">
                            <input type="text" name="img1" class="form-control" placeholder="Картинка(например 3.jpg)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст карточки"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="whyUpdate4.php">
                            <input type="text" name="img1" class="form-control" placeholder="Картинка(например 4.jpg)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст карточки"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-12 text-center">
                <h1>Блок О Нас (Предпросмотр)</h1>
            </div>
            <? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `aboutBlock`");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
    <section class="w-100 py-5 aboutBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h4 class="text-secondary" id="aboutAnchor"><?=$art[aboutSmallHeading]?></h4>
                    <h1 class="display-5 text-play"><?=$art[aboutBigHeading]?></h1>
                    <p class="font-weight-light text-sans"><?=$art[aboutText]?></p>
                    <ul class="lst-none">
                        <li class="text-sans"><i class="fa fa-check mr-2" aria-hidden="true"></i><?=$art[aboutLi1]?></li>
                        <li class="text-sans"><i class="fa fa-check mr-2" aria-hidden="true"></i><?=$art[aboutLi2]?></li>
                        <li class="text-sans"><i class="fa fa-check mr-2" aria-hidden="true"></i><?=$art[aboutLi3]?></li>
                    </ul>
                    <button class="btn btn-lg text-light traBg px-5 py-3 text-sans" href="javascript://0" onclick="slowScroll('#popularAnchor')">Find Tours</button>
                </div>
                <div class="col-md-12 col-lg-6 p-3 row">
                    <div class="col-md-6 col-6 p-2 col-lg-6">
                        <img src="/img/<?=$art[aboutImgSrc1]?>" alt="" class="img-thumbnail w-100">
                    </div>
                    
                    <div class="col-md-6 col-6 p-2 col-lg-6">
                        <img src="/img/<?=$art[aboutImgSrc2]?>" alt="" class="img-thumbnail w-100">
                    </div>
                    <div class="col-md-6 col-6 p-2 col-lg-6">
                        <img src="/img/<?=$art[aboutImgSrc3]?>" alt="" class="img-thumbnail w-100">
                    </div>
                    <div class="col-md-6 col-6 p-2 col-lg-6">
                        <img src="/img/<?=$art[aboutImgSrc4]?>" alt="" class="img-thumbnail w-100">
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <?}?>
    <div class="col-12 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="aboutUpdate.php">
                            <input type="text" name="headLg" class="form-control" placeholder="Заголовок"><br>
                            <input type="text" name="headSm" class="form-control" placeholder="Серый заголовок"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст"><br>
                            <input type="text" name="li1" class="form-control" placeholder="Первый элемент списка"><br>
                            <input type="text" name="li2" class="form-control" placeholder="Второй элемент списка"><br>
                            <input type="text" name="li3" class="form-control" placeholder="Третий элемент списка"><br>
                            <input type="text" name="img1" class="form-control" placeholder="Картинка 1(верхняя левая)(a1.jpg)"><br>
                            <input type="text" name="img2" class="form-control" placeholder="Картинка 2(верхняя Правая)(a2.jpg)"><br>
                            <input type="text" name="img3" class="form-control" placeholder="Картинка 3(нижняя левая)(a3.jpg)"><br>
                            <input type="text" name="img4" class="form-control" placeholder="Картинка 4(нижняя правая)(a4.jpg)"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-12 mb-5 text-center">
                <h1>Блок Туры (Предпросмотр)</h1>
            </div>
            <? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `popularblock` ORDER BY `id`");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
                <div class="col-md-12 col-lg-4">
                    <a href="article.php?id=<?echo $art['id']?>">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/img/<?=$art[popularImgSrc]?>">
                        <div class="card-body">
                            <p>id=<?=$art[id]?></p>
                            <h3 class="text-bold"><?=$art[popularHeading]?></h3>
                            <div class="bg--gray text-secondary text-bold my-3 rounded"><div class="p-2">
                                <i class="far fa-clock mr-2"></i><?=$art[popularDuration]?> |  <i class="far fa-map mx-2"></i> <?=$art[popularLocation]?></div>
                                </div>
                          <h5><?=$art[popularText]?></h5>
                          <span class="text-secondary"><?=$art[popularPrice]?></span>
                        </div>
                    </div>
                </a>
                </div>
                <?}?>
                <div class="col-12 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="popularAdd.php">
                            <input type="text" name="img" class="form-control" placeholder="Картинка(1.jpg)"><br>
                            <input type="text" name="head" class="form-control" placeholder="Заголовок"><br>
                            <input type="text" name="time" class="form-control" placeholder="Длительность(10 Часов)"><br>
                            <input type="text" name="location" class="form-control" placeholder="Локация(Тбилиси)"><br>
                            <input type="text" name="textSm" class="form-control" placeholder="Короткий текст(который видно на карточке"><br>
                            <input type="text" name="textLg" class="form-control" placeholder="Длинный текст(будет видно на странице тура, в конце каждого параграфа <br>"><br>
                            <input type="text" name="price" class="form-control" placeholder="Цена (170$)(необязательно)"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Добавить">
                        </form>
                    </div>
            </div>
            <div class="col-12 mb-5">
                <h1 class="col-12 text-left mb-3">Удалить:</h1>
                <form method="post" action="popularRemove.php">
                <input type="text" class="form-control" name="removeId" placeholder="ID Статьи которую мы хотим удалить (напирмер 15, если у статьи id=15"><br>
                <input type="submit" class="btn btn-danger form-control" value="Удалить статью с выбранным ID">
                </form>
            </div>
            <div class="col-12 text-center">
                <h1>Счётчики (предпросмотр)</h1>
            </div>
            <? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `counterblock` WHERE `counterid`=1");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
            <div id="counter" class="col-md-6 col-lg-3 text-center py-4 my-2"  style="background-image: url(/img/14.png); background-position: center center; background-repeat: no-repeat; background-size: contain;">
                <span class="text-bold display-4 counter-value" data-count="<?=$art[counterNubmer]?>">1</span>
                <span class="text-bold display-4">+</span>
                <h5 class="text-bold text-secondary"><?=$art[counterHeading]?></h5>
            </div>
            <?}?>
            <? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `counterblock` WHERE `counterid`=2");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
            <div id="counter" class="col-md-6 col-lg-3 text-center py-4 my-2"  style="background-image: url(/img/12.png); background-position: center center; background-repeat: no-repeat; background-size: contain;">
                <span class="text-bold display-4 counter-value" data-count="<?=$art[counterNubmer]?>">1</span>
                <span class="text-bold display-4">+</span>
                <h5 class="text-bold text-secondary"><?=$art[counterHeading]?></h5>
            </div>
            <?}?>
            <? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `counterblock` WHERE `counterid`=3");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
            <div id="counter" class="col-md-6 col-lg-3 text-center py-4 my-2"  style="background-image: url(/img/13.png); background-position: center center; background-repeat: no-repeat; background-size: contain;">
                <span class="text-bold display-4 counter-value" data-count="<?=$art[counterNubmer]?>">1</span>
                <span class="text-bold display-4">+</span>
                <h5 class="text-bold text-secondary"><?=$art[counterHeading]?></h5>
            </div>
            <?}?>
            <? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `counterblock` WHERE `counterid`=4");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
            <div id="counter" class="col-md-6 col-lg-3 text-center py-4 my-2"  style="background-image: url(/img/14.png); background-position: center center; background-repeat: no-repeat; background-size: contain;">
                <span class="text-bold display-4 counter-value" data-count="<?=$art[counterNubmer]?>">1</span>
                <span class="text-bold display-4">+</span>
                <h5 class="text-bold text-secondary"><?=$art[counterHeading]?></h5>
            </div>
            <?}?>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="counterUpdate1.php">
                            <input type="text" name="number" class="form-control" placeholder="Число 1(2000)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст под числом"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="counterUpdate2.php">
                            <input type="text" name="number" class="form-control" placeholder="Число 2(70)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст под числом"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="counterUpdate3.php">
                            <input type="text" name="number" class="form-control" placeholder="Число 3(1200)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст под числом"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-lg-3 col-12 col-md-6 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="counterUpdate4.php">
                            <input type="text" name="number" class="form-control" placeholder="Число 4(15)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст под числом"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-12 text-center mb-5">
                <h1>Блок Отзывы (Предпросмотр)</h1>
            </div>
            <? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `reviewsblock` WHERE `id`=1");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
                <div class="col-md-12 col-lg-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h4 class="text-bold text-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                          <p class="text-sans pt-3 text-center">
                          <?=$art[reviewText]?>
                          </p>
                          <h5 class="text-center pt-2"><?=$art[reviewAuthor]?></h5>
                          <h6 class="text-center text-secondary"><?=$art[reviewAuthorWork]?></h6>
                          <p class="text-center">
                          <img src="/img/<?=$art[reviewImgSrc]?>" alt="" class="pt-3 reviewImg">
                          </p>
                        </div>
                    </div>
                </div>
                <?}?>
                <? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `reviewsblock` WHERE `id`=2");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
                <div class="col-md-12 col-lg-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h4 class="text-bold text-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                          <p class="text-sans pt-3 text-center">
                          <?=$art[reviewText]?>
                          </p>
                          <h5 class="text-center pt-2"><?=$art[reviewAuthor]?></h5>
                          <h6 class="text-center text-secondary"><?=$art[reviewAuthorWork]?></h6>
                          <p class="text-center">
                          <img src="/img/<?=$art[reviewImgSrc]?>" alt="" class="pt-3 reviewImg">
                          </p>
                        </div>
                    </div>
                </div>
                <?}?>
                <? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `reviewsblock` WHERE `id`=3");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
                <div class="col-md-12 col-lg-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h4 class="text-bold text-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </h4>
                          <p class="text-sans pt-3 text-center">
                          <?=$art[reviewText]?>
                          </p>
                          <h5 class="text-center pt-2"><?=$art[reviewAuthor]?></h5>
                          <h6 class="text-center text-secondary"><?=$art[reviewAuthorWork]?></h6>
                          <p class="text-center">
                          <img src="/img/<?=$art[reviewImgSrc]?>" alt="" class="pt-3 reviewImg">
                          </p>
                        </div>
                    </div>
                </div>
                <?}?>
                <div class="col-lg-4 col-md-12 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="reviewUpdate1.php">
                            <input type="text" name="img" class="form-control" placeholder="Картинка(например 1.jpg)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст карточки"><br>
                            <input type="text" name="author" class="form-control" placeholder="Автор"><br>
                            <input type="text" name="role" class="form-control" placeholder="Роль (Путешевственник)"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-lg-4 col-md-12 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="reviewUpdate2.php">
                            <input type="text" name="img" class="form-control" placeholder="Картинка(например 1.jpg)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст карточки"><br>
                            <input type="text" name="author" class="form-control" placeholder="Автор"><br>
                            <input type="text" name="role" class="form-control" placeholder="Роль (Путешевственник)"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
            <div class="col-lg-4 col-md-12 mt-5">
                    <div class="card mb-4 box-shadow rounded">
                        <form method="post" action="reviewUpdate3.php">
                            <input type="text" name="img" class="form-control" placeholder="Картинка(например 1.jpg)"><br>
                            <input type="text" name="text" class="form-control" placeholder="Текст карточки"><br>
                            <input type="text" name="author" class="form-control" placeholder="Автор"><br>
                            <input type="text" name="role" class="form-control" placeholder="Роль (Путешевственник)"><br>
                            <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Обновить">
                        </form>
                    </div>
            </div>
         	<!-- Right part -->
         <!-- 	<div class="col-md-6 col-sm-12 ">
         		<h1 class="col-12 text-center">Добавить:</h1>
         		<div class="col-12">
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
         	</div> -->
         </div>
         </div>
         <?php endif; ?>
</body>
</html>