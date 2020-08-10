  <?
  // Connection to the Database
  $host = 'localhost'; // server's adress
  $database = 'carcatalogdb'; // db name (database=db)
  $user = 'root'; // username
  $password = ''; // password
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//Correct errors displaying
  $connection = mysqli_connect($host, $user, $password, $database)//Connection to the DB Query
?>
  <!-- jQuery connection -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS and CSS Files connection -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Lightbox connection -->
  <link href="../css/lightbox.css" rel="stylesheet" />
  <script src="../js/lightbox.js"></script>
  <!-- CSS connection -->
  <link rel="stylesheet" href="../css/master.css">
  <!-- Shortcut icon -->
  <link rel="shortcut icon" type="img/png" href="img/icon.png">