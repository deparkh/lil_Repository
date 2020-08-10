<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Заказать машину</title>
  <?require_once 'includes/config.php'?>
</head>
<body>
  <?require_once 'includes/header.php'?>
        <div class="container">
      <div class="bgGray roundedBlock mt-3">
        <!-- Intro Image -->
        <img src="img/mystery.jpg" alt="" class="roundedBlock" width="95%" style="margin-left: 2.5%; margin-top: 25px;">
        <!-- Heading -->
        <h1 class="display-4 font-weight-normal introText text-center mt-4 mb-5">Если в нашем списке нет автомобиля, который нужен именно вам, мы его закажем</h1>
        <!-- Form -->
      <form class="mx-5" method="post" action="send.php">
        <label for="name">Имя</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя">
        <span style="color:red"><?=$error_name?></span><br>
        <label for="phone">Телефон</label>
        <input type="text" class="form-control" name="phone" id="phone" value="<?$phone?>" placeholder="Введите ваш телефон">
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" rows="6" class="form-control" placeholder="Введите ваше сообщение"></textarea>
        <br>
        <input type="submit" class="btn btn-block btn-success p-2" name="send" value="Заказать">
        <a href="order.php" class="mobile btn btn-primary btn-lg mt-5 text-white"><span class="h4">Домой</span></a>
      </form>
      <!-- Form End -->
      <br>
      </div>
  <?require_once 'includes/footer.php'?>
    </div>
</body>
</html>
