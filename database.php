<!--====================================
  Author : Kartikeya P Malimath
  ==================================-->

<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="vvce_nodue";

$con = mysqli_connect($host,$user,$password,$db);
if(!$con)
{
echo ("Connection failed: " . mysqli_connect_error());
}
	
?>