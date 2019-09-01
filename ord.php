<?php
$hostname = "localhost";
$username = "root";
$password = "742545";
$dbname = "rest";

$conn = new mysqli($hostname,$username,$password,$dbname);

if (isset($_GET['n'] && $_GET['p'] && $_GET['b'])) {
	$cname = mysqli_real_escape_string($conn, $_GET['n']); // Customer name
	$pname = mysqli_real_escape_string($conn, $_GET['p']); // product name
	$bill  = mysqli_real_escape_string($conn, $_GET['b']); // totall bil
	$quantity = mysqli_real_escape_string($conn, $_GET['q']); //quantity
	$categery = mysqli_real_escape_string($conn, $_GET['c']); //category

	$add = "INSERT INTO bill(cname,pname,category,quantity,bill) VALUES ('$cname','$pname','$category','$quantity','$bill')";
	$added= mysqli_query($conn, $add);
	if ($added==true) {
		echo "Your order placed";
	} else {echo "Order not placed"};

}
?>
