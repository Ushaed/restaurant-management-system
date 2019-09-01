<?php
$url='localhost';
$username='root';
$password='742545';
$conn=mysqli_connect($url,$username,$password,"rest");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['save'])){
$checkbox = $_POST['check'];
for($i=0;$i<count($checkbox);$i++){
$del_id = $checkbox[$i];
//mysqli_query($conn,"DELETE FROM product WHERE id='".$del_id."'");
print_r($_POST);
$message = "Data deleted successfully !";
}
}
$result = mysqli_query($conn,"SELECT * FROM product");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style18.css" media="all" />
	<style type="text/css">
		form{
			display: inline-block; margin: 10px; padding: 10px;
		}
		form label{
			margin: 5px;
			padding: 0px;
			width: 300px;
		}
		form input, select{
			margin: 5px;
			padding: 0px;
			width: 300px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
		function calc(){
   var textValue1 = document.getElementById('input1').value;
   var textValue2 = document.getElementById('input2').value;
 
   document.getElementById('output').value = textValue1 * textValue2; 
}
function mOver(obj){
   var textValue1 = document.getElementById('input1').value;
   var textValue2 = document.getElementById('input2').value;
 
   document.getElementById('output').value =textValue1 * textValue2; 
   document.getElementById('link').innerHTML;
}
function order(){
	var nam= document.getElementById('nam').value;
	var price= document.getElementById('output').value;
	var qat = document.getElementById('input2').value;
	var res = nam.concat("("+qat+")"+" "+price); 
	document.getElementById('total').value += res+", ";
}

	</script>
</head>

<body>
	<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
</marquee>
<employee navigation >
<?php include 'nav/employeemenu.php';?>
<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="bita">
<a href="printbill.php">Print Bill</a>
<h1>Billing Panel</h1>
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<label for="cname">Customer Name</label>
<input type="text" name="cname" id="cname" placeholder="Your Name"><br>
<label for="category">Choose Product</label>
<table class="table table-bordered">
<thead>
<tr>
<th><input type="checkbox" id="checkAl"> Select All</th>
<th>Id</th>
<th>Name</th>
<th>Category</th>
<th>Price</th>
<th>Deccription</th>
<th>Quantity</th>
</tr>
</thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td>
	<input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["id"]; ?>"> &nbsp;
	<img src="img/image/<?php echo $row['img'];?>" width="80px">
</td>
<td><?php echo $row["id"]; ?></td>
<td><input type="text" name="name[]" id="nam" value="<?php echo $row["name"];?>" readonly></td>
<td><input type="text" name="category[]" id="cat" value="<?php echo $row["category"];?>" readonly></td>
<td><input type="text" name="price[]" id="input1" value="<?php echo $row["price"];?>" readonly></td>
<td><?php echo $row["description"]; ?></td>
<td><form method="post" action="">
	<input type="number" id="input2" name="quantity[]" min="0" value="" oninput="calc()" value="" onmouseover="mOver(this)">
	<input type="text" name="output[]" id="output" value="" onmouseover="mOver(this)" onmouseout="mOver(this)">
</form>
	
	<P id="link">
		<?php
		$qt="";
		$qt=$_POST['quantity'];
		$url= "name=".$row["name"]."&cat=".$row["category"]."&qt=";
		echo $qt;
		?>
		<a href="test.php?<?php echo $url;?>">Add</a>
	</P>
</td>
</tr>
<?php
$i++;
}
?>
<tfoot>
	<input type="text" name="total" value="" id="total">
</tfoot>
</table>
<p align="center"><button type="submit" class="btn btn-success" name="save" onmouseover="add()">Send</button></p>
</form>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});

function add() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link").innerHTML = this.responseText;
    }
  };
  var textValue1 = document.getElementById('input1').value;
  xhttp.open("GET", "tx.php", true);
  xhttp.send();
}
</script>
</body>
</html>