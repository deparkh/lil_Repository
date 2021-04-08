<?header("Location:editor.php");
require_once'config.php';
 mysqli_query($connection, "UPDATE `whyBlock` SET `whyImgSrc`='".$_POST['img1']."', `whyText`='".$_POST['text']."' WHERE `whyId`=3");