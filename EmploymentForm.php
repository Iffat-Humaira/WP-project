<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
?>
<html>
    <head>
        <title>Application For Employment </title>
		<link href="websiterules.css"  rel="stylesheet"/>
		<link href="hover_img.css" rel="stylesheet"/>
		<style>
			.info
			{
				width:100%;
			}
			.mar-lef_2
			{
				margin-left:2%;
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
		<div id="container" style="height:265%;"><br>
			<h1 class="central_textalign">Application For Employment</h1><br>
			<div style=margin:1% 1% 1% 1%;>
				<form name="Application For Employment" id="f1">
					<table style="margin-left:5%;">
						<tr>
							<td>Full Name : </td>
							<td><input style="margin-left:%;" type="text" name="name"></td>
							<td> &nbsp&nbsp&nbsp&nbsp Post Applied For : </td>
							<td><input style="margin-left:7%;" type="text" name="post"></td>
						</tr>
						<tr>
							<td>Father's Name : </td>
							<td><input type="text" name="fname"></td>
							<td> &nbsp&nbsp&nbsp&nbsp Mother's Name : </td>
							<td><input style="margin-left:7%;" type="text" name="mname"></td>
						</tr>
						<tr>
							<td>Spouse's Name : </td>
							<td><input type="text" name="sname"></td>
						</tr>
						<tr>
							<td>Educational Qualification : </td>
							<td><input type="text" name="ed_qual"></td>
							<td> &nbsp&nbsp&nbsp&nbsp Technical Qualification : </td>
							<td><input style="margin-left:7%;" type="text" name="tec_qual"></td>
						</tr>
					</table>	
					<table style="margin-left:5%;">
						<tr>
							<td>Date Of Birth : </td>
							<td><input style="margin-left:14.3%;" type="date" name="dob"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Birth Place : </td>
							<td><input style="margin-left:21.7%;" type="text" name="pob"></td>
						</tr>
						<tr>
							<td>Passport Number : </td>
							<td><input style="margin-left:14.3%;" type="text" name="passno"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Issued Place : </td>
							<td><input style="margin-left:21.7%;" type="text" name="issue_pl"></td>
						</tr>
						<tr>
							<td>Date Of Issue : </td>
							<td><input style="margin-left:14.2%;" type="date" name="issue_dt"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Expiry Date : </td>
							<td><input style="margin-left:21.7%;" type="date" name="dt_exp"></td>
						</tr>
						<tr>
							<td>Permanent Address<br>With Contact Nos. : </td>
							<td><Textarea style="margin-left:14.2%;" name="per_address" ></textarea></td>
						</tr>
						<tr>
							<td>Religion : </td>
							<td><input style="margin-left:14.2%;" type="text" name="religion"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Mother Tongue : </td>
							<td><input style="margin-left:21.5%;" type="text" name="lang" ></td>
						</tr>	
					</table>
					<p style="margin-left:5.25%;font-size:105%;">Marital Status : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input class="bre15px" type="Radio" value="Single" name="mar_status">&nbsp Single &nbsp&nbsp
						<input class="bre15px" type="Radio" value="Married" name="mar_status"/>&nbsp Married
						<span style="margin-left:16%;"> Number Of Children : <input style="margin-left:2.8%;" type="number" name="child"></span>
					</p>
					<p style="margin-left:5.25%;font-size:90%;" >EXPERIENCE  IN  INDIA</p>
					<table style="margin-left:18%;" border=5; cellspacing=5px; cellpadding=5px;>
						<tr>
							<th>S.NO&nbsp </th>
							<th>Company&nbsp </th>
							<th>Position Held&nbsp </th>
							<th>Salary&nbsp </th>
							<th>Period&nbsp </th>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 1. </td>
							<td><input class="info" type="text" name="in_name_1"></td>
							<td><input class="info" type="text" name="in_desg_1"></td>
							<td><input class="info" type="number" name="in_sal_1"></td>
							<td><input class="info" type="text" name="in_dur_1"></td>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 2. </td>
							<td><input class="info" type="text" name="in_name_2"></td>
							<td><input class="info" type="text" name="in_desg_2"></td>
							<td><input class="info" type="number" name="in_sal_2"></td>
							<td><input class="info" type="text" name="in_dur_2"></td>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 3. </td>
							<td><input class="info" type="text" name="in_name_3"></td>
							<td><input class="info" type="text" name="in_desg_3"></td>
							<td><input class="info" type="number" name="in_sal_3"></td>
							<td><input class="info" type="text" name="in_dur_3"></td>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 4. </td>
							<td><input class="info" type="text" name="in_name_4"></td>
							<td><input class="info" type="text" name="in_desg_4"></td>
							<td><input class="info" type="number" name="in_sal_4"></td>
							<td><input class="info" type="text" name="in_dur_4"></td>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 5. </td>
							<td><input class="info" type="text" name="in_name_5"></td>
							<td><input class="info" type="text" name="in_desg_5"></td>
							<td><input class="info" type="number" name="in_sal_5"></td>
							<td><input class="info" type="text" name="in_dur_5"></td>
						</tr>
					</table>	
					<p style="margin-left:5.25%;font-size:90%;">EXPERIENCE IN ABROAD</p>
					<table style="margin-left:18%;" border=5; cellspacing=5px; cellpadding=5px;>
						<tr>
							<th>S.NO&nbsp </th>
							<th>Company&nbsp </th>
							<th>Position Held&nbsp </th>
							<th>Salary&nbsp </th>
							<th>Period&nbsp </th>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 1. </td>
							<td><input class="info" type="text" name="ab_name_1"></td>
							<td><input class="info" type="text" name="ab_desg_1"></td>
							<td><input class="info" type="number" name="ab_sal_1"></td>
							<td><input class="info" type="text" name="ab_dur_1"></td>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 2. </td>
							<td><input class="info" type="text" name="ab_name_2"></td>
							<td><input class="info" type="text" name="ab_desg_2"></td>
							<td><input class="info" type="number" name="ab_sal_2"></td>
							<td><input class="info" type="text" name="ab_dur_2"></td>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 3. </td>
							<td><input class="info" type="text" name="ab_name_3"></td>
							<td><input class="info" type="text" name="ab_desg_3"></td>
							<td><input class="info" type="number" name="ab_sal_3"></td>
							<td><input class="info" type="text" name="ab_dur_3"></td>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 4. </td>
							<td><input class="info" type="text" name="ab_name_4"></td>
							<td><input class="info" type="text" name="ab_desg_4"></td>
							<td><input class="info" type="number" name="ab_sal_4"></td>
							<td><input class="info" type="text" name="ab_dur_4"></td>
						</tr>
						<tr>
							<td>&nbsp&nbsp&nbsp 5. </td>
							<td><input class="info" type="text" name="ab_name_5"></td>
							<td><input class="info" type="text" name="ab_desg_5"></td>
							<td><input class="info" type="number" name="ab_sal_5"></td>
							<td><input class="info" type="text" name="ab_dur_5"></td>
						</tr>
					</table><br>	
					<table style="margin-left:5%;">
						<tr>
							<td>Driving License No : </td>
							<td><input class="info" type="text" name="li_no"></td>
							<td> &nbsp&nbsp&nbsp Type : </td>
							<td><input class="info" type="text" name="li_ty"></td>
							<td> &nbsp&nbsp&nbsp Issued Date : </td>
							<td><input class="info" type="date" name="is_dt"></td>
							<td> &nbsp&nbsp&nbsp Issued Place : </td>
							<td><input class="info" type="text" name="li_pl"></td>
						</tr>
					</table>	
					<table style="margin-left:5%;">
						<tr>
							<td>Languages Known : </td>
							<td><input style="margin-left:1.5%;" type="text" name="lang_knwn"></td>
							<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Expected Salary :  &nbsp&nbsp </td>
							<td><input type="number" name="salary"></td>
						</tr>
					</table>
					<p style="margin-left:5.25%;font-size:115%;">Name and address of any Two Relatives : </p>					
					<table style="margin-left:5%;">
						<tr>
							<td>Relative 1 - Name: </td>
							<td><input type="text" name="name_1"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Relative 2 - Name: </td>
							<td><input style="margin-left:%;" type="text" name="name_2"></td>
						</tr>
						<tr>
							<td>Address : </td>
							<td><Textarea  name="address1" ></textarea></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Address : </td>
							<td><Textarea style="margin-left:%;" name="address2" ></textarea></td>
						</tr>
						<tr>
							<td>Landline(with STD code) : </td>
							<td><input style="margin-left:%;" type="number" name="land_1"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLandline(with STD code) : </td>
							<td><input style="margin-left:%;" type="number" name="land_2"></td>
						</tr>
						<tr>
							<td> Email : </td>
							<td><input type="email" name="mail_1"></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Email : </td>
							<td><input type="email" name="mail_2"></td>	
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
	var result;
	var pname = f1.name;
	var applied_for = f1.post;
	
	var dad_name = f1.fname;
	var Mom_name = f1.mname;
	var spouse_name = f1.sname;
	
	var edu_qualification = f1.ed_qual;
	var tech_qualification = f1.tec_qual;
	var dob = f1.dob;
	var place_of_bir = f1.pob;
	var passport_num = f1.passno;
	var issue_place = f1.issue_pl;
	var issue_date = f1.issue_dt;
	var expiry_date = f1.dt_exp;
	
	var permanent_address = f1.per_address;
	var religion = f1.religion;
	var language = f1.lang;	
	var mari_status = f1.mar_status;
	var children = f1.child;
	
	//////////////////////////////////////////////
	
	var inn_name_1 = f1.in_name_1;
	var inn_desg_1 = f1.in_desg_1;
	var inn_sal_1 = f1.in_sal_1;
	var inn_dur_1 = f1.in_dur_1;
	
	var inn_name_2 = f1.in_name_2;
	var inn_desg_2 = f1.in_desg_2;
	var inn_sal_2 = f1.in_sal_2;
	var inn_dur_2 = f1.in_dur_2;

	var inn_name_3 = f1.in_name_3;
	var inn_desg_3 = f1.in_desg_3;
	var inn_sal_3 = f1.in_sal_3;
	var inn_dur_3 = f1.in_dur_3;

	var inn_name_4 = f1.in_name_4;
	var inn_desg_4 = f1.in_desg_4;
	var inn_sal_4 = f1.in_sal_4;
	var inn_dur_4 = f1.in_dur_4;

	var inn_name_5 = f1.in_name_5;
	var inn_desg_5 = f1.in_desg_5;
	var inn_sal_5 = f1.in_sal_5;
	var inn_dur_5 = f1.in_dur_5;
	
	///////////////////////////////////////	
	
	var abb_name_1 = f1.ab_name_1;
	var abb_desg_1 = f1.ab_desg_1;
	var abb_sal_1 = f1.ab_sal_1;
	var abb_dur_1 = f1.ab_dur_1;
	
	var abb_name_2 = f1.ab_name_2;
	var abb_desg_2 = f1.ab_desg_2;
	var abb_sal_2 = f1.ab_sal_2;
	var abb_dur_2 = f1.ab_dur_2;

	var abb_name_3 = f1.ab_name_3;
	var abb_desg_3 = f1.ab_desg_3;
	var abb_sal_3 = f1.ab_sal_3;
	var abb_dur_3 = f1.ab_dur_3;
	
	var abb_name_4 = f1.ab_name_4;
	var abb_desg_4 = f1.ab_desg_4;
	var abb_sal_4 = f1.ab_sal_4;
	var abb_dur_4 = f1.ab_dur_4;
	
	var abb_name_5 = f1.ab_name_5;
	var abb_desg_5 = f1.ab_desg_5;
	var abb_sal_5 = f1.ab_sal_5;
	var abb_dur_5 = f1.ab_dur_5;

	////////////////////////////////////////////////

	var dri_no = f1.li_no;
	var dri_type = f1.li_ty;
	var dri_issue_date = f1.is_dt;
	var dri_issue_place = f1.li_pl;
	var lang_knw = f1.lang_knwn;
	var exp_sal = f1.salary;
		
	var person1_name = f1.name_1;
	var person2_name = f1.name_2;
	
	var person1_add = f1.address1;
	var person2_add = f1.address2;
	
	var person1_land = f1.land_1;
	var person2_land = f1.land_2;

	var person1_mail = f1.mail_1;
	var person2_mail = f1.mail_2;


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
		alert('Applicant\'s Name cannot be left empty');
		return false;
	}
	
	
	//for post applied
	var result = (nonEmpty(applied_for.value));
	if(result == 1)
	{
		if (!allLetters(applied_for))
		{
			alert('Post applied for can contain only Alphabets,Blank space and Period(.)');	
			return false;
		}
	}	
	else 
	{
		alert('Post applied for cannot be left empty');
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
		alert('Mother\'s cannot be left empty');
		return false;
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

	
	//for educational qualification
	result = (nonEmpty(edu_qualification.value));
	if (result == 1)
	{
		if (!Check_Format(edu_qualification))
		{			
			return false;
		}
	}	
	else
	{
		alert('Educational Qualification cannot be left empty');
		return false;
	}

	
	//for technichal qualification
	result = (nonEmpty(tech_qualification.value));
	if (result == 1)
	{
		if (!Lett_com_spac_dot(tech_qualification))
		{			
			alert('Technical Qualification can contain only Alphabets, Blank Space, Comma and Period(.)');
			return false;
		}
	}	
	else
	{
		alert('Technical Qualification cannot be left empty');
		return false;
	}
	
	
	//for date of birth
	result = (nonEmpty(dob.value));
	if (result == 0)
	{
		alert('Date Of Birth cannot be left empty');
		return false;
	}
	
	//for place of birth
	result = (nonEmpty(place_of_bir.value));
	if(result == 1)	
	{	
		if (!allLetters(place_of_bir))
		{
			alert('Birth Place can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('Birth Place cannot be left empty');
		return false;
	}
	
	
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
		alert('Passport Number cannot be left empty');
		return false;
	}		
	
	
	//for issue place
	result = (nonEmpty(issue_place.value));
	if(result == 1)	
	{	
		if (!allLetters(issue_place))
		{
			alert('Issued place can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('Issue placed cannot be left empty');
		return false;
	}

	

	//for issue date
	result = (nonEmpty(issue_date.value));
	if(result == 0)	
	{	
		alert('Issue date cannot be left empty');
		return false;
	}
				
			
	//for expiry date
	result = (nonEmpty(expiry_date.value));
	if(result == 0)	
	{	
		alert('Expiry date cannot be left empty');
		return false;
	}
	
	
	//for permanent address
	result = (nonEmpty(permanent_address.value));
	if (result == 0)
	{
		alert('Permanent Address(with Contact Numbers)  cannot be left empty');
		return false;
	}
	
	
	//for Religion
	result = (nonEmpty(religion.value));
	if(result == 1)	
	{	
		if (!allLetters(religion))
		{
			alert('Religion can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('Religion cannot be left empty');
		return false;
	}


	//for Mother Tounge
	result = (nonEmpty(language.value));
	if(result == 1)	
	{	
		if (!allLetters(language))
		{
			alert('Mother Tounge can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('Mother Tounge cannot be left empty');
		return false;
	}


	//for marital status
	result = (nonEmpty(mari_status.value));
	if (result == 0)
	{
		alert('Marital Status cannot be left empty');
		return false;
	}	
	

	//for Number of children
	result = (nonEmpty(children.value));
	if (result == 0)
	{
		alert('Number of children cannot be left empty');
		return false;
	}	
	
	
	//for working india details
	for(var i = 0; i < 5 ;i++)
	{
		var w,x,y,z,res,a,b,c,d;
		if(i == 0)
		{		
			w = (nonEmpty(inn_name_1.value));
			x = (nonEmpty(inn_desg_1.value));
			y = (nonEmpty(inn_sal_1.value));
			z = (nonEmpty(inn_dur_1.value));
		}
		else if(i == 1)
		{		
			w = (nonEmpty(inn_name_2.value));
			x = (nonEmpty(inn_desg_2.value));
			y = (nonEmpty(inn_sal_2.value));
			z = (nonEmpty(inn_dur_2.value));
		}
		else if(i == 2)
		{		
			w = (nonEmpty(inn_name_3.value));
			x = (nonEmpty(inn_desg_3.value));
			y = (nonEmpty(inn_sal_3.value));
			z = (nonEmpty(inn_dur_3.value));
		}
		else if(i == 3)
		{		
			w = (nonEmpty(inn_name_4.value));
			x = (nonEmpty(inn_desg_4.value));
			y = (nonEmpty(inn_sal_4.value));
			z = (nonEmpty(inn_dur_4.value));
		}
		else if(i == 4)
		{		
			w = (nonEmpty(inn_name_5.value));
			x = (nonEmpty(inn_desg_5.value));
			y = (nonEmpty(inn_sal_5.value));
			z = (nonEmpty(inn_dur_5.value));
		}

		if ((w == 1) && (x == 1) && (y == 1) && (z == 1))
		{
			if(i == 0)
			{
				a = inn_name_1;
				b = inn_desg_1;
				c = inn_sal_1;
				d = inn_dur_1;
			}
			else if(i == 1)
			{
				a = inn_name_2;
				b = inn_desg_2;
				c = inn_sal_2;
				d = inn_dur_2;
			}
			else if(i == 2)
			{
				a = inn_name_3;
				b = inn_desg_3;
				c = inn_sal_3;
				d = inn_dur_3;
			}
			else if(i == 3)
			{
				a = inn_name_4;
				b = inn_desg_4;
				c = inn_sal_4;
				d = inn_dur_4;
			}
			else if(i == 4)
			{
				a = inn_name_5;
				b = inn_desg_5;
				c = inn_sal_5;
				d = inn_dur_5;
			}
			res = (allLetters(a));
			if (res == 0)
			{
				alert('Company Name can contain only Alphabets,Blank space and Period(.)');	
				return false;
			}
			res = (allLetters(b));
			if (res == 0)
			{
				alert('Position Held can contain only Alphabets,Blank space and Period(.)');	
				return false;
			}
			res = (nonEmpty(c));
			if (res == 0)
			{
				alert('Salary cannot be left empty');
				return false;
			}
			res = (allLetter_num(d));
			if (res == 0)
			{
				alert('Period can contain only Alphabets, Blank space, Period(.), Forward Slash(/) and Number');	
				return false;
			}
		}
		if
		(
				((w == 0)&&(x == 0)&&(y == 0)&&(z == 1)) || ((w == 0)&&(x == 0)&&(y == 1)&&(z == 0)) || 
				((w == 0)&&(x == 0)&&(y == 1)&&(z == 1)) || ((w == 0)&&(x == 1)&&(y == 0)&&(z == 0)) || 
				((w == 0)&&(x == 1)&&(y == 0)&&(z == 1)) || ((w == 0)&&(x == 1)&&(y == 1)&&(z == 0)) || 
				((w == 0)&&(x == 1)&&(y == 1)&&(z == 1)) || ((w == 1)&&(x == 0)&&(y == 0)&&(z == 0)) || 
				((w == 1)&&(x == 0)&&(y == 0)&&(z == 1)) || ((w == 1)&&(x == 0)&&(y == 1)&&(z == 0)) || 	
				((w == 1)&&(x == 0)&&(y == 1)&&(z == 1)) || ((w == 1)&&(x == 1)&&(y == 0)&&(z == 0)) || 
				((w == 1)&&(x == 1)&&(y == 0)&&(z == 1)) || ((w == 1)&&(x == 1)&&(y == 1)&&(z == 0)) 
		)
		{
			alert('Please complete the experience details');
			return false;
		}		
	}

	
	//for working abroad details
	for(var i = 0; i < 5 ;i++)
	{
		var w,x,y,z,res,a,b,c,d;
		if(i == 0)
		{		
			w = (nonEmpty(abb_name_1.value));
			x = (nonEmpty(abb_desg_1.value));
			y = (nonEmpty(abb_sal_1.value));
			z = (nonEmpty(abb_dur_1.value));
		}
		else if(i == 1)
		{		
			w = (nonEmpty(abb_name_2.value));
			x = (nonEmpty(abb_desg_2.value));
			y = (nonEmpty(abb_sal_2.value));
			z = (nonEmpty(abb_dur_2.value));
		}
		else if(i == 2)
		{		
			w = (nonEmpty(abb_name_3.value));
			x = (nonEmpty(abb_desg_3.value));
			y = (nonEmpty(abb_sal_3.value));
			z = (nonEmpty(abb_dur_3.value));
		}
		else if(i == 3)
		{		
			w = (nonEmpty(abb_name_4.value));
			x = (nonEmpty(abb_desg_4.value));
			y = (nonEmpty(abb_sal_4.value));
			z = (nonEmpty(abb_dur_4.value));
		}
		else if(i == 4)
		{		
			w = (nonEmpty(abb_name_5.value));
			x = (nonEmpty(abb_desg_5.value));
			y = (nonEmpty(abb_sal_5.value));
			z = (nonEmpty(abb_dur_5.value));
		}

		if ((w == 1) && (x == 1) && (y == 1) && (z == 1))
		{
			if(i == 0)
			{
				a = abb_name_1;
				b = abb_desg_1;
				c = abb_sal_1;
				d = abb_dur_1;
			}
			else if(i == 1)
			{
				a = abb_name_2;
				b = abb_desg_2;
				c = abb_sal_2;
				d = abb_dur_2;
			}
			else if(i == 2)
			{
				a = abb_name_3;
				b = abb_desg_3;
				c = abb_sal_3;
				d = abb_dur_3;
			}
			else if(i == 3)
			{
				a = abb_name_4;
				b = abb_desg_4;
				c = abb_sal_4;
				d = abb_dur_4;
			}
			else if(i == 4)
			{
				a = abb_name_5;
				b = abb_desg_5;
				c = abb_sal_5;
				d = abb_dur_5;
			}
			res = (allLetters(a));
			if (res == 0)
			{
				alert('Company Name can contain only Alphabets,Blank space and Period(.)');	
				return false;
			}
			res = (allLetters(b));
			if (res == 0)
			{
				alert('Position Held can contain only Alphabets,Blank space and Period(.)');	
				return false;
			}
			res = (nonEmpty(c));
			if (res == 0)
			{
				alert('Salary cannot be left empty');
				return false;
			}
			res = (allLetter_num(d));
			if (res == 0)
			{
				alert('Period can contain only Alphabets, Blank space, Period(.), Forward Slash(/) and Number');	
				return false;
			}
		}
		if
		(
				((w == 0)&&(x == 0)&&(y == 0)&&(z == 1)) || ((w == 0)&&(x == 0)&&(y == 1)&&(z == 0)) || 
				((w == 0)&&(x == 0)&&(y == 1)&&(z == 1)) || ((w == 0)&&(x == 1)&&(y == 0)&&(z == 0)) || 
				((w == 0)&&(x == 1)&&(y == 0)&&(z == 1)) || ((w == 0)&&(x == 1)&&(y == 1)&&(z == 0)) || 
				((w == 0)&&(x == 1)&&(y == 1)&&(z == 1)) || ((w == 1)&&(x == 0)&&(y == 0)&&(z == 0)) || 
				((w == 1)&&(x == 0)&&(y == 0)&&(z == 1)) || ((w == 1)&&(x == 0)&&(y == 1)&&(z == 0)) || 	
				((w == 1)&&(x == 0)&&(y == 1)&&(z == 1)) || ((w == 1)&&(x == 1)&&(y == 0)&&(z == 0)) || 
				((w == 1)&&(x == 1)&&(y == 0)&&(z == 1)) || ((w == 1)&&(x == 1)&&(y == 1)&&(z == 0)) 
		)
		{
			alert('Please complete the experience details');
			return false;
		}		
	}


	
	//for driving licence no
	result = (nonEmpty(dri_no.value));
	if (result == 1)
	{
		if (!Driv_Format_No(dri_no))
		{			
			return false;
		}
	}	
	else if(result == 0)
	{
		alert('Driving Licence Number cannot be left empty');
		return false;
	}


	//for driving licence type
	result = (nonEmpty(dri_type.value));
	if (result == 1)
	{
		if (!Driv_Format_Ty(dri_type))
		{			
			return false;
		}
	}	
	else
	{
		alert('Driving Licence Type cannot be left empty');
		return false;
	}


	//for driv license issue date
	result = (nonEmpty(dri_issue_date.value));
	if(result == 0)	
	{	
		alert('Driving License issue date cannot be left empty');
		return false;
	}
				
			
	//for driv license issue place
	result = (nonEmpty(dri_issue_place.value));
	if(result == 1)	
	{	
		if (!allLetters(dri_issue_place))
		{
			alert('Driving License issue place can contain only Alphabets');	
			return false;
		}			
	}	
	else 
	{
		alert('Driving License issue place cannot be left empty');
		return false;
	}


	//for Languages known
	result = (nonEmpty(lang_knw.value));
	if(result == 1)	
	{	
		if (!allLetters(lang_knw))
		{
			alert('Languages Known can contain only Alphabets and Blank Spaces');	
			return false;
		}			
	}	
	else 
	{
		alert('Languages Known cannot be left empty');
		return false;
	}
	
	
	//for expected salary
	result = (nonEmpty(exp_sal.value));
	if(result == 0)	
	{	
		alert('Expected Salary cannot be left empty');
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
	

	//for 2 landline number	
	for(var i = 0;i < 2;i++)
	{
		var a;
		if(i == 0)
		{
			a = person1_land;
			result = (nonEmpty(a.value));
			if(result == 0)	
			{	
				alert('Person 1\'s landline number must be specified');
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
			a = person2_land;
			result = (nonEmpty(a.value));
			if(result == 0)	
			{	
				alert('Person 2\'s landline number must be specified');
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

	
	//for person 1 mail
	result = (nonEmpty(person1_mail.value));
	if (result == 1)
	{
		if (!mailFormat(person1_mail))
		{			
			return false;
		}
	}	
	else
	{
		alert('Person 1\'s Email Id cannot be left empty');
		return false;
	}
	
	
	//for person 2 mail
	result = (nonEmpty(person2_mail.value));
	if (result == 1)
	{
		if (!mailFormat(person2_mail))
		{			
			return false;
		}
	}	
	else
	{
		alert('Person 2\'s Email Id cannot be left empty');
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
			

function Check_Format(degree)	
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

function Lett_com_spac_dot(name)
{
	var letters = /^[A-Za-z\s\.,]+$/;
	if(name.value.match(letters))
	{
		return true;
	}
	else
	{
		return false;
	}								
}			

function Driv_Format_No(num)
{
	var no = /^([A-Z]{2})-([0-9]{13})$/;
	if(num.value.match(no))
	{
		return true;
	}
	else
	{
		alert('Enter a valid Driving Licence Number');	
		return false;
	}								
}

function Driv_Format_Ty(ty)
{
	var ty_pat = /^([A-Z]{2})([\s-])?([0-9]+)([A-Z]{2})$/;
	if(ty.value.match(ty_pat))
	{
		return true;
	}
	else
	{
		alert('Enter a valid Driving Licence Type');	
		return false;
	}								
}			
			
function allLetter_num(details)
{
	var letters = /^[A-Za-z0-9\s\.\/]+$/;
	if(details.value.match(letters))
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
	if(((con_number.length) == 11))
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