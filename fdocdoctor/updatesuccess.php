<?php 
session_start();

require_once('base.php');
if (isset($_SESSION['fdocindia'])) {
    $idf = $_POST['idf2'];
    $dm = $_FILES['image1']['name'];
    $dm1 = $_FILES['image2']['name'];

    $target1 = '';
    $target2 = '';
   
    $jjh = false;
    if ($dm != "" && $dm1 !="") {
    	
    	$rd = mt_rand(0000,9999);
		$target1 = "upload_image/$rd".basename($_FILES['image1']['name']);
		$target2 = "upload_image/$rd".basename($_FILES['image2']['name']);

		$image1 = $_FILES['image1']['name'];
		$image2 = $_FILES['image2']['name'];

			if (move_uploaded_file($_FILES['image1']['tmp_name'], $target1)&&move_uploaded_file($_FILES['image2']['tmp_name'], $target2)) {
				$jjh = true;
			}
	}
    else{
    	
    	$ii = mysqli_fetch_array(mysqli_query($con, "select * from successtory where id = '$idf' "));
    	$target1 = $ii['image1'];
    	$target2 = $ii['image2'];
    	$jjh = true;

    }
    if ($jjh) {
    	
    	$name = $_POST['sname'];
		$desc = addslashes($_POST['scont']);
		
		$starep = "UPDATE successtory SET sname = '$name', scont = '$desc', image1 = '$target1', image2 = '$target2' WHERE id = '$idf'";

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