<?php
ini_set('session.cookie_httponly', 1);
      ini_set('session.session.use_only_cookies', 1);
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

<div style="text-align: center; background-color: rgba(0,0,0,.40); padding: 15px; margin-bottom: -2px;">
      <a href="employeehome.php">Home</a>
      <a href="billing.php">Billing</a>
      <a href="verifybooking.php">Verify Booking</a>
      <a href="logout.php">Logout</a>
</div>