<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>menu pannel</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style11.css" media="all" />
	
	
</head>
<body>
<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
</marquee>
<?php include 'nav/adminmenu.php'?>
<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="alpha">
<img src="img/Capture3.png" class="th"/>
<div class="g" >
<form >
	 <label for="add"><input id="add" type="radio" name="jekonokichu" onclick="Refresh()">Add Product Details</br>
<label for="view"><input id="view" type="radio" name="jekonokichu" onclick="GetPro()">View Product Details
</form>
</div>
</section>
<section class="bita">
<img src="img/Capture4.png" class="thh"/>
<div class="h" id="Product">
	<?php 
	if (isset($_POST['submit'])) {
	  include 'lib/user.php';
	  $u = new User();
	  if ($u->itemInsert($_POST)) {
	      echo '<p style="color:green">Item Insert Successfull !!</P>';
	     } 
	      else {
	        echo '<p style="color:red">Item Insert Failed !!</P>';
	      }
	}
	 ?>
<form action="" method="post" enctype="multipart/form-data">
Product Name<br/>
<input type="text" name="name" placeholder="Product Name"><br/>
Category<br/><select name="category">
<option value="Burger">Burger</option>
<option value="Sub">Sub</option>
<option value="Chap">Chap</option>
<option value="Drink's">Drink's</option>
</select><br/>
Price<br/>
<input type="currency" name="price" placeholder="Price"><br/>
Description<br/>
<input type="varchar" name="description" placeholder="Description"><br/>
Browse a file<br/>
<input type="file" name="file" id="file"></br>
<table>
<tr><td><input type="submit" name="submit" value="send"></td></tr>
</table>
</form>
</div>
</section>

<script type="text/javascript">
	function Refresh(){
    	location.reload();
    }
    function GetPro(){
    	var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","ajaxpro.php",false);
        xmlhttp.send(null);
        document.getElementById("Product").innerHTML=xmlhttp.responseText;
    }
</script>


</body>
</html>
