<div class="py-5 counterBlock rounded" id="counter">
		<div class="row">
			<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `counterblock` WHERE `counterid`=1");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
			<div class="col-md-6 col-lg-3 text-center py-4 my-2"  style="background-image: url(/img/14.png); background-position: center center; background-repeat: no-repeat; background-size: contain;">
				<span class="text-bold display-4 counter-value" data-count="<?=$art[counterNubmer]?>">1</span>
				<span class="text-bold display-4">+</span>
				<h5 class="text-bold text-secondary"><?=$art[counterHeading]?></h5>
			</div>
			<?}?>
			<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `counterblock` WHERE `counterid`=2");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
			<div class="col-md-6 col-lg-3 text-center py-4 my-2"  style="background-image: url(/img/12.png); background-position: center center; background-repeat: no-repeat; background-size: contain;">
				<span class="text-bold display-4 counter-value" data-count="<?=$art[counterNubmer]?>">1</span>
				<span class="text-bold display-4">+</span>
				<h5 class="text-bold text-secondary"><?=$art[counterHeading]?></h5>
			</div>
			<?}?>
			<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `counterblock` WHERE `counterid`=3");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
			<div class="col-md-6 col-lg-3 text-center py-4 my-2"  style="background-image: url(/img/13.png); background-position: center center; background-repeat: no-repeat; background-size: contain;">
				<span class="text-bold display-4 counter-value" data-count="<?=$art[counterNubmer]?>">1</span>
				<span class="text-bold display-4">+</span>
				<h5 class="text-bold text-secondary"><?=$art[counterHeading]?></h5>
			</div>
			<?}?>
			<? //Get cards from DB
    $card=mysqli_query($connection, "SELECT * FROM `counterblock` WHERE `counterid`=4");
    // while $card is array with info from db :
    while ($art=mysqli_fetch_assoc($card)) {?>
			<div class="col-md-6 col-lg-3 text-center py-4 my-2"  style="background-image: url(/img/14.png); background-position: center center; background-repeat: no-repeat; background-size: contain;">
				<span class="text-bold display-4 counter-value" data-count="<?=$art[counterNubmer]?>">1</span>
				<span class="text-bold display-4">+</span>
				<h5 class="text-bold text-secondary"><?=$art[counterHeading]?></h5>
			</div>
			<?}?>
		</div>
	</div>