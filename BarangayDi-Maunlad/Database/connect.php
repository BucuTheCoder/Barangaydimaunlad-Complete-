<?php

	//connect to database
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = 'barangay_data';
	
	$connection = mysqli_connect($host, $user, $password, $database);
	
	if(mysqli_connect_error()){
		echo 'something went wrong'; 
	}
?>