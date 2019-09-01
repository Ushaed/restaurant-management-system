<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Check Status</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style16.css" media="all" />
	
	
</head>
<body>
<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
</marquee>
<div class="a"><a href="index.php">Home</a></div>
<div class="b"><a href="menu1.php">Menu</a></div>
<div class="c"><a href="booking.php">Booking</a></div>
<div class="d"><a href="check.php">Check Status</a></div>
<div class="e"><a href="deletenews.php?logout=ture">Logout</a></div>
<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="bita">
<div class="newsevents">
<div class="kk"><b>NEWS & EVENTS</b></div>
<marquee direction="up"><div class="kkk">
<ul><li>Register here at free</li></br>
<li>Get register to book your table, Hurry UP!</li></br>
<li>there is a new dish we launched names "MATAR PAULAW"</li>
</ul></div></marquee></div>

<div class="h">
	<?php 
		if (isset($_POST['submit'])) {
			include 'lib/user.php';
			$u = new User();
			if ($us = $u->Bookstat($_POST)) {
			    if ($us['action'] == 0) {
			    	echo '<p style="color:red">Table not Approved as booked !!</P>';
			    }else {
			    	echo "<p style='color:green'>Table Approved as booked !!</P>";
			    }
		}
	}
	 ?>
<h1>Check status Panel</h1>
<form action="" method="post">
Enter Your Request iD<br/>
<input type="text" name="id" placeholder="Your Request ID"><br/>
<table>
<tr><td><input type="submit" name="submit" value="send"></td></td></tr>
</table>
</form>
</div>
</section>
</body>
</html>