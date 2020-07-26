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
	
</head>
<body>
	<div class="container text-center">
		<h1>LOL</h1>
		<div data-aos="fade-up" class="margin800"><h1>Fade-up</h1></div>
		<div data-aos="fade-right" class="margin800"><h1>FADE RIGHT</h1></div>
		<div data-aos="fade-left" class="margin800"><h1>FADE LEFT</h1></div>
		<div data-aos="fade-down" class="margin800"><h1>FADE DOWN</h1></div>
	</div>
	<script>
	  $(document).ready(function(){
	  	AOS.init();
	  })
	</script>
</body>
</html>