<?php
	include_once 'connection_db.php' ;
	session_start();
	
	$username = $_SESSION["uname"];
	$sql = "DELETE FROM users WHERE user_name = '$username'";
	$rs = mysqli_query($conn,$sql);
	header("Location: Logout.php");

	
?>
