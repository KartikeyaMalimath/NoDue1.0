<!DOCTYPE html>

<?php
  include ('database.php');
    session_start();
    if(!isset($_SESSION['login_user'])) {
    header("Location:AdminLogin.php");
} 
?>

<html>
<head>
    <title>Admin Portal</title>
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
    <link rel="stylesheet" href="adminIndex.css">

</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-inverse" style="padding: 0; width: 100%">
        <ul class="nav navbar-nav">
            <li style="padding-left: 30px;"><a href="logout.php">Log Out</a></li>
        </ul>
        <div class="navbar-header" style="padding: 0; float: right;">
            <a class="navbar-brand"><h11 style="font-size: 1.5vw; cursor: pointer;">Vidyavardhaka College of Engineering</h11></a>
        </div>
    </nav>

    <div class="jumbotron">
        <h2><center>Admin Portal</center></h2>
        
                <div class='form animated bounceIn'>
                    <img src="image/vvce_round.png" class="user">
                  <h2><center>Create New User</center></h2>
                <form method="post" action="updtRcrd/create.php">
                    <select name="department" required>
                      <option value="" disabled selected>---Departments---</option>
                      <option value="cse">Computer Science</option>
                      <option value="ise">Information Science</option>
                      <option value="ece">Electronics & Communications</option>
                      <option value="eee">Electricals & Electronics</option>
                      <option value="me">Mechanical Enigineering</option>
                      <option value="ce">Civil Engineering</option>
                      <option value="phy">Physics Department</option>
                      <option value="chem">Chemistry Department</option>
                      <option value="TAP">Training & Placement</option>
                      <option value="library">Library Department</option>
                      <option value="account">Accounts Department</option>
                      <option value="mba">MBA Department</option>
                      <option value="hostel">Hostel</option>
                      <option value="hallticket">Hall Ticket Issue</option>
                    </select>
                    <input name="username" placeholder='Username' type='text' required>
                    <input name="password" placeholder='Password' type='text' required>
                    <button name="create" class='animated infinite pulse'>Create User</button>
                    <!--<input type="submit" name="submit" value="create" class='button animated infinite pulse'>Create</input>-->
              </form>
             </div>
            

            <!--<div class='form2 animated bounceIn'>
                    <img src="image/vvce_round.png" class="user">
                  <h2><center>Upload</center></h2>
                <form  method="post" action="updtRcrd/upload.php">
                    <select name="dept" required>
                      <option value="" disabled selected>---Departments---</option>
                      <option value="CSE">Computer Science</option>
                      <option value="ISE">Information Science</option>
                      <option value="ECE">Electronics & Communications</option>
                      <option value="EEE">Electricals & Electronics</option>
                      <option value="ME">Mechanical Enigineering</option>
                      <option value="CE">Civil Engineering</option>
                      <option value="phy">Physics Department</option>
                      <option value="chem">Chemistry Department</option>
                      <option value="TAP">Training & Placement</option>
                      <option value="library">Library Department</option>
                      <option value="accounts">Accounts Department</option>
                      <option value="Hostel">Hostel</option>
                      <option value="ticket">Hall Ticket Issue</option>
                    </select>
                    <input name="name" placeholder='Username' type='text' required>
                    <input name="pass" placeholder='Password' type='text' required>
                    <button name="upload" class='animated infinite pulse'>Upload</button>
                    <input type="submit" name="submit" value="create" class='button animated infinite pulse'>Create</input>
              </form>
             </div>-->
             
            
        
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
      <div class="footer">
        <h10>Copyright 2018 © <a href="http://www.vvce.ac.in/">VVCE</a> | Developed by Kartikeya P. Malimath and Department of CS&E</h10>
      </div>
    </div>

</div>



</body>
</html>
