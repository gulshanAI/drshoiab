<?php 
session_start();
require_once('base.php');
if (isset($_SESSION['fdocindia'])) {

	$rd = mt_rand(0000,9999);
	$target2 = "upload_testi/$rd".basename($_FILES['image2']['name']);

	$image2 = $_FILES['image2']['name'];

    if (move_uploaded_file($_FILES['image2']['tmp_name'], $target2)) {
		
		$testi = $_POST['testcont'];
		$tsname = $_POST['testname'];

		$tourn = "INSERT INTO testimonial (testcont, testname, image2) VALUES ('$testi','$tsname','$target2')";

		$r = mysqli_query($con, $tourn);

		if ($r) {
			echo "<script>alert('Data Added Successfully');
				window.location.href='testimonial.php';</script>";
		}
		else{
			echo "<script>alert('Not Able to Add Data');
				window.location.href='testimonial.php';</script>";
		}
	}
	else{
	echo "Unable To save the image";
}

}
else{
	header('Location: logout.php');
}
?>