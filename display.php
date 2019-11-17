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
	<link rel="stylesheet" type="text/css" href="display.css">
</head>
<body>

	<div class="container-fluid">

            <nav class="navbar navbar-inverse" style="padding: 0; width: 100%">
                <ul class="nav navbar-nav">
                  <li style="padding-left: 30px;"><a href="deptindex.php">Back</a></li>
                  <li style="padding-left: 30px;"><a href="logout.php">Log Out</a></li>
                </ul>
                <div class="navbar-header" style="padding: 0; float: right;">
                  <a class="navbar-brand"><h11 style="font-size: 1.5vw; cursor: pointer;">Vidyavardhaka College of Engineering<h11></a>
                </div>
            </nav>

		<div class="jumbotron">
            

			<div class="row" style="background-color: rgba(0,0,0,0.3);">
    			<div class="column4" align="left" style="font-style: italic;">
    				<h4>SEM</h4>	
    			</div>
    			<div class="column3" align="left" style="font-style: italic;">
    				<h4>USN</h4>
    			</div>
    			<div class="column" align="left" style="font-style: italic;">
    				<h4>NAME</h4>
    			</div>
    			<div class="column3" align="left" style="font-style: italic;">
    				<h4>No-Due Issue</h4>
    			</div>
    			<div class="column6" align="center" style="font-style: italic;">
    				<h4>Due/No Due</h4>
    			</div>
    		</div>
    		<?php

				$sem = $_GET['id'];
				$_SESSION['idd'] = $sem;
                if(!isset($_GET['dept'])) {
				    $dept = $_SESSION['department'];
                }
                else {
                    $dept = $_GET['dept'];
                }
				$sqql = "SELECT * from $dept where Sem = $sem";
				$result = $con->query($sqql);
                if (!$result) {
                    trigger_error('Invalid query: ' . $con->error);
                }
 				if($result->num_rows > 0) {
 				echo "<table class ='table'>"; 
				while($row =$result->fetch_assoc()){
					$usn = $row['USN'];
					$deptt = $row['Department'];
					echo "<div class='row' id=".$usn.">
    						<div class='column4' align='left'>
    							{$row['Sem']}
    						</div>
    						<div class='column3' align='left'>
    							{$row['USN']}
    						</div>
    						<div class='column' align='left'>
   							{$row['Name']}
     						</div>
                            <div class='column3' align='left'>
    							{$row['Department']}
    						</div>";

    						if($deptt=='No Due') {
    						echo
    							"<div class='column2' align='center'>
    								<button type='button' id= ".$usn." onclick='due(this.id)'>DUE</button>
    							</div>";
    						}
    						else { echo 
    							"<div class='column2' align='center'>
                                <script> document.getElementById('".$usn."').style.backgroundColor ='#e57373';</script>
    								<button type='button' id= ".$usn." onclick='nodue(this.id)'>NO DUE</button>
    							</div>";
    						}
    					
    					echo "</div>";
				
					}
				}
			?>
		</div>
	</div>

<script type="text/javascript">
	function due(clicked_id) {
			window.location.href = ("updtRcrd/due.php?usn="+clicked_id);
			
	}
	function nodue(clicked_id) {
			window.location.href = ("updtRcrd/nodue.php?usn="+clicked_id);
			
	}
</script>

</body>
</html>

