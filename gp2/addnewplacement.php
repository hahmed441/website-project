<!DOCTYPE html>
 <?php
 include 'db.php';
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
<head>
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

label{
    display: inline-block;
    clear:left;
    float:left;
}
input {
  display: inline-block;
  clear:left;
  float:left;
  width: 500px;
}
</style>
</head>
<body>

<h1>Add New Placement</h1>
<br/>

	<form action="addnewplacement.php" method="post">

<label>Placement Name:</label>
<input type="text" name="Placement" required>
<br/>

<label>Location:</label>
<input type="text" name="Location" required>
<br/>

<label>Salary:</label>
<input type="text" name="Salary" required>
<br/>

<label>Minimum Degree</label>
<input type="text" name="Minimum_Degree" required>
<br/>

<input type="submit" name="submit" style="width:250px">

<?php
$PlacementErr ="";
$Placement = $_POST['Placement'];

$LocationErr = "";
$Location = $_POST['Location'];

$SalaryErr = "";
$Salary = $_POST['Salary'];

$Minimum_DegreeErr = "";
$Minimum_Degree = $_POST['Minimum_Degree'];



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "INSERT INTO placements (Placement, Location, Salary, Minimum_Degree) VALUES ('$Placement', '$Location', '$Salary', '$Minimum_Degree')";

if ($conn->query($sql) === TRUE) {
    echo "New Placement Added successfully";

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>
</form>
</body>
</html>
</head>
</html>