<?php
	session_start();
	
	$_SESSION['loggedIn'] = 'false';
	unset($_SESSION['access']);
	unset($_SESSION['username']);
	header("location: /login.php"); 
?>