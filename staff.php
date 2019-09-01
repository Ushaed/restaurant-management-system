<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>user details pannel</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style10.css" media="all" />
	
	
</head>
<body>
<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
</marquee>
<!--navigation -->
<?php include 'nav/adminmenu.php'?>

<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="alpha">
<img src="img/Capture1.png" class="th"/>
<div class="g">
<form>
<label for="add"><input id="add" type="radio" name="jekonokichu" onclick="Refresh()">Add Employee Details</br>
<label for="view"><input id="view" type="radio" name="jekonokichu" onclick="GetEmp()">View Employee Details
</form>
</div>
</section>
<section class="bita">
<img src="img/Capture2.png" class="thh"/>
<div class="h" id="Info">
		<?php 
			if (isset($_POST['submit'])) {
				include 'lib/user.php';
				$u = new User();
				if ($u->AddStaff($_POST)) {
					echo '<p style="color:green">Staff Added Successfull !!</P>';
				}else {
					echo '<p style="color:green"> Staff Adding Failed !!</P>';
				}
			}
		 ?>
	<form action="" method="post">
	Name<br/>
	<input type="text" name="name" placeholder="Employee Name"><br/>
	Gender</br>
	<label for="male"><input id="male" name="gender" type="radio" value="male">male<label for="female"><input id="female" name="gender" type="radio" value="female">female<br/>
	Contact<br/>
	<input type="text" name="contact" value="contact number"><br/>
	Address<br/>
	<input type="varchar" name="address" placeholder="Employee Address"><br/>
	<table>
	<tr><td><input type="submit" name="submit" value="Add Employee"></td></tr>
	</table>
	</form>
</div>
</section>

<script type="text/javascript">
		function GetEmp(){
	    	var xmlhttp = new XMLHttpRequest();
	        xmlhttp.open("GET","ajaxemp.php",false);
	        xmlhttp.send(null);
	        document.getElementById("Info").innerHTML=xmlhttp.responseText;
	    }
	    function Refresh(){
	    	location.reload();
	    }
</script>

</body>
</html>
