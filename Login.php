<?php
	include_once 'connection_db.php' ;
	session_start();
?>
<html>
	<head>
		<title> Login </title>
		<link href="websiterules.css"  rel="stylesheet"/>
		<link href="hover_img.css" rel="stylesheet"/>
		<style>
			input
			{
				width:120%;
			}
		</style>
	</head>
	<body>
		<div id="header">
			<img style="margin-left:3%;" src="Asra_logo.gif" alt="Image not available" height="180%" width="22%" />
		</div>
		<div id="navigation" style="font-family:font-family:Franklin Gothic Demi Cond, Times New Roman;"><br>
				<a href="index.php" >Home</a>
				<a href="About_Us.php" >About Us</a>
				<a href="Contact_Us.php" >Contact Us</a>
				<a href="Locate_Us.php" >Locate Us</a>	
				<a style="background-color:rgb(158,221,224);color:black;" href="Login.php" >Login</a>
				<a href="Sign_Up.php" >Sign Up</a>	
		</div><br><br><br><br>
		<div id="container" style="height:50%;"><br>
			<form name="Login" id="f1" action="Login_check.php" method="GET">
				<h1 style=text-align:center>Login</h1>
					<table style="margin-left:13%;" cellspacing=35 cellpadding=12>
						<tr>
							<td>User Name : </td>
							<td><input type="text" name="user_name" /></td>
							<td>Password : </td>
							<td><input type="password" name="passWord"/></td>
						</tr>
					</table><br>		
					<input class="submit" id="xx" type="submit" name="Submit"/>	
			</form>						
		</div><br>
		<div id="footer">
			Copywright 2019 All Rights Reserved.
		</div>
		<script>
			var btnn = document.getElementById('xx');
			var formname = document.getElementById('f1');
			btnn.onclick = function (e) {
            
				return formValidation(formname);
			};
			
			function formValidation(f1)
			{
				var result;
				var user_nam = f1.user_name;
				var password = f1.passWord;
				
				//4 user name 
				result = (nonEmpty(user_nam.value));
				if (result == 1)
				{
					if (!alphanumeric(user_nam))
					{		
						alert('Username can contain only Alphabets,Period(.) and Numbers');	
						return false;
					}
				}	
				else
				{
					alert('User Name cannot be left empty');
					return false;
				}
				
				//4 password
				result = (nonEmpty(password.value));
				if (result == 1)
				{
					if (!alphanumeric(password))
					{	
						alert('Password can contain only Alphabets,Period(.) and Numbers');	
						return false;
					}
				}	
				else
				{
					alert('Password cannot be left empty');
					return false;
				}
				
				return true;
			}
			
			function nonEmpty(name)
			{
				var length = name.length;
				if (length == 0 )
				{
					return false;
				}
				else
				{
					return true;
				}	
			}
					
			function alphanumeric(data)
			{
				var lett_all = /^[A-za-z0-9\.]+$/;
				if(data.value.match(lett_all))
				{
					return true;
				}
				else
				{
					return false;
				}								
			}			
		</script>
	</body>
</html>
