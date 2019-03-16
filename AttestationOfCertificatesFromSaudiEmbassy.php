<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
	<head>
		<title> Attestation Of Certificates From Saudi Embassy </title>
		<link href="websiterules.css"  rel="stylesheet"/>
		<link href="hover_img.css" rel="stylesheet"/>
		<style>		
			b,h1
			{
				color:black;
			}
			h2
			{
				color:rgb(0,35,140);
			}
			body
			{
				font-weight:normal;
			}
		</style>
	</head>
	<body style="color:white;">
		<div id="header">
			<img style="margin-left:3%;" src="Asra_logo.gif" alt="Image not available" height="180%" width="22%" />
		</div>
		<div id="navigation" style="font-family:font-family:Franklin Gothic Demi Cond, Times New Roman;"><br>
			<div style="float:right;line-height:95%;">
				<a href="My_Account.php" >My Account</a>
				<a href="Services.php" >Services</a>
				<a href="Logout.php" >Logout</a>	
			</div>	
		</div><br><br><br><br>
				<h1 style="float:right;margin-right:3.5%;margin-top:-12%;margin-left:5%;font-size:220%;" >Hii <span style=color:white;> <?php echo $username ?>,</span> </h1>
		<div id="container" style="height:85%;font-size:125%;"><br>
			<h1 style="margin-left:5%;color:black;" class="central_textalign"> Attestation Of Certificates From Saudi Embassy </h1>
			<h2 style="margin-left:5%;">Documents to be submitted for Certificate Attestation From Saudi Embassy: </h2>
			<ol style="margin-left:5%;">
				<li><b>Original</b> Offer letter attested by Chamber Of Commerce And Ministry Of Foreign Affairs From Saudi.
				<li>Email Address of the candidate.
				<li>Mobile number of the candidate.
				<li>One photograph of the candidate.
				<li>Passport <b>Copy</b> of the candidate.
				<li><b>Original</b> Degree attested by Human Resource Department(HRD).
				<li>Mark list <b>Copy</b>.
				<li>Pan Card or Aadhar Card <b>Copy</b> of the candidate.
				<li>Need VISA <b>Copy</b> or wakala and Email Address of Saudi company.
				<li>If working in Kingdom Of Saudi Arabia (KSA), Color Iqama <b>Copy</b>, Saudi contact number and Saudi company Email Address.
				<li>If working in Kingdom Of Saudi Arabia (KSA),need<b> Original</b>  Bonafide letter.This letter should be attested from Chamber Of Commerce, Saudi Arabia.
				<li>College name and Address with Phone Number.
				<li>Rs.20/- Stamp Paper (BLANK).
				<li>Transfer Certificate <b>Copy</b>.	
			</ol>
		</div><br>	
		<div id="footer">
				Copywright 2019 All Rights Reserved.
		</div>
	</body>
</html>