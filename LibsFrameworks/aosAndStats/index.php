<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- jQuery connection -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JS and CSS Files connection -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- CSS connection -->
	<link rel="stylesheet" href="css/master.css">
	<!-- AOS connection -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<title>AOS</title>
	<!-- AOS Script -->
	<script>
	  $(document).ready(function(){
	  	AOS.init();
	  })
	</script>
</head>
<body>
	<!-- Watch body styles in master.css -->
	<div class="container text-center">
		<h1>LOL</h1>
		<!-- AOS Samples -->
		<div data-aos="fade-up" class="margin800"><h1>Fade-up</h1></div>
		<div data-aos="fade-right" class="margin800"><h1>FADE RIGHT</h1></div>
		<div data-aos="fade-left" class="margin800"><h1>FADE LEFT</h1></div>
		<div data-aos="fade-down" class="margin800"><h1>FADE DOWN</h1></div>
	</div>

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
</body>
</html>