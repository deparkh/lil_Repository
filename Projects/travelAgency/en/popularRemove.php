<?header("Location:editor.php");
require_once'config.php';
 mysqli_query($connection, "DELETE FROM `popularblock` WHERE `popularblock`.`id` = '".$_POST['removeId']."'");