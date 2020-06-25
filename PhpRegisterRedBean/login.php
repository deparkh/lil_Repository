<?
require "db.php";
$data=$_POST;

if (isset($data['do_login'])) {
  $errors=array();
  $user=R::findOne('users', 'login = ?', array($data['login']));
  if ($user) {
    // login exists
    if (password_verify($data['password'], $user->password)) {
      // Logging user in
      $_SESSION['logged_user']=$user;
      echo '<div style="color:green">Logging in completed successfully! <a href="index.php">Return</a> </div><hr />';
    } else {
      $errors[]="Password is incorrect";
    }
  } else {
    $errors[]="User with this login is not exist";
  }
  if ( ! empty ($errors)) {
    // Errors display
    echo '<div style="color:red">' . array_shift($errors) . '</div><hr />';
  }
}
?>
<form class="" action="login.php" method="post">
  <p>
    <p><strong>Your login</strong></p>
    <input type="text" name="login" value="<?echo @$data['login']?>">
  </p>
  <p>
    <p><strong>Your password</strong></p>
    <input type="password" name="password" value="<?echo @$data['password']?>">
  </p>
  <p>
    <button type="submit" name="do_login">Log in</button>
  </p>
</form>
