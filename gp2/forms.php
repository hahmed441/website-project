<!DOCTYPE html>

<?php
    include ('db.php');
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
    <link rel="stylesheet" type="text/css" href="<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/><link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>

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
.table {
	background-color:black;
	text-color:blue;
}

table:hover {
	text-color: white;
	color:red;
}


</style>
</head>
<body>


<ul>

  <li><a class="active" href="userhome.php">Home</a></li>
  <li><a href="annoucements.php">Announcements</a></li>
  <li><a href="placements.php">Placements</a></li>
  <li><a href="#contact">Assignments</a></li>
  <li><a href="forms.php">Forms</a></li>
</ul>

<form style="text-align:right">
<input type="button" value="Log Out" name="logout" onclick="window.location.href='logout.php'"/>
 </form>
<h1>
Placement Forms
</h1>
<p>
This is where you can find forms and other documents that are needed for the placement module: 
</p>
<table border="1">
  <tr>
    <th>Form</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><a href="placementsecuredform.php">Placement Secured Form</a></td>
    <td>Complete this online form to notify the Faculty of your placement</td>
  </tr>
  <tr>
    <td><a href="placementchecklist.php">Placement Checklist</a></td>
    <td>Complete this 4-6 weeks into your placement</td>
  </tr>
</table>
