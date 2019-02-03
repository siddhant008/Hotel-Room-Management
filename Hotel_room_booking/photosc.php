<?php
	session_start();
	$username=$_SESSION['loggedin'];

	if(isset($username))
	{
		header("location:photoslg.php");
	}
	else 
	{
		header("location:photos.php");
	}
?>