<?php
	session_start();
	$username=$_SESSION['loggedin'];

	if(isset($username))
	{
		header("location:contactlg.php");
	}
	else 
	{
		header("location:contact.php");
	}
?>