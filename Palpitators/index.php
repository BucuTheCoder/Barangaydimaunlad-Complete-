<?php
	include('Database/sessioncheck.php');	
?>

<!DOCTYPE html>
<html Lang="en">
	<head> 
		<title> Barangay Di-Maunlad - Offcial Website of Municipality of Pampanga </title>
		<link rel="stylesheet" href="style/icon/all.min.css">
		<link rel="stylesheet" href="style/icon/fontawesome.min.css">
		<link rel="stylesheet" href="style/mainstyle.css"> 
		<meta charset="UTF-8">
		<meta name="description" content= "Barangay Di-Maunlad Web Page">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>
		h1 {
			text-align: center;
			color: black;
			}
	
	</style>
	</head>


<header>
				
				<nav>
					<div id="logo"><img src= "style/img/logo.png" width= "60px" height="60px">		
					</div>

					<input type="checkbox" id="check">
						<label for ="check">
							<li id="icon"><i class="fas fa-bars"></i></li>	
						</label>

					<ul>
  						<li><a class="active" href="index.php">Home</a></li>
  						<li><a href="news.php">News</a></li>
  						<li><a href="contact.php">Contact</a></li>
  						<li><a href="about.php">About</a></li>
  						<li><a href="bgapp.php">Infograph</a></li>
					</ul>

					 <form id="logout" action="Database/logout.php" method="POST">
            		<?php echo $_SESSION['username']?>
            		<input type="submit" value="logout" /> 
            		</form>

					

				</nav>

</header>

<body>
	
	

	<div class="container">
	<!--CONTENT-->
		<h1> BARANGAY DI-MAUNLAD </h1>
			<div id="banner">
				<img src="style/img/indexbanner.jpg" alt="banner">
			<div>
		<h1>OFFICIAL SEAL</h1>
		<div id="seal"><img src= "style/img/logo.png" alt="logo">
		</div>
	</div>


<div class="wrapper">
	<div class="container">
		<h2>MISSION</h2>
			<p title="start">
			To educate barangay constituents on good moral relationship towards people. 
			to encourage people to participate establish a self-reliant community. 
			To give people a safe environment, 
			To help our people to their needs
			to plan and give health education 
			to improve economic status, 
			to allocate more sources of income and people participation and empowerment.
			</p>

		<h2>VISION</h2>
			<p title="start">
			In 2030, Barangay Di-Maunlad envisions a healthy community, united barangay people, adaptive environment, 
			with adequate, functional and practical infrastructures within a business and 
			economic-friendly community where healthy values-oriented and empowered people live under a transparent, accountable and responsive governance.
			</p>
	

	<div class="border-box">
		<h2 class="title"> Barangay Officials </h2>
			<div class="text-wrapper">
				<div class="officials">
				<p> Barangay Captain: Gerard Bernal 
					<br />
					Email: bernal@gmail.com
					<br />
					Contact: 09132456125
				</p>
			
				<p>SANGGUNIANG BARANGAY MEMBER: Bryan Joshua Bucu
				<br />
				Email: bjbucu@gmail.com
				<br />
				Contact: 09261015027
				</p>
			
				<p>
					SANGGUNIANG BARANGAY MEMBER: Daniel Padilla
					<br />
					Email: danielpogi101@gmail.com
					<br />
					Contact: 09267892212
				</p>
			
				<p>
				SANGGUNIANG BARANGAY MEMBER: Robin Padilla
				<br />
				Email: robinhoodl@gmail.com
				<br />
				Contact: 09354418971
				</p>
			
			
				<p>
				BARANGAY SECRETARY: Francis Catacutan
				<br />	
				Email: franciscatsl@gmail.com
				<br />
				Contact: 09132456125
				</p>
			
				<p> 
				SK CHAIRPERSON: Angel Locsin
				<br />	
				Email: dingangbatodarna@gmail.com
				<br />
				Contact: 09261016023
				</p>
			</div>
			</div>
		</div>

	</div>
</div>
</div>
<!--//CONTENT-->
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

		<a id="linkadmin" href="/admin.php">Admin Page</a>
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