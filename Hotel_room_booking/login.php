<?php
session_start();
if(isset($_SESSION['loggedin']))
{
	echo "<script>
		alert('Already Logged in, Please Logout First');
		window.location.href='book.php';
		</script>";
}
?>
<style>
body{
    border: 2px solid black;
    padding: 25px;
    background-size: 1380px 800px;
}

input{
	background-color: transparent;
	border: none;
	border-bottom: 1px solid black;
}
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1{
	background-color: #4CAF50;
	border-radius: 2px;
}
.button1:hover {
    background-color: transparent;
    color: white;
    border: 2px solid #4CAF50;
}
</style>

<html>
<head>
	<title>Hotel SS</title>
<link rel="shortcut icon" href="ss.jpg">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-top">
	<nav class="w3-bar w3-black">
		<a href="homec.php" class="w3-button w3-bar-item"><img src="ss1.png" width="25" height="25"> Hotel SS</a>
		<a href="aboutc.php" class="w3-button w3-bar-item">About us</a>
		<a href="login.php" class="w3-button w3-bar-item">Login</a>
		<a href="signup.php" class="w3-button w3-bar-item">Sign up</a>
		<a href="photosc.php" class="w3-button w3-bar-item">Photos</a>
		<a href="contactc.php" class="w3-button w3-bar-item">Contact us</a>
	</nav>
</div>
</head>
<body background="main.jpg" align="center"><br><h2> <b>Please Login </b></h2>


	<form method="post" action="dologin.php" >

	<table align="center">
		<tr>
			<td><input placeholder="Username" type="text" name="username" required="required">
			</td>
		</tr><br>
		<tr>
			<td> <br><input placeholder="Enter Password" type="Password" name="password" required="required">
			</td>
		</tr>
	</table>
	<br>
	<button class="button button1" name="submit">Login</button>
	<p>New to Hotel SS?? No worries</p>
	<p><a href="signup.php">Create an Account here. For free!!</a></p>
	</form>

</body>
</html>