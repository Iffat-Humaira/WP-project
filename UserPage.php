<?php
	include_once 'connection_db.php' ;
	session_start();
	

		$username = $_SESSION["uname"];
		
?>
<html>
	<head>
		<title> Hi! User </title>
		<link href="websiterules.css" rel="stylesheet"/>
		<link href="hover_img.css" rel="stylesheet"/>
	</head>
	<body>
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
		<div id="container" style="height:60%;"><br>
			<h1 style="margin-left:5%;font-size:220%;color:black;" >Hii <span style=color:white;> <?php echo $username ?>,</span> </h1>
			<ul style="list-style:none;font-size:130%;margin-left:9%;">
				<li>Thank You ! For Signing Up with Us and choosing us as your travel partner.
				<li>We will give you the best Travel memories you will cherish for life.
				<li>So go ahead and click on the <span style=color:white;> Services </span>option above and provide us with details
				<li>to make your Travel Experience an Absolute BLISS!!<br>
			</ul>
			<ul style="font-size:130%;margin-left:18%;">
				<li>Click on <span style=color:white;> My Account </span> to view your Account details.
				<li>Click on <span style=color:white;> Services </span> to submit the forms.
				<li>Click on <span style=color:white;> Logout </span> to logout from your Account.
			</ul>
			<span><img style="margin-left:73%;margin-top:-18%;" src="thank_you.png" alt="Image not available" height="95%" width="22%" /></span>
		</div><br>
		<div id="footer">
			Copywright 2019 All Rights Reserved.
		</div>
	</body>
</html>
