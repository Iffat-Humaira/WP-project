<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
	<head>
		<title> Services </title>
		<link href="websiterules.css"  rel="stylesheet"/>
		<style>
			img.change:hover 
			{
				opacity:0.5;
			}
			a.changing:hover
			{
				text-align:center;
				text-decoration:underline;
				color:black;
				background-color:rgb(158,221,224);
			}
		</style>
	</head>
	<body>
		<div id="header">
			<img style="margin-left:3%;" src="Asra_logo.gif" alt="Image not available" height="180%" width="22%" />
		</div>
		<div id="navigation" style="font-family:font-family:Franklin Gothic Demi Cond, Times New Roman;"><br>
			<div style="float:right;line-height:95%;">
				<a class="changing" href="My_Account.php" >My Account</a>
				<a class="changing" style="background-color:rgb(158,221,224);color:black;" href="Services.php" >Services</a>
				<a class="changing"href="Logout.php" >Logout</a>	
			</div>	
		</div><br><br><br><br>
		<h1 style="float:right;margin-right:3.5%;margin-top:-12%;margin-left:5%;font-size:220%;" >Hii <span style=color:white;> <?php echo $username ?>,</span> </h1>
		<div id="container" style="height:380%;"><br>
			<h1 style="color:black;margin-left:4%">We assist in the processing of all travel related services: </h1>
			<h2 style="color:rgb(0,35,140);margin-left:4%;">Domestic</h2>
			<a href="DomesticTourPackages.php">
				<img class="change" style="margin-left:4%;float:left;" src="india.png" alt="Image not available" height="14.2%" width="22%"/>
			</a>
			<a href="DomesticAirTickets.php" >	
				<img class="change" style="margin-left:-6%;" src="indigo.png" alt="Image not available" height="14.2%" width="22%"/>
			</a>
			<a href="DomesticTrainTickets.php" >	
				<img class="change" style="margin-left:-4%;" src="doem_train.png" alt="Image not available" height="14.2%" width="22%"/>
			</a>
			<a href="DomesticBusTickets.php" >	
				<img class="change" style="margin-left:-4%;" src="doem_bus.png" alt="Image not available" height="14.2%" width="22%"/>
			</a><br><br>
			<p style="color:white;font-weight:normal;font-size:143.75%;margin-left:9%;"> Tour Packages &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Air Tickets &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Train Tickets &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Bus Tickets</p><br>
			
			
			<h2 style="color:rgb(0,35,140);margin-left:4%;">International</h2>
			<a href="InternationalTourPackages.php">
				<img class="change" style="margin-left:4%;float:left;" src="inter.png" alt="Image not available" height="14.2%" width="22%" />
			</a>
			<a  href="InternationalAirTickets.php" >	
				<img class="change" style="margin-left:-6%;" src="qatar.png" alt="Image not available" height="14.2%" width="22%" />
			</a>
			<a href="InternationalTrainTickets.php" >	
				<img class="change" style="margin-left:-4%;" src="inter_train.png" alt="Image not available" height="14.2%" width="22%"/>
			</a>
			<a href="InternationalBusTickets.php" >	
				<img class="change" style="margin-left:-4%;" src="inter_bus.png" alt="Image not available" height="14.2%" width="22%" />
			</a><br><br>
			<p style="color:white;font-weight:normal;font-size:143.75%;margin-left:9%;"> Tour Packages &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Air Tickets &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Train Tickets &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Bus Tickets</p><br>
			
			
			<h2 style="color:rgb(0,35,140);margin-left:4%;" >Visit Visas <span style=margin-left:43.5%;>  Forms </span> </h2>
			<a href="DocumentsRequiredForUnitedStatesOfAmerica(USA)VisitVISA.php">
				<img class="change" style="margin-left:4%;float:left;" src="usa_visit.png" alt="Image not available" height="14.2%" width="22%" />
			</a>
			<a  href="SingaporeVisaCheckList.php" >	
				<img class="change" style="margin-left:-6%;" src="singapore.png" alt="Image not available" height="14.2%" width="22%" />
			</a>
			<a href="PassportForm.php" >	
				<img class="change" style="margin-left:-4%;" src="indian_pass.png" alt="Image not available" height="14.2%" width="22%"/>
			</a>
			<a href="EmploymentForm.php" >	
				<img class="change" style="margin-left:-4%;" src="emp.png" alt="Image not available" height="14.2%" width="22%"/>
			</a><br><br>
			<p style="margin-left:6%;font-weight:normal;color:white;font-size:143.75%;"> United States Of America &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Singapore &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Passport &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Employment </p><br>
			<p style="text-align:center;font-weight:normal;margin-left:%;color:rgb(128,0,0);font-size:137.5%;"><b>Note: For the visit visas of other countries and other forms, Kindly contact us at our office.</b></p><br>
			
		
			<h2 style="margin-left:4%;color:rgb(0,35,140);">Certificate Attestation <span style=margin-left:18%;>Our Services</span></h2>
			<a href="AttestationOfCertificatesFromSaudiEmbassy.php" >
				<img class="change" style="margin-left:4%;margin-top:1%;float:left;" src="saudi_emb.png" alt="Image not available" height="14.2%" width="22%"/><br><br>
			</a>
			<ul style="color:white;font-weight:normal;margin-left:43%;margin-top:-0%;font-size:180%;">
				<li>Employment Visas
				<li>Emigration Check Not Required (ECNR) Stamping
				<li>Haj, Umra & Ziyarat Tours 
				<li>Hotel Reservation & Car Rentals
				<li>Overseas Medical Policies
				<li>Travel Currency Debit Card
				<li>International Sim Card
				<li>Western Union & Ria Money
				<li>Money Gram & Express Money
			</ul>
			<p style="color:white;font-weight:normal;font-size:143.75%;margin-left:9.5%;"><br> Saudi Embassy</p><br>
			<p style="text-align:center;color:rgb(128,0,0);font-size:137.5%;"><b>Note: For any other certificate attestations and the above mentioned services, Kindly contact us at our office.</b></p><br>
		</div><br>
		<div id="footer">
				Copywright 2019 All Rights Reserved.
		</div>
	</body>
</html>