<?php
	require_once('./sessioncheck.php');	
?>

<!DOCTYPE html>
<html Lang="en">
	<head> 
		<title> Barangay Di-Maunlad - About </title>
		<link rel="stylesheet" href="style/icon/all.min.css">
		<link rel="stylesheet" href="style/icon/fontawesome.min.css">
		<link rel="stylesheet" href="style/style.css">
		<meta charset="UTF-8">
		<meta name="authors" content="co-authored by Bernal Gerard, Bucu Bryan Joshua, Catacutan Francis">
		<meta name="description" content= "Barangay Di-Maunlad About">
		<meta name="viewport" content="width=device-width">
	<style>
		
		h1 {
		text-align: center;
		color:black;
			}
	</style>
	</head>
	
	<body>
	
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
  						<li><a href="contact.php">Contact</a></li>
  						<li><a class="active" href="about.php">About</a></li>
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


<h1> ABOUT </h1>

<div class="wrapper">
<article>
<h2> Barangay History </h2>
<p title="start">The name of the barangay Di-maunlad came from the words “Hindi maunlad” which means “not progressive” because the place was very poor and not prosperous. </p>
<p title="start">
The barangay was very prosperous back then because they have so many resources for their everyday lives. 
Their land is rich in nutrients where they can cultivate and grow plants and they also have plenty of animals where they can get their food everyday. 
The barangay lived a peaceful life until the Americans came and discovered the place.
</p>
<p title="start">
These American soldiers led by Douglas D. Maunland forced the residents of the barangay to surrender their resources and threatened their lives if they didn’t comply.
 The residents didn’t have any choice but to agree to their requests. The soldiers took over the place and made the residents their slaves. 
 Because of this, the residents didn’t have the time to cultivate their land and take care of their animals until one day  their resources were almost none. 
 The residents said “di na maunlad ang lugar na to” which means “this place is not prosperous anymore” and eventually named the place Barangay Di-Maunlad.
</p>
<p title="start">
However, one day, the residents got their place back by stealing the soldiers’ weapons and used them to make the soldiers leave the place. 
It took the residents years to regain their resources and made Barangay Di-Maunlad prosperous once again.
</p>
</article>

<br />
<article>

<h2> Barangay Location </h2>
	<p title="start">
		The Barangay Di-Maunlad is located in the Municipality of Magalang in the province of Pampanga, Central Luzon Philippines.
		The Municipality of Magalang has eight adjacent Barangay. These are the following adjacent barangay:
	</p>
	<br />
			<p> 1. La Paz, Magalang Pampanga </p>
			<p> 2. San Isidro, Magalang Pampanga </p>
			<p> 3. San Pedro I, Magalang Pampanga </p>
			<p> 4. San Miguel, Magalang Pampanga </p>
			<p> 5. San Antonio, Magalang Pampanga </p>
			<p> 6. Ayala, Magalang Pampanga </p>
			<p> 7. Santa Lucia, Magalang Pampanga <p>
			<p> 8. Di-Maunlad, Magalang Pampanga <p>
</article>			
</div>

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