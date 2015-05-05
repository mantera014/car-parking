<?php
	require('inc\dbcon.php');
	session_start();
     $email = $_SESSION["email"];
	 $model = $_SESSION["model"];
	  $vehicle = $_SESSION["vehicle"];
	  $status="RESERVED";
	  $plateno = $_SESSION["plateno"];
	  $plot = $_SESSION["plot"];
	  $account = $_SESSION["account"];
	  $street = $_SESSION["street"];
	    $from = $_SESSION["from"];
		 $to = $_SESSION["to"];
		    $charge = "60";
			
			/*CHECK IF RESERVED */
			
$sql="SELECT * FROM zones WHERE street='$street' and plot='$plot'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If

if($count==1){
 header('location:error-book.php');
}
else
{

        $query = "INSERT INTO `zones` (status, email, model, vehicle,street,plot,platenumber,account,charge,d1,d2) VALUES ('$status', '$email', '$model', '$vehicle' , '$street', '$plot', '$plateno', '$account','$charge','$from','$to')";
        $result = mysql_query($query);
		
		$var = $_SESSION["from"];
$date = str_replace('/', '.', $var);
echo date('Y.m.d', strtotime($date));
		if($result){
           //REDIRECT
		   header('location:success-book.php');
		   
exit;
        }
}
    ?>