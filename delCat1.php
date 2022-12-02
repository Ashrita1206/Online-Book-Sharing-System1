<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$db="cart";
$con = mysqli_connect($server,$username,$password,$db);

$ID=$_GET['id'];
$query = "DELETE FROM cart WHERE ID = '$ID'";
$data = mysqli_query($con,$query);

header('location:category1.php');

?>

