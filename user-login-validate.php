<?php
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
//echo $email."---".$password;
$conn = mysqli_connect("localhost", "root", "", "farm_manage");
$q = "select * from user where email='$email' and password='$password'";
$res = mysqli_query($conn, $q);
if (mysqli_num_rows($res) > 0) {
	$user = mysqli_fetch_array($res);

	$_SESSION['user'] = $user;
	//print_r($_SESSION['user']);

	header("location:index.php");
} else {
	echo "<script>alert('Invalid username/password. Please try again');window.history.back();</script>";
}

?>