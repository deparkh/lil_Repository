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
	<section class="w-100 bg-light artStart">
		<div class="container">
			<h4 class="text-secondary pt-5">MODERN&BEAUTIFUL</h4>
			<h1 class="display-4 text-play pb-2" id="popularAnchor">Our Adventures</h1>
			<div class="row pt-5">
				<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `popularblock` ORDER BY `id`");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
				<div class="col-md-6 col-lg-4 col-12">
					<a href="article.php?id=<?echo $art['id']?>">
					<div class="card mb-4 box-shadow">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="img/<?=$art[popularImgSrc]?>">
		                <div class="card-body">
		                	<h3 class="text-bold"><?=$art[popularHeading]?></h3>
		                	<div class="bg--gray text-secondary text-bold my-3 rounded"><div class="p-2">
		                		<i class="far fa-clock mr-2"></i><?=$art[popularDuration]?> |  <i class="far fa-map mx-2"></i> <?=$art[popularLocation]?></div>
		                		</div>
		                  <h5><?=$art[popularText]?></h5>
		                  <span class="text-secondary"><?=$art[popularPrice]?></span>
		                </div>
             	 	</div>
				</a>
				</div>
				<?}?>
			</div>
		</div>
	</section>
</body>
</html>