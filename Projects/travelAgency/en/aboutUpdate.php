<?header("Location:editor.php");
require_once'config.php';
 mysqli_query($connection, "UPDATE `aboutblock` SET 
 	`aboutImgSrc1`='".$_POST['img1']."',
 	 `aboutImgSrc2`='".$_POST['img2']."',
 	  `aboutImgSrc3`='".$_POST['img3']."',
 	   `aboutImgSrc4`='".$_POST['img4']."',
 	    `aboutSmallHeading`='".$_POST['headSm']."',
 	     `aboutBigHeading`='".$_POST['headLg']."',
 	      `aboutText`='".$_POST['text']."',
 	       `aboutLi1`='".$_POST['li1']."',
 	        `aboutLi2`='".$_POST['li2']."',
 	         `aboutLi3`='".$_POST['li3']."'");