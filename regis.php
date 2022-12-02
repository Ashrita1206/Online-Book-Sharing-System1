<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'register');

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$country =$_POST['country'];
$pass =$_POST['pass'];
$insNam =$_POST['insNam'];

$sql="SELECT * from users ";
$result=mysqli_query($con,$sql);
if($result)
{
    $reg="INSERT INTO `register`. `users`  ( `First name`, `Last name`, `Email`, `Password`, `Country`, `Institute`) VALUES ('$fname', '$lname', '$email', '$pass', '$country', '$insNam');";
    mysqli_query($con,$reg);
    echo"registration successful";
}
?>
<?php
    include('header.php');
?>



<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="css\register1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" id="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" id="name" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"name="email" id="mail" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Country</span>
            <input type="text" name="country" id="Country"placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Institute</span>
            <input type="text" name="insNam" id="InsNam" placeholder="Confirm your password" required>
          </div>
        </div>
       
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<?php
    include('footer.php');
?>

