<?php 
session_start();
require_once('base.php');
if (isset($_SESSION['fdocindia'])) {
	$strp = $_POST['edideel'];
	$deltd = "DELETE FROM blog WHERE id = '$strp' ";
 
	$r = mysqli_fetch_array(mysqli_query($con, "select * from blog where id = '$strp' "));

	$file = $r['bimg'];
	$qr = mysqli_query($con, $deltd);
	if($qr){
		$f = unlink($file);
		if ($f) {
		 	echo "yes";    
		}
	}
	else {
		echo "no";
	}
}

?>