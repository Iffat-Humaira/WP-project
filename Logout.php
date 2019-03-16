<?php	
	include_once 'connection_db.php' ;
	session_start();
	
	if(isset($_SESSION["uname"]))
	{
		session_destroy();
		
		echo "<script type='text/javascript'> location.href='Login.php' </script>";	
	}
	else
	{
		echo "<script type='text/javascript'> location.href='Login.php' </script>";	
	}
	
?>	