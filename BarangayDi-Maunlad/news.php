<?php
	require_once('./sessioncheck.php');	
?>
<!DOCTYPE html>
<html Lang="en">
<head> 
<title> News & Update </title>
<link rel="stylesheet" href="style/icon/all.min.css">
<link rel="stylesheet" href="style/icon/fontawesome.min.css">
<link rel="stylesheet" href="style/style.css">
<meta charset="UTF-8">
<meta name="authors" content="co-authored by Bernal Gerard, Bucu Bryan Joshua, Catacutan Francis">
<meta name="description" content= "Barangay Di-Maunlad News/Event/Update">
<meta name="viewport" content="width=device-width">

<style>
h1 {
text-align: center;
font-family: Helvetica;
color:red;
}

.news-box{
	border-style: solid;
	border-radius: 10px;
	border-width: 1px;
	background-color: #F5F5F5;
}

.pdate{
	text-align:center;
	color: blue;
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
  						<li><a class="active" href="news.php">News</a></li>
  						<li><a href="contact.php">Contact</a></li>
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


<h1> News & Update </h1>
<div class="wrapper">
	<section id="news">
	<h3> Barangay Di-Maunlad COVID-19 Update </h3>
		<div class="news-box">
			<div class="text-wrapper">
				<p class="pdate"> February 4, 2021 </p>
				<p> As of February 4, 2021, 5:00PM, Barangay Di-Maunlad has 21 contacts (PUMs), and recorded 1 new positive case. </p>
				<h4> CONFIRMED CASE: </h4>
				<p title="start"> 
				BALANG, KANTIS C. [DM-C001] - 36 y/o male, store owner. Patient's travel history is from National Capital Region and
				exposed from high risk area and is symptomatic. Patient was immediately isolated and admitted to Southside General Hospital. 
				<p>
				<h4> CONTACTS: </h4>
				<p title="start">  
				The 21 contacts (PUMs) was quarantined at Barangay Di-Maunlad's Quarantine Facility. The contacts will be isolated for 14 days. Please be reminded to wear face masks and always practice social distancing. 
				</p>
				<br />
				<p title="end">Stay at Home. End Covid.</p>
				
			</div>
		</div>
		<br />
		
		<h3> Barangay Di-Maunlad COVID-19 Advisory </h3>
		<div class="news-box">
			<div class="text-wrapper">
				<p class="pdate"> February 4, 2021 </p>
				<h4> PUBLIC ADVISORY </h4>
				<p title="start"> Barangay Di-Maunlad is extending the Modified Extended Community Quarantine starting from February 5 until March 1, 2021.</p>
				<p title="start"> 
				Barangay Di-Maunlad has availed 5,000 doses of BucsTech coronavirus vaccine which is and authorized and recommended in preventing Covid-19. 
				The vaccine has 99% efficiency and no side effects. The vaccines will be available at the end of February 2021. 
				</p>
				<p title="start">
				While we are waiting for the vaccines, please be reminded to always wear face masks and practice social and physical distancing. 
				</p>
				
				<br />
				<p title="end"> Stay at home. End Covid. </p>
			</div>
		</div>
		
		<br />
		<h3> EXCESSIVE AND UNREASONABLE NOISE PROHIBITED </h3>
		<div class="news-box">
			<div class="text-wrapper">
			<p class="pdate"> January 30, 2021 </p>
			<p title="start"> From 8:00 AM to 10:00 PM, the operation of any of the following sound reproduction device is NOT ALLOWED in residential areas in such a manner
			that it is plainly audible or causes vibration at a distance of 25 feet from the device or the premise containing the device:
			<p title="start">
			Musical instruments, videoke machines, radio, television, tape recorder, compact disc or DVD player, loud speakers
			public address or other sound amplifying systems.
			</p>
			<p title="start">
			This is in support of the use of e-learning or the online platform as an alternative to traditional face-to-face classes
			by prohibiting loud distracting noises during online class schedules.
			</p>
		</div>
	</div>
</section>
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