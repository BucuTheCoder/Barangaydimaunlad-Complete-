<?php
	include_once('validatelogin.php');
?>
<!DOCTYPE html>
<html>
	<head>	
		<title> Login Page </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/style.css">  
		<link rel="stylesheet" href="style/login.css">
	</head>

	<header>
				<div class="logbanner">
					<img src="style/img/indexbanner.jpg" alt="banner" width="100%" height="150px">
				</div>
	</header>

	<body>
			<h1 class="end"> Barangay Di-Maunlad Portal </h1>
				<div class="section">
					<div class="left">
					 	<div class= "messagelog">
					 	<h1> Welcome <br> <span>Ka-Barangay</span> </h1>
						<p> login to our page to view information in our community </p>
					 </div>
					</div>

					<div class="right">
						<div class="login_Content">
							<form method="POST" action="validatelogin.php"> 
								<h1> User Login </h1>
								<div class="input">
						 		<label>Username</label>
								<input type="text" name="uname" placeholder="Enter Username"> 
								<label>Password</b></label>
                				<input type="password" name="password" placeholder="Enter Password">
						</div>
							<button type="submit" name="login">Login</button> 
							</form>
					</div>
			</div>
	</div>
		
</body>


	<!--FOOTER-->
<footer>
<div class="page-container">
  <div class="footer-content">
  
	<div class="footer-section details">
	<img class="footlogo" src= "style/img/logo.png" alt="logo" width= "100px" height="100px">
		<div class="textstyle">
	<h5>Municipality of Magalang, Pampanga </h5>
		</div>
    </div>
	
	<div class="footer-section links">
		<h3> DISCLAIMER </h3>
		<p class="message"> 
		All the information and media that was used on this website are fictional and published in good faith and for educational purposes only and no copyright intended.
		</p>
    </div> 
  
  <div class="footer-section social">
	<h3> STAY CONNECTED </h3>
	<p class="message"> Follow Our Social Media Accounts </p>
		
		<!--icons-->
		<div class="social-menu">
	   <a target='_blank' href="https://www.facebook.com/Barangay-Di-Maunlad-101057428687688"><i class="fab fa-facebook"></i></a> 
	   <a target='_blank' href="https://twitter.com/BMaunlad"><i class="fab fa-twitter"></i></a> 
			
		</div>
		<!--//icons-->
  </div>
	
 </div>
  
  <div class="footer-copyrights">
	Copyright &copy 2021 Barangay Di-Maunlad Official | Designed by Bernal, Gerard - Bucu, Bryan - Francis, Catacutan 
  </div>
  </div>
 </footer>
 <!--//FOOTER-->
</html>