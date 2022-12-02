<?php
session_start();
?>
<?php
/*
if(isset($_POST["Sumbit"]))
{
header('location:LoginPage.php'); 
}
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

}


$con->close();
*/

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Register</title>
<link rel="stylesheet" type="text/css" href="regitrationForm.css">
</head>

<body>
    <?php
    if(isset($_SESSION['status']))
    {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    }
    ?>
    
<div class="main">

<div class="register">
<h2>User Register</h2>

<form  action="LoginPage.php" id="register" method="POST" >
<label>First name :</label>
<br>
                   <input  type="text" class="input" name="fname" id="name" placeholder="Enter your First name">
<br> <br>
<label>Last name :</label>
<br>
                <input type="text" class="input" name="lname" id="name" placeholder="Enter your last name">
<br><br>
<label>E-mail :</label>
<br>
               <input type="email" class="input" name="email" id="name" placeholder="Enter your mail id" required>
<br><br>
<label>Password:</label>
<br>
               <input type="password" class="input" name="pass" id="password"  required>
<br><br>

<label>Phone Number :</label>
<br>
<input type="number" class="input" id="number" name="number" placehoder="Enter your number" required>
<br><br>
<label>Address :</label>
<br>
<input type="text" class= "input"  id="name" name="address" placeholder="Address comes here">
<br><br>
<label>Pincode :</label>
<br>
<input type="number" class="input" id="number" name="pnumber" >
<br><br>

<label>City :</label>
<br>
<input type="text" class="input" id="name" name="city" >
<br><br>

<label>State :</label>
<br>
<input type="text" class="input" id="name" name="state" >
<br><br>
               <button type="submit" class="btn" id="submit" value="Submit" name="submit" >Submit</button>
               <a href="homePage.php">Home</a> 
</form>
                           
</div>           
</div>


</body>


</html>
