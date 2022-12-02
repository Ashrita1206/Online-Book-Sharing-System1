<?php
$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server,$username,$password);
if(!$con)
{
    die("Connection to this database failed due to".mysqli_connect_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="customerPage.css">
    <title>adminPage</title>
</head>
<body>
<?PHP

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'obss');

// if($con){
// 	echo "connection succussful";
// }else{
// 	echo "no connection";
// }
?>
<header>
<h1 align="center">ONLINE BOOK SHARING SYSTEM</h1>
</header>

<div class="topnav">
  <a  href="homePage.php" class="btn">Home</a>
   <a class="active"   class="btn" >Registered users</a>
 
   <a href="homePage.php" class="btn">Logout</a>
 
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Books category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="category1.php">Educational Books</a>
    <a class="dropdown-item" href="category2.php">Story Books</a>
    
  </div>
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">email</th>
      <th scope="col">number</th>
      <th scope="col">address</th>
      <th scope="col">pincode</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">create time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $query= "SELECT * FROM obss";
      $query_run =mysqli_query($con,$query);

      if(mysqli_num_rows($query_run) >0)
      {
         foreach($query_run as $row)
         {
             ?>
             <tr>
             <td><?php echo $row['ID'];?></td>
             <td><?php echo $row['First name'];?></td>
             <td><?php echo $row['Last name'];?></td>
             <td><?php echo $row['email'];?></td>
             <td><?php echo $row['number'];?></td>
             <td><?php echo $row['Address'];?></td>
             <td><?php echo $row['pincode'];?></td>
             <td><?php echo $row['city'];?></td>
             <td><?php echo $row['state'];?></td>
             <td><?php echo $row['create time'];?></td>
             <td><a href="" class="btn btn-info" >Delete</td>



             <?php
         }
      }
      else{
          ?>
          <tr>
              <td>No record found</td>
      </tr>
          <?php
      }
      ?>
    
  </tbody>
</table>
</body>
</html>