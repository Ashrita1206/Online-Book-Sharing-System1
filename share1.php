<?php
/*if(isset($_POST["Sumbit"]))
{
header('location:customerPage1.php'); 
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

$book =$_POST['book'];
$image =$_POST['image'];
$contact =$_POST['contact'];

$sql ="INSERT INTO `storyCart`.`storyCart`( `name`, `image`, `contact`) VALUES ('$book','$image','$contact')";

if($con->query($sql)==true)
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
<title>Share</title>
<link rel="stylesheet" type="text/css" href="share.css">
</head>

<body>
<div class="main">
<div class="register">
<h2>Share a Book</h2>
<form   action="customerPage1.php" method="post" >
<label>Book Name:</label>
<br>
<input type="book" class="input" name="book" id="book" >
<br><br>
<label>Upload image:</label>
<br>
<input type="file" class="input" accept= "image/*" name="image" id="image" type="submit">
<br><br>
<label>Contact:</label>
<br>
<input type="contact" class="input" name="contact" id="contact" >
<br><br>
<input type="Submit" class="btn" id="Submit" value="Submit" name="Submit" id="Submit">
</form>




</body>

</html>
