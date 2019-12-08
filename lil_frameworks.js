<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> //JS Download
//Functions are working better in <head> element, not <body>
//Fomrs and Passwords validion
<script>
function valid (form) {
var fail = false;
var email = form.email.value
var name = form.name.value;
var password = form.password.value;
var Repassword = form.Repassword.value;
var state = form.state.value;
var adr_pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if (name == "" || name == " ") {
  fail = "Вы не ввели своё имя";
} else if(password == ""){
  fail = "Вы не ввели свой пароль";
}
 else if(password != Repassword){
  fail = "Пароли не совпадают";
}
 else if(state == ""){
  fail = "Укажите пол";
}
 else if(adr_pattern.test(email) == false) {
  fail = "Вы ввели свой email Неправильно";
}
 else if (email.split('@').length - 1 == 0)  {
  fail = "Вы ввели свой email Неправильно";
}
if (fail) {
  alert(fail);
} else {
  // REDIRECT
  window.location = "https://google.com";
}
}
</script>
  // Timer
<script>
  var id = setInterval("myFunct_1()", 1000);
  var counter_2 = 0;
  function myFunct_1() {
    counter_2++;
    document.getElementById("counterP").innerHTML = counter_2;
    if (counter_2 == 9) {
      clearInterval(id) //Stops coding
    }
  }
</script>
// != это НЕ РОВНО, как перечёркнутое РОВНО
//Date
<script>
  //Date
  var date = new Date();
  var month = date.getMonth() + 1;
  text = "Год сейчас - " + date.getFullYear();
  text += "\nМесяц - " + month;
  text += "\nДень - " + date.getDay();
  text += "\nЧасов - " + date.getHours();
  text += "\nМинут - " + date.getMinutes();
  text += "\nСекунд - " + date.getSeconds();
  //alert(text);

  var date = new Date(2017, 05, 04, 03, 55, 47);
  date.setMinutes(11);
  //alert(date);
</script>
//Animation when moving to elements
<div id="up"></div>
<a href="javascript://0" onclick="slowScroll('#more')">Подробнее</a>
<div id="more">Больше информации | <a href="javascript://0" onclick="slowScroll('#up')">Наверх</a></div>
<script>
  function slowScroll(id) {
    var offset = 0;
    $('html, body').animate ({
      scrollTop: $(id).offset ().top - offset
    }, 500);
    return false;
  }
</script>
