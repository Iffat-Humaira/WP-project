<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
	<head>
		<title> Documents required for United States Of America (USA) Visit VISA. </title>
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
		<div id="container" style="height:225%;font-size:125%;"><br>
			<h1 class="central_textalign" style="color:black;"> Documents required for United States Of America (USA) Visit VISA</h1>
			<h2 style="margin-left:5%;"> Documents required from the Applicant : </h2>
			<ol style="margin-left:5%;">
				<li><b>Original</b> Passport and all old passports (if any).
				<li>White background color photo of size<b> 50mm x 50mm</b>, 4 in number.
				<li>A <b>covering letter</b> from the applicant on plain paper or letterhead addressed to the <b>Visa Officer</b>,US Consulate, Chennai.<br>
					The contents should be as follows : 
					<ol>
						<li>Self &nbspIntroduction, with a request to issue the Visit Visa
						<li>Purpose of Visit
						<li>Period Of Visit
						<li>Name and passport number of his/her Spouse , who will bear the cost of the applicant's trip and other expenses.
						<li>Assuring to return back within the Visa period.
						<li>Assuring to carry sufficient foreign currency for all personal expenses of the applicant.					
					</ol>
				<li><b>Six month's</b> bank statement.
				<li> 3 years of IT papers
				<li>Proof of employment/ business/ pension dox if any
				<li>Monthly income and brief descripition of the applicant's job if employed or doing business
				<li>Fixed Deposit Receipts (if any)
				<li>Financial Net worth statement from the auditors.
			</ol>	
			<h2 style="margin-left:5%;"> Documents required from your Relation or Sponsorer or Invite are :</h2>
			<ol style="margin-left:5%;">
				<li><b>Passport copies </b>of all pages - If US Citizen then only photo page
				<li>Invitation letter
				<li>Address Proof - Rental agreement, Residence, Landline, Mobile number and Email ID
				<li><b>Six month's</b> bank statement.
				<li>Pay Slip of three months.
				<li>IT Papes of three years if any
				<li>Employment Proof with Address, Contact details like Landline, Mobile number and Email ID
			</ol>	
			<h2 style="margin-left:5%;"> Apart from the above we require the following information to upload in the system for taking US Visa Appointment for the applicant:</h2>
			<ol style="margin-left:5%;">
				<li><b>Applicant's parent's surname</b>, given name, date of birth (if known) , where they are now. 
				<li>Applicant's <b>present</b> complete Address, Email ID, Contact number, Office number, Residence number. 
				<li>Any of the applicant's blood relatives presently in US with their Visa Status
				<li>Complete Address where the applicant's will stay in US with the <b>inviting person's </b>
					<ul>
						<li>Passport copies
						<li>Visa copy,
						<li>Email ID
						<li>Mobile number
						<li>Office name
						<li>Office number
						<li>Residence number
					</ul>	
				<li>Applicant's educational qualification after Higher Seondary level, with name of college, degree and year of study
				<li>Any other information if required  will be asked
					<ol>
						<li>Purpose of visit to USA
						<li>Period of stay required
						<li>Places visiting in USA
						<li>Who will bear the cost of the applicant's trip.				
					</ol>
			</ol>	
		</div><br>	
		<div id="footer">
				Copywright 2019 All Rights Reserved.
		</div>
	</body>
</html>