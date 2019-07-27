
<?php
include 'db.php';
$sql = "SELECT * FROM forms";
$result = mysqli_query($conn, $sql);

$sql = mysqli_query($conn, "INSERT INTO forms (Full_Name, UB_Number) VALUES ('$Full_Name','$UB_Number')");


?>
