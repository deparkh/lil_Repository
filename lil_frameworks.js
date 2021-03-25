//Functions are working better in <head> element, not <body>
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
// Change header bg when scrolling
var navbar = document.getElementById("navbar");
          // Default bg of the navbar should be transparent
          document.onscroll = function() {
            if (window.pageYOffset  >= 1) {
              // Add class that make it black
              navbar.classList.add("bg--dark")
            } else {
              // Remove Style to make nav transparent
              navbar.classList.remove("bg--dark");
            }
}
// Toggle class when clicked
function showMenu() {
             $(".navbar").toggleClass("bg--dark");
          }