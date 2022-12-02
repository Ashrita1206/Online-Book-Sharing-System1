<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$db="obss";
$con = mysqli_connect($server,$username,$password,$db);

$ID=$_GET['id'];
$query = "DELETE FROM obss WHERE ID = '$ID'";
$data = mysqli_query($con,$query);

header('location:adminPage.php');

?>

