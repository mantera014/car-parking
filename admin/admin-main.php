
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
          <a>Inventories</a>
          <ul>
            <li><a href="sold.php">Sold</a></li>
            <li><a href="on-street-booking.php">Unsold</a></li>
			</ul>
        </li>
        <li class="dropdown">
          <a href="zone.php">Parking Zones</a>
        </li>
		 
		 <li><a href="clients.php">Clients</a></li> 
       <li><a href="transactions.php">Transactions</a></li> 
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