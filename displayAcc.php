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
    padding: 50px;
    background-color: rgba( 255, 255, 255, 0.95);
    top: 100px;
}

.container-fluid {
    background-image: url("image/top3.jpg");
    height: 600px;
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    margin: 0;
    padding: 5%;
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
    width: 30%;
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

.column2 {
    float: center;
    float: left;
    width: 17%;
    padding: 3.5px;
    border: 1px solid black;
 }

 @media screen and (max-width:600px) {
    .column2 {
        width: 100%;
        border: 1px solid black;
    }
}

.column3 {
    float: center;
    float: left;
    width: 15%;
    padding: 10px;
    border: 1px solid black;
 }

 @media screen and (max-width:600px) {
    .column3 {
        width: 100%;
        border: 1px solid black;
    }
}

.column4 {
    float: center;
    float: left;
    width: 6%;
    padding: 10px;
    border: 1px solid black;
 }

 @media screen and (max-width:600px) {
    .column4 {
        width: 100%;
        border: 1px solid black;
    }
}

.column6 {
    float: center;
    float: left;
    width: 17%;
    padding: 10px;
    border: 1px solid black;
 }

 @media screen and (max-width:600px) {
    .column6 {
        width: 100%;
        border: 1px solid black;
    }
}


</style>


</head>
<body>

	<div class="container-fluid">

            <nav class="navbar navbar-inverse" style="padding: 0; width: 100%">
                <ul class="nav navbar-nav">
                  <li style="padding-left: 30px;"><a href="Accindex.php">Back</a></li>
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
                <div class="column6" align="center" style="font-style: italic;">
                    <h4>Permitted</h4>
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
					$deptt = $row['Accounts'];
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
    							{$row['Accounts']}
    						</div>";

    						if($deptt=='No Due') {
    						echo
    							"<div class='column2' align='center'>
    								<button type='button' id= ".$usn." onclick='due(this.id)'>DUE</button>
    							</div>";
    						}
    						else { echo 
    							"<div class='column2' align='center'>";
                                if($deptt == 'Due') {    echo 
                                "<script> document.getElementById('".$usn."').style.backgroundColor ='#e57373';</script>";
                                }
                                else {
                                    echo "<script> document.getElementById('".$usn."').style.backgroundColor ='#ffee58';</script>";
                                }
    							echo "<button type='button' id= ".$usn." onclick='nodue(this.id)'>NO DUE</button>
    							</div>";
    						}
    					   echo "<div class='column2' align='center'>
                                    <button type='button' id= ".$usn." onclick='permission(this.id)'>Permission</button>
                                </div>";

    					echo "</div>";
				
					}
				}
			?>
		</div>
	</div>

<script type="text/javascript">
	function due(clicked_id) {
			window.location.href = ("updtRcrd/dueAcc.php?usn="+clicked_id);
			
	}
	function nodue(clicked_id) {
			window.location.href = ("updtRcrd/nodueAcc.php?usn="+clicked_id);
			
	}
    function permission(clicked_id) {
            window.location.href = ("updtRcrd/permission.php?usn="+clicked_id);
            
    }
</script>

</body>
</html>