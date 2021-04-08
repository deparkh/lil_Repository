<!-- While we have Array from DB -->
	<? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `aboutBlock`");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
	<section class="w-100 py-5 aboutBlock">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<h4 class="text-secondary" id="aboutAnchor"><?=$art[aboutSmallHeading]?></h4>
					<h1 class="display-5 text-play"><?=$art[aboutBigHeading]?></h1>
					<p class="font-weight-light text-sans"><?=$art[aboutText]?></p>
					<ul class="lst-none">
						<li class="text-sans"><i class="fa fa-check mr-2" aria-hidden="true"></i><?=$art[aboutLi1]?></li>
						<li class="text-sans"><i class="fa fa-check mr-2" aria-hidden="true"></i><?=$art[aboutLi2]?></li>
						<li class="text-sans"><i class="fa fa-check mr-2" aria-hidden="true"></i><?=$art[aboutLi3]?></li>
					</ul>
					<button class="btn btn-lg text-light traBg px-5 py-3 text-sans" href="javascript://0" onclick="slowScroll('#popularAnchor')">Find Tours</button>
				</div>
				<div class="col-md-12 col-lg-6 p-3 row">
					<div class="col-md-6 col-6 p-2 col-lg-6">
						<img src="img/<?=$art[aboutImgSrc1]?>" alt="" class="img-thumbnail w-100">
					</div>
					
					<div class="col-md-6 col-6 p-2 col-lg-6">
						<img src="img/<?=$art[aboutImgSrc2]?>" alt="" class="img-thumbnail w-100">
					</div>
					<div class="col-md-6 col-6 p-2 col-lg-6">
						<img src="img/<?=$art[aboutImgSrc3]?>" alt="" class="img-thumbnail w-100">
					</div>
					<div class="col-md-6 col-6 p-2 col-lg-6">
						<img src="img/<?=$art[aboutImgSrc4]?>" alt="" class="img-thumbnail w-100">
					</div>
				</div>				
			</div>
		</div>
	</section>
	<?}?>