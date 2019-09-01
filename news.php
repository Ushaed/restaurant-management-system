<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>news pannel</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style12.css" media="all" />
	
	
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
<img src="img/Capture5.png" class="th"/>
<div class="g">
<form>
<label for="add"><input id="add" type="radio" name="jekonokichu" onclick="Ref()">Add News</br>
<label for="delete"><input id="view" type="radio" name="jekonokichu" onclick="GetNews()">Delete News
</form>
</div>
</section>
<section class="bita" id="News">
<img src="img/Capture6.png" class="thh"/>
<div class="h" >
	<?php 
		if (isset($_POST['submit'])) {
			include 'lib/user.php';
			$u = new User();
			if ($u->AddNews($_POST)) {
				echo '<p style="color:green">News Adding Successfull !!</P>';
		     } 
		    else {
		        echo '<p style="color:red">News Adding Failed !!</P>';
		      }
		}
	 ?>
<form action="" method="post">
News Description<br/>
<input type="varchar" name="news" placeholder="Description"><br/>
<table>
<tr><td><input type="submit" name="submit" value="send"></td></td></tr>
</table>
</form>
</div>
</section>

<script type="text/javascript">
	function Ref(){
    	location.reload();
    }
    function GetNews(){
    	var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","ajaxnews.php",false);
        xmlhttp.send(null);
        document.getElementById("News").innerHTML=xmlhttp.responseText;
    }
</script>


</body>
</html>
