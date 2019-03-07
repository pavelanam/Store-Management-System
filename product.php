
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<title>Products</title>
</head>
<body>
 
<div class="container">

	<table border="1">

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

	$sql = "select * FROM product";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		echo "<tr>
		   <th>Product ID</th>
		   <th>Product Name</th>
		   <th>Price</th>
		   <th>Category</th>
		   <th>Quantity</th>
		   <th>Edit Product</th>
		   <th>Delete Product</th>
		   <th>Show Product</th>
		</tr>";
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr><td align='center'>" . $row["id"]. "</td><td align='center'>" . $row["productname"]. " </td><td align='center'>" . $row["price"]. "</td><td> ".$row["category"]."</td><td align='center'> ".$row["quantity"]."</td><td align='center'><a href='update.php?id=" . $row["id"]. "'>Edit<a/></td><td align='center'><a href='delete.php?id=" . $row["id"]. "'>Delete<a/></td><td align='center'><a href='show.php?id=" . $row["id"]. "'>Show<a/></td><br></tr>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	$conn->close();
          
		echo "<h2>Store Management System</h2> 
		<div align='right'><a href='logout.php'> logout</a>&nbsp;&nbsp;</div>

			</br>
			<fieldset>
				 
				 <a href='adminHome.php'>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='addProduct.html'>Add Products</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='about.php'>About</a>
				 
				   
			</fieldset><br/><br/>";  
			
		  
	}else{
		header("location: login.html");
	}
?>
  
</table>
   
</div>
   


    
</body>
</html>
