<?php
		include_once 'config.php';
?>
<!DOCTYPE>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/styleSheet2.css"/>
<link rel="stylesheet" type="text/css" href="CSS/styleSheet1.css"/>
<script src="js/myScript.js"></script>

<title>Payment Cards</title>
	<style>
	#main-header{
	background-image:url("Images/hd.jpg");
	width:100%;
	top:0;
	left:0;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	}
	</style>

</head>
<body>
  <div style="background-image:url('Images/q.jpg');">
	<header id="main-header">
			<div class="container">
<!--logo-->
	<center>
		<img src="Images/Logo.png" class="logo"> 
		<h4 class="h"><b>The Online Tour Guide</b></h4>
	</center>
	
<!--Navigation bar-->	
	<ul class="navi">
		<li><a href="Home.html">Home</a></li>
		<li><a href="#">Packages and Bookings</a></li>
		<li><a href="#">Explore</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="register.html">Login</a></li>
	</ul>
	
			</div>
	</header>

 
		
		
		<table bgcolor="white" border="1" cellspacing="0" cellpadding="10" width="100%" align="center">
			<tr>
				<th><div class="a"><b>OwnerID</div></b></th>
				<th><div class="b"><b>Card Holder</div></b></th>
				<th><div class="b"><b>Card Type</div></b></th>
				<th><div class="b"><b>Card Number</div></b></th>
				<th><div class="b"><b>Expire Date</div></b></th>
				<th><div class="b"><b>CVV</div></b></th>
				<th><div class="b"><b>Email</div></b></th>
			</tr>
			 <?php
					$sql = "Select * from pay_d";
					$result = $conn->query($sql);
					
					if($result->num_rows>0)
					{
						while($row = $result->fetch_assoc())
						{
							echo"<tr><td>".$row["ownerID"]."</td><td>".$row["cardOwnerName"]."</td><td>".$row["cardType"]."</td><td>".$row["cardNumber"]."</td><td>".$row["expDate"]."</td><td>".$row["cvv"]."</td><td>".$row["email"];
						}
					}
					else
					{
						echo "No results to Display";
					}
					echo "</table>";
					
					$conn->close();
				?>
			
		</div>

		<center>
		<input class="B1"type="button" onclick="window.location.href='paymentCard.html';" id="btn1" name="btn1" value="Go back"><br>
		<br>
		<input class="B1" type="button" onclick="window.location.href='paymentEasy.html';" id="btn1" name="btn1" value="Link Easy cash account"><br>
		<br>
		</center>


<footer>
<table class="desing"  width="100%">
	<tr style="border:0px">
		<th style="font-family:Geneva"><h3 style="font-family:sans-serif; font-size:20px;">Follow us on</th></h3>
	</tr>
	<tr><th>
    <a href="https://www.facebook.com/"><img src="Images/ICONS/FB2.png" width=50" height="50"></a>
	<a href="https://www.twitter.com/"><img src="Images/ICONS/Twitter2.png" width=50" height="50"></a>
	<a href="https://www.instagram.com/"><img src="Images/ICONS/Insta2.png" width=50" height="50"></a>
	<a href="https://www.googleplus.com/"><img src="Images/ICONS/G+2.png" width=50" height="50"></a>
	<br>
	<a href="reviews.html"><img src="Images/ICONS/rw2.png" width="170" height="60"></a>
<br><center><h3 style="font-family:sans-serif"> Terms and conditions</center></h3>
<p style="font-size:13px; font-family:Arial;">The following are terms of a legal agreement butween you and the Sri Lanka Tourism Promotion Bunau. By accessing, browsing, or using this Website, you acknowledge that you have read, understood, and agee to be bound by these terms and to comply with all applicable laws and regulationsf you do not agree to these terms, please do not use this Website. SLTPB may, without notice to you, at any time rvse these Tens of Use and any other information contained in this Website by updating this posting SLUPB may also make improvemets or changes in the products, survices, or programs described in this sile at any time without notice.</p>
<center><h4 style="font-family:sans-serif">@ 2020 ALL Rights Rerved by "Travel Net"</a></h4></center> 
	
</th>
</table>
</footer>
</body>
</html>