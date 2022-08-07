<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location:index.php");
}
if(isset($_POST["submit"])){
 $username=$_POST["username"];
 $password=$_POST["password"];
 $result= mysqli_query($conn,"SELECT* FROM 'login'  WHERE username = '$username' OR email = '$email'");
 $row = mysqli_fetch_assoc($result);
 if(mysqli_num_rows($result)>0){
  if($password == $row["password"]){
     $_SESSION["login"] = true;
     $_SESSION["id"] = $row["id"];
     header("Location:index.php");
  }
     
 else{
  echo 
  "<script> alert('Wrong Password');</script>";
     }
  }  
 else{
  echo
  "<script> alert('User Not Registered');</script>";
     } 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Signin</title>
    <link rel="stylesheet" type="text/css" href="p2style.css">
</head>
<body>
   
    <form class="modal-content" action="Signin.php" method="post">
        <div class="container">
          <h1>Sign In</h1>
          <hr>
    
        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" id="username" required value="">
    
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required value="">
            
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
          <button type="submit"><b>Sign In</button>
        </div>
    
      </form>
      
</body>
</html>
