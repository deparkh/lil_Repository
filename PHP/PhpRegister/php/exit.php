<?php
setcookie("user", $user['name'], time()-3600 * 24 * 364,"/");
header('location: /' );
 ?>
