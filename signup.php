<?php
$n="";
$un="";
$p="";
$e="";
if(isset($_POST["name"]))
{
$n=$_POST["name"];
$un=$_POST["username"];
$p=$_POST["password"];
$e=$_POST["email"];
include 'config.php';
$sql="INSERT into login (name,username,email,password,status) values('$n','$un','$e','$p','A')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "<div class=fixed>Registration Successfull</div>";
	
}
else
{
	echo "<div class=fixedtwo>Username already Taken try another Username</div>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.signup.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style> div.fixed
	{
		position: flex;
		bottom: 100px;
		right: 500px;
		color: #0fe00f;
	}
  div.fixedtwo
	{
		position: fixed;
		bottom: 100px;
		right: 500px;
		color: #cc1313;
	}
	@media (max-width: 900px){
		div.fixed
	{
		position: fixed;
		bottom: 0;
		right: 50px;
		color: #0fe00f;
	}
  div.fixedtwo
	{
		position: fixed;
		bottom: 0;
		right: 50px;
		color: #cc1313;
	}
	}
	</style>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Sign In</h3>
          <p class="text">
           
            <center><a href="Login.php">Click Here To Login</a></center>
          </p>

          
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="signup.php"  method= POST>
            <h3 class="title">Sign Up</h3>
            <div class="input-container">
            <input type=text name=name value="<?=htmlentities($n)?>" required class="input">
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
            <input type=text name=username value="<?=htmlentities($un)?>" required class="input">
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
            <input type=text name=email value="<?=htmlentities($e)?>" required class="input">
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
            <input type=password name=password  required class="input">
              <label for="">Password</label>
              <span>Password</span>
            </div>
           
            <input type="submit" class="btn">
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>