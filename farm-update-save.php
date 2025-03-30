<?php
   $farm_id=$_REQUEST['farm_id'];
	$conn=mysqli_connect("localhost","root",'','farm_manage');
	//$farm_id=$_REQUEST['farm_id'];
   $farm_name=$_REQUEST['farm_name'];
   $q="update farm set farm_name='$farm_name' where farm_id= $farm_id";
   $res=mysqli_query($conn,$q);
   if( mysqli_affected_rows($conn)>0)
   {
	echo "<script>alert('record updated.');window.location='manage-farm.php';</script>";
   }else{
   echo print_r($farm_id);
   // echo "not updated";
	//echo "<script>alert('record not updated.');window.history.back();</script>";
   }
?>

