<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
	echo "<script>
		alert('Please Login First');
		window.location.href='login.php';
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
	border-radius: 6px;
}
select{
	background-color: transparent;
	border: none;
	border-bottom: 1.2px ;
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
	border-radius: 5px;
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
		<a href="photosc.php" class="w3-button w3-bar-item">Photos</a>
		<a href="contactc.php" class="w3-button w3-bar-item">Contact us</a>
		<a href="book.php" class="w3-button w3-bar-item">Book Rooms</a>
	  	<a href="view.php" class="w3-button w3-bar-item">View Rooms</a>
		<a style="float: right;" class="w3-button w3-bar-item"></a>
		<a style="float:right;" href="logout.php" class="w3-button w3-bar-item">Logout</a>
		<a style="float:right;" class="w3-button w3-bar-item"><?php echo $_SESSION['loggedin']; ?></a>
	</nav>
</div>
</head>
<body background="main.jpg" align="center"><br><br><h2> ROOM BOOKING </h2>
<br><br>

	<form method="post" action="dobook.php" >
	<table align="center"> 	
		<tr>
			<td><br><select name="room" required="required">
					<option disabled="disabled" selected="selected" value="room">Room Class</option>
					<option value="economy">Economy</option>
					<option value="business">Business</option>
				</select><br>
			</td>
		</tr>
		<tr>
			<td><br><input placeholder="Number of Rooms" type="number" name="number" required="required">
			</td>
		</tr>
		<tr>
			<td><br> <label>Start duration</label> <br>
				<input type="date" name="start" required="required">
			</td>
		</tr>
		<tr>
			<td><br><label>End duration</label> <br>
				<input type="date" name="end" required="required">
			</td>
		</tr>
	</table>
	<br>
	<button class="button button1" name="submit">Book Room</button>	
	</form>	
</body>
</html>
<?php
$start=$_POST['start'];
echo $start;
?>
