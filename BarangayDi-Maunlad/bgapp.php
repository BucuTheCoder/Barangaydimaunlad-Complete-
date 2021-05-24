<?php 
	include('Database/results.php');
 ?>

<!----Author/s: 
BRYAN JOSHUA BUCU 
GERARD BERNAL
JEREMIAH SARMIENTO ---->


<!DOCTYPE html>
<html lang=en>
<head>
	<title> BGAPP </title>
	<link rel="stylesheet" href="style/graph_style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="admin/filter.js"></script>
</head>

<body>

<a id="goback" href="/index.php">Go back to Home</a>
<div class="graphic">
		<h1 title="infograph"> BRGY. DI-MAUNLAD <span>INFOGRAPH</span> </h1> 
		<h2 title="title-info"> See Our Neighborhood </h2>
			<select id="mySelect" name="value" onchange="myfilter()">
    			<option value="All">All Purok</option>
				<option value="Purok 1">Purok 1</option>
    			<option value="Purok 2">Purok 2</option>
    			<option value="Purok 3">Purok 3</option>
			</select>
	<div id="border">
			<h3> TOTAL NUMBER OF CHILDREN, TEENAGERS, ADULT AND SENIOR CITIZEN IN THE COMMUNITY </h3>
			
			<div class=display>
				<div class= "column">
				<img src="style/graphicons/child-icon.png" width="250px" height="250px">
				</div>
				
				
				<div class="column"> 
				<img src="style/graphicons/teens-icon.png" width="200px" height="200px" />
				</div>
				

				<div class="column"> 
				<img src="style/graphicons/adult-icon.png" height="200px" width="200px" />
				</div>

				<div class="column">
				<img src="style/graphicons/elderly-icon.png" height="200px" width="200px" />
				</div>
			</div> <!--end of icon--->

			<!---BOX--->
			<div class=display>
				<div class="column">
					<div class="box2">
						<h3>Number of Children</h3>
							<p id="all-children"><?php children();?></p> 
							<p id="childrenP1"><?php childrenP1();?></p>
							<p id="childrenP2"><?php childrenP2();?></p>
							<p id="childrenP3"><?php childrenP3();?></p>
					</div>
				</div>

				<div class="column">
					<div class="box2">
						<h3>Number of Teenagers</h3>
							<p id="all-teenagers"><?php teenagers();?></p>
							<p id="teenagersP1"><?php teenagersP1();?></p>
							<p id="teenagersP2"><?php teenagersP2();?></p>
							<p id="teenagersP3"><?php teenagersP3();?></p>
					</div>
				</div>
				

				<div class="column">
					<div class="box2">
						<h3>Number of Adults</h3>
						<p id="all-adults"><?php adults();?></p>
						<p id="adultsP1"><?php adultsP1();?></p>
						<p id="adultsP2"><?php adultsP2();?></p>
						<p id="adultsP3"><?php adultsP3();?></p>
					</div>
				</div>

				<div class="column">
					<div class="box2">
						<h3>Number of Seniors</h3>
						<p id="all-seniors"><?php seniors();?></p>
						<p id="seniorsP1"><?php seniorsP1();?></p>
						<p id="seniorsP2"><?php seniorsP2();?></p>
						<p id="seniorsP3"><?php seniorsP3();?></p>
					</div>
				</div>
			
			</div> <!---END OF DISPLAY--->


			<div class="display">
				<img id="bIcon" src="style/graphicons/boarder.png">
				<p class="text">TOTAL NUMBER OF RESIDENTS  <br>
					<span id="all-residents"><?php residents();?></span>
					<span id="residentsP1"><?php residentsP1();?></span>
					<span id="residentsP2"><?php residentsP2();?></span>
					<span id="residentsP3"><?php residentsP3();?></span>
				</p>


		   		<img id="bIcon" src="style/graphicons/boarder.png">		
		   		<p class="text">THE TOTAL NUMBER OF BOARDERS  <br>
		   	        <span id="all-boarders"><?php boarders();?></span>
		   	        <span id="boardersP1"><?php boardersP1();?></span>
					<span id="boardersP2"><?php boardersP2();?></span>
					<span id="boardersP3"><?php boardersP3();?></span>



		   	    </p>
		  	</div>
			
			<h2> TOTAL NUMBER OF MALE AND FEMALE  </h2>

			<div class="display">
				<img id="male" src="style/graphicons/male.png">
				<p class="text"> THE TOTAL NUMBER OF MALE<br>
					<span id= "all-male"><?php male();?></span>
					<span id= "maleP1"><?php maleP1();?></span>
					<span id= "maleP2"><?php maleP2();?></span>
					<span id= "maleP3"><?php maleP3();?></span>
				</p>


		   		<img id="female" src="style/graphicons/female.png">		
		   		<p class="text">THE TOTAL NUMBER OF FEMALE <br>
		   	        <span id= "all-female"><?php female();?></span>
					<span id= "femaleP1"><?php femaleP1();?></span>
					<span id= "femaleP2"><?php femaleP2();?></span>
					<span id= "femaleP3"><?php femaleP3();?></span>
		   	    </p>
		  	</div>


		  	<p title="greetings"> KEEP SAFE! AND GOD BLESS! </p>
	</div>
</div>
</body>
</html>