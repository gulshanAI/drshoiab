<?php 
session_start();
require_once('base.php');
if (isset($_SESSION['fdocindia'])) {
	$strp = $_POST['edideel'];
	$deltd = "DELETE FROM testimonial WHERE id = '$strp' ";
 	
 	$r = mysqli_fetch_array(mysqli_query($con, "select * from testimonial where id = '$strp' "));

	$file = $r['image2'];
	$qr = mysqli_query($con, $deltd);
	if($qr){
		if (unlink($file)) {
			echo "yes";
		}
	}
	else {
		echo "no";
	}
}

?>