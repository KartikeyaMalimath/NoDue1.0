<!DOCTYPE html>

<!--====================================
  Author : Kartikeya P Malimath
  ==================================-->

<?php
  include ('../database.php');
	session_start();
?>

<html>
<head>
	<title>No Due Display</title>
	<meta charset="utf-8"> 
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <style type="text/css">
        
/*<!--====================================
  Author : Kartikeya P Malimath
==================================-->*/

body {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    overflow-x: hidden;
    -webkit-box-sizing: border-box;
    -webkit-text-size-adjust: 100%;
    -webkit-box-orient: vertical;
    background-image: linear-gradient(to bottom, #424242 100%, #f5f5f5 0%);
}

.jumbotron {
    position: relative;
    padding: 10px;
    background-color: rgba( 255, 255, 255, 0.95);
    top: 100px;
}

.container-fluid {
    background-image: url("../image/top3.jpg");
    height: 600px;
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    margin: 0;
    padding: 1%;
}

#navbar {
  overflow: hidden;
  background-color: #333;
  color: #ffffff;
  padding: 5px;
  padding-left: 20px;
  top: 0px;
  padding-right: 20px;
  vertical-align: center;
}

.column {
    float: center;
    float: left;
    width: 23%;
    padding: 10px;
    border: 1px solid black;
 }
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
    .column {
        width: 100%;
        border: 1px solid black;
    }
}

button {
    padding: 5px;
    width: 100%;
}

.footer {
    position: absolute; 
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0,0,0,1);
    color: white;
    text-align: center;
}

</style>


</head>
<body>

	<div class="container-fluid">

            <nav class="navbar navbar-inverse" style="padding: 0; width: 100%">
                <ul class="nav navbar-nav">
                  <li style="padding-left: 30px;"><a href="studentPortal.php">Back</a></li>
                </ul>
                <div class="navbar-header" style="padding: 0; float: right;">
                  <a class="navbar-brand"><h11 style="font-size: 1.5vw; cursor: pointer;">Vidyavardhaka College of Engineering<h11></a>
                </div>
            </nav>

		<div class="jumbotron">
            
    		<?php

				$dept = $_SESSION['dep'];
                $sem = $_SESSION['sem'];
                $usn = $_SESSION['usn'];
				$sqql = "SELECT * from $dept where Sem = $sem And USN = '$usn'";
				$result = $con->query($sqql);
                if (!$result) {
                    trigger_error('Invalid query: ' . $con->error);
                }
 				if($result->num_rows > 0) {
 				echo "<table class ='table'>"; 
				while($row =$result->fetch_assoc()){
					$usn = $row['USN'];
					$deptt = $row['HallTicket'];
                    $a = $row['Department'];
                    $b = $row['Library'];
                    $c = $row['TAP'];
                    $d = $row['Others'];
                    $e = $row['Accounts'];
                    $f = $row['HallTicket'];
					echo "<div class='row'>
                                <div class='column' align='left' style='font-style: italic; background-color: rgba(0,0,0,0.3);'>
                                    <h5><b>SEM</b></h5> 
                                </div>
    						<div class='column' align='left' style='background-color: rgba(0,0,0,0);'>
    							<h5>{$row['Sem']}</h5>
    						</div>
                        </div>

                        <div class='row'>
    						<div class='column' align='left' style='font-style: italic;background-color: rgba(0,0,0,0.3);'>
                                <h5><b>USN</b></h5>
                            </div>
                            <div class='column' align='left' style='background-color: rgba(0,0,0,0);'>
    							<h5>{$row['USN']}</h5>
    						</div>
                        </div>  

                        <div class='row'>
                            <div class='column' align='left' style='font-style: italic;background-color: rgba(0,0,0,0.3);'>
                                <h5><b>NAME</b></h5>
                            </div>
    						<div class='column' align='left'>
   							  <h5>{$row['Name']}</h5>
     						</div>
                        </div>

                        <div class='row'>
                            <div class='column' align='left' style='font-style: italic;background-color: rgba(0,0,0,0.3);'>
                                <h5><b>Department</b></h5>
                            </div>
                            <div id='".$usn."-1' class='column' align='left'>
    							<h5>{$row['Department']}</h5>
    						</div>
                        </div>
                            
                        <div class='row'>
                            <div class='column' align='left' style='font-style: italic;background-color: rgba(0,0,0,0.3);'>
                                <h5><b>Library</b></h5>
                            </div>
                            <div id='".$usn."-2' class='column' align='left'>
                                <h5>{$row['Library']}</h5>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='column' align='left' style='font-style: italic;background-color: rgba(0,0,0,0.3);'>
                                <h5><b>Accounts</b></h5>
                            </div>
                            <div id='".$usn."-3' class='column' align='left'>
                                <h5>{$row['Accounts']}</h5>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='column' align='left' style='font-style: italic;background-color: rgba(0,0,0,0.3);'>
                                <h5><b>TAP</b></h5>
                            </div>
                            <div id='".$usn."-4' class='column' align='left'>
                                <h5>{$row['TAP']}</h5>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='column' align='left' style='font-style: italic;background-color: rgba(0,0,0,0.3);'>
                                <h5><b>Hostel/Others</b></h5>
                            </div>
                            <div id='".$usn."-5' class='column' align='left'>
                                <h5>{$row['Others']}</h5>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='column' align='left' style='font-style: italic;background-color: rgba(0,0,0,0.3);'>
                                <h5><b>HallTicket</b></h5>
                            </div>
                            <div id='".$usn."-6' class='column' align='left'>
                                <h5>{$row['HallTicket']}</h5>
                            </div>
                        </div>";
                        if($a == 'Due'){
                            echo "<script> document.getElementById('".$usn."-1').style.backgroundColor ='#e57373';</script>";
                        }
                        if($b == 'Due'){
                            echo "<script> document.getElementById('".$usn."-2').style.backgroundColor ='#e57373';</script>";
                        }
                        if($e == 'Due'){
                            echo "<script> document.getElementById('".$usn."-3').style.backgroundColor ='#e57373';</script>";
                        }
                        if($e == 'Permitted'){
                            echo "<script> document.getElementById('".$usn."-3').style.backgroundColor ='#ffee58';</script>";
                        }
                        if($c == 'Due'){
                            echo "<script> document.getElementById('".$usn."-4').style.backgroundColor ='#e57373';</script>";
                        }
                        if($d == 'Due'){
                            echo "<script> document.getElementById('".$usn."-5').style.backgroundColor ='#e57373';</script>";
                        }
                        if($f == 'Not Issued'){
                            echo "<script> document.getElementById('".$usn."-6').style.backgroundColor ='#e57373';</script>";
                        }
                        if($f == 'Issued'){
                            echo "<script> document.getElementById('".$usn."-6').style.backgroundColor ='#b2ff59';</script>";
                        }
                
    			
				
					}
				}
			?>
            <br>
            <br>
            <br>
            <br>
            <div class="footer">
                <h10>Copyright 2018 © <a href="http://www.vvce.ac.in/">VVCE</a> | Developed by Kartikeya P. Malimath and Department of CS&E</h10>
            </div>
		</div>
	</div>

</body>
</html>

