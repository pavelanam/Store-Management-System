<?php
	
	session_start();
	session_destroy();

	setcookie('abc', '', time()-100, '/');
	setcookie('rm', '', time()-100, '/');

	header("location: login.html");


?>