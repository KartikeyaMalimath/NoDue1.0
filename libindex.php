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
        <li style="padding-left: 30px;"><a href="department.php">Back</a></li>
        <li style="padding-left: 30px;"><a href="logout.php">Log Out</a></li>
      </ul>
      <div class="navbar-header" style="padding: 0; float: right;">
        <a class="navbar-brand"><h11 style="font-size: 1.5vw; cursor: pointer;">Vidyavardhaka College of Engineering<h11></a>
      </div>
    </nav>

  <div class="jumbotron">
    <div class="top">
    <h3 style="color: black; font-style: bold; font-size: 4vw;">
    

    <?php 
      
    if(isset($_GET['dept'])) {
      $dept = $_GET['dept'];
      $_SESSION['department']=$dept;
    }
    else {
      $dept = $_SESSION['department'];
    }
    if($dept == "cse") {
      echo "Computer Science & Engineering";
    }
    elseif ($dept == "ise") {
      echo "Information Science & Engineering";
    }
    elseif ($dept == "ce") {
      echo "Civil Engineering";
    }
    elseif ($dept == "ece") {
      echo "Electronics & Communication Engineering";
    }
    elseif ($dept == "eee") {
      echo "Electricals & Electronics Engineering";
    }
    elseif ($dept == "me") {
      echo "Mechanical Engineering";
    }
    elseif ($dept == "phy") {
      header('Location: science.php');
    }
    elseif ($dept == "chem") {
      header('Location: science.php');
    }
    elseif ($dept == "mba") {
      echo "MBA Department";
    }
    else {
      echo "Wow You Hacked!";
    } echo "</h3></div>";
    
if($dept == "MBA") {
  echo "
  <div class='row'>
              <div class='column' align='center'>
                <div class='card' id='1' onclick='f1(this.id)'>
                  <h2><center>1st Sem</center></h2>
                </div>
              </div>
              <div class='column' align='center'>
                <div class='card' id='2' onclick='f1(this.id)'>
                  <h2><center>2nd Sem</center></h2>
                </div>
              </div>
          </div>
          <div class='row'>
              <div class='column' align='center'>
                <div class='card' id='3' onclick='f1(this.id)'>
                  <h2><center>3rd Sem</center></h2>
                </div>
              </div>
              <div class='column' align='center'>
                <div class='card' id='4' onclick='f1(this.id)'>
                  <h2><center>4th Sem</center></h2>
                </div>
              </div>
          </div>
  ";
}
else {
  echo "
    <div class='tabs'>
        <div class='tab-2'>
          <label for='tab2-1'>ODD Semister</label>
          <input id='tab2-1' name='tabs-two' type='radio' checked='checked'>
          <div class='inside'>
            <div class='row'>
              <div class='column' align='center'><form type='post'>
                <div class='card' id='1' onclick='f1(this.id)'>
                  <input type='hidden' name='records' value='hi'>
                  <h2><center>1st Sem</center></h2>
                </div>
              </div></form>
              <div class='column' align='center'>
                <div class='card' id='3' onclick='f1(this.id)'>
                  <h2><center>3rd Sem</center></h2>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='column' align='center'>
                <div class='card' id='5' onclick='f1(this.id)'>
                  <h2><center>5th Sem</center></h2>
                </div>
              </div>
              <div class='column' align='center'>
                <div class='card' id='7' onclick='f1(this.id)'>
                  <h2><center>7th Sem</center></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='tab-2'>
          <label for='tab2-2'>EVEN Semister</label>
          <input id='tab2-2' name='tabs-two' type='radio'>
          <div class='inside'>
            <div class='row'>
              <div class='column' align='center'>
                <div class='card' id='2' onclick='f1(this.id)'>
                  <h2>2nd Sem</h2>
                </div>
              </div>
              <div class='column' align='center'>
                <div class='card' id='4' onclick='f1(this.id)'>
                  <h2>4th Sem</h2>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='column' align='center'>
                <div class='card' id='6' onclick='f1(this.id)'>
                  <h2>6th Sem</h2>
                </div>
              </div>
              <div class='column' align='center'>
                <div class='card' id='8' onclick='f1(this.id)'>
                  <h2>8th Sem</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>";
  }
    ?>

    <div class="footer">
      <h10>Copyright 2018 © <a href="http://www.vvce.ac.in/">VVCE</a> | Developed by Kartikeya P. Malimath And Department of CS&E</h10>
    </div>
  </div>
</div></div>

<script type="text/javascript">
  function f1(clicked_id) {
    window.location.href ="displaylib.php?id="+clicked_id;
  }
</script>

</body>
</html>

