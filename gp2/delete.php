<?php
include "db.php";

$Placement = $_GET['Placement'];

$delete= mysqli_query($conn, "DELETE FROM placements WHERE Placement='$Placement'");

header('location:placements.php');

?>