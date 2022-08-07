<?php

$u="";
$success=0;
if(isset($_POST["username"]))
{
$u=$_POST["username"];
$p=$_POST["password"];
include 'config.php';
$sql="select * from login where username='$u' and password = '$p'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1)
{
	$row=mysqli_fetch_assoc($result);
	if ($row["status"]=="I")
	echo "<div class=fixed> Account is Inactivated by the Admin </div>";
	else //status is "A"
	{
		
		header("Location:profile.php");
		$success=1;
	}
}
else
{
	echo "<div class=fixed>	INVALID username and/or password </div>";
}
}
if($success==0)
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="style.login.css">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style> div.fixed
	{
		position: fixed;
		bottom: 50px;
		right: 300px;
		color: #CC1313;
	}
	@media (max-width: 900px){
		div.fixed
	{
		position: fixed;
		bottom: 25px;
		right: 50px;
		color: #CC1313;
	}
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="home.svg">
		</div>
		<div class="login-content">
			<form action="Login.php" method=POST>
				
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type=text name=username value="<?php echo $u;?>" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type=password name=password class="input">
            	   </div>
            	</div>
				<label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                 </label>
            	<a href="signup.php">Sign Up?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>

<?php
}
?>
