<?php
$login=$_POST['login'];
$pass=md5($_POST['pass']);
$mysql = new mysqli('localhost','root','','register-bd');
$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'") ;
$user=$result->fetch_assoc();
if(empty($user)) {
  echo "Такой пользователь не найден";
  exit;
}
setcookie("user", $_POST['name'], time()+3600 * 24 * 364,"/");
$mysql->close();
header('location: /' );
?>
