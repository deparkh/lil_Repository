<?
  //print_r ($_POST);//Method post, который мы также указывает в форме
  //echo "<br>";
  if(isset($_POST["done"])) {
    if($_POST["name"]=="")
      echo "Введите имя | <a href='/www'>Исправить</a>";
    else
      header("Location:index.php");//REDIRECT
  }

?>
<?//Работа с Cookie и Сессиями
  session_start();
  $num = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
  $num++;
  setcookie("num", $num, time()+4);
  echo "Page updated $num times"."<br>";
?>
<?//Работа с Сессиями. Безопаснее, потому что нельзя юзать чужие куки и сессия хранится на сервере, плохо ибо сессия живёт 15мин.
  session_start();
  $num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
  $num++;
  $_SESSION["num"]=$num;
  echo "Page updated $num times"."<br>";
  // session_destroy();//Уничтожает сессию
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHPstwo</title>
    <link rel="icon" href="/css/master.css">
    <link rel="shortcut icon" type="img/png" href="images/icon.png">
    <style media="screen">
      * {
        font-family: "Segoe UI";
      }
    </style>
  </head>
  <body>
    <p>ADDADW</p>
    <script type="text/javascript">
      document.writeln("Hello")
      document.writeln("WorldJS")
    </script><br><br>
    <?php
      echo "Hello worldPHP <br>";
      echo "Русский текст <br>";
      echo 'Hello worldPHP <br><br>';

      echo "Hi!<br>"; // Эта строчка выводит Hi! Коммент на ящыке C
      /*
      Комменты тут как в JS
      Коммент на C++
      */
      echo "Hi!<br><br>"; # Коммент в стиле оболочки UNIX
    ?>
    <?php
      $my_number =45; //Переменная в PHP. Не может начинатся с цифры
      $float=-3.45;
      $string = "Privet World!";
      $bool=true; //если true, в echo выводит 1, если false, показывает пустоту ("")

      echo "my_Number = $my_number <br>";// В двойных кавычках
      echo 'my_Number = $my_number <br>';// В одинарных кавычках
      echo "float = $float <br>";
      echo "string = $string <br>";
      echo "bool = $bool <br>";
      echo "<br>";
     ?>
     <?php
        echo PHP_VERSION;
        echo "<br>";
        define("PI",3.14);//Константы ми пишем в верхнем регистре
        echo PI;
        echo "<br>";
        echo defined("PI");
        echo "<br><br>";
      ?>

      <?
        $x=4;
        $y=5;
        $summ=$x+$y;
        $diff=$x-$y;
        $mult=$x*$y;
        $divi=$x/$y;
        $osta=$x%$y;//работает только с целыми числами, если в числе запятая-не пойдёт
        echo "summ=$summ<br>";
        echo "diff=$diff<br>";
        echo "mult=$mult<br>";
        echo "divi=$divi<br>";
        echo "osta=$osta<br>";
        $q=100;
        $q-=20;
        echo "$q";
        echo "<br><br>";
      ?>
      <?
        $str_1="First string";
        $str_2="Second string";
        echo $str_1." ".$str_2."<br>";//точка в php как + в js, чтобы объединить элементы
        echo $str_1." ".$str_2." \" "."<br>";//чтобы вывести двойную кавычку, как отдельный текст
      ?>
      <?
        $x=12;
        $y=34;
        $z=4.25;

        $bool_1=$x!=$z;//если false, не показывает ничего. Если true то показывает 1
        $bool_2=$x<=$y;
        $bool_3=!($x==$y);//по сути то же самое что и !=
        $bool_4=$x==$y || $z<$y;//логическое Или
        $bool_5=$z==$y && $x>$y;//логическое И
        $bool_6=$z!=$x ^ $y>$z;//Работает ТОЛЬКО тогда, когда одно TRUE, а одно FALSE
        echo "$bool_1"."<br>"."$bool_2"."<br>"."$bool_3"."<br>"."$bool_4";
        echo "<br><br>";
      ?>
      <?
        $string="Example";
        $num=0;
        $bool_1=$string==true;
        $bool_2=$num==false;
        echo "$bool_1"."<br>";
        echo "$bool_2";
        //В PHP 0 или пустая строка в булевских переменах означают false. НО, если строка не пустая и не равна нулю, она имеет значение true
        //Тройное "равно" (===) помимо значений сравнивает тип переменной(или константы). К примеру, если переменные равны, но одна из них строчная переменная(string), а другая булевская(bool), они не будут равны между собой, и выдаст false
        echo "<br><br>";
      ?>
      <?
        $x=10;
        $y=11;
        if($x==$y && $x<$y){
          echo "SRABOTALO<br>";
        }elseif($x=10) {
          echo "SRABOTALO NA ELSEIF<br>";
        } else {
          echo "NE SRABOTALO(((<br>";
        }

        $x==$y?$string="Da":$string="Net";//ЗАПОМНИТЬ! Короткий условный оператор if

        echo "$string";
        echo "<br><br>";
      ?>
      <?
        $x=12;
        switch($x) {
          case "Hello" : echo "This is string var"; break;//В конце каждого case нужно стваить break
          case 5 : echo "This var equally 5"; break;
          case 7 : echo "This var equally 7"; break;
          case 12 : echo "This var equally 12"; break;
          default : echo "This var is und efined";//Стандартное значение. То же самое, что и else в if
        }
        echo "<br>";
        echo "<br>";
      ?>
      <?
        for ($i = 0; $i < 100; $i += 2) { //выполняется 100% хоть один раз, в отличии от while, do while
          if ($i % 5 == 0) continue;//Если остаток от деления равен 0, мы пропускаем эту строку кода, и идём дальше(или возвращаемся)
          if ($i >= 31) break;//останавливает операцию и выходит из цикла
          echo "cykle #$i<br>";
        }
        $x = 0;
        while ($x < 16) {
          if($x==7)
            for ($y=0; $y<6; $y+=3)
              echo "One more integration = $y <br>";
          echo "integration #$x<br>";
          $x++;
        }
        $z=10;
        do { //Единственный цикл, который заканчивается на точку с запятой
          echo "Operation was performed once";
          $z++;
        } while($z<10);//Операция выполнилась один раз 100%, потом прочитала условие, и поскольку оно не соблюдено, операция не начлаа выполнятся последующие разы
        echo "<br><br>";
      ?>
      <?
        function printWords() {
          echo "Hello!";
        }
        function math ($first, $second) {
          $summa = $first + $second;
          return $summa;
        }
        $x=12;
        $y=35;
        $sum= math($x, $y);
        echo "$sum <br>";
        echo printWords();
        echo "<br><br>";
      ?>
      <?
        $array = array(12, -3.25, "String", false);
        echo $array[1];
        $array[]= "New Element";
        echo "<br>".end($array);
        echo "<br>";
        for ($i=0; $i<=count($array); $i++) {
          echo "Элемент массива с index $i = ".$array[$i]."<br>";
        }
        $list=array("age" => 12, "name" => "Alex", "schoolBoy" => true);
        $list["age"]=10;
        $summa = 0;
        echo $list["age"]."<br>";
        echo getAverage(array("first"/*это ключ(key)*/ => 12/*Это значение(value)*/, "sec" => 45, "third" =>23, "forth" => 55));
        function getAverage ($array) {
          foreach($array as $key => $value) {
            $summa += $value;
          }
          return $summa / count($array);
        }
        echo "<br><br>";
      ?>
      <?
        $array = array(array(12, 4.46, "string", true), array("Example"), array(45, "strong"));
        echo $array[0][2]."<br>";
        for ($i<0; $i< count($array); $i++) {
          for ($j=0; $j< count($array[$i]); $j++) {
            echo $array[$i][$j]." ";
          }
        }
        echo "<br>";
      ?>
      <?
        $x=12;
        echo "Variable x = $x<br>";
        $x=10;
        echo "Variable x = $x<br>";
        function test () {
          $GLOBALS["x"] += 7;//обращение к глобальной функции $x, а не локальной(которая создана в функции)
        }
        test();
        echo "Variable x = $x<br>";
        function test_2 () {
          static $id;/*без static было бы десять единиц. Static запоминает значение переменной, и получается у нас
          всегда 1 не добавляется к i=0, а добавляется к предыдущему значению. Что-то типо буфера
          обмена для переменной*/
          $id++;
          echo $id."<br>";
        }
        for ($i=0; $i <10 ; $i++) {
          test_2();
        }
        echo "<br>";
      ?>
     <?//Подключение файлов в файле test.php
    /*  $title="Glavnaya stranica";
      include_once "header.php";/*подключает файл точно так же, как и require.
       Отличие в том, что если такого файла не существует,
      require выдаст ошибку и не продолжит читать код, а include просто пропустит ошибку
      и компилятор будет читать код дальше *
      echo "Document body";
      require_once "footer.php";
      include_once 'page.php';
      /*require_once и include_once отличается от обычных тем, что если такой файл был
      подключён хоть один раз, сайт не будет встраивать этот же файл(файл с таким
      же названием) ещё раз */
      ?>
      <h1 style="font-weight:400;">Обработка форм</h1>
      <!-- Обработка форм -->
      <!-- PHP код в самом начале этого файла. Иначе он не работает. -->
      <form name="test" class="" method="post">
        <label for="name">Имя</label><br>
        <input type="text" id="name" name="name" placeholder="Ur name"><br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" placeholder="Ur email"><br>
        <label for="message">Message</label><br>
        <textarea name="message" rows="10" cols="40" style="resize:none;"></textarea><br>
        <input type="submit" name="done" value="Done!">
      </form><br>
      <!-- Конец обработки форм -->
      <?
        if (isset($x))
          echo "Variable exists";
        else
          echo "Variable isn't exist";

        unset($x);
        echo "<br>";

        if (isset($x))
          echo "Variable exists";
        else
          echo "Variable isn't exist";
          echo "<br>";
        $x = "15";
        $null;
        echo "Is numeric - ".is_numeric($x)."<br>";//является ли этот элемент строчным, который содержет только цифры?
        echo "Is integer - ".is_integer($x)."<br>";//является ли элемент числом(нет, он строчный, т.к. в кавычках)
        echo "Is double - ".is_double($x)."<br>";//является ли этот элемент элементом с плавающей точкой?(нет, число целое, а не нп. 3.24)
        echo "Is string - ".is_string($x)."<br>";//является ли элемент строчным
        echo "Is boolean - ".is_bool($x)."<br>";//является ли элемент булевской переменной
        echo "Is scalar - ".is_scalar($x)."<br>";//является ли этот элемент именно ПЕРЕМЕННОЙ(а не массивом или объектом)
        echo "Is null - ".is_null($null)."<br>";//является ли переменная пустой(как выше, просто существует, не более)
        echo "Is array - ".is_array($x)."<br>";//является ли этот элемент массивом
        echo "Get type - ".gettype($x)."<br>";//узнает тип элемента
        echo "<br>";
        //может пригодитс нп. при создании калькулятора
      ?>
      <?
        echo M_PI."<br>".M_E."<br>";
        $x=-15;
        echo abs ($x)."<br>";//показывает число по модулю
        $y=49.4656879867896;
        echo round ($y, 5)."<br>";//округляет число, можно указать число знаков после запятой(5)
        echo ceil ($y)."<br>";//всегда округляет число к большему, вне зависимости, что после запятой
        echo floor ($y)."<br>";//всегда округляет число к меньшему, вне зависимости, что после запятой
        echo mt_rand(1, 33)."<br>";//показывает рандомное число в выбранном диапазоне ВКЛЮЧИТЕЛЬНО
        echo min(4, -3, 2)."<br>";//показывает миниммальное число
        echo max(4, -3, 2)."<br>";//показывает максимальное число
        $z=1;
        echo sin($z)."<br>";//показывает синус
        echo "<br>";
      ?>
      <?//Строковые функции
        $string="This is example!";
        echo strlen($string)."<br>";//показывает string length
        echo strpos($string, "exa")."<br>";//показывает номер элемента, который мы ищем, в строке
        if(strpos ($string, "T")===false) echo "T isn't exist"."<br>";/*Почему три равно (===)?
        Если бы было два равно(==), ответ в strpos был бы 0, а 0 в php означает false.
        Соответственно компилятор бы думал, что значение false, т.к. ответ 0
        Три равно (===) проверяет не только значение элемента, но и его тип
        Так у нас ищёт именно булевскую переменную, а не любую со значением
        True или False */
        else echo "T exists"."<br>";
        echo substr($string, 3, 7)."<br>";//знакомая нам Substring из js. обрезает элемент. Оставляет символы с 3 по 7
        echo substr($string, 3, -2)."<br>";//с 3 по второй элемент начиная с конца
        echo str_replace("is", "ads", $string)."<br>";//заменяет а(символы, не слова) на b в элементе c
        echo str_replace(array("hi", "ple"), array("ads", "123"), $string)."<br>";//массивы тут для того, чтобы заменить сразу несколько элементов
        $str="<b>AHAHAHA, BOLD FONT</b>";
        echo htmlspecialchars ($str)."<br>";//ВАЖНО! заменяет теги и остальные спец. символы на символы html
        echo strtolower($string)."<br>";//трансформирует строчный элемент в нижний регистр
        echo strtoupper($string)."<br>";//трансформирует строчный элемент в верхний регистр
        echo md5("pavlyk pidor")."<br>";
        echo trim("           tasrui asdhasuid      dsa                ")."<br>";//как и в js, удаляет пробелы перед и после строки
        echo "<br>";
      ?>
      <?//С новым 2020 годом
        $array = array(12,17,5,23,56);
        echo count($array)."<br>";//считает кол-во элементов в массиве
        sort($array);//сортирует от меньшего к ;
        print_r ($array);
        echo "<br>";
        rsort($array);//сортирует от большего к меньшему
        print_r ($array);
        echo "<br>";
        asort($array);//в ассоциативном массиве запоминает для каждого ключи, но сортирует значения, ksort сортирует ключи
        print_r ($array);
        echo "<br>";
        //можно юзать r и/ или k вместе, нп. krsort...
        shuffle($array);
        print_r($array);
        echo "<br>";
        echo in_array(5, $array);//проверяет, если ли элемент A в массиве B
        echo "<br>";
        $arr_1=array(10, 2);
        $arr_2=array(4,5,7);
        $array_3=array_merge($arr_1, $arr_2);//Объединяет массивы A и B в $array_3
        print_r($array_3);
        echo "<br>";
        $arrDone=array(1,2,3,4,5,6,7);
        $arrDone=array_slice($arrDone, 1, -2);//как и substr обрезает массив, но имеет больше возможностей
        print_r($arrDone);
        echo "<br>"."<br>";
      ?>
      <?
        echo time()." – Показывает, сколько секунд прошло с 1 января 1970 года, с выхода UNIX"."<br>";
        echo microtime()."<br>";
        echo microtime(true)."<br>";
        echo date("Y-m-d H:i:s")."<br>";//Дата сегодня
        echo date("Y-m-d H:i:s", 15728392488)."<br>";//B показывает, сколько секунд прошло с 1970/01/01 и показывает эту дату в A
        $time=mktime(12,53,23,12,7,2007);
        echo date("Y-m-d H:i:s", $time)."<br>";//выводит конкретную дату, которую мы указали сверху
        $array=getdate($time);
        print_r($array);
        echo "<br>";
        echo checkdate(2,28,2012)."<br>";//проверяет, существует ли такая дата
        echo checkdate(2,34,2012);//такой даты не существует
      ?>
      <?//Работа с файлами
        // $file = fopen("a.txt", "a+t");//w+ в случае чего создает новый файл; оч много непонятного, см. документацию с B
        // fwrite($file, "\nExample\nText\nNext");//WARNING\n это ОБЯЗАТЕЛЬНО BACKSLASH!!!
        // fclose($file);
        $file=fopen("a.txt", "r+");
        while(!feof($file)) {//feof читает файл до конца, как компилятор. Как только feof дойдёт до конца файла, значение функции feof меняется на true
          echo fread ($file, 1)."<br>";//по 2 символа в строке
        }
        fseek($file, 0);//устанавливает курсор в определенное место в коде
        echo fread($file, 2);
        fclose($file);
        echo "<br>";
        file_put_contents("c.txt", "TEST test Test");
        echo file_get_contents("c.txt")."<br>";
        echo file_exists("a.txt")."<br>";
        echo filesize("a.txt")."<br>";
        rename("c.txt", "b.txt");
        echo file_get_contents("b.txt")."<br>";
        unlink("b.txt");
      ?>
      <?
        echo __FILE__."<br>";//показывает расположение файла
        echo fileperms(__FILE__);//показывает права файла
        chmod(__FILE__, 0777);
        echo "<br><br>";
      ?>
      <?
        echo $_SERVER["REMOTE_ADDR"];
        // phpinfo();
        echo "<br><br>";
      ?>
      <?
        //Не работает, ибо должен быть в начале кода header("Location: http://google.com");
        // exit; компилятор останавливается полностью
      ?>
      <?//Отправка почты
        $message="The simplest msg ever!";
        $to="ender.dany2@gmail.com";
        $from="enderdp2000@gmail.com";
        $subject="Тема сообщения";
        $headers="From : $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
        mail($to, $subject, $message);
      ?>

  </body>
</html>
