<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="img/png" href="img/icon.png">
  <title>Sharaga.ru</title>
  <?include_once 'config.php'?>
</head>
<body>
<?include_once 'header.php'?>
<div class="container">
  <!-- The newest posts -->
  <div class="bg_green">
    <br>
    <h1 class="display-4 ml-5">Самые новые посты</h1>
<div class="card_grid mb-5 text-center" id="pricing">
  <?
    $article=mysqli_query($connection, "SELECT * FROM `articles` LIMIT 3");
    while ($art=mysqli_fetch_assoc($article)) {?>
      <!-- Bootstrap card -->
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
          <!-- Category heading -->
        <h3 class="my-0 font-weight-normal"><?
          $art_cat = false;
          foreach ($categories as $cat) {
            if ($cat['id']==$art['category_id']) {
              $art_cat=$cat;
              break;
            }
          }
        ?><?echo $art_cat['title']?></h3>
      </div>
      <div class="card-body">
        <!-- Article heading -->
        <h3 class="my-0 font-weight-normal"><?echo $art['title']?></h3><br>
        <!-- Article text -->
        <p><?echo mb_substr($art['text'], 0, 100, 'utf-8') . "..."?></p>
      <br><br>
      </div>
      <div class="card-footer">
          <a type="button" class="btn btn-lg btn-block btn-outline-success" href="article.php?id=<?echo $art['id']?>">Читать полностью</a></div>
      </div>
    <?}?>
</div>
</div>
<!-- Ukraine posts (?category) -->
<div class="bg_yellow"><br>
  <!-- Category display -->
  <?
    $categories_q=mysqli_query($connection, "SELECT * FROM `categories` WHERE `id` = 1");
    while ($cat=mysqli_fetch_assoc($categories_q)) {?>
      <h1 class="display-4 ml-5">Категория:<?echo $cat['title']; ?>, новейшее</h1>
  <?}?>
  <!-- Cards display -->
  <div class="card_grid">
  <? $article=mysqli_query($connection, "SELECT * FROM `articles` WHERE `category_id` = 1");
  while ($art=mysqli_fetch_assoc($article)) {?>
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
        <!-- Category heading -->
      <h3 class="my-0 font-weight-normal"><?
        $art_cat = false;
        foreach ($categories as $cat) {
          if ($cat['id']==$art['category_id']) {
            $art_cat=$cat;
            break;
          }
        }
      ?><?echo $art_cat['title']?></h3>
    </div>
    <div class="card-body">
      <!-- Article heading -->
      <h3 class="my-0 font-weight-normal"><?echo $art['title']?></h3><br>
      <!-- Article text -->
      <p><?echo mb_substr($art['text'], 0, 100, 'utf-8') . "..."?></p>
    <br><br>
    </div>
    <div class="card-footer">
        <a type="button" class="btn btn-lg btn-block btn-outline-success" href="article.php?id=<?echo $art['id']?>">Читать полностью</a></div>
    </div>
  <?}?>
  </div>
</div>
<!-- Poland posts -->
<div class="bg_redy"><br>
  <!-- Category display -->
  <?
    $categories_q=mysqli_query($connection, "SELECT * FROM `categories` WHERE `id` = 2");
    while ($cat=mysqli_fetch_assoc($categories_q)) {?>
      <h1 class="display-4 ml-5">Категория:<?echo $cat['title']; ?>, новейшее</h1>
  <?}?>
  <!-- Cards display -->
  <div class="card_grid">
  <? $article=mysqli_query($connection, "SELECT * FROM `articles` WHERE `category_id` = 2  LIMIT 3");
  while ($art=mysqli_fetch_assoc($article)) {?>
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
        <!-- Category heading -->
      <h3 class="my-0 font-weight-normal"><?
        $art_cat = false;
        foreach ($categories as $cat) {
          if ($cat['id']==$art['category_id']) {
            $art_cat=$cat;
            break;
          }
        }
      ?><?echo $art_cat['title']?></h3>
    </div>
    <div class="card-body">
      <!-- Article heading -->
      <h3 class="my-0 font-weight-normal"><?echo $art['title']?></h3><br>
      <!-- Article text -->
      <p><?echo mb_substr($art['text'], 0, 100, 'utf-8') . "..."?></p>
    <br><br>
    </div>
    <div class="card-footer">
        <a type="button" class="btn btn-lg btn-block btn-outline-success" href="article.php?id=<?echo $art['id']?>">Читать полностью</a></div>
    </div>
  <?}?>
  </div>
</div>
<!-- Russia posts -->
<div class="bg_blue"><br>
  <!-- Category display -->
  <?
    $categories_q=mysqli_query($connection, "SELECT * FROM `categories` WHERE `id` = 3");
    while ($cat=mysqli_fetch_assoc($categories_q)) {?>
      <h1 class="display-4 ml-5">Категория:<?echo $cat['title']; ?>, новейшее</h1>
  <?}?>
  <!-- Cards display -->
  <div class="card_grid">
  <? $article=mysqli_query($connection, "SELECT * FROM `articles` WHERE `category_id` = 3 LIMIT 3");
  while ($art=mysqli_fetch_assoc($article)) {?>
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
        <!-- Category heading -->
      <h3 class="my-0 font-weight-normal"><?
        $art_cat = false;
        foreach ($categories as $cat) {
          if ($cat['id']==$art['category_id']) {
            $art_cat=$cat;
            break;
          }
        }
      ?><?echo $art_cat['title']?></h3>
    </div>
    <div class="card-body">
      <!-- Article heading -->
      <h3 class="my-0 font-weight-normal"><?echo $art['title']?></h3><br>
      <!-- Article text -->
      <p><?echo mb_substr($art['text'], 0, 100, 'utf-8') . "..."?></p>
    <br><br>
    </div>
    <div class="card-footer">
        <a type="button" class="btn btn-lg btn-block btn-outline-success" href="article.php?id=<?echo $art['id']?>">Читать полностью</a></div>
    </div>
  <?}?>
  </div>
</div>

</div>
</body>
</html>
