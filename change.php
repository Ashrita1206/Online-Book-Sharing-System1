<?php

error_reporting(0);
$server="localhost";
$username="root";
$password="";
$db="obss";
$con = mysqli_connect($server,$username,$password,$db);
if(!$con)
{
    die("Connection to this database failed due to".mysqli_connect_error());
}
if($_POST['Submit'])
{
    $email=$_POST['email'];
    $password =$_POST['password'];
    $query="UPDATE obss SET password='$pass' WHERE email='$email'";
    $data =mysqli_query($con,$query);
}  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Change your password</title>
<link rel="stylesheet" type="text/css" href="forgetPwd.css">
</head>

<body>
<div class="main">
<div class="register">
<h2>Change Password</h2>
<form   action="LoginPage.php" method="post" >
<label>E-mail :</label>
<br><br>
<input type="email" class="input" name="email" id="name" placeholder="Enter your mail id">
<br>
<br><br>
<input type="password" class="input" name="password" id="name" placeholder="Enter your new password">
<br>


<input type="Submit" name="pasword_reset_link" class="btn" id="Submit" value="Submit" name="Submit" id="Submit">


</form>


</div>
</div>



</body>

</html>
