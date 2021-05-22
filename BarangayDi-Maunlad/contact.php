<?php
	require_once('./sessioncheck.php');	
?>

<!DOCTYPE html>
<html Lang="en">
	<head> 
		<title> Barangay Di-Maunlad - Contact </title>
		<link rel="stylesheet" href="style/icon/all.min.css">
		<link rel="stylesheet" href="style/icon/fontawesome.min.css">
		<link rel="stylesheet" href="style/style.css">
		<meta charset="UTF-8">
		<meta name="authors" content="co-authored by Bernal Gerard, Bucu Bryan Joshua, Catacutan Francis">
		<meta name="description" content= "Barangay Di-Maunlad Contact">
		<meta name="viewport" content="width=device-width">

	<style>
		h1 {
			text-align: center;
			color:black;
			}

	</style>
</head>


	<div class="container">
				
				
				<nav>
					<div id="logo"><img src= "style/img/logo.png" width= "60px" height="60px">		
					</div>

					<input type="checkbox" id="check">
						<label for ="check">
							<li id="icon"><i class="fas fa-bars"></i></li>	
						</label>

					<ul>
  						<li><a href="index.php">Home</a></li>
  						<li><a href="news.php">News</a></li>
  						<li><a class="active" href="contact.html">Contact</a></li>
  						<li><a href="about.php">About</a></li>
  						<li><a href="bgapp.php">Inforgaph</a></li>
  						

  						 <li>
            			  <form id="logout" action="logout.php" method="POST">
            				<?php echo $_SESSION['username'];?>
            					<input type="submit" value="logout" /> 
           				 </form>
            			</li>
					</ul>
				</nav>
	</div>
	
	<div class="wrapper">
		<div id=banner> <img src="style/img/contactbanner.jpg" alt="banner" width=100%; height="200px"></div>
	</div>
<h1> Contact </h1>
<div class= "container">
<div class="wrapper">
<h2> How Can We Help? </h2>
<p class="subtitle" title="start"> For inquiries please contact us from the following contact addresses below </p>
<br /> 
<p> Email: brgydimaunlad@gmail.com </p>
<p> Contact No: 508 2084 / 892 5176 / 0907 6549886 </p>
<p> Address: #0234 Di-Maunlad Purok 4, Magalang Pampanga </p>
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
	   		<a href="https://www.facebook.com/Barangay-Di-Maunlad-101057428687688"><i class="fab fa-facebook"></i></a> 
	   		<a href="https://twitter.com/BMaunlad"><i class="fab fa-twitter"></i></a> 
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