<?php

require('inc\dbcon.php');

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
//Name variable
while($row = mysql_fetch_assoc($result))
{
   $name = $row["name"];
   $level= $row["level"];
   //
   if ($level == 0){
  header("location:access-denied.php");
    exit;
   }
  
} 
// Register $myusername, $mypassword and redirect to file "login_success.php"
// Start the session
session_start();
// Set session variables
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
$_SESSION["name"] = $name;
//echo "Session variables are set.";
header("location:admin-welcom.php");
}
else {
echo "<script language=javascript>alert('sila daftar semula.'); window.location='index.php';</script>";
}
?>