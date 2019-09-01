<?php
ini_set('session.cooky', 1);
      ini_set('session.session.use_onlie_httponly_cookies', 1);
      ini_set('session.hash_function', 'sha256');
      ini_set('session.use_strict_mode', 1);
      ini_set('session.cookie_lifetime', 0);
      session_name('loginSession');
      session_id();
      session_start();
      $id= $_SESSION['id'];
      $user =$_SESSION ['name'];
      if ($user =="" or $id ==""){
        header('location:logout.php');
      }
?>

<div class="a"><a href="adminhome.php">Home</a></div>
<div class="b"><a href="staff.php">Staff Pannel</a></div>
<div class="c"><a href="menu.php">Menu Pannel</a></div>
<div class="d"><a href="news.php">News Pannel</a></div>
<div class="e"><a href="logout.php">Logout</a></div>