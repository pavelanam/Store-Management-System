<?php

	session_start();

	if(isset($_COOKIE['abc'])){
		echo "welcome to your profile page!";

		echo $_COOKIE['abc'];
	}else{
		header("location: login.php");
	}


?>