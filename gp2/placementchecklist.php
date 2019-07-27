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

<h1>Placement Checklist</h1><Br>
<img src="uoblogo.png" style="float:left;width:300px;height:100px"><br><br><Br><br><br><Br>
<div class="container" style="float:left">
<p>To completed by the Student</p> 
<p>Please complete this form within 1 month of start of your placement and submit.</p>
</div>
<br>
<br>
<br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="width:600px;">
<input type="text" name="student_name" placeholder="Student Name" class="form-control" required>
<br><br>

<input type="text" name="ub_number" placeholder="UB Number" class="form-control" required>
<br><Br>

<input type="text" name="placement_tutor" placeholder="Placement Tutor" class="form-control" required>
<br><br>

<label style="font-weight: bold">Introduction to key staff members and their roles explained?</label><br>
<input type="radio" name="Introduction_to_key_staff_members_and_their_roles_explained" value="Yes">Yes   

<input type="radio" name="Introduction_to_key_staff_members_and_their_roles_explained" value="No">No<br><br>


<label style="font-weight: bold">Have your own tasks and responsibilities been explained?</label><br>
<input type="radio" name="Have_your_own_tasks_and_responsibilities_been_explained" value="Yes">Yes   
<input type="radio" name="Have_your_own_tasks_and_responsibilities_been_explained" value="No">No<br><br>

<label style="font-weight: bold">Employment Supervisor allocated</label><br>
<input type="radio" name="Employment_Supervisor_allocated" value="Yes">Yes
<input type="radio" name="Employment_Supervisor_allocated" value="No">No<br><br>


<label style="font-weight: bold">Have you been notified of Health and Safety Policy</label><br>
<input type="radio" name="Have_you_been_notified_of_Health_and_Safety_Policy" value="Yes">Yes
<input type="radio" name="Have_you_been_notified_of_Health_and_Safety_Policy" value="No">No<br><br>

<label style="font-weight: bold">Have you been notified of Emergency procedures?</label><br>
<input type="radio" name="Have_you_been_notified_of_Emergency_procedures" value="Yes">Yes
<input type="radio" name="Have_you_been_notified_of_Emergency_procedures" value="No">No<br><br>

<label style="font-weight: bold">Have you been notified of the location of exits and fire assembly points?</label><br>
<input type="radio" name="been_notified_of_the_location_of_exits_and_fire_assembly_points" value="Yes">Yes
<input type="radio" name="been_notified_of_the_location_of_exits_and_fire_assembly_points" value="No">No<br><br>

<label style="font-weight: bold">Accident reporting and location of accident book?</label><Br>
<input type="radio" name="Accident_reporting_and_location_of_accident_book" value="Yes">Yes
<input type="radio" name="Accident_reporting_and_location_of_accident_book" value="No">No<br><br>

<label style="font-weight: bold">Have you been notified of First aid arrangements – including names of first aiders</label><br>
<input type="radio" name="Have_you_been_notified_of_First_aid_arrangements" value="Yes">Yes
<input type="radio" name="Have_you_been_notified_of_First_aid_arrangements" value="No">No<br><br>

<label style="font-weight: bold">Have you been notified of the location of first aid box?</label><Br>
<input type="radio" name="Have_you_been_notified_of_the_location_of_first_aid_box" value="Yes">Yes
<input type="radio" name="Have_you_been_notified_of_the_location_of_first_aid_box" value="No">No<br><br>

<label style="font-weight: bold">If Personal Protective Equipment (PPE) Regulations apply have procedures been explained?</label><br>
<input type="radio" name="If_PPE_Regulations_apply_have_procedures_been_explained" value="Yes">Yes
<input type="radio" name="If_PPE_Regulations_apply_have_procedures_been_explained" value="No">No<br><br>

<label style="font-weight: bold">If display screens are used: has a Display Screen Equipment (DSE) assessment been conducted?</label><br>
<input type="radio" name="If_display_screens_are_used_has_a_DSE_assessment_been_conducted" value="Yes">Yes
<input type="radio" name="If_display_screens_are_used_has_a_DSE_assessment_been_conducted" value="No">No<br><br>

<label style="font-weight:bold">Have you been notified of manual handling procedures?</label><br>
<input type="radio" name="Have_you_been_notified_of_manual_handling_procedures" value="Yes">Yes
<input type="radio" name="Have_you_been_notified_of_manual_handling_procedures" value="No">No<br><br>

<label style="font-weight:bold">Instruction on equipment student will be using</label><br>
<input type="radio" name="Instruction_on_equipment_student_will_be_using" value="Yes">Yes
<input type="radio" name="Instruction_on_equipment_student_will_be_using" value="No">No<br><br>

<label style="font-weight: bold">Generic/specific risk assessments (COSHH)</label><br>
<input type="radio" name="Generic_specific_risk_assessments_COSHH" value="Yes">Yes
<input type="radio" name="Generic_specific_risk_assessments_COSHH" value="No">No<br><br>

<label style="font-weight: bold">Have you been notified of CDM requirements (civil engineers)</label><br>
<input type="radio" name="Have_you_been_notified_of_CDM_requirements_civil_engineers" value="Yes">Yes
<input type="radio" name="Have_you_been_notified_of_CDM_requirements_civil_engineers" value="No">No
<input type="radio" name="Have_you_been_notified_of_CDM_requirements_civil_engineers" value="N/A">N/A<br><br>
<label style="font-weight: bold">Any Other Comments?</label><br>
<textarea  name="comments" style="width:500px;height:250px"></textarea><br><br>
<input type="Submit" name="Submit" value="Submit">
<input type="Reset" name="Reset" value="Reset">

<?php
$student_name = $_POST['student_name'];

$ub_number = $_POST['ub_number'];

$placement_tutor = $_POST['placement_tutor'];

$Introduction_to_key_staff_members_and_their_roles_explained = $_POST['Introduction_to_key_staff_members_and_their_roles_explained'];

$Have_your_own_tasks_and_responsibilities_been_explained = $_POST['Have_your_own_tasks_and_responsibilities_been_explained'];

$Employment_Supervisor_allocated = $_POST['Employment_Supervisor_allocated'];

$Have_you_been_notified_of_Health_and_Safety_Policy = $_POST['Have_you_been_notified_of_Health_and_Safety_Policy'];

$Have_you_been_notified_of_Emergency_procedures = $_POST['Have_you_been_notified_of_Emergency_procedures'];

$been_notified_of_the_location_of_exits_and_fire_assembly_points = $_POST['been_notified_of_the_location_of_exits_and_fire_assembly_points'];

$Accident_reporting_and_location_of_accident_book = $_POST['Accident_reporting_and_location_of_accident_book'];

$Have_you_been_notified_of_First_aid_arrangements = $_POST['Have_you_been_notified_of_First_aid_arrangements'];

$Have_you_been_notified_of_the_location_of_first_aid_box = $_POST['Have_you_been_notified_of_the_location_of_first_aid_box'];

$If_PPE_Regulations_apply_have_procedures_been_explained = $_POST['If_PPE_Regulations_apply_have_procedures_been_explained'];

$If_display_screens_are_used_has_a_DSE_assessment_been_conducted = $_POST['If_display_screens_are_used_has_a_DSE_assessment_been_conducted'];

$Have_you_been_notified_of_manual_handling_procedures = $_POST['Have_you_been_notified_of_manual_handling_procedures'];

$Instruction_on_equipment_student_will_be_using = $_POST['Instruction_on_equipment_student_will_be_using'];

$Generic_specific_risk_assessments_COSHH = $_POST['Generic_specific_risk_assessments_COSHH'];

$Have_you_been_notified_of_CDM_requirements_civil_engineers = $_POST['Have_you_been_notified_of_CDM_requirements_civil_engineers'];
$comments = $_POST['comments'];



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "INSERT INTO placementchecklist (student_name, ub_number, placement_tutor, Introduction_to_key_staff_members_and_their_roles_explained, Have_your_own_tasks_and_responsibilities_been_explained, Employment_Supervisor_allocated, Have_you_been_notified_of_Health_and_Safety_Policy, Have_you_been_notified_of_Emergency_procedures, been_notified_of_the_location_of_exits_and_fire_assembly_points, Accident_reporting_and_location_of_accident_book, Have_you_been_notified_of_First_aid_arrangements, Have_you_been_notified_of_the_location_of_first_aid_box, If_PPE_Regulations_apply_have_procedures_been_explained, If_display_screens_are_used_has_a_DSE_assessment_been_conducted, Have_you_been_notified_of_manual_handling_procedures, Instruction_on_equipment_student_will_be_using, Generic_specific_risk_assessments_COSHH, Have_you_been_notified_of_CDM_requirements_civil_engineers, comments) VALUES ('$student_name','$ub_number','$placement_tutor', '$Introduction_to_key_staff_members_and_their_roles_explained', '$Have_your_own_tasks_and_responsibilities_been_explained', '$Employment_Supervisor_allocated', '$Have_you_been_notified_of_Health_and_Safety_Policy', '$Have_you_been_notified_of_Emergency_procedures', '$been_notified_of_the_location_of_exits_and_fire_assembly_points', '$Accident_reporting_and_location_of_accident_book', '$Have_you_been_notified_of_First_aid_arrangements', '$Have_you_been_notified_of_the_location_of_first_aid_box', '$If_PPE_Regulations_apply_have_procedures_been_explained', '$If_display_screens_are_used_has_a_DSE_assessment_been_conducted', '$Have_you_been_notified_of_manual_handling_procedures', '$Instruction_on_equipment_student_will_be_using', '$Generic_specific_risk_assessments_COSHH', '$Have_you_been_notified_of_CDM_requirements_civil_engineers', '$comments')";

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