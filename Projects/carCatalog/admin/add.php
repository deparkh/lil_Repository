<?header("Location:editor.php");
require_once'../includes/config.php';
 mysqli_query($connection, "INSERT INTO `carinfo` (`id`, `title`, `price`, `year`, `mileage`, `power`, `engine`, `body`, `transmission`, `introimg`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `img13`, `img14`, `img15`, `description`) VALUES (NULL, '".$_POST['title']."', '".$_POST['price']."', '".$_POST['year']."', '".$_POST['mileage']."', '".$_POST['power']."', '".$_POST['engine']."', '".$_POST['body']."', '".$_POST['transmission']."', '".$_POST['introimg']."', '".$_POST['img1']."', '".$_POST['img2']."', '".$_POST['img3']."', '".$_POST['img4']."', '".$_POST['img5']."', '".$_POST['img6']."', '".$_POST['img7']."', '".$_POST['img8']."', '".$_POST['img9']."', '".$_POST['img10']."', '".$_POST['img11']."', '".$_POST['img12']."', '".$_POST['img13']."', '".$_POST['img14']."', '".$_POST['img15']."', '".$_POST['description']."');");