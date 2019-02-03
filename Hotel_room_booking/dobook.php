<?php
session_start();
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

	$user=$_SESSION['loggedin'];
	$room=$_POST['room'];
	$number=$_POST['number'];
	$start=$_POST['start'];
	$end=$_POST['end'];

	if( !(preg_match("/economy/", $room) or preg_match("/business/", $room)) )
	{
		echo "<script>
			alert('Please select a room class');
			window.location.href='book.php';
			</script>";
	}
	/*elseif($start<date("Y-m-d"))
	{
		echo "<script>
			alert('Invalid ckeck in date';
			window.location.href='book.php';
			</script>";
	}*/
	elseif($start>$end)
	{
		echo "<script>
			alert('Invalid ckeck out date');
			window.location.href='book.php';
			</script>";
	}
	else
	{
		$q1=mysqli_query($con,"INSERT INTO book values('$user', '$room', '$number', '$start', '$end')");
		if($q1)
		{
			echo "<script>
			alert('successfully Room booked');
			window.location.href='book.php';
			</script>";
		}
		else
		{
			echo "<script>
			alert('Room not booked');
			window.location.href='book.php';
			</script>";
		}
	}
}


?>