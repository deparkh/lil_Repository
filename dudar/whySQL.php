<? //MySQL|Подключение к БД, редактирование данных БД через PHP, Выборка данных БД
  $mysqli = new mysqli ("localhost", "root", "", "mybase");
  $mysqli->query ("SET NAMES 'utf8'");

  //НЕ ЗАБЫВЫЙ ПРО БЛЯДСКИЕ ТИЛЬДЫ
  $success = $mysqli->query ("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('k1rokun', '".md5("pavlykpidor")."', '".time ()."')");
  for($i=1; $i<10; $i++) {
    $mysqli->query ("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('$i', '".md5("$i")."', '".time ()."')");
  }
  $mysqli->query ("UPDATE `users` SET `reg_date` = '101010' WHERE `id`='4'");
  $mysqli->query("UPDATE `users` SET `reg_date` = '228' WHERE `login` = 'shop' OR `id` > 4 ");
  $mysqli->query("DELETE FROM `users` WHERE `id`>5 AND `id`<8");

  function printResult($result_set){
    echo "Кол-во записей равно - ".$result_set->num_rows."<br>";
    while(($row=$result_set->fetch_assoc()) != false) {
      // fetch_assoc достаёт данные из строки в таблице БД и передаёт их переменной $row
      print_r ($row);
      // echo $row["password"];
      echo "<br>";
    }
    echo "<br>-------------------------";
  }

  $result_set=$mysqli->query("SELECT * FROM `users`");
  printResult($result_set);

  $result_set=$mysqli->query("SELECT `id` FROM `users` WHERE `id`>7");
  printResult($result_set);

  $result_set=$mysqli->query("SELECT `id` FROM `users` WHERE `id`<8 ORDER BY `id` ASC");//ORDER BY сортирует, ASC по умолчанию, DESC по убыванию
  printResult($result_set);

  $result_set=$mysqli->query("SELECT * FROM `users` WHERE `id`<8 ORDER BY `login` DESC LIMIT 0, 2");//LIMIT показывает первые B записей начиная с A
  printResult($result_set);


  $result_set=$mysqli->query("SELECT * FROM `users` WHERE `login` LIKE '%ser%'");//LIKE ищет похожее. % даёт, что не важно что перед этим и что после
  printResult($result_set);

  $result_set=$mysqli->query("SELECT COUNT('id') FROM `users`");
  printResult($result_set);

  $mysqli->close();
?>
