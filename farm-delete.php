<?php 

$conn=mysqli_connect("localhost","root","","farm_manage");
//$name=$_SESSION['name'];
$farm_id=$_REQUEST['farm_id'];
		
		$q='delete from farm where farm_id='.$farm_id;
	//$q='update users set is_deleted=1 where user_id='.$user_id;
		$res=mysqli_query($conn,$q);
		if(mysqli_affected_rows($conn)>0)
		{
            
			echo '<script>alert("Record deleted.");
            window.location="manage-farm.php";</script>';  
		}else{
            echo "fail to delete";
			//echo '<script>alert("Fail to delete Record. Please try again.");window.location="product-delete1.php";</script>';
		}

?>