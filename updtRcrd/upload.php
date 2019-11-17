<?php
  include ('database.php');
    session_start();
    if(!isset($_SESSION['login_user'])) {
    header("Location:AdminLogin.php");

    
} 
?>