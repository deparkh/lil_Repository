<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Article</title>
  <?include_once 'config.php'?>
</head>
<body>
  <?include_once 'header.php'?>
  <div class="container">
    <!-- Берём id статьи, на которую перешли из массива GET -->
    <? $article=mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = " . (int) $_GET['id']);
    // Если страницы нет в базе данных, выводим шаблон ошибки 404
    if (mysqli_num_rows($article)<=0)
    {?>
      <img src="" alt="">
      <h1>Ошибка 404</h1>
      <p>Страница не найдена. Попробуйте ещё раз</p>
    <?}
    else {
      $art=mysqli_fetch_assoc($article);
      mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = " . (int) $_GET['id'])?>
        <!-- Вставляем данные из БД -->
      <img src="" alt="">
      <h1><?php echo $art['title']?></h1><br>
      <h3 class="float-right"><?echo $art['views']?> просмотров</h3><br>
      <p class="mt-5"><?php echo $art['text']?></p>

  <?}?>
  </div>
</body>
</html>
