<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TravelAgency</title>
	<?require_once 'config.php'?>
</head>
<!-- Make admin page -->
<!-- Make RU version -->
<!-- Test all -->

<!-- TravelAgency=название турфирмы, везде изменить -->

<!-- Узнать название турфирмы -->
<body>
	<?require_once 'header.php'?>
	<!-- Intro Section -->
	<section class="start" id="startAnchor">
		<div class="container">
			<h1 class="display-1">Explore your travel</h1>
			<h1>Discover your next Adventure</h1>
		</div>
	</section>
	<!-- Why we section -->
	<?require_once 'whyBlock.php'?>
	<!-- About Block -->
	<?require_once 'aboutBlock.php'?>
	<!-- Popular block -->
	<?require_once 'popularBlock.php'?>
	<!-- Georgia Map Section -->
	<section class="w-100 py-5 mapBlock">
		<div class="container text-center">
			<h6 class="text-secondary">MODERN & BEAUTIFUL</h6>
			<h1 class="display-4 text-play pb-5">Explore the World for Travel</h1>
			<img src="/img/map.png" alt="" class="w-100">
			<h6 class="text-secondary font-italic">The map of Georgia</h6>
		</div>
		<!-- Counter Block -->
		<?require_once 'counterBlock.php'?>
	</section>
	<!-- Rewievs block -->
	<?require_once 'reviewsBlock.php'?>
	<!-- Finish Section -->
	<section class="w-100 py-5 finishBlock">
		<div class="container">
			<h1 class="display-3 text-play pb-3 text-light">Explore Your Travel</h1>
			<h4 class="text-light">Your New Travelling Idea</h4>
			<button class=" mt-4 text-centerbtn-block pt-3 w-75 btn traBg text-light" href="javascript://0" onclick="slowScroll('#popularAnchor')"><h3 class="p-0">FIND YOUR TOUR</h3></button>
		</div>
	</section>
	<!-- Footer (not included)-->
	<?//include 'footer.php'?>
	<script>
		/* Counter - CountTo */
	
	</script>
</body>
</html>