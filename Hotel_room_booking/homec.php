<?php
	session_start();
	$username=$_SESSION['loggedin'];

	if(isset($username))
	{
		header("location:homelg.php");
	}
	else 
	{
		header("location:home.php");
	}
?>