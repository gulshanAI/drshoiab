<?php 
session_start();

require_once('base.php');
if (isset($_SESSION['fdocindia'])) {
    $idf = $_POST['idf'];
    $dm = $_FILES['image2']['name'];

    $target2 = '';

     $jjh = false;
    if ($dm != "") {
    	
    	$rd = mt_rand(0000,9999);
		$target2 = "upload_testi/$rd".basename($_FILES['image2']['name']);

		$image2 = $_FILES['image2']['name'];

			if (move_uploaded_file($_FILES['image2']['tmp_name'], $target2)) {
				$jjh = true;
			}
	}
	else{
    	
    	$ii = mysqli_fetch_array(mysqli_query($con, "select * from testimonial where id = '$idf' "));
    	$target2 = $ii['image2'];
    	$jjh = true;

    }

    if ($jjh) {
    	
    	$testi = $_POST['testcont'];
		 $tsname = $_POST['testname'];

		 $starep = "UPDATE testimonial SET testcont = '$testi', testname = '$tsname', image2 = '$target2' WHERE id = '$idf'";

		$r = mysqli_query($con, $starep);

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