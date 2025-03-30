
<?php
 $conn=mysqli_connect("localhost", "root", "", "farm_manage");
$farm_name=$_REQUEST['farm_name'];
$expence_type=$_REQUEST['expence_type'];
$crop_name=$_REQUEST['crop_name'];
$expence_details=$_REQUEST['expence_details'];
$cost = $_REQUEST['cost'];
$date = $_REQUEST['date'];
$q="insert into expence values(NULL,'$farm_name','$expence_type','$crop_name','$expence_details','$cost','$date')";
$res=mysqli_query($conn ,$q);
if($res){
	echo "<script>alert('Expence Added Successfully');</script>";
	echo "<script>window.location='expence-manage.php';</script>";
}else{
	//echo "not inserted";
	echo mysqli_error($conn);
}
?>