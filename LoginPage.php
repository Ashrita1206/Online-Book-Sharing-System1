<?php
/*
session_start();
if(isset($_SESSION['email']))
{
    header("location:customerPage.php");
    exit;
}
require_once "config.php";
$email = $password ="";
$email_err = $password_err ="";
//if request method is post
//if($_SERVER['Request_METHOD']=="POST"){
*/

?>







<?php

if(isset($_POST["sumbit"]))
{
header('location:LoginPage.php'); 
}
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server,$username,$password);
if(!$con)
{
    die("Connection to this database failed due to".mysqli_connect_error());
}

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$pass =$_POST['pass'];
$number =$_POST['number'];
$address =$_POST['address'];
$pnumber =$_POST['pnumber'];
$city =$_POST['city'];
$state =$_POST['state'];


$sql ="INSERT INTO `obss`. `obss`  ( `First name`, `Last name`, `email`, `password`, `number`, `Address`, `pincode`, `city`, `state`, `create time`) VALUES ('$fname', '$lname', '$email', '$pass', '$number', '$address', '$pnumber', '$city', '$state', current_timestamp());";
$sql_run=mysqli_query($con,$sql);
if($sql_run)
{
    $_SESSION['status']="Registered Successfully";
    
}
else{
    $_SESSION['status']="Registration failed";
}
/*if($con->query($sql)==true)
{
   // echo"successfully inserted";
}
else{
    echo"Error:$sql<br>$con->error";

}*/


$con->close();


?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

<div class="main">
<div class="register">
<h2>User Login</h2>
<form   action="userPage.php" method="post" >
<label>E-mail :</label>
<br>
<input type="email" class="input" name="email" id="name" placeholder="Enter your mail id">
<br><br><br>
<label>Password:</label>
<br>
<input type="password" class="input" id="password" placehoder="Enter your password" required>
<br><br>
<input type="Submit" class="btn" id="Submit" value="Submit" name="Submit" id="Submit">
<input type="checkbox" ><span>Remember me</span>

</form>
<a href="change.php">Change Password?</a>
<br>
<a href="homePage.php">Home</a> <a href="register.php">User Register</a>

</div>
</div>



</body>

</html>
