

<?php
	session_start();

	if(isset($_SESSION['username'])){

          
		echo "<h2>Store Management System</h2> 
		     <h3>Welcome Shop Keeper: ".$_SESSION['username']." </h3>
		<div align='right'><a href='logout.php'> logout</a>&nbsp;&nbsp;</div>

			</br>
			<fieldset>
				 
				 <a href='shopKeeper.php'>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='products.php'>Products</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='sale.php'>Sale Product</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='about.php'>About</a>
				   
			</fieldset>";  
		  
		$myfile = fopen("user.txt", "r");
		$data = fread($myfile, filesize("user.txt"));
		fclose($myfile);
		$arr = explode('|', $data);
        echo "<br/><br/><br/>"; 
		
	}else{
		header("location: login.html");
	}

?>
