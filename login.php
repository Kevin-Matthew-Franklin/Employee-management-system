<?php
$host="localhost";
$user="root";
$password="";
$db="logreg";

$data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{
  die("connection_error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=$_POST["username"];
  $password=$_POST["password"];

  $sql="select * from login where username='".$username."' AND password='".$password."'";
  $result=mysqli_query($data,$sql);
  $row=mysqli_fetch_array($result);
  if($row["usertype"]=="user")
  {
    header("");
  }
  elseif($row["usertype"]=="admin")
  {
    header("location:admin.php");
  }
  else
  {
    echo "username or password incorrect";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RockG Login</title>
  <link rel="stylesheet" href="css/logreg.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <h1>Hello Again!</h1>
    <p>Welcome back you've <br> been missed!</p>
    <form action='#' method="POST">
      <input type="text" name="username" id="username" placeholder="Enter username" required/>
      <input type="password" name="password" id="password" placeholder="Password" required/>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <a href="#"> <button>Login </button></a>
    </form>
    <p class="or">
      ----- or continue with -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-github"></i>
      <a href="https://twitter.com/ROCKGMICRO" target="_blank_" ><i class="fab fa-twitter"></i></a>
    </div>
    <div class="not-member">
      Not a member? <a href="register.php">Register Now</a>
    </div>
  </div>
</body>
</html>
