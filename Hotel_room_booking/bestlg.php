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
        <h3>OUR BEST RATE. GUARANTEED.</h3>

<p>There are few guarantees in life. But our Look No Further Best Rate Guarantee is one of the best. It assures that you’ll always get the best rate available when you book directly. Here’s how it works:<br>

    Make a reservation using any official reservation channel.<br>
    If you find a lower rate for the same hotel, same room type, and same reservation dates on a non-Hotel website or non-Hotel mobile app (“Comparison Rate”) you may submit a Best Rate Guarantee claim.<br>
    If we approve your claim, we’ll match the Comparison rate AND give you your choice of either an extra 25% discount on the room (20% discount for Design Hotels) OR give you 5,000 Marriott Loyalty Program Points.
<br>
Drawers
<br>
Participating Brands
<br>
Applicable Rates
<br>
Submission Guidelines
<br>
Verification Process
<br>
Other Details
<br>
Submit a claim
<br>
 

Member Rates 
<br>
Members of our loyalty program will receive an exclusive, preferred rate (“Member Rate”) when they book rooms through any direct booking channel, including:
<br>
    Our worldwide reservations centers<br>
    Member Rates are available globally at all hotels that participate in our loyalty programs, excluding hotels in Atlantis, Paradise Island, Bahamas and The Cosmopolitan of Las Vegas
<br>
These rates may also be booked through an authorized travel agent or select corporate travel partner ("eligible channels") at any hotel participating in either loyalty program.
<br>
What you need to know about Member Rates:
<br>
    These rates offer a discount of at least two percent on weekdays and up to five percent on weekends
    <br>The rate is applied to the hotel's lowest applicable available public rates for non-premium rooms
    <br>The rates must be booked by the Rewards member using the appropriate member rate category
    <br>Member Rates do not apply to groups of 10 or more rooms
    <br>The member rate may not be combined with other select promotions, offers or discounts, and is not valid for existing reservations or groups
    <br>Member Rates do not apply to qualified transient rates such as government, negotiated rates, AAA, and Senior Discount.
<br>
<h4>ONLY PAY WHEN YOU STAY </h4>
<br>
Advance payment may be required for special event dates or discounted price points determined by individual properties. Gaylord Hotels may require advance payment. Consult rate rules for each hotel and each reservation for specific restrictions and rules.
<br>
<h4>CHANGE YOUR MIND </h4>
<br>
Consult rate rules for each reservation for specific restrictions. Cancellation charges apply if a reservation is changed or cancelled after the deadline identified in the rate rules. For certain rates and rooms (for example, advance purchase rates), changes to the reservation may not be permitted once booked. Applicable restrictions are communicated in the rate rules for each reservation.
<br>
<h4>YOUR ROOM, YOUR WAY </h4>
<br>
Throughout the U.S. and Canada, we will do our best to honor your room and bed type preferences based on availability at the time of stay. Outside the U.S. and Canada, smoking/nonsmoking preferences are honored on availability; exact bed sizes may vary.
<br>
<h4>GLOBAL DESTINATIONS</h4>
<br>
Locations subject to change.
<br>
<h4>MOBILE CHECK-IN</h4>
<br>
Mobile check-in is available to members at participating hotels.
<br>
<h4>EARN FREE NIGHTS</h4> 
<br>
Members may earn and redeem points, subject to the terms and conditions of the Rewards Program. Rooms booked through third party online retailers, such as Expedia.com, Orbitz.com, Travelocity.com, Hotels.com, Booking.com, Priceline, etc. are not eligible for Points or Elite night credit. Wholesale packages and series tours are not eligible for Points or Elite night credit regardless of booking source.
<br>
<h4>FREE WI-FI</h4> 
<br>
Free Wi-Fi is available to members at participating hotels.</p>
<br>