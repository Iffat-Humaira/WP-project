<?php	
	include_once 'connection_db.php' ;
	session_start();
	$first = $_GET['f_name'];	
	$last = $_GET['l_name'];
	$email = $_GET['user_mail'];
	$con_num = $_GET['num'];
	$user_name = $_GET['usr_name'];
	$passwd = $_GET['passWord'];
	
	
	$rept_usr_nam = mysqli_query($conn,"SELECT * FROM users WHERE user_name = '$user_name'");
	if (mysqli_num_rows($rept_usr_nam) > 0)
	{
		echo "<script type='text/javascript'> alert('Username is already taken! Please enter another Username'); </script>";
		echo "<script type='text/javascript'> location.href='Sign_Up.php' </script>";	
	}
	else	
	{
		$sql = "INSERT INTO users (first_name ,last_name ,user_mail ,contact_num , user_name ,passwd ) 
				VALUES ('$first', '$last', '$email', '$con_num', '$user_name', '$passwd');";
				mysqli_query($conn,$sql);
				$_SESSION["uname"] = $user_name ;
				//NOT THIS ONE>>THE BELOW header("Location: index.php?signup=success");
				header("Location: UserPage.php");

	}	


?>

