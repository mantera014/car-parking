<?php
$connection = mysql_connect('localhost', 'root', '0145091646');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('parking');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}