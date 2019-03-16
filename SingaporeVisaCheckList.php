<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
    <head>
        <title>Singapore VISA check list </title>
		<link href="websiterules.css"  rel="stylesheet"/>
		<link href="hover_img.css" rel="stylesheet"/>	
		<style>
			.marleft
			{
				margin-left:10%;
			}	
			.marleft7
			{
				margin-left:7%;
			}
			::placeholder
			{
				color:rgb(192,192,192);
			}
		</style>
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
		<div id="container" style="height:150%;"><br>
			<h1 class="central_textalign">Singapore VISA Check list</h1><br>
			<form name="Singapore VISA check list" id="f1">
				<table style="margin-left:4.9%;">
					<tr>
						<td>Passport Number : </td>
						<td><input style=margin-left:20%; style= type="text" name="passno"></td>
					</tr>
				</table>
				<span style="margin-left:5%;font-size:105%;">Type of&nbsp Visa : &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp
						<input class="bre15px" type="Radio" value="Tourism Visa" name="visa_type">&nbsp <span style="font-weight:normal;"> Tourism Visa &nbsp&nbsp
						<input class="bre15px" type="Radio" value="Business Visa" name="visa_type">&nbsp Business Visa
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp <b>Occupation </b>: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp
						<input class="bre15px" type="Radio" value="Own Business" name="occu" >&nbspOwn Business&nbsp&nbsp
						<input class="bre15px" type="Radio" value="Working" name="occu" >&nbsp Working &nbsp&nbsp
						<input class="bre15px" type="Radio" value="Student" name="occu" >&nbsp Student</span>
				</span>		
				<table style="margin-left:5%;">	
					<tr>
						<td>Company Name : </td>
						<td><input style=margin-left:3%; type="text" name="compname"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Nature Of Business : </td>
						<td><input type="text" name="nat_bus"></td>
					</tr>
					<tr>
						<td>If Student, Institute Name : </td>
						<td><input style=margin-left:3%; type="text" name="ins_name"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp If Working, Designation : </td>
						<td><input type="text" name="desg"></td>
					</tr>
					<tr>
						<td>Educational Qualification : </td>
						<td><input style=margin-left:3%; type="text" name="edu_qual"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Income per month : </td>
						<td><input type="number" name="incomee"></td>
					</tr>
					<tr>
						<td>Onward Travel Date : </td>
						<td><input style=margin-left:3%; type="date" name="gng" ></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Return Travel Date : </td>
						<td><input type="date" name="ret"></td>
					</tr>	
					<tr>
						<td>Hotel Name : </td>
						<td><input style=margin-left:3%; type="text" name="ht_na"></td>
						<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Hotel Ph.no : </td>
						<td><input type="number" name="phno"></td>
					</tr>
					<tr>
						<td>Hotel Address : </td>
						<td><Textarea style=margin-left:3%; name="htladdress"></textarea></td>
					</tr>
				</table>
				<span style="margin-left:5%;font-size:105%;">Finance : &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp
							<input class="bre15px" type="Radio" value="Self Arranged" name="finance">&nbsp <span style="font-weight:normal;"> Self Arranged &nbsp&nbsp
							<input class="bre15px" type="Radio" value="Company Arranged" name="finance">&nbsp Company Arranged 
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Travel Arrangements : </b>&nbsp
							<input class="bre15px" type="Radio" value="Travelling Alone" name="withh">&nbsp Travelling Alone &nbsp&nbsp
							<input class="bre15px" type="Radio" value="Travelling With" name="withh">&nbsp Travelling With &nbsp&nbsp<br>	
					<span style="margin-left:5%;"><b>Holding Other Visas :</b> &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp
							<input class="bre15px" type="Radio" value="No" name="oth">&nbsp No &nbsp&nbsp &nbsp&nbsp 
							<input class="bre15px" type="Radio" value="Yes" name="oth">&nbsp Yes &nbsp&nbsp	</span>
							<input style="margin-left:%;width:15.8%;" placeholder="If Yes, then specify Country" type="text" name="which_coun">	
					</span>
				</span>	
				<table style="margin-left:5%;">	
					<tr>
						<td>Last travel Date to Singapore : </td>
						<td><input type="date" name="lst_dt"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visa Duration required : </td>
						<td><select style="width:100%;" name="visa_dur">
										<option value="1 month"> 1 month
										<option value="3 months"> 3 months
										<option value="6 months"> 6 months
										<option value="1 year"> 1 year
										<option value="2 years"> 2 years
										<option value="5 years">5 years
							</select>
						</td>
					</tr>
					<tr>
						<td>Email Id : </td>
						<td><input type="email" name="maill"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Contact Number : </td>
						<td><input style="width:100%;" type="number" name="con_num"></td>
					</tr>
				</table><br>
				<p style="margin-left:5%;font-size:150%;">Documents To Be Submitted With Us : </p>
				<ol style="margin-left:5%;font-weight:normal;font-size:125%;">
					<li style="margin-left:3%;">Invitation letter
					<li style="margin-left:3%;">Sponsor Passport
					<li style="margin-left:3%;">Sponsor ID Copy
					<li style="margin-left:3%;">White background Head Photo with Matt Finish - 3 Nos
					<li style="margin-left:3%;">Air ticket
					<li style="margin-left:3%;">Covering Letter
				</ol><br><br>
				<input class="submit" id="xx" type="submit" name="Submit"/><br><br>
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
	var passport_num = f1.passno;
	var visaa_type = f1.visa_type;
	var occupation = f1.occu;
	var comp_name = f1.compname;
	var business_nature = f1.nat_bus;
	var institute_name = f1.ins_name;
	var designation = f1.desg;
	var qualification = f1.edu_qual;
	var income = f1.incomee;
	var dep_date = f1.gng;
	var ret_date = f1.ret;
	var hotel_name = f1.ht_na;
	var hotel_phno = f1.phno;
	var hotel_add = f1.htladdress;
	var financeee = f1.finance;
	var travel_arr = f1.withh;
	var hold_oth = f1.oth;
	
	var mail = f1.maill;
	var num1 = f1.con_num;
	
	
	//for passport number
	result = (nonEmpty(passport_num.value));
	if (result == 1)
	{
		if (!PassportFormat(passport_num))
		{			
			return false;
		}
	}	
	else
	{
		alert('Passport number cannot be left empty');
		return false;
	}

	
	//for visa type
	result = (nonEmpty(visaa_type.value));
	if(result == 0)	
	{	
		alert('Visa type cannot be left unselected');
		return false;
	}
				
				
	//for Occupation
	result = (nonEmpty(occupation.value));
	if(result == 0)	
	{	
		alert('Occupation cannot be left unselected');
		return false;
	}
				
				
	//for company name
	result = (nonEmpty(comp_name.value));
	if(result == 1)	
	{	
		if (!allLetters(comp_name))
		{
			alert('Company Name can contain only Alphabets');	
			return false;
		}			
	}	
			
				
	//for Nature Of Business
	result = (nonEmpty(business_nature.value));
	if(result == 1)	
	{	
		if (!allLetters(business_nature))
		{
			alert('Nature of business can contain only Alphabets');	
			return false;
		}			
	}	
	
	
	//for If student
	result = (nonEmpty(institute_name.value));
	if(result == 1)	
	{	
		if (!allLetters(institute_name))
		{
			alert('Institute Name can contain only Alphabets');	
			return false;
		}			
	}	
			
				
	//for if working designtion
	result = (nonEmpty(designation.value));
	if(result == 1)	
	{	
		if (!allLetters(designation))
		{
			alert('Designation can contain only Alphabets');	
			return false;
		}			
	}	
	
	
	//for educational qualification
	result = (nonEmpty(qualification.value));
	if (result == 1)
	{
		if (!QFormat(qualification))
		{			
			return false;
		}
	}	
	else
	{
		alert('Educational Qualification cannot be left empty');
		return false;
	}
	
	
	//income per month
	result = (nonEmpty(income.value));
	if(result == 0)	
	{	
		alert('Income cannot be left empty');	
		return false;
	}	

	
	//for onward travel date
	result = (nonEmpty(dep_date.value));
	if (result == 0)
	{
		alert('Onward travel date cannot be left empty');
		return false;
	}
	
	
	//for return date
	result = (nonEmpty(ret_date.value));
	if (result == 0)
	{
		alert('Return travel date cannot be left empty');
		return false;
	}

	
	//for hotel name 
	result = (nonEmpty(hotel_name.value));
	if(result == 1)	
	{	
		if (!allLetters(hotel_name))
		{
			alert('Hotel Name can contain only Alphabets');	
			return false;
		}			
	}
	else
	{
		alert('Hotel Name cannot be left empty');	
		return false;
	}
	
	
	//for hotel contact number	
	result = (nonEmpty(hotel_phno.value));
	if(result == 0)	
	{	
		alert('Hotel contact number must be specified');
		return false;
	}
	else
	{
		if((size_of_contact(hotel_phno.value)) == 0)
		{
			return false;
		}
	}
	
	
	//for hotel address
	result = (nonEmpty(hotel_add.value));
	if (result == 0)
	{
		alert('Hotel\'s Address cannot be left empty');
		return false;
	}
	
	
	//for finance
	result = (nonEmpty(financeee.value));
	if(result == 0)	
	{	
		alert('Finance cannot be left unselected');
		return false;
	}
				
				
	//for travel arrangement
	result = (nonEmpty(travel_arr.value));
	if(result == 0)	
	{	
		alert('Travel arrangement cannot be left unselected');
		return false;
	}
				
	//for holding others
	result = (nonEmpty(hold_oth.value));
	if(result == 0)	
	{	
		alert('Holding Other Visas cannot be left unselected');
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
	result = (nonEmpty(num1.value));
	if(result == 0)	
	{	
		alert('Contact number must be specified');
		return false;
	}
	else
	{
		if((size_of_contact(num1.value)) == 0)
		{
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
			

function QFormat(degree)	
{
	var q_Format = /^([A-Z])([a-zA-Z\.,\s]+)$/;
	if(degree.value.match(q_Format))
	{
		return true;
	}
	else
	{
		alert('Enter a valid degree');	
		return false;
	}								
}


			
function PassportFormat(pass_num)	
{
	var pFormat = /^([A-Z])([0-9]{7})$/;
	if(pass_num.value.match(pFormat))
	{
		return true;
	}
	else
	{
		alert('Enter a valid passport number');	
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
