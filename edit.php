<?php
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

	
    $pid=$_REQUEST["id"];
    $name=$_REQUEST["pname"];
	$price=$_REQUEST["price"];
	$quantity=$_REQUEST["quantity"];
	$category=$_REQUEST["category"];
	
	$sql2="update product SET productname='".$name."',price='".$price."',quantity='".$quantity."',category='".$category."' WHERE product.id = '".$pid."'";
	 
	if(mysqli_query($conn, $sql2))
	{
		echo "Product updated successfully";
		header("Location: product.php");
	}
	else
		echo "Failed";

?>