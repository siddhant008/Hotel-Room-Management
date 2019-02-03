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
<title>HOTEL SS</title>
<link rel="shortcut icon" href="ss.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body background="main.jpg" align="center"><br><br><h1><b> HOTEL SS </b></h1>
<br><br>

	<form method="post" action="dosignup.php" >
<!-- Navigation -->
<div class="w3-top">
<nav class="w3-bar w3-black">
    <a href="homec.php" class="w3-button w3-bar-item"><img src="ss1.png" width="25" height="25"> Hotel SS</a>
    <a href="aboutc.php" class="w3-button w3-bar-item">About us</a>
    <a href="contactc.php" class="w3-button w3-bar-item">Contact us</a>
    <a href="photosc.php" class="w3-button w3-bar-item">Photos</a>
    <a href="book.php" class="w3-button w3-bar-item">Book Rooms</a>
    <a href="view.php" class="w3-button w3-bar-item">View Rooms</a>
    <a style="float: right;" class="w3-button w3-bar-item"></a>
    <a style="float:right;" href="logout.php" class="w3-button w3-bar-item">Logout</a>
    <a style="float:right;" class="w3-button w3-bar-item"><?php echo $_SESSION['loggedin']; ?></a>
</nav>
</div>
SS International on its The World's Most Innovative Companies list in June of this year.

What an honor to be recognized. Since the company started in 1927, we’ve never been afraid to take chances and try new things. Just in the last year, we’ve partnered with Alibaba Group to pilot facial-recognition technology at check-in at two properties in China, we launched The Ritz-Carlton Yacht Collection, and we entered the homesharing market in a pilot in London.

In June, we also partnered with Amazon to offer the Amazon Echo in select properties, so guests can order room service or request housekeeping services without picking up the phone.

I’m proud to see the company grow and bet on change. But in the quest to be an industry leader, I constantly remind myself that it’s important not to forget the fundamentals. At the end of the day – when our customers switch off the light in their guest rooms – I think what they want first and foremost is a clean, safe environment to sleep in at night.

I was reminded of this recently when a 9-year-old – unprompted – wrote a review of his Marriott hotel experience in his fourth grade writing journal.

This satisfied customer gave us five stars. Of course, he’s predisposed to love Marriott. But what caught my attention was that he focused on how tidy the rooms were, that there was Wi-Fi, daily housekeeping services, and a clean pool. He was most excited – as a fourth grader might be – to find a piece of chocolate on his pillow at night.

As we continue to roll out groundbreaking concepts, I’m tickled that a 9-year-old could point out something so critical. Innovation is exciting and we’re 100 percent committed to it as part of our core values of embracing change and pursuing excellence. But a travel experience – no matter the bells and whistles – will never be great unless basic customer service is in order.

Thanks for helping me keep SS on the Move!
</form>
</body>
</html>