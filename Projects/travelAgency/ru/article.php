<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?require'config.php'?>
</head>
<body>
	<?require'artHeader.php'?>
	<!-- Intro Block -->
	<section class="start" id="startAnchor">
		<div class="container">
			<h1 class="display-1">Check our Tours</h1>
			<h1>We are sure you find what you want!</h1>
		</div>
	</section>
	<!-- Articles start -->
	<section class="w-100 artStart" style="background-color: #fff;">
		<div class="container">
			<h4 class="text-secondary pt-5">MODERN&BEAUTIFUL</h4>
			<h1 class="display-4 text-play pb-2" id="popularAnchor">Our Adventures</h1>
			<div class="row pt-5">
				<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `popularblock` WHERE `id` = " . (int) $_GET['id']);
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
    			<div class="text-center w-100">
    				<h1 style="color: #b70d0d;"><?=$art['popularHeading']?></h1>
					<div class="bg--gray text-secondary text-bold my-3 rounded"><div class="p-2">
		                		<i class="far fa-clock mr-2"></i><?=$art[popularDuration]?> |  <i class="far fa-map mx-2"></i> <?=$art[popularLocation]?></div>
		            </div>
    			</div>
				<div class="col-md-12 col-lg-6 col-12">
		            <h4 class=""><?=$art[popularTextBig]?></h4>
				</div>
				<div class="col-md-12 col-lg-6 col-12">
					<img src="img/<?=$art['popularImgSrc']?>" alt="" width="100%">
				</div>
				<?}?>
			</div>
			<div class="text-left mb-3">
				<img src="img/table.png" alt="" width="100%">
				
				<p class="text-bold">NOTE: </p>
				<ol>
					<li><a style="color:#b70d0d" href="https://registration.gov.ge/pub/form/8_protocol_for_arrivals_in_georgia/tk6157/">https://registration.gov.ge/pub/form/8_protocol_for_arrivals_in_georgia/tk6157/</a>. This form must be filled in before departure.</li>
					<li>Mandatory follow up Covid- test within 72 h after arrival.</li>
					<li>Current restrictions in Georgia:
						<ol style="padding-left: 20px;">
							<li style="list-style-type: lower-alpha;">Curfew after 9 PM.</li>
							<li style="list-style-type: lower-alpha;">Shopping malls open from 10:00 - 19:00, except weekends</li>
							<li style="list-style-type: lower-alpha;">Public transport is available from 8:00 to 20:00 all week.</li>
							<li style="list-style-type: lower-alpha;">Indoor Restaurants open from 8th of march except weekends. Take away service is available for all restaurants every day.</li>
						</ol>
					</li>
				</ol>
				<p>
					Please check all the restrictions on the link:
					<a href="https://stopcov.ge/en/shezgudvebi" style="color:#b70d0d">https://stopcov.ge/en/shezgudvebi</a> 
				</p>
			</div>
			<a class="btn btn-lg text-light mb-5 mt-5 traBg px-5 text-sans" href="javascript:history.back()">Go Back</a>
		</div>
	</section>
	<?require'footer.php'?>
</body>
</html>