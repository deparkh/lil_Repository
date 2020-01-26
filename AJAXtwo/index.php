<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AJAXtwo</title>
    <link rel="shortcut icon" type="img/png" href="https://cdn2.iconfinder.com/data/icons/cat-power/256/cat_walk.png">
    <style media="screen">
      * {
        font-family: "Comic Sans MS";
        font-size: 1.1em;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
    function funcBefore () {
      $("#information").text("Loading data...");
    }
    function funcSuccess(data) {
      $("#information").text(data);
    }
      $(document).ready(function() {
        $("#load").bind("click", function() { //bind отслеживает, будут ли соблидены события внутри него на элемент
          var admin = "Admin";
          $.ajax({
            url: "content.php", //в конце ставим ЗАПЯТУЮ, а не ТОЧКУ С ЗАПЯТОЙ
            type: "POST",
            data: ({name: admin, number:5, stringi:"Trusiki"}),  //data это работа с переменными, admin это переменная, которую мы указали выше
            dataType:"html",//html это как text, только ещё разрешены теги
            beforeSend:funcBefore,//скобки НЕ ставить, ибо так оно будет выполнятся 100% сразу
            success:funcSuccess
          });//учти, квадратные В круглых
        });
        $("#done").bind("click", function(){
          $.ajax({
            url: "check.php", //в конце ставим ЗАПЯТУЮ, а не ТОЧКУ С ЗАПЯТОЙ
            type: "POST",
            data: ({name: $("#name").val()}),  //data это работа с переменными, admin это переменная, которую мы указали выше
            dataType:"html",//html это как text, только ещё разрешены теги
            beforeSend: function(){
              $("#information2").text("Loading data...")
            },//скобки НЕ ставить, ибо так оно будет выполнятся 100% сразу, нп. function()-НИЗЯ
            success: function (data) {
              if(data=="This login is already taken"){
                alert ("This login is already taken!");
                $("#information2").text("Failed");
              }
              else
                $("#information2").text(data)
              }
          });
        });
    });
    </script>
    <!-- JSON's script -->
    <script type="text/javascript">
      $(document).ready(function(){
        $("select[name='country']").bind("change", function() {
          $("select[name='city']").empty();
          $.get("countryCheck.php", {country: $("select[name='country']").val()}, function(data) {
            data=JSON.parse(data);
            for(var id in data) {
              $("select[name='city']").append($("<option value='"+id+"'>"+data[id]+"</option>"));
            }
          });
        });
      });
    </script>
  </head>
  <body>
    <div>Hello World!!!</div><br>
    <input type="text" id="name" placeholder="Enter your name">
    <input type="button" id="done" value="Done!">
    <div class="" id="information2"></div>
    <p id="load" style="cursor:pointer">Download data</p>
    <div class="" id="information"></div><br>
    <!-- JSON -->
    <label for="">Choose the country</label>
    <select class="" name="country">
      <option value="0"></option>
      <option value="1">America</option>
      <option value="2">France</option>
    </select>
    <label for="">Cities:</label>
    <select class="" name="city">
      <option value="0"></option>
    </select>
  </body>
</html>
