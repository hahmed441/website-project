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
  <li><a href="placements.php">Placements</a></li>
  <li><a href="assignments.php">Assignments</a></li>
  <li><a href="forms.php">Forms</a></li>
</ul>




<h1>Secured Form</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<label>What is your full name?</label><br>
<input type="text" name="Full_Name" id="Full_Name" required>
<br><br>

<label>What is your UB Number?</label><br>
<input type="text" name="UB_Number" id="UB_Number" required>
<br><Br>

<label>What is your Course?</label><br>
<input type="text" name="Course" id="Course" required>
<br><br>

<label>Do you hold a tier 4 Visa?</label><br>
<input type="radio" name="Visa" id="Visa" value="Yes">Yes<br>

<input type="radio" name="Visa" id="Visa" value="No">No<br>
<br><br>

<label>What is the Name of the Organisation?</label><br>
<input type="text" name="Organisation_Name" id="Organisation_Name" required>
<br><br>

<label>What is the address of the Organisation?</label><br>
<input type="text" name="Organisation_Address" id="Organisation_Address" required>
<br><br>

<label>What is the Postcode of the organisation?</label><br>
<input type="text" name="Organisation_Postcode" id="Organisation_Postcode" required>
<br><br>

<label>Which Country is it in?</label><br>
<input type="text" name="Country" id="Country" required>
<br><br>

<label>Telephone:</label><br>
<input type="tel" name="Telephone" id="Telephone" required>
<br><br>

<label>What is the date on which the placement ends?</label><br>
<input type="date" name="Placement_End_Date" id="Placement_End_Date" required>
<br><br>

<label>What is the name of your supervisor?</label><br>
<input type="text" name="Supervisor_Name" id="Supervisor_Name" required>
<br><br>

<label>What is the position of your supervisor?</label><br>
<input type="text" name="Supervisor_Position" id="Supervisor_Position" required>
<br><br>

<label>What is the email of your supervisor?</label><br>
<input type="email" name="Supervisor_Email" id="Supervisor_Email" required>
<br><br>

<label>What is the phone number of your supervisor?</label><br>
<input type="tel" name="Supervisor_Phone_Number" id="Supervisor_Phone_Number" required>
<br><br>

<label>How many hours do you work per week?</label><br>
<input type="text" name="Hours_per_Week" id="Hours_per_Week" required>
<br><br>

<label>Is The Employment Paid?</label><br>
<select name="is_The_Employment_Paid" required>
  <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
<br><br>
<input type="submit" value="Submit">
<input type="reset" value="Reset">

<?php
$Full_Name = NULL;
$Full_Name = $_POST['Full_Name'];

$UB_Number = NULL;
  $UB_Number = $_POST['UB_Number'];

  $Course = NULL;
  $Course = $_POST['Course'];
  
  $Visa = NULL;
  $Visa = $_POST['Visa'];
  
  $Organisation_Name = NULL;
  $Organisation_Name = $_POST['Organisation_Name'];

  $Organisation_Address = NULL;
  $Organisation_Address = $_POST['Organisation_Address'];

  $Organisation_Postcode = NULL;
  $Organisation_Postcode= $_POST['Organisation_Postcode'];

  $Country = NULL;
  $Country = $_POST['Country'];

  $Telephone = NULL;
  $Telephone = $_POST['Telephone'];

  $Placement_End_Date = NULL;
  $Placement_End_Date = $_POST['Placement_End_Date'];

  $Supervisor_Name = NULL;
  $Supervisor_Name = $_POST['Supervisor_Name'];

  $Supervisor_Position = NULL;
  $Supervisor_Position = $_POST['Supervisor_Position'];

  $Supervisor_Email = NULL;
  $Supervisor_Email = $_POST['Supervisor_Email'];

  $Supervisor_Phone_Number = NULL;
  $Supervisor_Phone_Number = $_POST['Supervisor_Phone_Number'];

  $is_The_Employment_Paid = NULL;
  $is_The_Employment_Paid = $_POST['is_The_Employment_Paid'];

  $Hours_per_Week = NULL;
  $Hours_per_Week = $_POST['Hours_per_Week'];

 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$sql = "INSERT INTO forms (Full_Name, UB_Number, Course, Visa, Organisation_Name, Organisation_Address, Organisation_Postcode, Country, Telephone, Placement_End_Date, Supervisor_Name, Supervisor_Position, Supervisor_Email, Supervisor_Phone_Number, is_The_Employment_Paid, Hours_per_Week) VALUES ('$Full_Name','$UB_Number', '$Course', '$Visa', '$Organisation_Name', '$Organisation_Address', '$Organisation_Postcode', '$Country', '$Telephone', '$Placement_End_Date', '$Supervisor_Name', '$Supervisor_Position', '$Supervisor_Email', '$Supervisor_Phone_Number', '$is_The_Employment_Paid', '$Hours_per_Week')";

if ($conn->query($sql) === TRUE) {
    

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>
</form>
</body>
</html>