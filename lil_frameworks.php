<!-- Quick config -->

<?
  // Connection to the Database
  $host = 'localhost'; // server's adress
  $database = 'blog_db'; // db name (database=db)
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
<!-- CSS connection -->
<link rel="stylesheet" href="css/master.css">
<!-- Shortcut icon -->
<link rel="shortcut icon" type="img/png" href="img/icon.png">

<!-- Head Additional -->
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="shortcut icon" type="img/png" href="img/icon.png">

<!-- Media queries -->
<style media="screen">
  @media (max-width: 1600px) and (min-width:1401px) { /* Monitors */

  }
  @media (max-width: 1400px) and (min-width:1201px) { /* Old|Small Laptops */

  }
  @media (max-width: 1200px) and (min-width:1000px) { /* Small screens|Monitors */

  }
  @media (max-width: 999px) and (min-width:651px) { /* Phones in horizontal mode|Tablets */

  }
  @media (max-width: 650px) and (min-width: 350px) { /*iPhone 6|6 Plus  */

    }
  @media (max-width: 349px) { /*iPhone 4|5 */

  }
</style>

<!-- Стили для placeholder -->
<style>
/* Black placeholders */
  ::-webkit-input-placeholder {color:#000000; opacity:1;}/* webkit */
  ::-moz-placeholder          {color:#000000; opacity:1;}/* Firefox 19+ */
  :-moz-placeholder           {color:#000000; opacity:1;}/* Firefox 18- */
  :-ms-input-placeholder      {color:#000000; opacity:1;}/* IE */
/* Убираем placeholder при нажатии на поле */
  :focus::-webkit-input-placeholder {opacity:0;}/* webkit */
  :focus::-moz-placeholder          {opacity:0;}/* Firefox 19+ */
  :focus:-moz-placeholder           {opacity:0;}/* Firefox 18- */
  :focus:-ms-input-placeholder      {opacity:0;}/* IE */
</style>

<!-- Forms and Passwords validation -->
<form action="" method="post" name="test" id="form">
  <label for="name">Your name</label>
  <input type="text" name="name" placeholder="Your name" id="name"><br>
  <label for="password">Your password</label>
  <input type="password" name="password" placeholder="Your password" id="password"><br>
  <label for="Repassword">Password check</label>
  <input type="password" name="Repassword" placeholder="Password check " id="Repassword"><br>
    <span>Choose your gender</span>
  <input type="radio" name="state" placeholder="Your state" id="Male" value="Male"><label for="Male">Man</label>
  <input type="radio" name="state" placeholder="Your state" id="Female" value="Female"><label for="Female">Woman</label><br>
  <label for="email">Your email:</label>
  <input type="email" name="email" placeholder="Your email" id="email"><br>
  <input type="button" onclick="valid(document.getElementById('form'))" value="Next step" name="submit">
</form>
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

<!-- Cookies Closeable Alert -->
<script type="text/javascript">
  var removableDiv = document.getElementById("cookieOutside");
  function removeElement()
{
  document.getElementById('cookieOutside').remove();
}
</script>
<div id="cookieOutside">
  <div class="cookie">
    På vår webbplats använder vi cookies som gör att ditt besök ska fungera bättre. Genom att surfa vidare godkänner du att vi använder cookies.
    <button type="button" name="buttonCookie" id="buttonCookie" onclick="removeElement()">Jag förstår</button>
    <br><a href="https://www.kronofogden.se/OmCookies.html" id="cookieA">Mer om cookies.</a>
  </div>
</div>
<style>
#cookieOutside{
  width: 100;
  height: 40px;
  border-bottom: 2px solid #d6d6d6;
}
.cookie{
 width: 63%;
 margin-top: 10px;
 margin-left: auto;
 margin-right: auto;
}
#buttonCookie {
background:linear-gradient(to bottom, rgba(254,254,254,1) 0%,rgba(231,231,231,1) 100%);
border-bottom: 1px solid #7a7a7a;
border-left: 1px solid #bbb;
border-right: 1px solid #bbb;
border-top: 1px solid #bbb;
border-radius: 3px;
outline: none;
cursor: pointer;
padding: 5px 15px;
margin-left: 3em;
margin-top: 10px;
float: right;
}
#cookieA{
  color: black;
  text-decoration: underline;
  font-weight: normal;
}
</style>

<!-- Counter, animates the text when scrolling to it -->
  <!-- Stats block (Counter) -->
    <div class="counter bg-dark text-light">
        <div class="container">
          <!-- Counter Grid blocks (watch styles) -->
            <div id="counter" class="stats_block text-center"> <!-- Stats_block = display:grid -->
              <div>
                  <h1 class="counter-value number-count" data-count="231">1</h1>
                  <p>Happy Users</p>
             </div>
              <div>
                 <h1 class="counter-value number-count" data-count="85">1</h1>
                 <p>Issues Solved</p>
             </div>
             <div>
                 <h1 class="counter-value number-count" data-count="59">1</h1>
                 <p>Good Reviews</p>
             </div>
             <div>
                 <h1 class="counter-value number-count" data-count="127">1</h1>
                 <p>Case Studies</p>
              </div>
          </div>
        </div>
    </div>
    <!-- Counter script -->
  <script>
    $(document).ready(function(){
      var a = 0;
  $(window).scroll(function() {
    if ($('#counter').length) { // checking if CountTo section exists in the page, if not it will not run the script and avoid errors 
      var oTop = $('#counter').offset().top - window.innerHeight; //get top offset of #COUNTER object
      if (a == 0 && $(window).scrollTop() > oTop) { //if offset of window at the moment is bigger than #COUNTER's offset, code executes
      $('.counter-value').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-count'); //get the NUMBER from data-count attribute
        $({
        countNum: $this.text() //get the NUMBER from counter-value class
        }).animate({
          countNum: countTo //Change the counter-value' number to data-count's number
        },
        {
          duration: 2000,
          easing: 'swing',
          step: function() {
          $this.text(Math.floor(this.countNum));
          },
          complete: function() {
          $this.text(this.countNum);
          //alert('finished');
          }
        });
      });
      a = 1; //Change A to 1 to stop this script from repeating
      }
    }
    });
    })
  </script>

<!-- .htaccess settings (Apache settings) -->
AddDefaultCharset UTF-8
RewriteRule ^about?$ about.php [NC, L],// <!-- Rename about.php to about in browser -->
ErrorDocument 404  /404.php <!-- If user have this error, redirect to this page -->
php_value short_open_tag 1 <!-- Make short tags like <? ?> instead of <?php ?> work -->

<!-- composer.json -->
{
    "require": {
        "monolog/monolog": "1.0.*"
    }
}
