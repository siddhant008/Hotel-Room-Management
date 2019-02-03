<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
	echo "<script>
		alert('Please Login First');
		window.location.href='login.php';
		</script>";
}
session_destroy();

if(isset($_SESSION['loggedin']))
{
	unset($_SESSION['loggedin']);
}

echo "<script>
		alert('Logout Successful');
		window.location.href='login.php';
		</script>";
?>

<html>
<head>
<title>Hotel Sid</title>
<link rel="shortcut icon" href="ss.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body background="main.jpg" align="center"><br><br>
</html>