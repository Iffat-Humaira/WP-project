<?php
	include_once 'connection_db.php' ;
	session_start();
	
?>
<html>
	<head>
		<title> Sign Up </title>
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
				<a href="Login.php" >Login</a>
				<a style="background-color:rgb(158,221,224);color:black;" href="Sign_Up.php" >Sign Up</a>	
		</div><br><br><br><br>
		<div id="container" style="height:80%;"><br>
			<form name="SignUp" id="f1" action="Signup_check.php" method="GET">
				<h1 style=text-align:center>Sign Up</h1>
				<table style="margin-left:13%;" cellspacing=35 cellpadding=12>
					<tr>
						<td>First Name : </td>
						<td><input type="text" name="f_name" /></td>
						<td>Last Name : </td>
						<td><input type="text" name="l_name" /></td>
					</tr>
					<tr>
						<td>Email Id : </td>
						<td><input type="email" name="user_mail" /></td>
						<td>Contact Number : </td>
						<td><input type="number" name="num" /></td>
					</tr>
					<tr>
						<td>User Name : </td>
						<td><input type="text" name="usr_name" /></td>
						<td>Password : </td>
						<td><input type="password" name="passWord"/></td>
					</tr>
				</table><br>		
				<input class="submit" id="xx" type="submit" value="Sign Up"/>	
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
				var first_name = f1.f_name;
				var last_name = f1.l_name;
				var mail = f1.user_mail;
				var con_num = f1.num;
				var user_name = f1.usr_name;
				var password = f1.passWord;
				
				//for first name
				result = (nonEmpty(first_name.value));
				if(result == 1)
				{
					if (!allLetters(first_name))
					{
						alert('Names can contain only Alphabets,Blank space and Period(.)');	
						return false;
					}
				}	
				else 
				{
					alert('First Name cannot be left empty');
					return false;
				}
			
				//for last name
				result = (nonEmpty(last_name.value));
				if(result == 1)
				{
					if (!allLetters(last_name))
					{
						alert('Names can contain only Alphabets,Blank space and Period(.)');	
						return false;
					}
				}	
				else 
				{
					alert('Last Name cannot be left empty');
					return false;
				}
	
				//for mail
				result = (nonEmpty(mail.value));
				if (result == 1)
				{
					if (!mailFormat(mail))
					{			
						return false;
					}
				}	
				else
				{
					alert('Email Id cannot be left empty');
					return false;
				}

				//for contact number
				result = (nonEmpty(con_num.value));
				if(result == 0)	
				{	
					alert('Contact number must be specified');
					return false;
				}
				else
				{
					if((size_of_contact(con_num.value)) == 0)
					{
						return false;
					}
				}
				
				//4 user name 
				result = (nonEmpty(user_name.value));
				if (result == 1)
				{
					if (!alphanumeric(user_name))
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
					
			function mailFormat(mail)	
			{
				var mFormat = /^([a-zA-Z0-9\.-]+)@([A-Za-z0-9-]+)\.([a-z]{2,3})(.[a-z]{2,3})?$/;
				if(mail.value.match(mFormat))
				{
					return true;
				}
				else
				{
					alert('Invalid Email pattern');	
					return false;
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
			
			function allLetters(name)
			{
				var letters = /^[A-Za-z\s\.]+$/;
				if(name.value.match(letters))
				{
					return true;
				}
				else
				{
					return false;
				}								
			}			
			
			function size_of_contact(con_number)
			{
				if(((con_number.length) == 8) || ((con_number.length) == 10))
				{
					return true;
				}
				else
				{
					alert('Enter a valid contact number');
					return false;
				}
			}

		
		</script>
	</body>
</html>
