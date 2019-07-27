<?php 
include "db.php";
session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>
<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">  
<style id="stndz-style"></style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content>
<meta name="author" content>
<link rel="icon" href="uoblogo.png">
<title>User Management System</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>  
<body>  
<div id="main"



<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
     
    $checklogin = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'");
     
    if(mysqli_num_rows($checklogin) == 1)
    {
        $row = mysqli_fetch_array($checklogin);
        $email = $row['email'];
        $type = $row['type'];
         
        $_SESSION['username'] = $row['username'];

        $_SESSION['email'] = $row['email'];
		$_SESSION['password'] = $row['password'];
        $_SESSION['type'] = $row['type'];
         
        echo "<h1>You have Successfully Logged in</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
		header("Location:userhome.php?id={$_SESSION['id']}");
        exit();
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
    ?>




   
   <h1>Member Login</h1>
     
   <p>Thanks for visiting! Please either login below</p>
<br>
   <img src="uoblogo.png" style="width:200px;height:70px;" align="middle">
   <br>
   <br>
     <br>
    <form method="post" action="index.php" name="loginform" id="loginform" class="form-signin">
    <fieldset>
        <label for="username" class="sr-only">Username:</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus><br />
        <label for="password" class="sr-only">Password:</label>
        <input type="password" name="password" id="inputpassword" class="form-control" placeholder="Password" required><br />
       
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me">
            Remember Me</input>
        </label>
    </div>
     <button type="submit" class="btn btn-lg btn-primary btn-block">Sign In</button>

    </fieldset>
    </form>
	
   <?php
}


?>
 
</div>
</body>
