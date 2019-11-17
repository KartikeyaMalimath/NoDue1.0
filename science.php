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

<!DOCTYPE html>
<html>
<head>
	<title>Science Login</title>
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
            <a class="navbar-brand"><h11 style="font-size: 1.5vw; cursor: pointer;">Vidyavardhaka College of Engineering<h11></a>
          </div>
        </nav>

	<div class="jumbotron">
		<div class="top" >
			<h3 style="color: black; font-style: bold; font-size: 4vw;">
				<?php 
				$dept = $_SESSION['department'];
		    	unset($_SESSION["idd"]);
                unset($_SESSION["depat"]);
				if($dept == "phy") {
					echo "Department of Physics";
				}
				elseif ($dept == "chem") {
					echo "Department of Chemistry";
				}
				else {
					echo "Wow you Hacked";
				}
				?>
			</h3>
		</div>

		<div class="tabs">
  			<div class="tab-2">
    			<label for="tab2-1"><?php if($dept == "phy"){echo 'ODD Semister';} elseif($dept == "chem") { echo 'EVEN Semister';} ?></label>
    			<input id="tab2-1" name="tabs-two" type="radio" checked="checked">
    			<div class="inside">
    				<div class="row">
    					<div class="column" align="center"><form type="post">
    						<div class="card" id='cse' onclick="<?php if($dept == "phy"){echo 'f1(this.id)';} elseif($dept == "chem") { echo 'f2(this.id)';} ?>">
                  <input type="hidden" name="records" value="hi">
    							<h2><center>Computer science</center></h2>
    						</div>
    					</div></form>
    					<div class="column" align="center">
    						<div class="card" id='ise' onclick="<?php if($dept == "phy"){echo 'f1(this.id)';} elseif($dept == "chem") { echo 'f2(this.id)';} ?>">
    							<h2><center>Information Science</center></h2>
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="column" align="center">
    						<div class="card" id='me' onclick="<?php if($dept == "phy"){echo 'f1(this.id)';} elseif($dept == "chem") { echo 'f2(this.id)';} ?>">
    							<h2><center>Mechanical Engineering</center></h2>
    						</div>
    					</div>
    					<div class="column" align="center">
    						<div class="card" onclick="<?php if($dept == "phy"){echo 'f1(this.id)';} elseif($dept == "chem") { echo 'f2(this.id)';} ?>">
    							<h2><center>Due Report</center></h2>
    						</div>
    					</div>
    				</div>
  				</div>
  			</div>
  			<div class="tab-2">
    			<label for="tab2-2"><?php if($dept == "phy"){echo 'EVEN Semister';} elseif($dept == "chem") { echo 'ODD Semister';} ?></label>
    			<input id="tab2-2" name="tabs-two" type="radio">
   			 	<div class="inside">
    				<div class="row">
    					<div class="column" align="center">
    						<div class="card" id='ece' onclick="<?php if($dept == "phy"){echo 'f2(this.id)';} elseif($dept == "chem") { echo 'f1(this.id)';} ?>">
    							<h2>Electronics & Communication</h2>
    						</div>
    					</div>
    					<div class="column" align="center">
    						<div class="card" id='ce' onclick="<?php if($dept == "phy"){echo 'f2(this.id)';} elseif($dept == "chem") { echo 'f1(this.id)';} ?>">
    							<h2>Electricals & Electronics</h2>
    						</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="column" align="center">
    						<div class="card" id='ce' onclick="<?php if($dept == "phy"){echo 'f2(this.id)';} elseif($dept == "chem") { echo 'f1(this.id)';} ?>">
    							<h2>Civil Engineering</h2>
    						</div>
    					</div>
    					<div class="column" align="center">
    						<div class="card" onclick="<?php if($dept == "phy"){echo 'f2(this.id)';} elseif($dept == "chem") { echo 'f1(this.id)';} ?>">
    							<h2>Due Report</h2>
    						</div>
    					</div>
    				</div>
  				</div>
   			</div>
		</div>

		<div class="footer">
			<h10>Copyright 2018 © <a href="http://www.vvce.ac.in/">VVCE</a> | Developed by Kartikeya P. Malimath And Department of CS&E</h10>
		</div>

	</div>
	</div>
"<script type='text/javascript'>
	function f1(clicked_id) {
		window.location.href=('displaySci.php?id=1&dept='+clicked_id);
	}
    function f2(clicked_id) {
        window.location.href=('displaySci.php?id=2&dept='+clicked_id);
    }
</script>

</body>
</html>