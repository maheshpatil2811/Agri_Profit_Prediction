<?php
$crop_id = $_REQUEST['crop_id'];
$crop_name = $_REQUEST['crop_name'];
include "db.php";
$q = "update crop set crop_name='$crop_name' where crop_id='$crop_id'";
$res = mysqli_query($conn, $q);
if(mysqli_affected_rows($conn)>0) {
	echo "<script>alert('record updated.');window.location='crop-manage.php';</script>";
} else {
	//echo "<script>alert('record not updated.');window.location='dashboard.php';</script>";
	  echo mysqli_error($conn);
}
?>