<?php
	require('inc\dbcon.php');
    // If the values are posted, insert them into the database.
    session_start();
	//remove all session variables
   session_unset();

    // destroy the session
    session_destroy(); 
	header("location: index.php");
    ?>