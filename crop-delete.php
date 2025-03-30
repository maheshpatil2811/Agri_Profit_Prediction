<?php
	//if(isset($_REQUEST['submit']))
	//{
		$crop_id=$_REQUEST['crop_id'];
include "db.php";
		$q='delete from crop where crop_id='.$crop_id;
		//$q='update exp set is_deleted=1 where id='.$id;
		$res=mysqli_query($conn,$q);
		if(mysqli_affected_rows($conn))
		{
			echo '<script>alert("Record deleted.");window.location="crop-manage.php";</script>';
            //echo mysqli_error($conn);
		}else{
			echo '<script>alert("Fail to delete Record. Please try again.");window.location="crop-manage.php";</script>';
            
		}
	//}
?>