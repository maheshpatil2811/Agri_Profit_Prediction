<?php
	$conn=mysqli_connect("localhost","root",'','farm_manage');

	$farm_name=$_REQUEST['farm_name'];
	
		$q="insert into farm values (NULL,'$farm_name')";
		
		$result=mysqli_query($conn,$q);
		if($result)
		{
            
			echo "<script>alert('Farm Add Successfully');window.location='index.php';</script>";
			
		}else{
			echo 'Fail to add, Please try again';
			echo mysqli_error($conn);
		}
	
		
?>
