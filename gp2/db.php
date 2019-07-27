<?php
session_save_path("session");
session_start();
$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "gp2"; // the name of the database that you are going to use for this project
$dbuser = "root"; // the username that you created, or were given, to access your database
$dbpass = ""; // the password that you created, or were given, to access your database
 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($conn, "gp2") or die("MySQL Error: " . mysql_error());

?>