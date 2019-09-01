<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Feedback Form</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style5.css" media="all" />
	
	
</head>
<body>
<section class="keya">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
<div class="a"><a href="index.php">Home</a></div>
<div class="b"><a href="aboutus.php">About Us</a></div>
<div class="c"><a href="registration.php">Registration</a></div>
<div class="d"><a href="feedback.php">Feedback</a></div>
<div class="e"><a href="contactus.php">Contact Us</a></div>
<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="tahmina2">
<div class="feedbackform">
<img src="img/th (1).jpg" class="th"/>
<div class="f"><h1>PLEASE SEND YOUR</br> QUESTION AND VIEW</h1></div>
<div class="g">
	<?php
		if (isset($_POST['send'])) {
		 	include 'lib/user.php';
		 	$u = new User();
		 	if($u->Feedback($_POST))
		 		echo '<p style="color:green">Query Send Successfull !!</P>';
		 	else
		 		echo '<p style="color:red">Query Failed !!</P>';
		 } 
	?>
<form action="" method="post">
Name<br/>
<input type="text" name="name" placeholder="Enter Your Name"><br/>
Email<br/>
<input type="email" name="email" placeholder="Enter Your Email"><br/>
Contact<br/>
<input type="number" name="contact" placeholder="Enter Your Contact Number"><br/>
Ouery/Message<br/>
<input type="text" name="message" placeholder="Please write your Feedback"  style="height:70px"><br/>
<input type="submit" name="send" value="send"></td><td><input type="submit" value="clear">
</form>
</div>
</div>
</section>
</body>
</html>
