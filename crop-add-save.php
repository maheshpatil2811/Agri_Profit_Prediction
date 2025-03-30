
<?php
include  "db.php";
$farm_name=$_REQUEST['farm_name'];
$crop_name=$_REQUEST['crop_name'];
$q="insert into crop values(NULL,'$crop_name','$farm_name')";
$res=mysqli_query($conn,$q);
if($res){
	echo "<script>alert('Crop Added Successfully');</script>";
	echo "<script>window.location='crop-manage.php';</script>";
}else{
	echo "not inserted";
	//echo mysqli_error($conn);
}
?>