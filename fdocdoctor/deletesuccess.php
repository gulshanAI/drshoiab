<?php 
session_start();
require_once('base.php');
if (isset($_SESSION['fdocindia'])) {
	$strp = $_POST['edideel'];
	$deltd = "DELETE FROM successtory WHERE id = '$strp' ";
 
	$r = mysqli_fetch_array(mysqli_query($con, "select * from successtory where id = '$strp' "));

	$file = $r['image1'];
	$file1 = $r['image2'];
	$qr = mysqli_query($con, $deltd);
	if($qr){
		if(unlink($file) && unlink($file1)){
			echo "yes";
	   }
	}
	else {
		echo "no";
	}
}

?>