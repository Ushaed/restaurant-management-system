<?php
ini_set('session.session.use_only_cookies', 1);
      ini_set('session.hash_function', 'sha256');
      ini_set('session.use_strict_mode', 1);
      ini_set('session.cookie_lifetime', 0);
      session_name('loginSession');
      session_id();
      session_start();
    // remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy(); 
    header("location:index.php");
?>