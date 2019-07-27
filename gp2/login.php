<!Doctype HTML>
<html>
<head>
<style>
#mylogin a{
position:absolute;
left:-80px;
padding:20px;
transition: -0.3s;
width:150px;
text-decoration:none;
font-size: 20px;
color:white;
border-radius: 0 10px 10px 0;
}
p {
	margin:120px;
	text-align:center-left;
}
#mylogin a:hover {
	left: 0;
}

#studentlogin {
	top:5px;
	background-color:red;
}
#tutorlogin {
	top:95px;
	background-color: green;
}
</style>
<div id="mylogin" class="login">
<a href="studentlogin.php" id="studentlogin">Log in As a Student</a>
<a href="tutorlogin.php" id="tutorlogin">Log in As a Tutor</a>
</div>
</head>
<br/>
<br/>
<p>
Please Login as a Student or Tutor.
</p>
</html>