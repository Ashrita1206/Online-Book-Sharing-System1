<?php
if(isset($_POST["Sumbit"]))
{
//header('location:customerPage1.php'); 
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

$sql ="INSERT INTO `storyCart`.`storycart`( `name`, `image`, `contact`) VALUES ('$book','$image','$contact')";

if($con->query($sql)==true)
{
   // echo"successfully inserted";
}
else{
    echo"Error:$sql<br>$con->error";

}


$con->close();

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
<title>User</title>
<link rel="stylesheet" type="text/css" href="customerPage.css">


</head>

<body>
 <div class="topnav">
  <a  href="homePage.php" class="btn">Home</a>
   <a href="share1.php" class="btn" >Share</a>
   <a href="userPage.php" class="btn" >Category</a>
   <a href="about.html" class="btn">About us </a>
   <a href="LoginPage.php" class="btn">Logout</a>
 
</div>
<header>
<h1>BOOKS AVAILABLE FOR SHARING</h1>
</header>


<body class="container">
	<h2 class="text-center text-danger mb-5" 
	style="font-family: 'Abril Fatface', cursive;"> ONLINE BOOK SHARING SYSTEM</h2>

	<div class="row">

	<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'storyCart');

	// if($con){
	// 	echo "connection succussful";
	// }else{
	// 	echo "no connection";
	// }


	$query = " SELECT `name`, `image`, `contact`  FROM `storyCart` order by id ASC ";

	$queryfire = mysqli_query($con, $query);
	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
			
		<div class="col-lg-3 col-md-3 col-sm-12">
			
			<form>
				<div class="card">
					<h6 class="card-title bg-info text-white p-2 text-uppercase"> <?php echo
					 $product['name'];  ?>   </h6>

					<div class="card-body">
						 <img src="<?php echo
					 $product['image'];  ?>" alt="Book" class="img-fluid mb-2" >

					 <h6>  <?php echo $product['contact'];  ?> </h6> 

					 <h6 class="badge badge-success">  <i class="fa fa-star"> </i> </h6>

				

					</div>
					<div class="btn-group d-flex">
					
                </div>


				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>


</div>



</body>

</html>
