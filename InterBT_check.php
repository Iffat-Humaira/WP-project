<?php	
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];

	$name = $_GET['cus_name'];	
	$email = $_GET['cus_mail'];
	$num1 = $_GET['num_1'];
	$end_pt = $_GET['destination'];
	$num2 = $_GET['num_2'];
	$no_passg = $_GET['n_pass'];
	$dep_dt = $_GET['depart1'];	
	$ret_dt = $_GET['return1'];
	$board_pt = $_GET['bod_point'];	
	$drop_pt = $_GET['drop_point'];
	
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

	$dept_time = $_GET['Time'];	
	$bus_type = $_GET['Type'];
	
	
	
	
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
		"INSERT INTO `doem_tour_pack` (
		`user_name`, `uname`, `email`, `contact_num1`, `end_pt`, `contact_num2`, `no_pass`, `dep_date`, `ret_date`, `brd_pt`, `drp_pt`,
		`pass1_name`, `pass1_age`, `pass1_gen`, `pass2_name`, `pass2_age`, 
		`pass3_name`, `pass3_age`, `pass4_name`, `pass4_age`, `pass5_name`, `pass5_age`, 
	    `dep_time`, `bus_type`)
    	
		
	
		VALUES (
		'$username','$name' ,'$email' ,'$num1' ,'$end_pt' ,'$num2' ,'$no_passg' ,'$dep_dt' ,'$ret_dt' ,'$board_pt' ,'$drop_pt' ,
		'$p1_nam' ,'$p1_age' ,'$p1_gen' ,
		'$p2_nam' ,'$p2_age' ,
		'$p3_nam' ,'$p3_age' ,
		'$p4_nam' ,'$p4_age' ,
		'$p5_nam' ,'$p5_age' ,
		'$dept_time' ,'$bus_type'  );";



	mysqli_query($conn,$sql);
	//echo "h4";
	//echo "<script type='text/javascript'> alert('Form Submitted'); </script>";
	//echo "<script type='text/javascript'> location.href='My_Profile.php' </script>";	

		
?>


	