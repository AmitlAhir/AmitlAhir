<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["name"])){
  $name = $_post["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  
 
      $query = "INSERT INTO 'login' VALUES('$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="p2style.css">
</head>
<body>
   
    <form class="modal-content" action="Signup.php" method="post">
        <div class="container">
          <h1>Sign Up</h1>
         
          <hr>

          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter name" name="name" id="name" required value="">
    

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" id="username" required value="">
    
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required value="">
    
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required value="">
    
      
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
    
          <p>By creating an account you agree to our <a href="https://policies.google.com/" style="color:rgb(206, 32, 32)">Terms & Privacy</a>.</p>
          
            <button type="submit" class="signupbtn"><b>Sign Up</button>
          </div>
        </div>
      </form>
      <a  style="color:black"
      href="Signin.php">Already a member</a>
      
</body>
</html>