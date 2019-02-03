<?php
	session_start();
	$username=$_POST["username"];
	$password=$_POST["password"];
	$con=mysqli_connect("localhost","root","","nick")or die("not connect");

	$s = "select * from signup where username='$username' and password='$password'";
	$result = $con->query($s);
	if ($result->num_rows>0)
	{
		$_SESSION['loggedin']=$username;
		header("location:bookses.php");
	}
	else 
	{
		echo "<script>
		alert('Invalid credentials');
		window.location.href='login.php';
		</script>";
	}
?>