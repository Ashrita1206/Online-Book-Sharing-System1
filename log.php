<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="">
    <style>
        aside{
            position:flex;
            margin-left:25%;
            width:25%;
            right:0;
            margin-left: 200px;
            padding: 1px 16px;

            
   
        }
        h2{
            background-color:#99e0dd;
            background: size 40px;
            text-align:left;
	        padding:20px;
	        font-family:sans-serif;
	        color:black;
	

        }
        .login{
            margin-left: 400px;
	
	background-color:#99e0dd;
	width:20%;
	font-size:20px;
	border-radius:5px;
	border:1px solid rgba(142, 234, 236, 0.3);
	box-shadow:2px 2px 10px rgba(0,0,0,0.3);
   
	
	color:black;
	position:center;
	padding-left:70px;
	padding-right:70px;
	padding-bottom:50px;
        }
        .input{
	width:200px;
	padding:7px;
	border-radius:3px;
	outline:0;
	background-color:#fff;
	box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
	left:100px;
	
	
	
}
.input{
      
      width:200px;
	padding:7px;
	font-size:10px;
	font-family:sans-serif;
	font-weight:600;
	border=none;
	border-radius:3px;
	background-color:rgba(250,100,0,0,0.8);
	color:black;
	cursor:pointer;
	border:1px solid rgba(151, 222, 227, 0.3);
	box-shadow:1px 1px 5px rgba(0,0,0,0.3);	

}
.btn{     width:100%;
      background:transparent;
      border:1px solid #fff;
      margin:35px  0 10px;
      height:32px;
      font-size:12px;
      border-radius:20px;
      padding:0 10px;
      box-sizing:border-box;
      color:black;
      cursor:pointer;
      	
		
}
        </style>
</head>
<body>
    

<section>
    <header>
        <h2>About</h2>
<p>Genetic disorders occur when a mutation (a harmful change to a gene, also known as a
    pathogenic variant) affects your genes or when you have the wrong amount of genetic
    material. Genes are made of DNA (deoxyribonucleic acid), which contain instructions for
    cell functioning and the characteristics that make you unique.</p>
<p>Genetic disorders can be: </p>
<ul>
    <li><strong>Chromosomal:</strong> This type affects the structures that hold your genes/DNA within each
        cell (chromosomes). With these conditions, people are missing or have duplicated
        chromosome material.
    </li>&nbsp;
    <li><strong>Complex (multifactorial):</strong> These disorders stem from a combination of gene mutations
        and other factors. They include chemical exposure, diet, certain medications and
        tobacco or alcohol use.
    </li>&nbsp;
    <li><strong>Single-gene (monogenic):</strong> This group of conditions occurs from a single gene
        mutation.
    </li>
</ul>
</header>
</section>
<article>
    <header>
        <h2>Search</h2>
        <?php
        include('search.php');
        ?>
        </header>

</article>

<article>
    <h2>To access more data login here</h2>
<div class="login">
    <h2> User LogIn</h2>
    <label>E-mail :</label>
<br>
<input type="email" class="input" name="email" id="name" placeholder="Enter your mail id">
<br><br><br>
<label>Password:</label>
<br>
<input type="password" class="input" id="password" placehoder="Enter your password" required>
<br><br>
<input type="Submit" class="btn" id="Submit" value="Submit" name="Submit" id="Submit">
<br>
<a href="regis.php">Create a new account</a>

    </div>
</article>

        <article>
    <header>
                <h2>Links</h2>
        <?php
        include('link.php')
        ?>
</header>

</article>
</body>
</html>

<?php
    include('footer.php');
?>






