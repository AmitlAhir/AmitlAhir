<?php
$fn="";
$ln="";
$b="";
if(isset($_POST["firstname"]))
{
$fn=$_POST["firstname"];
$ln=$_POST["lastname"];
$b=$_POST["birthdate"];
include 'config.php';
$sql="INSERT into profile (firstname,lastname,birthdate) values('$fn','$ln','$b')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "<div class=fixed>Registration Successfull </div>";
	
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
    <title>Profile</title>
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
          <h3 class="title">Profile</h3>
          
          
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="profile.php"  method= POST>
            <h3 class="title">Profile Info</h3>
            <div class="input-container">
            <input type=text name=firstname value="<?=htmlentities($fn)?>" required class="input">
              <label for="">First Name</label>
              <span>First Name</span>
            </div>
            <div class="input-container">
            <input type=text name=lastname value="<?=htmlentities($ln)?>" required class="input">
              <label for="">Last Name</label>
              <span>Last Name</span>
            </div>
            
            <div class="input-container">
            <input type=date name=birthdate value="<?=htmlentities($b)?>" required class="input">
              <label for="">Birthdate</label>
              <span>Birthdate</span>
            </div>
            
           
            <input type="submit" class="btn">
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>