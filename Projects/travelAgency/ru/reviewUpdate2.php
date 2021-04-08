<?header("Location:editor.php");
require_once'config.php';
 mysqli_query($connection, "UPDATE `reviewsblock` SET `reviewText`='".$_POST['text']."', `reviewAuthor`='".$_POST['author']."', `reviewAuthorWork`='".$_POST['role']."', `reviewImgSrc`='".$_POST['img']."' WHERE `id`=2");