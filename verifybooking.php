<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style18.css" media="all" />
	
</head>
<body class="keya">
	<!-- employee navigation -->
<?php include 'nav/employeemenu.php'?>
	<a href="billing.php" style="align-self: center;">Go Back</a>
<?php 
	include 'lib/user.php';
	$u = new User(); 
	$data = $u->BookAll($_POST);
	$sl =0;
	$total = 0;
	?>
	<table style="border: 1px solid;width: 100%; margin: 3px; padding: 3px; border-collapse: collapse;text-align: center;">
		<caption style="background-color:red;color: green; font-weight: bold;font-size: 33px;">User List</caption>
		<tr style="border: 1px solid">
			<th style="border: 1px solid" >sl</th>
			<th style="border: 1px solid">Table Number</th>
			<th style="border: 1px solid">Customer Name</th>
			<th style="border: 1px solid">Customer Phone</th>
			<th style="border: 1px solid">Time</th>
			<th style="border: 1px solid">Date</th>
			<th style="border: 1px solid">Action</th>
		</tr>
		<?php foreach ($data as $usr): ?>
		<tr>
			<td style="border: 1px solid"><?= ++$sl; ?></td>
			<td style="border: 1px solid">Table No. <?= $usr['id'] ?></td>
			<td style="border: 1px solid"><?= $usr['cname'] ?></td>
			<td style="border: 1px solid"><?= $usr['cphone'] ?></td>
			<td style="border: 1px solid"><?= $usr['time'] ?></td>
			<td style="border: 1px solid"><?= $usr['date'] ?></td>
			<td style="border: 1px solid">
				<?php
					 if ($usr['req'] == 0)
					 	echo 'Not Booked';
					 else {
					 	if ($usr['action'] == 1) {
					 	echo "<a href='verifybooking.php?clr=".$usr['id']."'>Clear Booking</a>";
					 }else {
					 	echo "<a href='verifybooking.php?id=".$usr['id']."'>Accept</a>";
					 }
					 }
				 ?>
			</td>
		</tr>
		<?php endforeach ?>
		
	</table><p style="float: right; font-weight: border; margin-right: 200px; font-size: 33px;">Total : <?= $total; ?></p>
<?php 
	if (isset($_GET['id'])) {
		if($u->Accpt($_GET))
			header("location:verifybooking.php");
	}
 ?>
 <?php 
	if (isset($_GET['clr'])) {
		if($u->Clear($_GET))
			header("location:verifybooking.php");
	}
 ?>

</body>
</html>