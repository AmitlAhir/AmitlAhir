
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id =$_SESSION["id"];
    $result = mysqli_query($conn ,"SELECT* FROM 'login' WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: Signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>INDEX</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="p2style.css">
</head>
<body>
<h1>Welcome<?php echo $row["name"];?></h1>
   
    <form class="modal-content" action="index.php" method="post">
        <div class="container">
          <
    
      </form>
    
    <a href="logout.php">Logout</a>
</body>
</html>
