<?
$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);
$message = $_POST['message'];
$message = htmlspecialchars($message);
$message = urldecode($message);
mail("ender.dany2@gmail.com", "Order from website", "E-mail: ".$email."\r\nMessage: ".$message,"From: example2@mail.ru \r\n");
if (mail("ender.dany2@gmail.com", "Order from website", "E-mail: ".$email."\r\nMessage: ".$message,"From: example2@mail.ru \r\n"))
 {
    echo "Message sent successfully";
} else {
    echo "Errors occurred while sending message";
}
?>
