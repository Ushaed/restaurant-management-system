<?php
$hostname = "localhost";
$username = "root";
$password = "742545";
$dbname = "rest";

$conn = new mysqli($hostname,$username,$password,$dbname);
 if (isset($_GET['id'])) {
 	$id = $_GET['id'];
$sql= mysqli_query($conn, "SELECT * FROM product WHERE name = '$id'");
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	$data[] = $row;
}
echo json_encode($data);
}
?>
