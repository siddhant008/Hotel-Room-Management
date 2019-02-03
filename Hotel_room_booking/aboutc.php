<?php
	session_start();
	$username=$_SESSION['loggedin'];

	if(isset($username))
	{
		header("location:aboutlg.php");
	}
	else 
	{
		header("location:about.php");
	}
?>