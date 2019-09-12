<?php 
session_start();
require_once('base.php');
if (isset($_SESSION['fdocindia'])) {

	$rd = mt_rand(0000,9999);
	$target2 = "upload_image/$rd".basename($_FILES['image2']['name']);

	$image2 = $_FILES['image2']['name'];

    if (move_uploaded_file($_FILES['image2']['tmp_name'], $target2)) {
		
		$name = $_POST['sname'];
		$desc = addslashes($_POST['scont']);

		$starep = "INSERT INTO successtory (sname, scont, image2) VALUES ('$name','$desc', '$target2')";

		$r = mysqli_query($con, $starep);

		if ($r) {
			echo "<script>alert('Data Added Successfully');
			window.location.href='successtory.php';</script>";
		}
		else{
			echo "<script>alert('Not Able to Add Data');
			window.location.href='successtory.php';</script>";
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