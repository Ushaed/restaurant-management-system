<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style4.css" media="all" />
</head>
<body>
	<section class="keya">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Golpata Food</h1></div>
<div class="a"><a href="index.php">Home</a></div>
<div class="b"><a href="aboutus.php">About Us</a></div>
<div class="c"><a href="registration.php">Registration</a></div>
<div class="d"><a href="feedback.php">Feedback</a></div>
<div class="e"><a href="contactus.php">Contact Us</a></div>
</section>
<section class="tahmina1">
<div class="registration-form">
<img src="img/th.jpg" class="rg"/>
<div class="a1">
  <?php 
  if (isset($_POST['submit'])) {
    include 'lib/user.php';
    $u = new User();
    if ($u->Registration($_POST)) {
        echo '<p style="color:green">Registration Successfull !!</P>';
       } 
        else {
          echo '<p style="color:red">Registration Failed !!</P>';
        }
  }
   ?>
  <form action="" method="post">
    <div class="row">
      <div class="col-25">
        <label for="username">User Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="Your User Name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Your Password.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your Name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
        <label for="male"><input id="male" value="male" type="radio" name="gender" required>male<label for="female"><input id="female" value="female" type="radio" name="gender">female
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="name">Contact</label>
      </div>
      <div class="col-75">
        <input type="varchar" id="name" name="contact" placeholder="Your Contact.." required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Your Email.." required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="Enter Your Address.." style="height:70px" required></textarea>
      </div>
    </div>
    <div class="row">
	<div class="col-75">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>

</div>
</body>
</html>