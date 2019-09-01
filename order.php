<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style18.css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style type="text/css">
		form{
			display: inline-block; float: left; margin: 10px; padding: 10px;
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
	
</head>
<body>
<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
</marquee>
<!-- employee navigation -->
<?php include 'nav/usermenu.php';?>
<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="bita">
<div class="newsevents">
<div class="kk"><b>NEWS & EVENTS</b></div>
<marquee direction="up"><div class="kkk">
	<ul>
		<?php 
	include 'lib/user.php';
	$u = new User();
	$news = $u->getAllNews();
	foreach ($news as $value) {
	 ?>
<li><?= $value['news']; ?></li></br>
<?php } ?>
</ul></div></marquee></div>
<h1>Billing Panel</h1>
<?php
$hostname = "localhost";
$username = "root";
$password = "742545";
$dbname = "rest";

$conn = new mysqli($hostname,$username,$password,$dbname);

if (isset($_POST['order'])) {
	$cname = mysqli_real_escape_string($conn, $_POST['cname']); // Customer name
	$cphone = mysqli_real_escape_string($conn, $_POST['cphone']); // Customer phone
	$caddress = mysqli_real_escape_string($conn, $_POST['caddress']); // Customer address
	$pname = mysqli_real_escape_string($conn, $_POST['pname']); // product name
	$bill  = mysqli_real_escape_string($conn, $_POST['bill']); // totall bil
	$quantity = mysqli_real_escape_string($conn, $_POST['qntty']); //quantity
	$category = mysqli_real_escape_string($conn, $_POST['category']); //category
	$orderFrom = mysqli_real_escape_string($conn, "online");
	date_default_timezone_set('Asia/Dhaka');
	$ordertime =date('Y-m-d', time());

	$add = "INSERT INTO bill(cname,cphone,caddress,pname,category,quantity,bill,ordertime,orderFrom) VALUES ('$cname','$cphone','$caddress','$pname','$category','$quantity','$bill','$ordertime','$orderFrom')";
	$added= mysqli_query($conn, $add);
	if ($added == true){
		echo "<script> alert('Order Placed');</script>";
	} else{
		echo "Ordar no placed";
	}
}
?>
 <div>

<form action="" method="POST" class="form-inline">
<label for="cname">Customer Name</label>
<input type="text" class="form-control" name="cname" id="cname" placeholder="Your Name"><br>
<label for="cname">Customer Phone</label>
<input type="text"  class="form-control" name="cphone" id="cname" placeholder="Your Phone"><br>
<label for="cname">Customer Address</label>
<input type="text" class="form-control" name="caddress" id="cname" placeholder="Your Address"><br>
<label for="pname">Select Item</label>
<select id="pname" class="form-control" name="pname" oninput="pr()" required>
	<option value="">Select Item</option>
 	<?php 
 	 	$var = $u->getAllPro();
 	 	var_dump($var);
 	 	foreach ($var as $v) { ?>
 	 	<option  id="pid" value="<?php echo $v['name'];?>"> <?php echo $v['name']?> </option>;
       
 	 	<?php }
 	  ?>
 </select><br>
<label for="category">Item Category</label>
<input type="text" class="form-control" name="category" id="cat" placeholder="Category will be loader"><br>
<label for="price">Price</label>
<input type="text" class="form-control" name="price" id="price" placeholder="Price Will be loader"><br>
<label for="qntty">Enter Your Quantity</label>
<input type="number" class="form-control" name="qntty" id="qt" oninput="calc()" placeholder="Select Quantity Please" min="0" required><br/>
<div class="input-group">
	<div class="input-group-addon">TK</div>
	<input type="text" class="form-control" name="bill" readonly id="bill" value="" placeholder=" /= total cost">
</div>
<br/>
<input type="submit" class="btn btn-default" name="order" value="Order" >

<a href="printbill.php"><button type="submit" class="btn btn-default">Print Bill</button></a>
</form>
 	
 </div>
</section>
</body>
<script type="text/javascript">
			function calc(){
   var textValue1 = document.getElementById('price').value;
   var textValue2 = document.getElementById('qt').value;
 
   document.getElementById('bill').value = textValue1 * textValue2; 
}
 function pr(){
    var ajax = new XMLHttpRequest();
    var name = document.getElementById('pname').value;
    ajax.open("GET", "gprice.php?id="+name, true);
    ajax.send();

    ajax.onreadystatechange = function()
    {
    	if (this.readyState == 4 && this.status== 200)
    		{
    			var data = JSON.parse(this.responseText);
    			console.log(data);

    			var html = "";

    			for (var i=0; i < data.length; i++) {
    				var pr = data[i].price;
    				var cat = data[i].category;
    				html += pr;
    				html += cat;
    			}
    			document.getElementById("price").value= pr;
    			document.getElementById("cat").value= cat;	
    		}
    	}
    }
 function ord(){
 	var cname = document.getElementById('cname').value;
 	var pname = document.getElementById('pname').value;
 	var cat   = document.getElementById('cat').value;
 	var qt   = document.getElementById('qt').value;
 	var bill  = document.getElementById('bill').value;

 	var url   = "ord.php?n="+cname+"&p="+pname+"&q="+qt+"&c="+cat+"&b="+bill;
 	var rqst = new XMLHttpRequest();
 	rqst.open("GET", "ord.php?n="+cname+"&p="+pname+"&q="+qt+"&c="+cat+"&b="+bill, true);
    rqst.send();
    var msg = JSON.parse(this.responseText);
    alert(rqst);
 }
</script>

</html>