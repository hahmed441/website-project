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
$userid = (isset($_GET['id']) ? $_GET['id'] : NULL);
if ($userid) {
    $userinfo = $DB->query_first("SELECT * FROM 'user' WHERE 'id' = '$userid'");
    print_r($userinfo);
	echo ['id'];
}
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="boot/css/bootsrap.css">
  <link rel="stylesheet" type="text/css" href="boot/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
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

</body>
</html>
</style>
<?php 
$sql = "SELECT * from user";

$type = ['type'];
?>
<p>Thanks for logging in! You are <code><?=$_SESSION['username']?></code> and your email address is <code><?=$_SESSION['email'] ?></code> and you are a <code><?=$_SESSION['type']?></code></p>
<? echo($_SESSION['type']); ?>
<form>
     <a href="logout.php" class="glyphicon-log-out">Logout</a>
   </form>

        </a>
      </p>

</html>