<?php
	
	if(isset($_COOKIE['rm'])){
		header("location: home.php");
	}else{

		if(isset($_GET['status'])){
			$status = $_GET['status'];

			if($status == "invaliduser"){
				echo "Invalid username/password";
			}else if($status == "nullvalue"){
				echo "username/password can't be empty";
			} 
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<fieldset>
	<legend>LOGIN</legend>
		<form method="post" action="logCheck.php">
			User Name: <input type="text" name="username"/><br/>
			Password  : <input type="password" name="password"/><br/>
			<input type="checkbox" name="rm" />Remember me<br/>
			
			<input type="radio" name="user" value="Admin">Admin
			<input type="radio" name="user" value="Shopkeeper">Shopkeeper<br/>
			<input type="submit" name="submit" value="Submit"/>
		</form>
	</fieldset>
</body>
</html>