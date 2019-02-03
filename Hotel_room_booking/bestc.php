<?php
	session_start();
	$username=$_SESSION['loggedin'];

	if(isset($username))
	{
		header("location:bestlg.php");
	}
	else 
	{
		header("location:best.php");
	}
?>