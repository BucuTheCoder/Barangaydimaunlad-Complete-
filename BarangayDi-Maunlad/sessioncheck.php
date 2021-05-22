<?php
	session_start();

	if($_SESSION['loggedIn'] == 'false' || empty($_SESSION['loggedIn'])){
    //default value for session
    	$_SESSION['loggedIn'] = 'false';
    //redirect to login page
  echo "<script> window.location='login.php'</script>";
}	

?>