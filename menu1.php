

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>menu details</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style14.css" media="all" />
	
	
</head>
<body>
<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
</marquee>
<!-- admin navigation -->
<?php include 'nav/usermenu.php'?>
<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="bita">
<img src="img/Capture7.png" class="thh"/>
<div class="h">
<form action="" method="get">
Category<br/><select name="cat">
<option value="Burger">Burger</option>
<option value="sub">Sub</option>
<option value="chap">Chap</option>
<option value="Drink's">Drink's</option>
</select><br/>
<table>
<tr><td><input type="submit" value="send"></td></td></tr>
</table>
</form>
</div>
</section>
<div>
	<?php 
	if (isset($_GET['cat'])) {
		include 'lib/user.php';
		$u = new User();
		if ($user = $u->getItemByCat($_GET)) { $sl = 0;?>
		<table style="border: 1px solid;width: 100%; margin: 3px; padding: 3px; border-collapse: collapse;text-align: center;">
			<caption style="background-color:red;color: green; font-weight: bold;font-size: 33px;">User List</caption>
			<tr style="border: 1px solid">
				<th style="border: 1px solid" >sl</th>
				<th style="border: 1px solid">Name</th>
				<th style="border: 1px solid">Category</th>
				<th style="border: 1px solid">Price</th>
				<th style="border: 1px solid">Description</th>
				<th style="border: 1px solid">Image</th>
			</tr>
			<?php foreach ($user as $usr): ?>
			<tr>
				<td style="border: 1px solid"><?= ++$sl; ?></td>
				<td style="border: 1px solid"><?= $usr['name']; ?></td>
				<td style="border: 1px solid"><?= $usr['category']; ?></td>
				<td style="border: 1px solid"><?= $usr['price']; ?></td>
				<td style="border: 1px solid"><?= $usr['description']; ?></td>
				<td style="border: 1px solid"><img src="img/image/<?= $usr['img'] ?>" width="150"></td>
			</tr>
			<?php endforeach ?>
			
		</table>
		<?php 
		}
	}?>
	
</div>
</body>
</html>