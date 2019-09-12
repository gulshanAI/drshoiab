<?php 
require_once('base.php');

$user = md5($_POST['userid']);
$pass = md5($_POST['pass']);

$prba = mysqli_query($con, "select * from admin where user = '$user' and passw = '$pass' ");

$count = mysqli_num_rows($prba);
if ($count==1) {
	session_start();
	$_SESSION['fdocindia'] = $user;
	header('Location: testimonial.php');
}
else{
	echo "Invalid username & password";
}

?>