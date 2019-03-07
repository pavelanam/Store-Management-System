

<?php
 
    $name="";
    $price="";
    $quantity="";
    $category="";
	$conn = mysqli_connect("localhost", "root", "", "imsdb");
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	
	if(!empty($_REQUEST["pname"]))
	{
	  $name=$_REQUEST["pname"];
	}
	else
	{
		echo " Product Name Field Cannot be Empty"."<br/>";
	}
		
	

	if(!empty($_REQUEST["price"]))
	{
	  $price=$_REQUEST["price"];
	}
	else
	{
		echo " Product price Field Cannot be Empty"."<br/>";
	}
	

	if(!empty($_REQUEST["quantity"]))
	{
	 $quantity=$_REQUEST["quantity"];
	}
	else
	{
		echo "Quantity Field Cannot be Empty"."<br/>";
	}
	

	if(!empty($_REQUEST["category"]))
	{
	  $category=$_REQUEST["category"];
	}
	else
	{
		echo " Category Field Cannot be Empty"."<br/>";
	}
	
	
	
	
	$sql="insert into product VALUES (".'null'.",'".$name."','".$price."','".$quantity."','".$category."')";  
	
   if(!empty($name) &&!empty($price) &&!empty($quantity) &&!empty($category))
		{
			if(mysqli_query($conn, $sql))
			{
				header("Location: product.php");
			}
			else
				echo "Failed";
				}
        else
		{
			echo "Error";
			
		}
        
?>