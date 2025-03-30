<?php
include "db.php";
$expence_id = $_REQUEST['expence_id'];
$farm_name=$_REQUEST['farm_name'];
$crop_name=$_REQUEST['crop_name'];
$expence_name=$_REQUEST['expence_type'];
$cost = $_REQUEST['cost'];
$date = $_REQUEST['date'];
print_r($expence_id);
$q = "update expence set crop_name='$crop_name',farm_name='$farm_name',expence_type='$expence_name',cost='$cost',date='$date' where expence_id='$expence_id'";
$res = mysqli_query($conn, $q);
if(mysqli_affected_rows($conn)>0) {
	echo "<script>alert('record updated.');window.location='expence-manage.php';</script>";
} else {
    //echo "not updated";
	//echo "<script>alert('record not updated.');window.location='dashboard.php';</script>";
	  echo mysqli_error($conn);
}
?>