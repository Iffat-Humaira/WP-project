<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
	<head>
		<title>Domestic Tour Packages</title>
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
		<div id="container" style="height:177%;"><br>
			<h1 class="central_textalign">Domestic Tour Packages</h1>
			<div style=margin:1% 1% 1% 1%;>
				<form name="Domestic Tour Packages" id="f1" action="DoemTP_check.php" method="GET">
					<table style="margin-left:3%;">		
						<tr>
							<td>Name :</td>
							<td><input style="margin-left:10%;" type="text" name="cus_name"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Email Id :</td>
							<td><input style="margin-left:3%;" type="mail" name="cus_mail"></td>
						</tr>
						<tr>
							<td>Contact Numbers :</td>
							<td><span style="margin-left:-6.1%;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1.&nbsp <input type="number" name="num_1"></td>
						</tr>
						<tr>
							<td></td>
							<td><span style="margin-left:-6.1%;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2.&nbsp <input type="number" name="num_2"></td>
						</tr>
						<tr>
							<td>From (Starting Point) :</td>
							<td><input style="margin-left:10%;" type="text" name="from"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp To (Destination) :</td>
							<td><input  style="margin-left:3%;" type="text" name="destination"></td>
						</tr>
						<tr>
							<td>Departure Date :</td>
							<td><input style="margin-left:10%;" type="date" name="depart1"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Return Date :</td>
							<td><input style="margin-left:3%;" type="date" name="return1"></td>
						</tr>
						<tr>
							<td>No. of passengers:</td>
							<td><input style="margin-left:10%;" type="number" name="n_pass" min="1" max="5"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Budget:</td>
							<td><input style="margin-left:3%;" type="number" name="budget"></td>
						</tr>
					</table>
					<p style="margin-left:3%;">Places you wish to visit :
						&nbsp&nbsp 1. <input style="margin-left:0.8%;width:23%;" type="text" name="pal1">
						&nbsp&nbsp&nbsp&nbsp&nbsp 2. <input style="width:23%;" type="text" name="pal2">
						&nbsp&nbsp&nbsp&nbsp&nbsp 3. <input style="width:23.2%;" type="text" name="pal3">
					</p>
					<p style="margin-left:23%;">
						<span style="margin-left:-6.5%;"> 
						4.&nbsp&nbsp <input style="margin-left:%;width:29%;" type="text" name="pal4">
						&nbsp&nbsp&nbsp&nbsp 5. <input style="margin-left:0.5%;width:29%;" type="text" name="pal5">
						&nbsp&nbsp&nbsp&nbsp&nbsp 6. <input style="width:29%;" type="text" name="pal6">
					</p>
					<p style="margin-left:3%;">Details Of Passengers :</p>
					<p style="margin-left:3%;">Passenger 1 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list1" type="text" name="pass1_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list1" type="number" name="pass1_age" min="1" max="100" />
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass1_gen"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass1_gen">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass1_gen">Other</span></span><br>
					</p>
					<p style="margin-left:3%;">Passenger 2 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list1" type="text" name="pass2_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list1" type="number" name="pass2_age" min="1" max="100" />
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass2_gen"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass2_gen">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass2_gen">Other</span></span><br>
					</p>
					<p style="margin-left:3%;">Passenger 3 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list1" type="text" name="pass3_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list1" type="number" name="pass3_age" min="1" max="100" />
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass3_gen"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass3_gen">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass3_gen">Other</span></span><br>
					</p>
					<p style="margin-left:3%;">Passenger 4 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list1" type="text" name="pass4_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list1" type="number" name="pass4_age" min="1" max="100" />
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass4_gen"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass4_gen">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass4_gen">Other</span></span><br>
					</p>	
					<p style="margin-left:3%;">Passenger 5 :<br>
									<span style="margin-left:9.5%;">Name : <input class="pass_list1" type="text" name="pass5_nam">
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Age : <input class="pass_list1" type="number" name="pass5_age" min="1" max="100" />
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Gender : <input class="bre15px" type="Radio" value="Female" name="pass5_gen"><span style="font-weight:normal;">Female &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Male" name="pass5_gen">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input class="bre15px" type="Radio" value="Other" name="pass5_gen">Other</span></span><br>
					</p>
					<p style="margin-left:3%;">If travelling Via, provide the details below:</p>	
					<table style="margin-left:12%;">
						<tr>
							<th>S.NO.</th>
							<th>From </th>
							<th>To</th>
							<th>Depart Date </th>
							<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Hotel(Stars) &nbsp&nbsp&nbsp&nbsp</th>
							<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Room Type </th>
						</tr>
						<tr>
							<td>&nbsp 1.</td>
							<td><input style="width:100%;" type="text" name="origin1"></td>
							<td><input style="width:100%;" type="text" name="destination1"></td>					
							<td><input style="width:100%;" type="date" name="depart_1"></td>
							<td>
								<select style="width:120%;" name="Stars1"><br>
											<option value="Any Star">Any Star
											<option value="1 star">1 star
											<option value="2 star">2 star
											<option value="3 star">3 star
											<option value="4 star">4 star
											<option value="5 star">5 star
											<option value="6 star">6 star
											<option value="7 star">7 star
											<option value="8 star">8 star
											<option value="9 star">9 star
											<option value="10 star">10 star
								</select>
							</td>
							<td>
								<select style="margin-left:20%;width:120%;" name="Type1"><br>
											<option value="Any Type">Any Type
											<option value="Regular">Regular
											<option value="Suit">Suit
								</select>			
							</td>
						</tr>	
						<tr>
							<td>&nbsp 2.</td>				
							<td><input style="width:100%;" type="text" name="origin2"></td>
							<td><input style="width:100%;" type="text" name="destination2"></td>					
							<td><input style="width:100%;" type="date" name="depart_2"></td>
							<td>
								<select style="width:120%;" name="Stars2"><br>
											<option value="Any Star">Any Star
											<option value="1 star">1 star
											<option value="2 star">2 star
											<option value="3 star">3 star
											<option value="4 star">4 star
											<option value="5 star">5 star
											<option value="6 star">6 star
											<option value="7 star">7 star
											<option value="8 star">8 star
											<option value="9 star">9 star
											<option value="10 star">10 star
								</select>
							</td>
							<td>
								<select style="margin-left:20%;width:120%;" name="Type2"><br>
											<option value="Any Type">Any Type
											<option value="Regular">Regular
											<option value="Suit">Suit
								</select>			
							</td>
						</tr>	
						<tr>	
							<td>&nbsp 3.</td>
							<td><input style="width:100%;" type="text" name="origin3"></td>
							<td><input style="width:100%;" type="text" name="destination3"></td>					
							<td><input style="width:100%;" type="date" name="depart_3"></td>
							<td>
								<select style="width:120%;" name="Stars3"><br>
											<option value="Any Star">Any Star
											<option value="1 star">1 star
											<option value="2 star">2 star
											<option value="3 star">3 star
											<option value="4 star">4 star
											<option value="5 star">5 star
											<option value="6 star">6 star
											<option value="7 star">7 star
											<option value="8 star">8 star
											<option value="9 star">9 star
											<option value="10 star">10 star
								</select>	
							</td>
							<td>
								<select style="margin-left:20%;width:120%;" name="Type3"><br>
											<option value="Any Type">Any Type
											<option value="Regular">Regular
											<option value="Suit">Suit
								</select>			
							</td>
						</tr>
						<tr>	
							<td>&nbsp 4.</td>
							<td><input style="width:100%;" type="text" name="origin4"></td>
							<td><input style="width:100%;" type="text" name="destination4"></td>					
							<td><input style="width:100%;" type="date" name="depart_4"></td>
							<td>
								<select style="width:120%;" name="Stars4"><br>
											<option value="Any Star">Any Star
											<option value="1 star">1 star
											<option value="2 star">2 star
											<option value="3 star">3 star
											<option value="4 star">4 star
											<option value="5 star">5 star
											<option value="6 star">6 star
											<option value="7 star">7 star
											<option value="8 star">8 star
											<option value="9 star">9 star
											<option value="10 star">10 star
								</select>
							</td>
							<td>
								<select style="margin-left:20%;width:120%;" name="Type4"><br>
											<option value="Any Type">Any Type
											<option value="Regular">Regular
											<option value="Suit">Suit
								</select>			
							</td>
						</tr>	
					</table><br><br><br>	
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
	var budget = f1.budget;
	
	var place1 = f1.pal1;
	var place2 = f1.pal2;
	var place3 = f1.pal3;
	var place4 = f1.pal4;
	var place5 = f1.pal5;
	var place6 = f1.pal6;
	
	var passName_1 = f1.pass1_nam;
	var passAge_1 = f1.pass1_age;
	var passGender_1 = f1.pass1_gen;
	
	var passName_2 = f1.pass2_nam;
	var passAge_2 = f1.pass2_age;
	var passGender_2 = f1.pass2_gen;

	var passName_3 = f1.pass3_nam;
	var passAge_3 = f1.pass3_age;
	var passGender_3 = f1.pass3_gen
	
	var passName_4 = f1.pass4_nam;
	var passAge_4 = f1.pass4_age;
	var passGender_4 = f1.pass4_gen;

	var passName_5 = f1.pass5_nam;
	var passAge_5 = f1.pass5_age;
	var passGender_5 = f1.pass5_gen;


	var via_ori_1 = f1.origin1
	var via_des_1 = f1.destination1
	var via_dep_1 = f1.depart_1
	var via_str_1 = f1.Stars1
	var via_typ_1 = f1.Type1
	
	var via_ori_2 = f1.origin2
	var via_des_2 = f1.destination2
	var via_dep_2 = f1.depart_2
	var via_str_2 = f1.Stars2
	var via_typ_2 = f1.Type2
		
	var via_ori_3 = f1.origin3
	var via_des_3 = f1.destination3
	var via_dep_3 = f1.depart_3
	var via_str_3 = f1.Stars3
	var via_typ_3 = f1.Type3	
	
	var via_ori_4 = f1.origin4
	var via_des_4 = f1.destination4
	var via_dep_4 = f1.depart_4
	var via_str_4 = f1.Stars4
	var via_typ_4 = f1.Type4
		
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
			alert('From(Starting Point) can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('From(Starting Point) cannot be left empty');
		return false;
	}
				
				
	//for destination
	result = (nonEmpty(dest.value));
	if(result == 1)	
	{	
		if (!allLetters(dest))
		{
			alert('To(Destination) can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('To(Destination) cannot be left empty');
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
	
	
	//for budget
	result = (nonEmpty(budget.value));
	if (result == 0)
	{
		alert('Budget cannot be left empty');
		return false;
	}
			
			
	//for places to visit
	for (var i=0;i<6;i++)
	{
		var a;
		if(i == 0)
		{
			a = place1;
		}		
		else if(i == 1)
		{
			a = place2;
		}
		else if(i == 2)
		{
			a = place3;
		}
		else if(i == 3)
		{
			a = place4;
		}
		else if(i == 4)
		{
			a = place5;
		}
		else if(i == 5)
		{
			a = place6;
		}
		var check = (nonEmpty(a.value));
		if(check == 1)
		{	
			if (!allLetters(a))
			{
				alert('Places of visit can contain only Alphabets');	
				return false;
			}
		}	
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
	
	
	//for from1
	for(var i=0; i<4 ;i++)
	{
		var x,y,z,res1,res2,a,b;
		if(i == 0)
		{		
			x = (nonEmpty(via_ori_1.value));
			y = (nonEmpty(via_des_1.value));
			z = (nonEmpty(via_dep_1.value));
			if ((x == 1)&&(y == 1)&&(z == 1))
			{
				a = via_ori_1;
				b = via_des_1;
				res1 = (allLetters(a));
				res2 = (allLetters(b));
				if (res1 == 0)
				{
					alert('From (In Via) can contain only Alphabets,Blank space and Period(.)');	
					return false;
				}
				else if(res2 == 0)
				{
					alert('To (In Via) can contain only Alphabets,Blank space and Period(.)');	
					return false;
				}
			}
			else
			{
				alert('Atleast 1 set of information must be specified (in Via)');
				return false;
			}
		}
		else if(i == 1)
		{		
			x = (nonEmpty(via_ori_2.value));
			y = (nonEmpty(via_des_2.value));
			z = (nonEmpty(via_dep_2.value));	
		}
		else if(i == 2)
		{		
			x = (nonEmpty(via_ori_3.value));
			y = (nonEmpty(via_des_3.value));
			z = (nonEmpty(via_dep_3.value));
		}
		else if(i == 3)
		{		
			x = (nonEmpty(via_ori_4.value));
			y = (nonEmpty(via_des_4.value));
			z = (nonEmpty(via_dep_4.value));
		}

		if ((x == 1)&&(y == 1)&&(z == 1))
		{
			if(i == 1)
			{
				a = via_ori_2;
				b = via_des_2;
				res1 = (allLetters(a));
				res2 = (allLetters(b));
			}
			else if(i == 2)
			{
				a = via_ori_3;
				b = via_des_3;
				res1 = (allLetters(a));
				res2 = (allLetters(b));	
			}
			else if(i == 3)
			{
				a = via_ori_4;
				b = via_des_4;
				res1 = (allLetters(a));
				res2 = (allLetters(b));	
			}
			if (res1 == 0)
			{
				alert('From (In Via) can contain only Alphabets,Blank space and Period(.)');	
				return false;
			}
			else if(res2 == 0)
			{
				alert('To (In Via) can contain only Alphabets,Blank space and Period(.)');	
				return false;
			}	
		}
		
		if (((x == 1)&&(y == 1)&&(z == 0)) || ((x == 1)&&(y == 0)&&(z == 1)) || ((x == 1)&&(y == 0)&&(z == 0)) || ((x == 0)&&(y == 1)&&(z == 1)) || ((x == 0)&&(y == 1)&&(z == 0)) || ((x == 0)&&(y == 0)&&(z == 1)))
		{
			alert('Please complete the Via details');
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
