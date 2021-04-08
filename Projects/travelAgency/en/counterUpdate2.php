<?header("Location:editor.php");
require_once'config.php';
 mysqli_query($connection, "UPDATE `counterblock` SET `counterNubmer`='".$_POST['number']."', `counterHeading`='".$_POST['text']."' WHERE `counterId`=2");