

<?php
	session_start();

	if(isset($_SESSION['username'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "imsdb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	
	
	if(isset($_GET['id']))
		{
			$pid = $_GET['id'];
            $sql = "select * FROM product where id='$pid'";
            $result = $conn->query($sql);
        }
	
		while($row = $result->fetch_assoc()) 
		{
			echo "<form method='request' action='edit.php'>
			<br /><h3>EDIT PRODUCT</h3><hr/><br />
			Id:".$row["id"]."<input type='hidden' name='id' value=".$row["id"]."><br/><br/>
			Name: <input type='text' name='pname' value=".$row['productname']."><br/><br/>
			Price: <input type='text' name='price' value=".$row['price']."><br/><br/>
			Quantity: <input type='text' name='quantity' value=".$row['quantity']."><br/><br/>
			Category: <input type='text' name='category' value=".$row['category']."><br /><br /><hr />
			<input type='submit' value='Update'/></form>";
		}
	
	
	
          $conn->close();
		echo "<h2>Store Management System</h2> 
		<div align='right'><a href='logout.php'> logout</a>&nbsp;&nbsp;</div>";
	}		
	
?>
