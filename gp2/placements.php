<!DOCTYPE html>

<?php
    include "db.php";
    if(!isset($_SESSION['id'])){
   if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit("you are not logged in");
}

      }

    else{

         echo("You are not logged in");
    }


?>
<html>
<script src="w3.js"></script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>

<style>

table {
    border:solid;
    width: 50%;
	background-color:white;
	
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

h1 {
	font-family:arial;
	font-size: 50px;
	font-weight:bold;
	text-align: center;
}
body {
	background-color: skyblue;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}



</style>
</head>
<body>


<ul>

  <li><a class="active" href="userhome.php">Home</a></li>
  <li><a href="annoucements.php">Announcements</a></li>
  <li><a href="placements.php">Placements</a></li>
  <li><a href="#contact">Assignments</a></li>
  <li><a href="forms.php">forms</a></li>
</ul>
<form style="text-align:right">
<input type="button" value="Log Out" name="logout" onclick="window.location.href='logout.php'"/>
 </form>
<h1>
Placements
</h1>
<p>
This is where you are able to search and apply to placements.
</p>
<br>
<br>
</div>

  <!-- Table -->
<?php

if ($_SESSION['type'] == 'Student')  {

?>
  <table class="table table-dark">

<thead>
<tr>
<th scope="col">Placement</th>
<th scope="col">Location</th>
<th scope="col">Salary</th>
<th scope="col">Minimum Degree</th>
<th scope="col">Closing Date</th>
<th scope="col">Duration</th>
<th scope="col">Link</th>
</tr>
</thead>
<tbody>
<tr>
    
<?php
include 'db.php';
$sql = ("select * from placements");
$result = mysqli_query($conn, $sql) or die ("bad query: $sql");


while($row = mysqli_fetch_assoc($result)) {
	echo
	"<tr>
	<td>{$row['Placement']}</td>
	<td>{$row['Location']}</td>
	<td>{$row['Salary']}</td>
	<td>{$row['Minimum_Degree']}</td>
	<td>{$row['Closing_Date']}</td>
	<td>{$row['Duration']}</td>
	<td>{$row['Link']}</tr></td>
	</tr>";

 }


?>

<?php 
}


else {
?>
<table class="table table-dark">

<thead>
<tr>
<th scope="col">Placement</th>
<th scope="col">Location</th>
<th scope="col">Salary</th>
<th scope="col">Minimum Degree</th>
<th scope="col">Closing Date</th>
<th scope="col">Duration</th>
<th scope="col">Link</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>
<tr>
    
<?php
include 'db.php';
$sql = ("select * from placements");
$result = mysqli_query($conn, $sql) or die ("bad query: $sql");


while($row = mysqli_fetch_assoc($result)) {
  echo
  "<tr>
  <td>{$row['Placement']}</td>
  <td>{$row['Location']}</td>
  <td>{$row['Salary']}</td>
  <td>{$row['Minimum_Degree']}</td>
  <td>{$row['Closing_Date']}</td>
  <td>{$row['Duration']}</td>
  <td>{$row['Link']}</td>
  <td>{$row['Delete']}</td>
</tr>";

}

?>
</td>
<tr>
</tr>
</tr>
</tbody>
</table>
</tr>
</tbody>
</table>

<a href="addnewplacement.php">Add New Placement</a>

<?php } ?>
</body>

</html>
