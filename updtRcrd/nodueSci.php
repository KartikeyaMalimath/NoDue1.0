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
$dept= $_SESSION['depat'];
echo $dept;
$sql = "UPDATE $dept SET Department = 'No Due' WHERE USN='$usn'";
mysqli_query($con,$sql);
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}
$id=$_SESSION['idd'];
header('Location: ../displaySci.php?id='.$id.'&dept='.$dept);
?>