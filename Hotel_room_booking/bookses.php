<?php
session_start();
if(isset($_SESSION['loggedin']))
{
	header("location: book.php");
}
else
{
	header("location: login.php");
}
?>
