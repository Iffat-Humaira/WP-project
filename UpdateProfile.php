<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
	
	$sql = "SELECT * FROM users WHERE user_name = '$username'";
	$rs = mysqli_query($conn,$sql);
	$row  = mysqli_fetch_array($rs);
    if(is_array($row)) 
	{
		$_SESSION["first_name"] = $row['first_name'];
		$_SESSION["last_name"] = $row['last_name'];
		$_SESSION["email"] = $row['user_mail'];
		$_SESSION["phno"] = $row['contact_num'];
		$_SESSION["pass"] = $row['passwd'];
		
		$fname = $_SESSION["first_name"];
		$lname = $_SESSION["last_name"];
		$mail = $_SESSION["email"];
		$num = $_SESSION["phno"];
		$pass = $_SESSION["pass"];
	}	
?>
<html>
	<head>
		<title>Update Profile</title>
		<link href="websiterules.css"  rel="stylesheet"/>
		<link href="hover_img.css" rel="stylesheet"/>
	</head>
	<body>
		<div id="header">
			<img style="margin-left:3%;" src="Asra_logo.gif" alt="Image not available" height="180%" width="22%" />
		</div>
		<div id="navigation" style="font-family:font-family:Franklin Gothic Demi Cond, Times New Roman;"><br>
			<div style="float:right;line-height:95%;">
				<a style="background-color:rgb(158,221,224);color:black;" href="My_Account.php" >My Account</a>
				<a href="Services.php" >Services</a>
				<a href="Logout.php" >Logout</a>	
			</div>	
		</div><br><br><br><br>
		<div id="container" style="height:64%;"><br>
			<h1 style=text-align:center>Update Profile</h1>
			<form id="f1" action="update_details.php" method="GET">
				<table style="margin-left:27%;">
					<tr>
						<td>First Name : </td>
						<td><input type="text" name="fir_nam" value="<?php echo htmlspecialchars($fname);?>" readonly ></td>
					</tr>
					<tr>
						<td>Last Name : </td>
						<td><input type="text" name="las_nam" value="<?php echo htmlspecialchars($lname);?>" readonly></td>
					</tr>
					<tr>
						<td>Email Id : </td>
						<td><input type="mail" name="mail" value="<?php echo htmlspecialchars($mail);?>"></td>
					</tr>
					<tr>
						<td>Contact Number : </td>
						<td><input type="number" name="con_num" value="<?php echo htmlspecialchars($num);?>"></td>
					</tr>
					<tr>
						<td>Username : </td>
						<td><input type="text" name="usr_name" value="<?php echo htmlspecialchars($username);?>" readonly></td>
					</tr>
					<tr>
						<td>Password : </td>
						<td><input type="text" name="pass" value="<?php echo htmlspecialchars($pass);?>"></td>
					</tr>
				</table><br><br>
				<input class="submit" id="xx" type="submit" name="Submit" value="Update"/><br><br>	
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
			var email = f1.mail;
			var num = f1.con_num;
			var userpass = f1.pass;
		
			//for mail
			result = (nonEmpty(email.value));
			if (result == 1)
			{
				if (!mailFormat(email))
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
			result = (nonEmpty(num.value));
			if(result == 0)	
			{	
				alert('Contact number must be specified');
				return false;
			}
			else
			{
				if((size_of_contact(num.value)) == 0)
				{
					return false;
				}
			}
					
		
			//4 password
			result = (nonEmpty(userpass.value));
			if (result == 1)
			{
				if (!alphanumeric(userpass))
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