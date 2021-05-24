<!---Created by Francis Catacutan--->

<?php
include('Database/signup_process.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/mainstyle.css">  
		<link rel="stylesheet" href="style/loginstyle.css">
</head>

<header>
				<div class="logbanner">
					<img src="style/img/indexbanner.jpg" alt="banner" width="100%" height="150px">
				</div>

				
					<input type="checkbox" id="check">
						<label for ="check">
							<li id="icon"><i class="fas fa-bars"></i></li>	
						</label>

	</header>

<body>
	<a id="goback" href="/login.php">Go back to Login</a>
	<form class="sign-content" action="Database/signup_process.php" method="POST">
    <div class="container">
      <div id="loglogo"><img src= "style/img/logo.png"></div>

      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter User Name" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
     
       <button type="submit" name="signup" class="signupbtn">Sign Up</button>
  </form>
</div>



</body>
</html>