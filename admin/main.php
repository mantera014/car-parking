
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Car Parking</title>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>
<section class="container">
<header>
<section class="logo">
<p><center>KISII TOWN  ONLINE CAR PARKING RESERVATION SYSTEM</center></p>
</section>
    <nav>
      <ul class="nav">
        <li><a href="index.php" class="icon home"><span>Home</span></a></li>
        <li class="dropdown">
          <a>Our Services &amp; Personnel</a>
          <ul>
            <li><a href="../online-booking.php">Online Booking</a></li>
            <li><a href="../on-street-booking.php">On-street Parking</a></li>
			<li><a href="../off-street-parking.php">Off-street Parking</a></li>
            <li><a href="../payment-methods.php">Payment Methods</a></li>
            <li><a href="../parking-personnel.php">Park Attendants</a></li>
			<li><a href="../security.php">Security</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a>Parking Zones</a>
          <ul class="large">
            <li><a href="../region-1.php">OGEMBO/ZONIC STREER - Cars Only</a></li>
            <li><a href="../region-2.php">AGAKHAN STREET - Cars Only</a></li>
            <li><a href="../region-3.php">DARAJA MBILI/UHURU PLAZA STREET -  Cars and Lorries</a></li>
            <li><a href="../region-4.php">UCHUMI/RAM STREET - Lorries Only</a></li>
			<li><a href="../region-5.php">MATATU STAGE/ BUS STAGE - PSV Only</a></li>
			<li><a href="../region-6.php">NATIONAL BANK/LEVEL FIVE  - PSV Only</a></li>
          </ul>
        </li>
		 
		<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
   {
   echo  "<li><a href=\"your-car.php\">Reserve</a></li>";
   }
   else
   {
    echo "<li><a href=\"../index.php\">Client Panel</a></li>";
   }
    ?>
     <li><a href=\"your-car.php\">Contact</a></li> 	
       
      </ul>
    </nav>
	<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
      {
	   $name = $_SESSION["name"];
   echo "<p class=\"LogOut\">". $name. " "."<a href=\"process-log-out.php\">Log Out</a></p>";
   }
    
?>
	

  </header>
</section>
</body>

</html>