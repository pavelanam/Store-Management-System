<?php
	
	$key 	= $_POST['key'];

	$con = mysqli_connect('localhost', 'root', '', 'imsdb');
	$sql = "select * from product where productname like '".$key."%'";
	$result = mysqli_query($con,$sql);
	
	$data ="";
	while($row = mysqli_fetch_assoc($result)){
	 echo"<div onclick='abc(this.innerHTML)' style='background-color: #eee;width:200px;border: 1px solid #000;margin:2px'>".$row['productname']." Price".$row['price']."</div>";
	}
	//echo $data;
	//$row = mysqli_fetch_assoc($result);
	//echo $row['productname'];

?>