<?// Log in page
$pass="youngAndHandsome1!";
// Adding AdminName to make cookie not empty
$_POST['name']="AdminName";
if ($_POST['password']=="$pass"){
setcookie("admin", $_POST['name'], time()+3600,"/");
header("Location:editor.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Вход</title>
<?require_once 'config.php'?>
</head>
<body>
	<div class="container text-center">
		<h1>Введите пароль</h1><br><br>
		<form method="post">
		<input type="password" name="password" placeholder="Введите пароль"><br><br>
		<input type="submit" class="btn btn-lg btn-success p-2" name="send">
		</form>
	</div>
</body>
</html>