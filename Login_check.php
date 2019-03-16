<?php	
	include_once 'connection_db.php' ;
	session_start();
	
	$userr_name = $_GET['user_name'];
	$passwd = $_GET['passWord'];
	
	
	$rept_usr_nam = mysqli_query($conn,"SELECT * FROM users WHERE user_name = '$userr_name' && passwd = '$passwd'");
	if (mysqli_num_rows($rept_usr_nam) > 0)
	{
		$_SESSION["uname"] = $userr_name ;
		header("Location: UserPage.php");
		
	}
	else	
	{
		echo "<script type='text/javascript'> alert('Username or Password is Invalid'); </script>";
		echo "<script type='text/javascript'> location.href='Login.php' </script>";	

	}	
?>

