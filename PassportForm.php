<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
    <head>
        <title>Passport  Form </title>
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
		<div id="container" style="height:155%;"><br>
			<h1 class="central_textalign">Passport Application Form</h1><br>
			<form name="passport form" id="f1">
				<table style="margin-left:5%;">
					<tr>
						<td>Full Name(Expand Initial) : </td>
						<td><input style="margin-left:1.2%;width:%;" type="text" name="name"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Date Of Birth : </td>
						<td><input style="margin-left:0.7%;width:%;" type="date" name="dob" ></td>
					</tr>
					<tr>
						<td>Father's Name : </td>
						<td><input style="margin-left:1.2%;width:%;" type="text" name="fname"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Mother's Name : &nbsp&nbsp&nbsp&nbsp </td>
						<td><input style="margin-left:0.7%;width:%;" type="text" name="mname"></td>
					</tr>
					<tr>
						<td>Previous Passport File No : </td>
						<td><input style="margin-left:1.2%;width:%;" type="text" name="prev_pasno"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Spouse's Name : </td>
						<td><input style="margin-left:0.7%;width:%;" type="text" name="sname"></td>
					</tr>
					<tr>
						<td>Place Of Birth : </td>
						<td><input style="margin-left:1.2%;width:%;" type="text" name="pob"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp District, State : </td>
						<td><input style="margin-left:0.7%;width:%;" type="text" name="state"></td>
					</tr>
					<tr>
						<td>Educational Qualification : </td>
						<td><input style="margin-left:1.2%;width:%;" type="text" name="qual"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Profession : </td>
						<td><input style="margin-left:0.7%;width:%;" type="text" name="proff"></td>
					</tr>
					<tr>
						<td>Phone Number : </td>
						<td><input style="margin-left:1.2%;width:%;" type="number" name="phno" ></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Email : </td>
						<td><input style="margin-left:0.7%;width:%;" type="email" name="mailid"></td>
					</tr>	
					<tr>
						<td>Identification Marks : </td>
						<td><span style="margin-left:-3.5%;">1. </span><input style="margin-left:0.3%;width:%;" type="text" name="mrk1"></td>
					</tr>
					<tr>
						<td></td>
						<td><span style="margin-left:-3.5%;">2. </span><input style="margin-left:0.3%;width:%;" type="text" name="mrk2"></td>
					</tr>
				</table>
				<table style=margin-left:5%;>	
					<tr>
						<td>Previous Address : </td>
						<td><Textarea style="margin-left:14%;" name="prev_address"></textarea><br></td>
					</tr>
					<tr>
						<td>Permanent Address : </td>
						<td><Textarea style="margin-left:14%;" name="per_address"></textarea></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Present Address : </td>
						<td><Textarea style="margin-left:17%;" name="pres_address"></textarea><td>
					</tr>
				</table>
				<table style=margin-left:5%;>	
					<tr>
						<td>Landline(with STD code) : </td>
						<td><input style="margin-left:%;width:%;" type="number" name="per_land"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Landline(with STD code) : </td>
						<td><input style="margin-left:0.5%;width:%;" type="number" name="pres_land"></td>
					</tr>
					<tr>
						<td>Residing Since : </td>
						<td><input style="margin-left:%;width:%;" type="date" name="livi"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Police Station : </td>
						<td><input style="margin-left:0.5%;width:%;" type="text" name="name_ps"></td>
					</tr>
					<tr> 
						<td>Issue Date (Prev. Passport) : </td>
						<td><input style="margin-left:%;width:%;" type="date" name="issue_dt"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Issue Place : </td>
						<td><input style="margin-left:0.5%;width:%;" type="text" name="issue_pl"></td>
					</tr>
				</table>
				<p style="margin-left:5.3%;font-size:110%;">Name and address of 2  persons residing of the same street : </p>
				<table style=margin-left:5%;>	
					<tr>
						<td>Person 1 - Name : </td>
						<td><input style=margin-left:20%; type="text" name="name_1"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Person 2 - Name :
						<td><input style=margin-left:18%; type="text" name="name_2"></td>
					</tr>
					<tr>
						<td>Address : </td>
						<td><Textarea style="margin-left:20%;" name="address1"></textarea></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Address : </td>
						<td><Textarea style="margin-left:18%;" name="address2"></textarea></td>
					</tr>
				</table><br><br>	
				<input class="submit" id="xx" type="submit" name="Submit"/>	<br><br>
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
	var pname = f1.name;
	var p_dob = f1.dob;
	
	var dad_name = f1.fname;
	var Mom_name = f1.mname;
	
	var prev_pass_flnum = f1.prev_pasno;
	
	var spouse_name = f1.sname;
	
	var place_of_bir = f1.pob;
	var state_of_bir = f1.state;
	var edu_qualification = f1.qual;
	var profession = f1.proff;
	
	var num1 = f1.phno;
	var mail = f1.mailid;
	
	var iden_1 = f1.mrk1;
	var iden_2 = f1.mrk2;
	var previous_address = f1.prev_address;
	var permanent_address = f1.per_address;
	var present_address = f1.pres_address;
	
	var permanent_land = f1.per_land;
	var present_land = f1.pres_land;
	
	var stay_since = f1.livi;
	var police_station = f1.name_ps;
	
	var issue_date = f1.issue_dt;
	var issue_place = f1.issue_pl;
	
	var person1_name = f1.name_1;
	var person2_name = f1.name_2;
	
	var person1_add = f1.address1;
	var person2_add = f1.address2;
	
	var document_1 = f1.doc1;
	var document_2 = f1.doc2;
	var document_3 = f1.docu3;
	var document_4 = f1.doc4;



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
	
	
	//for date of birth
	result = (nonEmpty(p_dob.value));
	if (result == 0)
	{
		alert('Date Of Birth cannot be left empty');
		return false;
	}
	
	
	//for dad name
	var result = (nonEmpty(dad_name.value));
	if(result == 1)
	{
		if (!allLetters(dad_name))
		{
			alert('Names can contain only Alphabets,Blank space and Period(.)');	
			return false;
		}
	}	
	else 
	{
		alert('Father\'s name cannot be left empty');
		return false;
	}
	
	
	//for mom name
	var result = (nonEmpty(Mom_name.value));
	if(result == 1)
	{
		if (!allLetters(Mom_name))
		{
			alert('Names can contain only Alphabets,Blank space and Period(.)');	
			return false;
		}
	}	
	else 
	{
		alert('Father\'s name cannot be left empty');
		return false;
	}
	
	
	//for prev passport number
	result = (nonEmpty(prev_pass_flnum.value));
	if (result == 1)
	{
		if (!PassportFormat(prev_pass_flnum))
		{			
			return false;
		}
	}	
	

	//for spouse name
	var result = (nonEmpty(spouse_name.value));
	if(result == 1)
	{
		if (!allLetters(spouse_name))
		{
			alert('Names can contain only Alphabets,Blank space and Period(.)');	
			return false;
		}
	}	
	
	
	//for place of birth
	result = (nonEmpty(place_of_bir.value));
	if(result == 1)	
	{	
		if (!allLetters(place_of_bir))
		{
			alert('Place of birth can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('Place of birth cannot be left empty');
		return false;
	}
	
	
	//for state of birth
	result = (nonEmpty(state_of_bir.value));
	if(result == 1)	
	{	
		if (!allLetters(state_of_bir))
		{
			alert('State of birth can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('State of birth cannot be left empty');
		return false;
	}


	//for educational qualification
	result = (nonEmpty(edu_qualification.value));
	if (result == 1)
	{
		if (!QFormat(edu_qualification))
		{			
			return false;
		}
	}	
	else
	{
		alert('Educational Qualification cannot be left empty');
		return false;
	}


	//for profession
	result = (nonEmpty(profession.value));
	if(result == 1)	
	{	
		if (!allLetters(profession))
		{
			alert('Profession can contain only Alphabets');	
			return false;
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

	
	//for contact number	
	result = (nonEmpty(num1.value));
	if(result == 0)	
	{	
		alert('Phone number must be specified');
		return false;
	}
	else
	{
		if((size_of_contact(num1.value)) == 0)
		{
			return false;
		}
	}


	//for identifiction marks
	for(var i = 0;i < 2;i++)
	{
		var a;
		if(i == 0)
		{
			a = iden_1;
		}
		else
		{
			a = iden_2;
		}	
			
		result = (nonEmpty(a.value));
		if(result == 1)	
		{	
			if (!allLetters(a))
			{
				alert('Identification Marks can contain only Alphabets');	
				return false;
			}			
		}	
		else 
		{
			alert('Identification Marks cannot be left empty');
			return false;
		}
	}	


	//for previous address
	result = (nonEmpty(previous_address.value));
	if (result == 0)
	{
		alert('Previous Address cannot be left empty');
		return false;
	}
	
	
	//for permanent address
	result = (nonEmpty(permanent_address.value));
	if (result == 0)
	{
		alert('Permanent Address cannot be left empty');
		return false;
	}
	
	
	//for present address
	result = (nonEmpty(present_address.value));
	if (result == 0)
	{
		alert('Present Address cannot be left empty');
		return false;
	}


	//for landline number	
	for(var i = 0;i < 2;i++)
	{
		var a;
		if(i == 0)
		{
			a = permanent_land;
			result = (nonEmpty(a.value));
			if(result == 0)	
			{	
				alert('Permanent landline number must be specified');
				return false;
			}
			else
			{
				if((size_of_contact_land(a.value)) == 0)
				{
					return false;
				}
			}
		}
		else
		{
			a = present_land;
			result = (nonEmpty(a.value));
			if(result == 0)	
			{	
				alert('Present landline number must be specified');
				return false;
			}
			else
			{
				if((size_of_contact_land(a.value)) == 0)
				{
					return false;
				}
			}
		}	
	}	
	
	
	//for staying since
	result = (nonEmpty(stay_since.value));
	if(result == 0)	
	{	
		alert('Residing since cannot be left empty');
		return false;
	}
				
				
	//for destination
	result = (nonEmpty(police_station.value));
	if(result == 1)	
	{	
		if (!allLetters(police_station))
		{
			alert('Police Station name can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('Police Station cannot be left empty');
		return false;
	}
	
	
	//for issue date
	result = (nonEmpty(issue_date.value));
	if(result == 0)	
	{	
		alert('Issue date cannot be left empty');
		return false;
	}
				
			
	//for issue place
	result = (nonEmpty(issue_place.value));
	if(result == 1)	
	{	
		if (!allLetters(issue_place))
		{
			alert('Issue place can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('Issue place cannot be left empty');
		return false;
	}
	
	
	//for 2 ppl info
	for(var i = 0;i < 2;i++)
	{
		var a;
		if(i == 0)
		{
			a = person1_name;
		}
		else
		{
			a = person2_name;
		}	
			
		result = (nonEmpty(a.value));
		if(result == 1)	
		{	
			if (!allLetters(a))
			{
				alert('Name can contain only Alphabets');	
				return false;
			}			
		}	
		else 
		{
			if(i == 0)
			{
				alert('Person 1\'s Name cannot be left empty');
				return false;
			}	
			else if(i == 1)
			{
				alert('Person 2\'s Name cannot be left empty');
				return false;
			}	
		}
	}	

	
	//for person1 address
	result = (nonEmpty(person1_add.value));
	if (result == 0)
	{
		alert('Person 1\'s Address cannot be left empty');
		return false;
	}
	
	
	//for person2 address
	result = (nonEmpty(person2_add.value));
	if (result == 0)
	{
		alert('Person 2\'s Address cannot be left empty');
		return false;
	}
	
	
	//for 4 documents
	for(var i = 0;i <4 ;i++)
	{
		var a;
		if(i == 0)
		{
			a = document_1;
			result = (nonEmpty(a.value));
			if(result == 1)	
			{	
				if (!allLetters(a))
				{
					alert('Document\'s name can contain only Alphabets');	
					return false;
				}			
			}	
			else 
			{
				alert('Document\'s name cannot be left empty');
				return false;
			}
		}
		else if(i == 1)
		{
			a = document_2;
			result = (nonEmpty(a.value));
			if(result == 1)	
			{	
				if (!allLetters(a))
				{
					alert('Document\'s name can contain only Alphabets');	
					return false;
				}			
			}	
			else 
			{
				alert('Document\'s name cannot be left empty');
				return false;
			}
		}	
		else if(i == 2)
		{
			a = document_3;
			result = (nonEmpty(a.value));
			if(result == 1)	
			{	
				if (!allLetters(a))
				{
					alert('Document\'s name can contain only Alphabets');	
					return false;
				}			
			}	
			if(result == 0)
			{
				alert('Document\'s name cannot be left empty');
				return false;
			}
		}	
		else if(i == 3)
		{
			a = document_4;
			result = (nonEmpty(a.value));
			if(result == 1)	
			{	
				if (!allLetters(a))
				{
					alert('Document\'s name can contain only Alphabets');	
					return false;
				}			
			}	
			else 
			{
				alert('Document names cannot be left empty');
				return false;
			}
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
	var qFormat = /^([A-Z])([a-zA-Z\.,\s]+)$/;
	if(degree.value.match(qFormat))
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

function size_of_contact_land(con_number)
{
	if(((con_number.length) == 8))
	{
		return true;
	}
	else
	{
		alert('Enter a valid landline number');
		return false;
	}
}

		
		</script>		
    </body>
</html>
		