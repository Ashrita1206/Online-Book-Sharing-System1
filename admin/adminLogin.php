<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<div class="main">
<div class="register">
<h2>Admin Login</h2>
<form   action="adminPage.php" method="post" >
<label>E-mail :</label>
<br>
<input type="email" class="input" name="email" id="name" placeholder="Enter your mail id">
<br><br>
<label>Password:</label>
<br>
<input type="password" class="input" id="password" placehoder="Enter your password" required>
<br><br>
<input type="Submit" class="btn" id="Submit" value="Submit" name="Submit" id="Submit">
<input type="checkbox" ><span>Remember me</span>

</form>
<a href="forgetPwd.html">Forget Password?</a>

</div>
</div>



</body>

</html>
