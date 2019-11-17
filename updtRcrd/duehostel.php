<!--====================================
  Author : Kartikeya P Malimath
  ==================================-->

<?php
include ('database.php');
	session_start();
    if(!isset($_SESSION['login_user'])) {
    header("Location:../Login.php");
} 

$usn = $_GET['usn'];
$dept= $_SESSION['department'];
echo $dept;
$sql = "UPDATE hostel SET Hostel = 'Due' WHERE USN='$usn'";
mysqli_query($con,$sql);
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$sqll = "UPDATE $dept SET others = 'Due' WHERE USN='$usn'";
mysqli_query($con,$sqll);
if ($con->query($sqll) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$id = $_SESSION['idd'];
header('Location: ../displayHostel.php?id='.$id);
?>