<!DOCTYPE html>
<html lang="en" >

<!---------------------------------
  Author : Kartikeya P. Malimath
---------------------------------->

<head>
  <meta charset="UTF-8">
  <title>Library Login Form</title>


  <link rel='stylesheet prefetch' href='https://daneden.github.io/animate.css/animate.min.css'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700'>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="loginlib.css">


</head>

<body>

<div id="navbar"><h5>Vidyavardhaka College of Engineering</h5></div>

  <div class='form animated bounceIn'>
    <img src="image/vvce_round.png" class="user">
    <h3 style = "color : #070f49"><center>Library Login</center></h3>
    <form method="post">
    <input name='username' placeholder='Username' type='text'>
    <input name='password' placeholder='Password' type='password'>
    <button class='animated infinite pulse'>Login</button>
  </form>

</div>
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  <div class="footer">
    <h10>Copyright 2018 © <a href="http://www.vvce.ac.in/">VVCE</a> | Developed by Kartikeya P. Malimath and Department of CS&E</h10>
  </div>


</body>

</html>

<!--====================================
  Author : Kartikeya P Malimath
  ==================================-->

<?php

include ('database.php');
 // Starting Session
session_start();
$_SESSION = array();
$error=''; // Variable To Store Error Message
if (isset($_POST['username'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$uname=$_POST['username'];
$password=$_POST['password'];
$dept= 'library';
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
$uname = stripslashes($uname);
$password = stripslashes($password);
$dept = stripslashes($dept);
$uname = mysqli_real_escape_string($con,$uname);
$password = mysqli_real_escape_string($con,$password);
$dept = mysqli_real_escape_string($con,$dept);

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($con,"select * from login where password='$password' AND user='$uname' AND department='$dept'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$uname;
$_SESSION['lib']='library';
header("location: department.php"); // Redirecting To Other Page
} else {
$alrt = "<script>alert(\"invalid Username or password\")</script>";
          echo $alrt;
          exit();
}
mysqli_close($con); // Closing Connection
}
}
?>