

<?php
	session_start();

	if(isset($_SESSION['abc'])){

          
		echo "<h2>Store Management System</h2> 
		<div align='right'><a href='logout.php'> logout</a>&nbsp;&nbsp;</div>

			</br>
			<fieldset>
				 
				 <a href='skhome.php'>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='products.php'>Products</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='sales.php'>Sale Product</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='about.php'>About</a>
				   
			</fieldset>";  
		  
	}else{
		header("location: login.php");
	}

?>
<br/>
<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" width="300" name="p_search" value="search product">&nbsp;&nbsp;
<button>Search</button>
<br/><br/><br/>
<table>
  <tr>
  <td>
<table border="1">
  <tr>
    <th>Product Id</th>
    <th>Product Name</th>
	<th>Price</th>
	<th>Category</th>
	<th>Quantity</th>
	<th>View</th>
	
	
  </tr>
  <tr>
    <td>101</td>
    <td>Samsung J6</td>
	<td>10000</td>
	<td>Smart Phone</td>
	<td>40</td>
	<td><a href="">Add to cart<a/></td>
	
  </tr>
  <tr>
    <td>102</td>
    <td>Nokia 3</td>
	<td>12000</td>
	<td>Smart Phone</td>
	<td>30</td>
	<td><a href="">Add to cart<a/></td>
	
  </tr>
  <tr>
    <td>103</td>
    <td>Xiaomi Redmi 5</td>
	<td>15000</td>
	<td>Smart Phone</td>
	<td>30</td>
	<td><a href="">Add to cart<a/></td>
	
  </tr>
</table>

</td>
<td></td><td></td><td></td><td></td>
<td>
<table border="1.5" align="center">
	  <tr>
	    <th></th>
		<th>CART</th>
		<th></th>
     </tr>
	 <tr>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Price</th>
     </tr>
	 <tr>
		<td>test</td>
		<td>2</td>
		<td>3000</td>
     </tr>
	 <tr>
		<td>test2</td>
		<td>2</td>
		<td>2999</td>
     </tr>
	 <tr>
		<td>test3</td>
		<td>3</td>
		<td>3500</td>
     </tr>
	 <tr>
	 <td></td>
		<td>Total</td>
		<td>9499</td>
     </tr>
	 </td>
	 </tr>
	</table>
	</table>