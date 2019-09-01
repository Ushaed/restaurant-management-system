<?php 

	if (isset($_GET['id'])) {
		include 'lib/user.php';
		$u = new User();
		if($u->Delete($_GET)){
			header("location:news.php");
		} else {
			header("location:news.php");
		}

	}

	if (isset($_GET['logout'])) {
		header("location:index.php");
	}
 ?>