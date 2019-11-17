<!DOCTYPE html>

<!--====================================
  Author : Kartikeya P Malimath
  ==================================-->
<?php
  include ('database.php');
	session_start();
    if(!isset($_SESSION['login_user'])) {
    header("Location:Login.php");
} 
?>

<html>
<head>
	<title>Department Portal</title>
	<meta charset="utf-8"> 
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="deptindex.css">
</head>
<body>
	<div class="container-fluid">

    <nav class="navbar navbar-inverse" style="padding: 0; width: 100%">
      <ul class="nav navbar-nav">
        <!--<li style="padding-left: 30px;"><a href="department.php">Back</a></li>-->
        <li style="padding-left: 30px;"><a href="logout.php">Log Out</a></li>
      </ul>
      <div class="navbar-header" style="padding: 0; float: right;">
        <a class="navbar-brand"><h11 style="font-size: 1.5vw; cursor: pointer;">Vidyavardhaka College of Engineering</h11></a>
      </div>
    </nav>

		<div class="jumbotron">
			<div class="top">
		<h3 style="color: black; font-style: bold; font-size: 4vw;">MBA Department</h3></div>
				<div class="row">
    					<div class="column" align="center">
    						<div class="card" id="1" onclick="f1(this.id)">
    							<h2><center>1st Sem</center></h2>
    						</div>
    					</div>
    					<div class="column" align="center">
    						<div class="card" id="2" onclick="f1(this.id)">
    							<h2><center>2nd Sem</center></h2>
    						</div>
    					</div>
    			</div>
    			<div class="row">
    					<div class="column" align="center">
    						<div class="card" id="3" onclick="f1(this.id)">
    							<h2><center>3rd Sem</center></h2>
    						</div>
    					</div>
    					<div class="column" align="center">
    						<div class="card" id="4" onclick="f1(this.id)">
    							<h2><center>4th Sem</center></h2>
    						</div>
    					</div>
    			</div>

		<div class="footer">
			<h10>Copyright 2018 © <a href="http://www.vvce.ac.in/">VVCE</a> | Developed by Kartikeya P. Malimath And Department of CS&E</h10>
		</div>

	</div>
</div>

<script type="text/javascript">
  function f1(clicked_id) {
    window.location.href ="display.php?id="+clicked_id;
  }
</script>
</body>