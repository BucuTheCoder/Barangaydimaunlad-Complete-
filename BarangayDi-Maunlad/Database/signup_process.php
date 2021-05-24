<?php
include __DIR__ . ('/connect.php');  

if(isset($_POST['signup'])){
	$username = $_POST['uname'];
	$password = $_POST['psw'];
	$repeat = $_POST['psw-repeat'];
	

	if($password != $repeat){
			echo "<script> alert('Password did not matched'); window.location='sign.php'; </script>";	
	}else{


	$sql = "INSERT INTO users (usertype, username, password) VALUES ('regular', '$username', '$password')";
	$result = mysqli_query($connection, $sql); 
	
	if($result){
		header("location: /login.php");
		exit();
	} else{
		echo "<script> alert('Something Went Wrong'); window.location='sign.php'; </script>";
		}
	}
}

?>