<section class="w-100 py-5 cardsBlock">
		<div class="container text-center">
			<h4 class="text-secondary">MODERN&BEAUTIFUL</h4>
			<h1 class="display-4 text-play pb-2" id="popularAnchor">Our Adventures</h1>
			<!-- ИЗМЕНИТЬ ПОТОМ -->
			<a href="articles.php" style="color:#b70d0d; text-transform: uppercase;">
				Watch all the tours
			</a>
			<div class="row mt-3">
				<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `popularblock` ORDER BY `id` LIMIT 3");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
				<div class="col-md-12 col-lg-4">
					<a href="article.php?id=<?echo $art['id']?>">
					<div class="card mb-4 box-shadow">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/img/<?=$art[popularImgSrc]?>">
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