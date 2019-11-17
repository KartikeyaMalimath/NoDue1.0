<!DOCTYPE html>
<html lang="en" >

<!---------------------------------
  Author : Kartikeya P. Malimath
---------------------------------->

<head>
  <meta charset="UTF-8">
  <title>Department Login Form</title>
  
  
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
      <link rel="stylesheet" href="../login.css">

  
</head>

<body>

<div id="navbar"><h5>Vidyavardhaka College of Engineering</h5></div>
    
  <div class='form animated bounceIn'>
    <img src="../image/vvce_round.png" class="user">
  <h2><center>Student No-Due Portal</center></h2>
  <form method="post">
    <select name="department" required>
      <option value="" disabled selected>---Departments---</option>
      <option value="cse">Computer Science</option>
      <option value="ise">Information Science</option>
      <option value="ece">Electronics & Communications</option>
      <option value="eee">Electricals & Electronics</option>
      <option value="me">Mechanical Enigineering</option>
      <option value="ce">Civil Engineering</option>
      <option value="mba">MBA Department</option>
    </select>
    <select name="semister" required>
      <option value="" disabled selected>--Semister--</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
    </select>
    <input name="usn" placeholder='USN' type='text' required>
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

include ('../database.php');
session_start();
$_SESSION = array();
$error=''; // Variable To Store Error Message
if (isset($_POST['usn'])) {
if (empty($_POST['usn']) || empty($_POST['department'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$usn=$_POST['usn'];
$sem=$_POST['semister'];
$dept=$_POST['department'];

$usn = strtoupper($usn);

$_SESSION['usn'] = $usn;
$_SESSION['sem'] = $sem;
$_SESSION['dep'] = $dept;

header('location: studentNoDue.php');
}
}
?>