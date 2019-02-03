<?php
	session_start();
	$username=$_SESSION['loggedin'];

	if(isset($username))
	{
		header("location:abouthotellg.php");
	}
	else 
	{
		header("location:abouthotel.php");
	}
?>