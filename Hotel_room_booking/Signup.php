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
	border-radius: 5px;
}
select{
	background-color: transparent;
	border: none;
	border-bottom: 1px ;
}
input::placeholder{
	color: #000000;
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
	border-radius: 4px;
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
		<a href="about.php" class="w3-button w3-bar-item">About us</a>
		<a href="login.php" class="w3-button w3-bar-item">Login</a>
		<a href="signup.php" class="w3-button w3-bar-item">Sign up</a>
		<a href="photosc.php" class="w3-button w3-bar-item">Photos</a>
		<a href="contactc.php" class="w3-button w3-bar-item">Contact us</a>
	</nav>
</div>
</head>
<body background="main.jpg" align="center"><br><h2><b>Sign up </b></h2>


	<form method="post" action="dosignup.php" >

	<table align="center">
		<tr>
			<td><input placeholder="Username" type="text" name="username" required="required"></td>
		</tr><br>
		<tr>
			<td> <br><input placeholder="Full Name" type="text" name="name" required="required"></td>
		</tr>	 	
		<tr>
			<td><br><select name="gender">
					<option disabled="disabled" selected="selected" value="none">Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="others">Others</option>
				</select><br></td>
		</tr>
		<tr>
			<td> <br><input placeholder="Enter Password" type="Password" name="password" required="required"></td>
		</tr>
		<tr>
			<td> <br><input placeholder="Confirm Password" type="Password" name="password1" required="required"></td>
		</tr>
	</table>
	<br>
	<button class="button button1" name="submit">Signup</button>
	<p>Already have an account?? No worries</p>
	<p><a href="login.php">Log into your Account here. For free!!</a></p>
	</form>
</body>
</html>




	
