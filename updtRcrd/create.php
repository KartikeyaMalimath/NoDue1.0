<?php
	include ('database.php');
    session_start();
    if(!isset($_SESSION['login_user'])) {
    header("Location:AdminLogin.php");
	}

    $error=''; // Variable To Store Error Message
	if (isset($_POST['username'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	}
	else
	{
	// Define $username and $password
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$depart=$_POST['department'];
	
	$sql ="INSERT INTO login (department, user, password) VALUES (?,?,?)";
	$stmt = $con->prepare($sql);
 	$stmt->bind_param('sss',$depart,$uname,$password);

 	if ($stmt->execute()) {

    echo "user added successfully";
    header('location: ../adminIndex.php');
	} else {

    echo "Error : " . $con->error; // on dev mode only

    // echo "Error, please try again later"; //live environment
	}	
}
}
?>