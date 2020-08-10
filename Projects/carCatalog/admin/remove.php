<?header("Location:editor.php");
require_once'../includes/config.php';
 mysqli_query($connection, "DELETE FROM `carinfo` WHERE `carinfo`.`id` = '".$_POST['removeId']."'");