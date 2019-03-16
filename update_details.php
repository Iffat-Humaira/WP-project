<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
	$email = $_GET['mail'];
	$con = $_GET['con_num'];
	$pwd = $_GET['pass'];
	
	if(isset($_GET['Submit']))
	{
		$sql = "UPDATE users SET user_mail = '$email', contact_num = '$con', passwd = '$pwd' WHERE user_name = '$username';";
		$rs = mysqli_query($conn,$sql);
		echo "<script type='text/javascript'> alert('Details Updated'); </script>";
		echo "<script type='text/javascript'> location.href='My_Account.php' </script>";	
	}	


?>