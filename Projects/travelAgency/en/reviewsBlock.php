<section class="py-5 w-100 reviewBlock">
		<div class="container text-center">
			<h6 class="text-secondary">REVIEW & TESTIMOTIONAL</h6>
			<h1 class="display-4 text-play pb-5" id="reviewAnchor">Top Reviews</h1>
			<div class="row">
				<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `reviewsblock` WHERE `id`=1");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
				<div class="col-md-12 col-lg-4">
					<div class="card mb-4 box-shadow">
		                <div class="card-body">
		                	<h4 class="text-bold text-center">
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                	</h4>
		                  <p class="text-sans pt-3 text-center">
		                  <?=$art[reviewText]?>
						  </p>
						  <h5 class="text-center pt-2"><?=$art[reviewAuthor]?></h5>
						  <h6 class="text-center text-secondary"><?=$art[reviewAuthorWork]?></h6>
						  <p class="text-center">
						  <img src="img/<?=$art[reviewImgSrc]?>" alt="" class="pt-3 reviewImg">
						  </p>
		                </div>
             	 	</div>
				</div>
				<?}?>
				<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `reviewsblock` WHERE `id`=2");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
				<div class="col-md-12 col-lg-4">
					<div class="card mb-4 box-shadow">
		                <div class="card-body">
		                	<h4 class="text-bold text-center">
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                	</h4>
		                  <p class="text-sans pt-3 text-center">
		                  <?=$art[reviewText]?>
						  </p>
						  <h5 class="text-center pt-2"><?=$art[reviewAuthor]?></h5>
						  <h6 class="text-center text-secondary"><?=$art[reviewAuthorWork]?></h6>
						  <p class="text-center">
						  <img src="img/<?=$art[reviewImgSrc]?>" alt="" class="pt-3 reviewImg">
						  </p>
		                </div>
             	 	</div>
				</div>
				<?}?>
				<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `reviewsblock` WHERE `id`=3");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
				<div class="col-md-12 col-lg-4">
					<div class="card mb-4 box-shadow">
		                <div class="card-body">
		                	<h4 class="text-bold text-center">
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                		<i class="fas fa-star"></i>
		                	</h4>
		                  <p class="text-sans pt-3 text-center">
		                  <?=$art[reviewText]?>
						  </p>
						  <h5 class="text-center pt-2"><?=$art[reviewAuthor]?></h5>
						  <h6 class="text-center text-secondary"><?=$art[reviewAuthorWork]?></h6>
						  <p class="text-center">
						  <img src="img/<?=$art[reviewImgSrc]?>" alt="" class="pt-3 reviewImg">
						  </p>
		                </div>
             	 	</div>
				</div>
				<?}?>
			</div>
		</div>
	</section>