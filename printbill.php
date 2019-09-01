<?php 
$requri = getenv ("REQUEST_URI");
$servname = getenv ("SERVER_NAME");
$httpref = getenv ("HTTP_REFERER");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style18.css" media="all" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</head>
<body>
	<button class='btn btn-info' onclick="goBack()">
       	<span class='carousel-control-prev-icon'></span> Go Back</button>
	<form action="" method="post">
		<label for="name">Customer Name</label>
		<input type="text" name="cphone" id="name" placeholder="Cuntomer Contact No.">
		<input type="submit" name="submit" value="Get Bill">
	</form>
<?php 
if (isset($_POST['submit'])) {
	$conn = new mysqli('localhost','root','742545','rest');
	$cphone=$_POST['cphone'];
	date_default_timezone_set('Asia/Dhaka');
	$ordertime =date('Y-m-d', time());
	$sql = "SELECT * FROM bill WHERE cphone = '$cphone' AND ordertime= '$ordertime'";
 	 $result = $conn->query($sql);
	$total = 0;
	if (!empty($result)) {
	?>
	<table style="border: 1px solid; font-size: 18px;" class="table">
		<caption style="font-weight: bold;font-size:33px; text-align: center;">Customer Invoice</caption>
		<?php 
		$conn = new mysqli('localhost','root','742545','rest');
		$cphone=$_POST['cphone'];
		$ur = "SELECT * FROM bill WHERE cphone = '$cphone' LIMIT 1";
		$res = mysqli_query($conn, $ur);
		$user = mysqli_fetch_assoc($res);
		?>
		<p>Name:<?php echo $user['cname']?></p>
		<p>Phone:<?php echo $user['cphone']?></p>
		<p>Address<?php echo $user['caddress'];?></p>
		<p>Order Date:<?php echo $ordertime =date('Y-m-d', time());?></p>
		<thead>
			<tr>
			<th>Item Name</th>
			<th>Quantity</th>
			<th>Bill</th>
		</tr>
	</thead>
	<tbody>
		<?php while($row = $result->fetch_assoc() ){?>
		<tr>
			<td><?php echo $row['pname'];?></td>
			<td><?php echo $row['quantity'];?></td>
			<td>
				<?php
				$total = $total +$row['bill']; ?><?php echo $row['bill']?>
					
				</td>
			</tr>
		<?php } ?>
	</tbody>
		
	</table><p style="float: right; font-weight: border; margin-right: 200px; font-size: 33px;">Tota : <?= $total; ?></p>
<?php }}?>


</body>
<script>
function goBack() {
    window.history.back();
}
</script>
</html>