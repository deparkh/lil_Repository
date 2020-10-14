<!doctype html>
<html lang = "ru">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-4">
    <?php
     if (empty($_COOKIE['user'])):
      ?>
      <div class="row">
         <div class="col">
           <h1>Форма регистрации</h1>
           <form  action="php/check.php" method="post">
             <input type="text" class="form-control" name="login" value="" id="login" placeholder="Введите ваш логин"><br>

             <input type="text" class="form-control" name="name" value="" id="name" placeholder="Введите ваше имя"><br>

             <input type="password" class="form-control" name="pass" value="" id="pass" placeholder="Введите ваш пароль"><br>

             <button class="btn btn-success"  type ="submit" >Регистрация</button>
           </form>
         </div>


         <div class="col">
           <h1>Форма авторизации</h1>
           <form  action="php/auth.php" method="post">
             <input type="text" class="form-control" name="login" value="" id="login" placeholder="Введите ваш логин"><br>

             <input type="password" class="form-control" name="pass" value="" id="pass" placeholder="Введите ваш пароль"><br>

             <button class="btn btn-success"  type ="submit" >Авторизация</button>
           </form>
         </div>
           <?php else:?>
             <p>Привет  <?php echo $_COOKIE['user'] ?>.Чтобы выйти нажмите  <a href="php/exit.php">здесь</a> </p>
         <?php endif; ?>

      </div>
  </div>

</body>
</html>
