<header class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar">
	<div class="container">
        <a href="../index.php" class="navbar-logo">
						Tra<span class="tra-orange">Vio.</span> <i class="fab fa-typo3"></i>
		</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" onclick="showMenu()">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link px-4" href="javascript://0" onclick="slowScroll('#startAnchor')" style="color:#b70d0d;">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link px-4" href="javascript://0" onclick="slowScroll('#whyAnchor')" onmouseover="this.style.color='#b70d0d';" 
    onmouseout="this.style.color='white';">Features</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link px-4"href="javascript://0" onclick="slowScroll('#aboutAnchor')" onmouseover="this.style.color='#b70d0d';" 
    onmouseout="this.style.color='white';">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link px-4" href="javascript://0" onclick="slowScroll('#popularAnchor')" onmouseover="this.style.color='#b70d0d';" 
    onmouseout="this.style.color='white';">Tours</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link px-4" href="javascript://0" onclick="slowScroll('#reviewAnchor')" onmouseover="this.style.color='#b70d0d';" 
    onmouseout="this.style.color='white';">Reviews</a>
            </li>
          </ul>
        </div>
        </div>
      </header>
      <script type="text/javascript">
          var navbar = document.getElementById("navbar");
          document.onscroll = function() {
            if (window.pageYOffset  >= 1) {
              navbar.classList.add("bg--dark")
            } else {
              navbar.classList.remove("bg--dark");
            }
}
          function showMenu() {
             $(".navbar").addClass( "bg--dark" );
          }
            function slowScroll(id) {
    var offset = 130;
    $('html, body').animate ({
      scrollTop: $(id).offset ().top - offset
    }, 500);
    return false;
  }
      </script>