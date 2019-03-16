<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
	<head>
		<title>International Train Tickets</title>
		<link href="websiterules.css"  rel="stylesheet"/>
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
		<h1 style="float:right;margin-right:3.5%;margin-top:-12%;margin-left:5%;font-size:220%;" >Hii <span style=color:white;> <?php echo $username ?>,</span> </h1>
		<div id="container" style="height:143%;"><br>
			<h1 class="central_textalign">International Train Tickets</h1>
			<div style=margin:1% 1% 1% 1%;>
				<form name="International Train Tickets" id="f1">
					<table style="margin-left:5%;">		
						<tr>
							<td>Name : </td>
							<td><input style="margin-left:9.5%;" type="text" name="cus_name"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Email Id :</td>
							<td><input style="margin-left:5%;" type="text" name="cus_mail"></td>
						</tr>
						<tr>
							<td>Contact Numbers :</td>
							<td><span style="margin-left:-4.5%;"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1.&nbsp <input type="number" name="num_1"></td>
						</tr>
						<tr>
							<td></td>
							<td><span style="margin-left:-4.5%;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2.&nbsp <input type="number" name="num_2"></td>
						</tr>
						<tr>
							<td>From :</td>
							<td><input  style="margin-left:9.5%;" type="text" name="from"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Destination :</td>
							<td><input  style="margin-left:5%;" type="text" name="destination"></td>
						</tr>
						<tr>
							<td>Departure Date :</td>
							<td><input style="margin-left:9.5%;" type="date" name="depart1"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Return Date :</td>
							<td><input style="margin-left:5%;" type="date" name="return1"></td>
						</tr>
						<tr>
							<td>No. of passengers:</td>
							<td><input style="margin-left:9.5%;" type="number" name="n_pass" min=1 max=5></td>
						</tr>
					</table>
					<p style="margin-left:5%;">Details Of Passengers :</p>
					<p style="margin-left:5%;">Passenger 1 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list" type="text" name="pass1_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list" type="number" name="pass1_age" min="1" max="100">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass1_gender"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass1_gender">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass1_gender">Other</span></span><br>
					</p>
					<p style="margin-left:5%;">Passenger 2 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list" type="text" name="pass2_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list" type="number" name="pass2_age" min="1" max="100">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass2_gender"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass2_gender">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass2_gender">Other</span></span><br>
					</p>
					<p style="margin-left:5%;">Passenger 3 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list" type="text" name="pass3_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list" type="number" name="pass3_age" min="1" max="100">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass3_gender"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass3_gender">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass3_gender">Other</span></span><br>
					</p>
					<p style="margin-left:5%;">Passenger 4 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list" type="text" name="pass4_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list" type="number" name="pass4_age" min="1" max="100">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass4_gender"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass4_gender">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass4_gender">Other</span></span><br>
					</p>	
					<p style="margin-left:5%;">Passenger 5 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list" type="text" name="pass5_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list" type="number" name="pass5_age" min="1" max="100">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass5_gender"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass5_gender">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass5_gender">Other</span></span><br>
					</p><br>
					<p style="margin-left:5%;"> Class : 
													<select style="width:18.7%;margin-left:9.8%" name="Class"><br>
														<option value="Any Class">Any Class
														<option value="Second Class">Second Class
														<option value="First Class">First Class
													</select>
					</p><br><br>					
					<input class="submit" id="xx" type="submit" name="Submit"/><br><br>	
				</form>
			</div>
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
			var pname = f1.cus_name;
			var mail = f1.cus_mail;
			var num1 = f1.num_1;
			var num2 = f1.num_2;
			var ori = f1.from;
			var dest = f1.destination;
			var dep_date = f1.depart1;
			var ret_date = f1.return1;
			var no = f1.n_pass;
		
			var passName_1 = f1.pass1_nam;
			var passAge_1 = f1.pass1_age;
			var passGender_1 = f1.pass1_gender;
		
			var passName_2 = f1.pass2_nam;
			var passAge_2 = f1.pass2_age;
			var passGender_2 = f1.pass2_gender;

			var passName_3 = f1.pass3_nam;
			var passAge_3 = f1.pass3_age;
			var passGender_3 = f1.pass3_gender
		
			var passName_4 = f1.pass4_nam;
			var passAge_4 = f1.pass4_age;
			var passGender_4 = f1.pass4_gender;
	
			var passName_5 = f1.pass5_nam;
			var passAge_5 = f1.pass5_age;
			var passGender_5 = f1.pass5_gender;

		
			//for customer name
			var result = (nonEmpty(pname.value));
			if(result == 1)
			{
				if (!allLetters(pname))
				{
					alert('Names can contain only Alphabets,Blank space and Period(.)');	
					return false;
				}
			}	
			else 
			{
				alert('Name cannot be left empty');
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
			for (var i=0;i<2;i++)
			{	
				var result,a; 
				if(i == 0)
				{
					a = num1;	
					result = (nonEmpty(a.value));
					if(result == 0)	
					{	
						alert('Atleast 1 contact number must be specified');
						return false;
					}
					else
					{
						if((size_of_contact(a.value)) == 0)
						{
							return false;
						}
					}
				}
				else if(i == 1)	
				{
					a = num2;	
					result = (nonEmpty(a.value));
					if(result == 1)	
					{	
						if((size_of_contact(a.value)) == 0)
						{
							return false;
						}
					}
				}
			}		
				
	
			//for origin
			result = (nonEmpty(ori.value));
			if(result == 1)	
			{	
				if (!allLetters(ori))
				{
					alert('From can contain only Alphabets');	
					return false;
				}			
			}	
			else 
			{
				alert('From cannot be left empty');
				return false;
			}
					
				
			//for destination
			result = (nonEmpty(dest.value));
			if(result == 1)	
			{	
				if (!allLetters(dest))
				{
					alert('To can contain only Alphabets');	
					return false;
				}			
			}	
			else 
			{
				alert('To cannot be left empty');
				return false;
			}
	
	
			//for depart date
			result = (nonEmpty(dep_date.value));
			if (result == 0)
			{
				alert('Departure Date cannot be left empty');
				return false;
			}	
		
	
			//for return date
			result = (nonEmpty(ret_date.value));
			if (result == 0)
			{
				alert('Return Date cannot be left empty');
				return false;
			}
		
	
			//for no of pass
			result = (nonEmpty(no.value));
			if (result == 0)
			{
				alert('No of passengers cannot be left empty');
				return false;
			}
		
				
			//for passnames
			for(var i=0; i<5 ;i++)
			{
				var x,y,z,res,a;
				if(i == 0)
				{		
					x = (nonEmpty(passName_1.value));
					y = (nonEmpty(passAge_1.value));
					z = (nonEmpty(passGender_1.value));
					if ((x == 1)&&(y == 1)&&(z == 1))
					{
						a = passName_1;
						res = (allLetters(a));
						if (res == 0)
						{
							alert('Names can contain only Alphabets,Blank space and Period(.)');	
							return false;
						}	
					}
					else
					{
						alert('Information of atleast 1 passenger must be specified');
						return false;
					}
				}
				else if(i == 1)
				{		
					x = (nonEmpty(passName_2.value));
					y = (nonEmpty(passAge_2.value));
					z = (nonEmpty(passGender_2.value));
				}
				else if(i == 2)
				{		
					x = (nonEmpty(passName_3.value));
					y = (nonEmpty(passAge_3.value));
					z = (nonEmpty(passGender_3.value));
				}
				else if(i == 3)
				{		
					x = (nonEmpty(passName_4.value));
					y = (nonEmpty(passAge_4.value));
					z = (nonEmpty(passGender_4.value));
				}
				else if(i == 4)
				{		
					x = (nonEmpty(passName_5.value));
					y = (nonEmpty(passAge_5.value));
					z = (nonEmpty(passGender_5.value));
				}
	
				if ((x == 1)&&(y == 1)&&(z == 1))
				{	
					if(i == 1)
					{
						a = passName_2;
					}
					else if(i == 2)
					{
						a = passName_3;
					}
					else if(i == 3)
					{
						a = passName_4;
					}
					else
					{
						a = passName_5;
					}
					res = (allLetters(a));
					if ((res == 0) && (i != 0))
					{
						alert('Names can contain only Alphabets,Blank space and Period(.)');	
						return false;
					}
				}
				if (((x == 1)&&(y == 1)&&(z == 0)) || ((x == 1)&&(y == 0)&&(z == 1)) || ((x == 1)&&(y == 0)&&(z == 0)) || ((x == 0)&&(y == 1)&&(z == 1)) || ((x == 0)&&(y == 1)&&(z == 0)) || ((x == 0)&&(y == 0)&&(z == 1)))
				{
					alert('Please fill in the complete passenger details');
					return false;
				}		
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