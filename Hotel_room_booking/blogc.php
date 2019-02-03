<?php
	session_start();
	$username=$_SESSION['loggedin'];

	if(isset($username))
	{
		header("location:bloglg.php");
	}
	else 
	{
		header("location:blog.php");
	}
?>