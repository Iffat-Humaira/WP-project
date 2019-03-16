<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
	<head>
		<title> My Account </title>
		<link href="websiterules.css" rel="stylesheet"/>
		<link href="hover_img.css" rel="stylesheet"/>
		<style>
			a:hover
			{
				text-align:center;
				text-decoration:underline;
				color:black;
				background-color:rgb(73,190,197);
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
				<a class="changing" style="background-color:rgb(158,221,224);color:black;" href="My_Account.php" >My Account</a>
				<a class="changing" href="Services.php" >Services</a>
				<a class="changing"href="Logout.php" >Logout</a>	
			</div>	
		</div><br><br><br><br>
		<div id="container" style="height:55%;"><br>
			<h1 style="margin-left:5%;font-size:220%;color:black;" >Hii <span style=color:white;> <?php echo $username ?>,</span> </h1>
			<p style="margin-left:5%;font-size:180%;">Your Service Requests: </p>
			<?php
				$flag = 0;
				for($var = 1;$var < 3 ;$var++)
				{
					if($var == 1)	
					{
						$formname = "Doemestic Tour Packages";
						$usr_req = mysqli_query($conn,"SELECT * FROM doem_tour_pack WHERE user_name = '$username'");
					}
					else
					{	
						$formname = "International Bus Ticket";
						$usr_req = mysqli_query($conn,"SELECT * FROM inter_bus_tick WHERE user_name = '$username'");
					}	
					if (mysqli_num_rows($usr_req) > 0)
					{
						$flag++;
						echo "<table style=\"font-size:130%;margin-left:10%;\" cellspacing = 5;>
								<tr>
									<td> Form Name : </td>
									<td><span style=color:white;>".$formname. "</span></td>
								</tr>
								<tr>	
									<td> Status : </td>
									<td><span style=color:white;>Processing </span></td>
								</tr>
							</table><br>";
					}
				}	
				if ($flag == 0)
				{
					echo "<span style=\"margin-left:10%;font-size:160%;color:white;\">No forms submitted yet!!</span>";
				}
						
			?>
			<div style="margin-left:53%;font-size:150%;margin-top:-14%;">
				Click on the link below to Update your Profile <a style="padding:0px;" href="UpdateProfile.php" ><br>Update Profile</a><br><br><br>
				Click on the link below to Delete your Profile <a style="padding:0px;" href="DeleteProfile.php" ><br>Delete Profile</a>
			</div>	
		</div><br>
		<div id="footer">
			Copywright 2019 All Rights Reserved.
		</div>
	</body>
</html>
