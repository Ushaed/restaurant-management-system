<?php 
include 'header.php';  
include 'lib/login.php';
?>
<section class="tahmina">

<div class="login-box">
<img src="img/avatar.png" class="avatar"/>
<h1>Login Here</h1>

<form action="" method="post">
	<p>Choose Your Login Type</p><br><br>
	<select style="color: black" name="type">
	<option>Select Your Login Type</option>
	<option value="admin">Admin</option>
	<option value="employee">Employee</option>
	<option value="user">User</option>
</select>
<br><p>User Name</p><br>
<input type="text" name="name" placeholder="Enter User Name"><br>
<p>password</p><br>
<input type="password" name="password" placeholder=" Enter Your Password"><br>
<input type="submit" name="login" value="SUBMIT">
</form>

</div>
</section>
<section class="sudipa">
<div class="food3"><p>We Deliver From <i class="fas fa-clock"></i> 10:AM-11PM</p></div>
</section>
</body>
</html>
