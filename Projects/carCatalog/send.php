<?//Mail-to data
$to = "yourmail@gmail.com"; // емайл получателя данных из формы
$subject = "Форма обратной связи на PHP"; // тема полученного емайла
$message = "Имя: ".$_POST['name']."\r\n";//присвоить переменной значение, полученное из формы name=name
$message .= "Номер телефона: ".$_POST['phone']."\r\n"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['message']."\r\n"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $subject, $message, $headers); //отправляет получателю на емайл значения переменных
header("Location:success.php?send=1");
?>