
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style17.css" media="all" />
	
	
</head>
<body>
<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
</marquee>
<!-- employee navigation -->
<?php include 'nav/employeemenu.php' ?>
<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="tahmina">
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
</ul></div></marquee>
</div>
<div class="welcome"><b>What We Do</b></br><p>At Golpata Food, we're all about serving up fresh food, even if it means going the extra
 mile.When you walk through our doors, we do what we can to make everyone feel at home because our family extends through your community.
 Golpata Food with a vision of serving up a quick meal without cutting any corners. As we continue to grow, we'll always be sure to keep our 
 raditions and legacy in mind. By partnering with the best suppliers in the business, we're able to serve up fresh, Deliciously Different®
 food every day.But Golpata Food is about more than just food. By supporting our employees, we continue to feel like a true family business.</p>

</div>

</section>
</body>
</html>