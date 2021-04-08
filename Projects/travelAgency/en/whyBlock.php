<section class="w-100 whyBlock py-5">
		<div class="container">
		<h1 class="display-4 text-play" id="whyAnchor">Why travel with us?</h1>
		<div class="row">
	<!-- While we have Array from DB -->
	<? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `whyBlock` WHERE `whyid`=1");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
			<div class="col-lg-3 col-12 col-md-6 mt-5">
				<a href="">
					<div class="card mb-4 box-shadow rounded">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="img/<?=$art[whyImgSrc]?>">
		                <div class="card-body">
		                  <h5><?=$art[whyText]?></h5>
		                </div>
             	 	</div>
				</a>
			</div>
			<?}?>
			<!-- While we have Array from DB -->
	<? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `whyBlock` WHERE `whyid`=2");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
			<div class="col-lg-3 col-12 col-md-6 mt-5">
				<a href="">
					<div class="card mb-4 box-shadow rounded">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="img/<?=$art[whyImgSrc]?>">
		                <div class="card-body">
		                  <h5><?=$art[whyText]?></h5>
		                </div>
             	 	</div>
				</a>
			</div>
			<?}?>
			<!-- While we have Array from DB -->
	<? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `whyBlock` WHERE `whyid`=3");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
			<div class="col-lg-3 col-12 col-md-6 mt-5">
				<a href="">
					<div class="card mb-4 box-shadow rounded">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="img/<?=$art[whyImgSrc]?>">
		                <div class="card-body">
		                  <h5><?=$art[whyText]?></h5>
		                </div>
             	 	</div>
				</a>
			</div>
			<?}?>
			<!-- While we have Array from DB -->
	<? //Get whyBlock props from DB
    $card=mysqli_query($connection, "SELECT * FROM `whyBlock` WHERE `whyid`=4");
    //while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
			<div class="col-lg-3 col-12 col-md-6 mt-5">
				<a href="">
					<div class="card mb-4 box-shadow rounded">
		            	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="img/<?=$art[whyImgSrc]?>">
		                <div class="card-body">
		                  <h5><?=$art[whyText]?></h5>
		                </div>
             	 	</div>
				</a>
			</div>
			<?}?>
			
		</div>
		</div>
	</section>