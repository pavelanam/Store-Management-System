<?php
      $conn = mysqli_connect("localhost", "root", "", "imsdb");
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}

		if(isset($_GET['id']))
		{
			$pid = $_GET['id'];
			
			$sql = "delete from product where (id='$pid')";
			
			
			
			if(mysqli_query($conn, $sql))
			{
				echo "1 product deleted successfully";
				header("Location: product.php");
			}
			else
			    echo "Delete Failed";
			
		}
	  
?>

