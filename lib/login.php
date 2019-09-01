<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "rest";


$conn = new mysqli($hostname,$username,$password,$dbname);

 if (isset($_POST['login'])) {
 	$username = $_POST['name'];
 	$password =$_POST['password'];
 	$type = $_POST['type'];
 	 $sql = "SELECT * FROM regis WHERE username = '$username' AND password = '$password' AND type = '$type'";
 	 $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($result);
      if ($user) {
      ini_set('session.cookie_httponly', 1);
      ini_set('session.session.use_only_cookies', 1);
      ini_set('session.hash_function', 'sha256');
      ini_set('session.use_strict_mode', 1);
      ini_set('session.cookie_lifetime', 0);
      session_name('loginSession');
      session_id();
      session_start();
      session_regenerate_id(true);
     
      $_SESSION['name'] = $user['username'];
      $_SESSION['id'] = $user['id'];
      $_SESSION['type'] = $user['type'];
      if ($_SESSION['type'] == admin) {
      	header('location:adminhome.php');
      } else if ($_SESSION['type'] == employee) {
      	header('location:employeehome.php');
      } else if ($_SESSION['type'] == user) {
      	header('location:menu1.php');
      }else {
      	echo "No user Found";
      }
    
    }else {
      echo "Wrong username/password combination";
    }
 }
?>