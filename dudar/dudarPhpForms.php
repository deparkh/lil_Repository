<?
  session_start();
  if(isset($_POST["send"])) {
    $from = htmlspecialchars ($_POST["from"]);
    $to=htmlspecialchars ($_POST["to"]);
    $subject=htmlspecialchars ($_POST["subject"]);
    $message=htmlspecialchars ($_POST["message"]);
    $_SESSION["from"]=$from;
    $_SESSION["to"]=$to;
    $_SESSION["subject"]=$subject;
    $_SESSION["message"]=$message;
    $error_from="";
    $error_to="";
    $error_subject="";
    $error_message="";
    $error=false;
    if($from==""||!preg_match("/@/", $from)) {
      $error_from="Введите корректный email";
      $error = true;
    }
    if($to==""||!preg_match("/@/", $to)) {
      $error_to="Введите корректный email";
      $error = true;
    }
    if(strlen($subject)==0) {
      $error_subject="Введите тему сообщения";
      $error = true;
    }
    if(strlen($message)==0) {
      $error_message="Введите сообщение";
      $error = true;
    }
    if(!$error) {
      $subject="=?utf-8?B?".base64_encode($subject)."?=";
      $headers="From:$from\r\nReply-to:$from\r\nContent-type:text/plain; charset=utf-8\r\n";
      mail($to, $subject, $message, $headers);
      header("Location:success.php?send=1");
      exit;
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Обратная связь</title>
  </head>
  <body>
    <h2>Форма обратной связи</h2>
    <form name="feedback" action="" method="post">
      <label for="">От кого:</label><br>
      <input type="text" name="from" value="<?= $_SESSION["from"] ?>"><!--Краткая версия echo-->
      <span style="color:red"><?=$error_from?></span>
      <br>
      <label for="">Кому:</label><br>
      <input type="text" name="to" value="<?= $_SESSION["to"] ?>">
      <span style="color:red"><?=$error_to?></span><br>
      <label for="">Тема</label><br>
      <input type="text" name="subject" value="<?= $_SESSION["subject"] ?>">
      <span style="color:red"><?=$error_subject?></span><br>
      <label for="">Сообщение:</label><br>
      <textarea name="message" rows="10" cols="40"><?= $_SESSION["from"] ?></textarea>
      <span style="color:red"><?=$error_message?></span><br>
      <input type="submit" name="send" value="Отправить">
    </form>
  </body>
</html>
