<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
	<head>
		<title>International Air tickets</title>
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
		<div id="container" style="height:192%;"><br>
			<h1 class="central_textalign">International Air Tickets</h1>
			<div style=margin:1% 1% 1% 1%;>
				<form name="International Air Tickets" id="f1">
					<table style="margin-left:5%;">
						<tr>
							<td>Lead Passenger's name : </td>
							<td><input style="margin-left:4.5%;" type="text" name="lead_name"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name : </td>
							<td><input style="margin-left:3.7%;" type="text" name="cus_name"></td>
						</tr>
						<tr>
							<td>Contact Numbers : </td>
							<td><span>1. <input type="number" name="num_1"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Email Id : </td>
							<td><input style="margin-left:3.7%;" type="text" name="cus_mail"></td>
						</tr>
						<tr>
							<td></td>
							<td><span>2. <input type="number" name="num_2"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No. of passengers : </td>
							<td><input style="margin-left:3.7%;" type="number" name="n_pass" min="1" max="5"></td>
						</tr>		
						<tr>
							<td>Origin : </td>
							<td><input style="margin-left:4.5%;" type="text" name="origin"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Destination : </td>
							<td><input style="margin-left:3.7%;" type="text" name="destination"></td>
						</tr>
					</table><br>
					<p style="margin-left:5%;">Names Of Passengers :
						&nbsp&nbsp&nbsp1. <input style="margin-left:0.1%;" class="pass_list" type="text" name="pass1">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2. <input class="pass_list" type="text" name="pass2">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 3. <input class="pass_list" type="text" name="pass3">
					</p>
					<p style="margin-left:19%;">
						4. <input class="pass_list" type="text" name="pass4">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 5. <input class="pass_list" type="text" name="pass5">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 6. <input class="pass_list" type="text" name="pass6">
					</p>
					<p style="margin-left:5%;">Enter the preferable dates for travelling below :</p><br>
					<table style="margin-left:28%;">
						<tr>
							<th>S.NO.</th>
							<th>Date Of Depart:</th>
							<th>Date Of Return:</th>
						</tr>
						<tr>
							<td>&nbsp 1.</td>				
							<td><input class="pass_list" type="date" name="depart1"></td>
							<td><input class="pass_list" type="date" name="return1"></td>
						</tr>	
						<tr>
							<td>&nbsp 2.</td>
							<td><input class="pass_list" type="date" name="depart2"></td>
							<td><input class="pass_list" type="date" name="return2"></td>
						</tr>	
						<tr>	
							<td>&nbsp 3.</td>
							<td><input class="pass_list" type="date" name="depart3"></td>
							<td><input class="pass_list" type="date" name="return3"></td>
						</tr>
						<tr>	
							<td>&nbsp 4.</td>
							<td><input class="pass_list" type="date" name="depart4"></td>
							<td><input class="pass_list" type="date" name="return4"></td>
						</tr>		
					</table><br>
					<p style="margin-left:5%;">If travelling Via, provide the details below:</p><br>	
					<table style="margin-left:19%;">
						<tr>
							<th>S.NO.</th>
							<th>From :</th>
							<th>To:</th>
							<th>Depart Date :</th>
						</tr>
						<tr>
							<td>&nbsp 1.</td>
							<td><input class="pass_list" type="text" name="origin1"></td>
							<td><input class="pass_list" type="text" name="destination1"></td>					
							<td><input class="pass_list" type="date" name="depart_1"></td>
						</tr>	
						<tr>
							<td>&nbsp 2.</td>				
							<td><input class="pass_list" type="text" name="origin2"></td>
							<td><input class="pass_list" type="text" name="destination2"></td>					
							<td><input class="pass_list" type="date" name="depart_2"></td>
						</tr>	
						<tr>	
							<td>&nbsp 3.</td>
							<td><input class="pass_list" type="text" name="origin3"></td>
							<td><input class="pass_list" type="text" name="destination3"></td>					
							<td><input class="pass_list" type="date" name="depart_3"></td>
						</tr>
						<tr>	
							<td>&nbsp 4.</td>
							<td><input class="pass_list" type="text" name="origin4"></td>
							<td><input class="pass_list" type="text" name="destination4"></td>					
							<td><input class="pass_list" type="date" name="depart_4"></td>
						</tr>	
					</table><br>
					<p style="margin-left:5%;">Tickets : <input style="margin-left:1.5%;" class="bre15px" type="Radio" value="Refundable" name="refund">&nbsp <span style="font-weight:normal;"> Refundable(higher-cost) &nbsp&nbsp&nbsp
							<input class="bre15px" type="Radio" value="Non - Refundable" name="refund">&nbsp Non - Refundable (lower-cost) </span>	
							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Class: <input style="margin-left:2%;" class="bre15px" type="Radio" value="First" name="type"><span style="font-weight:normal;">&nbsp First &nbsp&nbsp&nbsp&nbsp
									<input class="bre15px" type="Radio" value="Business" name="type">&nbsp Business &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input class="bre15px" type="Radio" value="Premium Economy" name="type">&nbsp Premium Economy &nbsp&nbsp&nbsp
									<input class="bre15px" type="Radio" value="Economy" name="type">&nbsp Economy &nbsp&nbsp</span>
					</p>	
					<p style="margin-left:5%;">Preferred Airtlines : <span style="margin-left:1%;"> 1. <input class="pref" type="text" name="air1"></span>
											<span>&nbsp&nbsp 2. <input class="pref" type="text" name="air2"></span>
											<span>&nbsp&nbsp 3. <input class="pref" type="text" name="air3"></span>
											<span>&nbsp&nbsp 4. <input class="pref" type="text" name="air4"></span>	
					</p>
					<p style="margin-left:5%;">Preferred Airport : <span style="margin-left:1.6%;">1. <input class="pref" type="text" name="airp1"></span>
												<span>&nbsp&nbsp 2. <input class="pref" type="text" name="airp2"></span>
												<span>&nbsp&nbsp 3. <input class="pref" type="text" name="airp3"></span>
												<span>&nbsp&nbsp 4. <input class="pref" type="text" name="airp4"></span>
												
					</p>
					<p style="margin-left:5%;">Weight Of baggage during departure (in Kgs) : <input class="pref" type="text" name="wei_bag"></p>
					<div style="margin-left:5%;">	Note :
													<ul style="font-weight:normal;">
														<li> Additional charges will be applied for extra luggage. 
														<li> Passport <b>Copy</b> of all the passengers must be submitted to us.
														<li> Visa <b>Copy </b>of the destination country must be submitted to us. 
													</ul>	
					</div><br><br>
					<input class="submit" id="xx" type="submit" name="Submit"/>
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
				var lname = f1.lead_name;
				var pname = f1.cus_name;
				var num1 = f1.num_1;
				var num2 = f1.num_2;
				var mail = f1.cus_mail;
				var no = f1.n_pass;
				var ori = f1.origin;
				var dest = f1.destination;
				
				var pass_1 = f1.pass1;
				var pass_2 = f1.pass2;
				var pass_3 = f1.pass3;
				var pass_4 = f1.pass4;
				var pass_5 = f1.pass5;
				var pass_6 = f1.pass6;
				
				var pref_dates1 = f1.depart1;
				var pref_dates2 = f1.return1;
				var pref_dates3 = f1.depart2;
				var pref_dates4 = f1.return2;
				var pref_dates5 = f1.depart3;
				var pref_dates6 = f1.return3;
				var pref_dates7 = f1.depart4;
				var pref_dates8 = f1.return4;
				
				var via_ori_1 = f1.origin1
				var via_des_1 = f1.destination1
				var via_dep_1 = f1.depart_1
	
				var via_ori_2 = f1.origin2
				var via_des_2 = f1.destination2
				var via_dep_2 = f1.depart_2
		
				var via_ori_3 = f1.origin3
				var via_des_3 = f1.destination3
				var via_dep_3 = f1.depart_3
	
				var via_ori_4 = f1.origin4
				var via_des_4 = f1.destination4
				var via_dep_4 = f1.depart_4
	
	
				var kind = f1.type;
				var type = f1.refund;
				
				var pref_flights1 = f1.air1;
				var pref_flights2 = f1.air2;
				var pref_flights3 = f1.air3;
				var pref_flights4 = f1.air4;
				
				var pref_airport1 = f1.airp1;
				var pref_airport2 = f1.airp2;
				var pref_airport3 = f1.airp3;
				var pref_airport4 = f1.airp4;
				
				var weightage = f1.wei_bag;
				
				
				//for lead name
				var result = (nonEmpty(lname.value));
				if(result == 1)	
				{	
					if (!allLetters(lname))
					{
						alert('Names can contain only Alphabets,Blank space and Period(.)');	
						return false;
					}
				}	
				else 
				{
					alert('Lead Name cannot be left empty');
					return false;
				}
				
				
				//for customer name
				result = (nonEmpty(pname.value));
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


				//for no of pass
				result = (nonEmpty(no.value));
				if (result == 0)
				{
					alert('No of passengers cannot be left empty');
					return false;
				}

				//for origin
				result = (nonEmpty(ori.value));
				if(result == 1)	
				{	
					if (!allLetters(ori))
					{
						alert('Origin can contain only Alphabets');	
						return false;
					}
					
				}	
				else 
				{
					alert('Origin cannot be left empty');
					return false;
				}
				
				
				//for destination
				result = (nonEmpty(dest.value));
				if(result == 1)	
				{	
					if (!allLetters(dest))
					{
						alert('Destination can contain only Alphabets');	
						return false;
					}
					
				}	
				else 
				{
					alert('Destination cannot be left empty');
					return false;
				}
				
				
				//for passnames
				for (var i=0;i<6;i++)
				{
					var a,result;
					if(i == 0)
					{
						a = pass_1;
						result = (nonEmpty(a.value));
						if(result == 0)	
						{	
							alert('Atleast 1 passenger name must be specified');
							return false;
						}
						if (!allLetters(a))
						{
							alert('Names contain only Alphabets,Blank space and Period(.)');	
							return false;
						}
					}	
					else if(i == 1)
					{
						a = pass_2;
					}
					else if(i == 2)
					{
						a = pass_3;
					}
					else if(i == 3)
					{
						a = pass_4;
					}
					else if(i == 4)
					{
						a = pass_5;
					}
					else if(i == 5)
					{
						a = pass_6;
					}
					result = (nonEmpty(a.value));
					if(result == 1)
					{
						if (!allLetters(a))
						{
							alert('Names can contain only Alphabets,Blank space and Period(.)');	
							return false;
						}
					}	
				}
		
				
				//for prefered_dates
				for (var i=1;i<=4; i++)
				{
					var a,b;
					var res1,res2;
					if((i == 1)||(i == 2))
					{	
						if(i == 1)
						{
							a = pref_dates1;
							b = pref_dates2;
							res1 = (nonEmpty(a.value));
							res2 = (nonEmpty(b.value));
						}
						else if(i == 2)
						{
							a = pref_dates3;
							b = pref_dates4;
							res1 = (nonEmpty(a.value));
							res2 = (nonEmpty(b.value));
						}	
						if((res1 && res2) == 0)	
						{	
							alert('Fill in atleast 2 pairs of preferred choise of dates');
							return false;
						}
					}
					else if (i == 3)	
					{
						a = pref_dates5;
						b = pref_dates6;
						res1 = (nonEmpty(a.value));
						res2 = (nonEmpty(b.value));
					}	
					else if (i == 4)	
					{
						a = pref_dates7;
						b = pref_dates8;
						res1 = (nonEmpty(a.value));
						res2 = (nonEmpty(b.value));
					}
					if(((res1 == 0) && (res2 == 1)) || (res1 == 1) && (res2 ==0))
					{
						alert('Please fill in the complete date details');
						return false;			
					}
				}	

				
				//for from to to..........via
				for(var i=0; i<4 ;i++)
				{
					var x,y,z,res1,res2,a,b;
					if(i == 0)
					{		
						x = (nonEmpty(via_ori_1.value));
						y = (nonEmpty(via_des_1.value));
						z = (nonEmpty(via_dep_1.value));
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
						if(i == 0)
						{
							a = via_ori_1;
							b = via_des_1;
							res1 = (allLetters(a));
							res2 = (allLetters(b));
						}
						else if(i == 1)
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

				
				//for refund
				result = (nonEmpty(type.value));
				if(result == 0)	
				{	
					alert('Ticket type cannot be left unselected');
					return false;
				}	
				
				
				//for class
				result = (nonEmpty(kind.value));
				if(result == 0)	
				{	
					alert('Class cannot be left unselected');
					return false;
				}


				//for prefered_ airlines
				for (var i=1;i<=4; i++)
				{
					var a ;
					if((i == 1) || (i == 2))
					{
						if(i == 1)
						{
							a = pref_flights1;
							result = (nonEmpty(a.value));
						}
						else if(i == 2)
						{
							a = pref_flights2;
							result = (nonEmpty(a.value));
						}	
						if(result == 1)	
						{	
							if (!allLetters(a))
							{
								alert('Preferred Airlines can contain only Alphabets');	
								return false;
							}	
						}		
						else 
						{
							alert('Fill in atleast 2 Preferred Airlines');
							return false;
						}
					}	
					else if(i == 3)
					{
						a = pref_flights3;
						result = (nonEmpty(a.value));
					}
					else if(i == 4)
					{
						a = pref_flights4;
						result = (nonEmpty(a.value));
					}	
					if(result == 1)
					{	
						if (!allLetters(a))
						{
							alert('Preferred Airlines can contain only Alphabets');	
							return false;
						}	
					}	
				}
			
			
				//for prefered_ airports
				for(var i=0; i<4 ;i++)
				{
					var res,a;
					if(i == 0)
					{	
						a = pref_airport1;
						res = (nonEmpty(a.value));
						if(res == 1)	
						{	
							if (!allLetters(a))
							{
								alert('Preferred Airport can contain only Alphabets');	
								return false;
							}	
						}	
						else 
						{
							alert('Fill in atleast 1 Preferred Airports');
							return false;
						}
					}
					else if(i == 1)		
					{	
						a = pref_airport2;
						res = (nonEmpty(a.value));
					}	
					else if(i == 2)		
					{	
						a = pref_airport3;
						res = (nonEmpty(a.value));
					}	
					else if(i == 3)		
					{	
						a = pref_airport4;
						res = (nonEmpty(a.value));
					}			
					if(res == 1)	
					{	
						if (!allLetters(a))
						{
							alert('Preferred Airport can contain only Alphabets');	
							return false;
						}	
					}		
				}	
	
					
				
				//for weightage
				result = (nonEmpty(weightage.value));
				if(result == 0)	
				{	
					alert('Weight of the baggage must be specified');
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
					alert('Enter a valid number');
					return false;
				}
			}
		</script>
	</body>
</html>
