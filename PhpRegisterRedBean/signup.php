<?
require "db.php";
$data=$_POST;
if (isset($data['do_signup'])) {
  // Register new account
  $errors=array();
  if (trim($data['login'])=='') {
    $errors[]='Enter your login';
  }
  if (trim($data['email'])=='') {
    $errors[]='Enter your email';
  }
  if ($data['password']=='') {
    $errors[]='Enter your password';
  }
  if ($data['password_2']!=$data['password']) {
    $errors[]='Passwords are not identical';
  }
  if (R::count('users', "login = ?", array($data['login'])) > 0) {
    $errors[]='User with this login already exists';
  }
  if (R::count('users', "email = ?", array($data['email'])) > 0) {
    $errors[]='User with this email already exists';
  }
  if (empty ($errors)) {
    // It's ok, register
    $user = R::dispense ('users');
    $user->login=$data['login'];
    $user->email=$data['email'];
    $user->password=password_hash($data['password'], PASSWORD_DEFAULT);
    R::store($user);
    echo '<div style="color:green">Registration completed successfully</div><hr />';
  } else {
    echo '<div style="color:red">' . array_shift($errors) . '</div><hr />';
  }
}
?>
<form class="" action="signup.php" method="post">
<p>
  <p><strong>Your login</strong></p>
  <input type="text" name="login" value="<?echo @$data['login']?>">
</p>
<p>
  <p><strong>Your Email</strong></p>
  <input type="email" name="email" value="<?echo @$data['email']?>">
</p>
<p>
  <p><strong>Your password</strong></p>
  <input type="password" name="password" value="<?echo @$data['password']?>">
</p>
<p>
  <p><strong>Your password again</strong></p>
  <input type="password" name="password_2" value="<?echo @$data['password_2']?>">
</p>
<p>
  <button type="submit" name="do_signup">Register</button>
</p>
</form>
