

<?php
	session_start();

	if(isset($_COOKIE['abc'])){

          
		echo "<h2>Store Management System</h2> 
		<div align='right'><a href='logout.php'> logout</a>&nbsp;&nbsp;</div>

			</br>
			<fieldset>
				 
				 <a href='home.php'>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='product.php'>Products</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='about.php'>About</a>
				   
			</fieldset>";  
		  
		$myfile = fopen("user.txt", "r");
		$data = fread($myfile, filesize("user.txt"));
		fclose($myfile);
		$arr = explode('|', $data);
        echo "<br/><br/><br/>"; 
		echo "&nbsp;&nbsp;&nbsp;User Name: ". $arr[0]."<br/>";
		echo "&nbsp;&nbsp;&nbsp;Password: ". $arr[1]."<br/>";
		echo "&nbsp;&nbsp;&nbsp;Gender: ". $arr[2]."<br/>"; 
	}else{
		header("location: login.php");
	}

?>
