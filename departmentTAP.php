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
	<title>VVCE Departments</title>
	<meta charset="utf-8"> 
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index2.css">
</head>
<body>
<div class="container-fluid">
	
	<nav class="navbar navbar-inverse" style="padding: 0; width: 100%">
        <ul class="nav navbar-nav">
            <li style="padding-left: 30px;"><a href="logout.php">Log Out</a></li>
        </ul>
        <div class="navbar-header" style="padding: 0; float: right;">
            <a class="navbar-brand"><h11 style="font-size: 1.5vw; cursor: pointer;">Vidyavardhaka College of Engineering<h11></a>
        </div>
    </nav>

	<div class="jumbotron">
	<div class="row">
		<div class="column" align="center">
			<div class="card" id="cse" onclick="fn(this.id)">
				<div class="grad1"><h1 style="font-size: 10vw;">h</h1></div>
				<div class="contain">
					<h2><center>Computer Science</center></h2>
				</div>
			</div>
		</div>

		<div class="column" align="center">
			<div class="card" id="ise" onclick="fn(this.id)">
				<div class="grad2"><h1 style="font-size: 10vw;">h</h1></div>
				<div class="contain">
				<h2><center>Information Science</center></h2>
			</div></div>
		</div>
	</div>

	<div class="row">
		<div class="column" align="center">
			<div class="card" id="ece" onclick="fn(this.id)">
				<div class="grad3"><h1 style="font-size: 10vw;">h</h1></div>
				<div class="contain">
				<h2><center>Electronics & Communication</center></h2>
			</div></div>
		</div>

		<div class="column" align="center">
			<div class="card" id="eee" onclick="fn(this.id)">
				<div class="grad4"><h1 style="font-size: 10vw;">h</h1></div>
				<div class="contain">
				<h2><center>Electricals & Electronics</center></h2>
			</div></div>
		</div>
	</div>

	<div class="row">
		<div class="column" align="center">
			<div class="card" id="me" onclick="fn(this.id)">
				<div class="grad5"><h1 style="font-size: 10vw;">h</h1></div>
				<div class="contain">
				<h2><center>Mechanical Engineering</center></h2>
			</div></div>
		</div>

		<div class="column" align="center">
			<div class="card" id="ce" onclick="fn(this.id)">
				<div class="grad6"><h1 style="font-size: 10vw;">h</h1></div>
				<div class="contain">
				<h2><center>Civil Engineering</center></h2>
			</div></div>
		</div>
	</div>
	<div class="row">
		<div class="column" align="center">
			<div class="card" id="mba" onclick="fn(this.id)">
				<div class="grad1"><h1 style="font-size: 10vw;">h</h1></div>
				<div class="contain">
				<h2><center>MBA</center></h2>
			</div></div>
		</div>

		<div class="column" align="center">
			<div class="card" onclick="#">
				<div class="grad2"><h1 style="font-size: 10vw;">h</h1></div>
				<div class="contain">
				<h2><center>Due Report</center></h2>
			</div></div>
		</div>
	</div>
	

	<div class="footer">
		<h10>Copyright 2018 © <a href="http://www.vvce.ac.in/">VVCE</a> | Developed by Kartikeya P. Malimath And Department of CS&E</h10>
	</div>
	

	</div>
</div>

<script type="text/javascript">
	function fn(clicked_id) {
		window.location.href=('Tapindex.php?dept='+clicked_id);
	}
</script>

</body>
</html>