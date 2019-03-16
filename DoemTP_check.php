<?php	
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];

	$name = $_GET['cus_name'];	
	$email = $_GET['cus_mail'];
	$num1 = $_GET['num_1'];
	$num2 = $_GET['num_2'];
	$st_pt = $_GET['from'];
	$end_pt = $_GET['destination'];
	$dep_dt = $_GET['depart1'];	
	$ret_dt = $_GET['return1'];
	$no_passg = $_GET['n_pass'];
	$budget = $_GET['budget'];
	
	$place1 = $_GET['pal1'];
	$place2 = $_GET['pal2'];
	$place3 = $_GET['pal3'];
	$place4 = $_GET['pal4'];
	$place5 = $_GET['pal5'];
	$place6 = $_GET['pal6'];
	
	
	$p1_nam = $_GET['pass1_nam'];	
	$p1_age = $_GET['pass1_age'];	
	$p1_gen = $_GET['pass1_gen'];	
	
	$p2_nam = $_GET['pass2_nam'];	
	$p2_age = $_GET['pass2_age'];	
	//$p2_gen = $_GET['pass2_gen'];	
	
	$p3_nam = $_GET['pass3_nam'];	
	$p3_age = $_GET['pass3_age'];	
	//$p3_gen = $_GET['pass3_gen'];	
	
	$p4_nam = $_GET['pass4_nam'];	
	$p4_age = $_GET['pass4_age'];	
	//$p4_gen = $_GET['pass4_gen'];	
	
	$p5_nam = $_GET['pass5_nam'];	
	$p5_age = $_GET['pass5_age'];	
	//$p5_gen = $_GET['pass5_gen'];	
	
	$v1_frm = $_GET['origin1'];
	$v1_to = $_GET['destination1'];
	$v1_dep = $_GET['depart_1'];
	$v1_str = $_GET['Stars1'];
	$v1_typ = $_GET['Type1'];

	$v2_frm = $_GET['origin2'];
	$v2_to = $_GET['destination2'];
	$v2_dep = $_GET['depart_2'];
	$v2_str = $_GET['Stars2'];
	$v2_typ = $_GET['Type2'];
	
	$v3_frm = $_GET['origin3'];
	$v3_to = $_GET['destination3'];
	$v3_dep = $_GET['depart_3'];
	$v3_str = $_GET['Stars3'];
	$v3_typ = $_GET['Type3'];
	
	$v4_frm = $_GET['origin4'];
	$v4_to = $_GET['destination4'];
	$v4_dep = $_GET['depart_4'];
	$v4_str = $_GET['Stars4'];
	$v4_typ = $_GET['Type4'];
	//echo "h1";
	
	if(isset($_GET['pass2_gen'])) 
	{
		$p2_gen = $_GET['pass2_gen'];		
		$sql = "INSERT INTO doem_tour_pack (pass2_gen) VALUES ('$p2_gen') WHERE user_name = '$username';";
		mysqli_query($conn,$sql);		
		//echo "h2";
	}
	else 
	{
		$p2_gen = NULL;
		//echo "h3";
	}

	if(isset($_GET['pass3_gen'])) 
	{
		$p3_gen = $_GET['pass3_gen'];		
		$sql = "INSERT INTO doem_tour_pack (pass3_gen) VALUES ('$p3_gen') WHERE user_name = '$username';";
		mysqli_query($conn,$sql);		
		//echo "h2";
	}
	else 
	{
		$p3_gen = NULL;
		//echo "h3";
	}
	
	if(isset($_GET['pass4_gen'])) 
	{
		$p4_gen = $_GET['pass4_gen'];		
		$sql = "INSERT INTO doem_tour_pack (pass4_gen) VALUES ('$p4_gen') WHERE user_name = '$username';";
		mysqli_query($conn,$sql);		
		//echo "h2";
	}
	else 
	{
		$p4_gen = NULL;
		//echo "h3";
	}
	
	if(isset($_GET['pass5_gen'])) 
	{
		$p5_gen = $_GET['pass5_gen'];		
		$sql = "INSERT INTO doem_tour_pack (pass5_gen) VALUES ('$p5_gen') WHERE user_name = '$username';";
		mysqli_query($conn,$sql);		
		//echo "h2";
	}
	else 
	{
		$p5_gen = NULL;
		//echo "h3";
	}
	
	$sql = 
		"INSERT INTO doem_tour_pack VALUES (
		'$username','$name' ,'$email' ,'$num1' ,'$num2' ,'$st_pt' ,'$end_pt' ,'$dep_dt' ,'$ret_dt' ,'$no_passg' ,'$budget' ,
		'$place1' ,'$place2' ,'$place3' ,'$place4' ,'$place5' ,'$place6' ,
		'$p1_nam' ,'$p1_age' ,'$p1_gen' ,
		'$p2_nam' ,'$p2_age' ,
		'$p3_nam' ,'$p3_age' ,
		'$p4_nam' ,'$p4_age' ,
		'$p5_nam' ,'$p5_age' ,
		'$v1_frm', '$v1_to' ,'$v1_dep' ,'$v1_str' ,'$v1_typ' ,
		'$v2_frm' ,'$v2_to' ,'$v2_dep' ,'$v2_str' ,'$v2_typ' ,
		'$v3_frm' ,'$v3_to' ,'$v3_dep' ,'$v3_str' ,'$v3_typ' ,
		'$v4_frm' ,'$v4_to' ,'$v4_dep' ,'$v4_str' ,'$v4_typ' );";



	mysqli_query($conn,$sql);
	//echo "h4";
	echo "<script type='text/javascript'> alert('Form Submitted'); </script>";
	echo "<script type='text/javascript'> location.href='My_Account.php' </script>";	

		
?>



