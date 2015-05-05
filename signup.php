<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="css/mystyles.css">
</head>
<body>
<section class="HomeKisii">
<img src="img/gov.jpg" alt="Mountain View" style="width:954px;height:470px">
<section class="account">
  <h1>Sign Up</h1>
<hr>
  <form action="process-sign-up.php" method="post">
	 <input type="text" id="FullName" name="name" placeholder="Your Name" maxlength="31"  required />
      <input type="text" id="FullName" name="email"placeholder="Your Email" maxlength="31" required />
	 <input type="password" id="FullName" name="password" placeholder="Your Password" maxlength="10" required />
	 
	 <input type="text" name="phone"  id="FullName"required pattern="(\+?\d[- .]*){7,13}" title="phone number" maxlength="10"/> 
	 <input type="submit" id="LogIn" value="Sign Up">
	 </form>
	 <p><a href="index.php" class="Link">Or Log In</a></p>
</section>
</section>
<section class="kisii-bottom">
<p>Safe Parking, whenever you are in Kisii</p>
</section>
</body>
</html>
