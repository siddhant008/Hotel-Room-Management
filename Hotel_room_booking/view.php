<?php
session_start();
?>
<html>
<link rel="shortcut icon" href="ss.jpg">
<div class="w3-top">
	<nav class="w3-bar w3-black">
		<a href="homec.php" class="w3-button w3-bar-item"><img src="ss1.png" width="25" height="25"> Hotel SS</a>
	  	<a href="aboutc.php" class="w3-button w3-bar-item">About us</a>	  	
	  	<a href="photosc.php" class="w3-button w3-bar-item">Photos</a>
	  	<a href="contactc.php" class="w3-button w3-bar-item">Contact us</a>
	  	<a href="book.php" class="w3-button w3-bar-item">Book Rooms</a>
	  	<a href="view.php" class="w3-button w3-bar-item">View Rooms</a>
	  	<a style="float:right;" class="w3-button w3-bar-item"></a>
		<a style="float:right;" href="logout.php" class="w3-button w3-bar-item">Logout</a>
		<a style="float:right;" class="w3-button w3-bar-item"><?php echo $_SESSION['loggedin']; ?></a>
	</nav>
</div>
<h2>YOUR BOOKED ROOMS</h2>
</html>
<?php
$username=$_SESSION['loggedin'];
if(!isset($_SESSION['loggedin']))
{
	echo "<script>
		alert('Please Login First');
		window.location.href='login.php';
		</script>";
}
else
{
	$con=mysqli_connect("localhost","root","","nick")or die("not connect");
	$username=$_SESSION['loggedin'];
	$q1="SELECT * FROM book where username='$username'";
	$result = $con->query($q1);
	$n=1;
	if ($result->num_rows > 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo $n .". Room Class: " . $row['roomclass'] . " ~~ Number of Rooms: " . $row['roomnumbers'] . " ~~ Check in date: " . $row['start'] . " ~~ Check out date: " . $row['end'] . "<br>";
			$n+=1;
		}
	}
	else
	{
		echo "No rooms Booked";
	}
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


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body background="main.jpg" align="center"><br><br>
	
</body>
</html>
