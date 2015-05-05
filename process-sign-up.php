<?php
	require('inc\dbcon.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['name']) && isset($_POST['password'])){
        $name = $_POST['name'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		 $phone = $_POST['phone'];
	//check existence
	$sql="SELECT * FROM users WHERE email='$email'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
	echo "User exists, please use log in.";
	exit;
	}
	else
	{
	$jdate=getdate();
	$status="Active";
        $query = "INSERT INTO `users` (name, password, email,phone,joindate,status) VALUES ('$name', '$password', '$email', '$phone', '$jdate', '$status')";
        $result = mysql_query($query);
        if($result){
           //REDIRECT
		   header('location:success-sign-up.php');
exit;
        }
    }
	}
    ?>