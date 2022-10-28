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
    <h1>Register Form</h1>
    <p>Become a<br> Part of US!</p>
    <form action='connect.php' method="POST">
      <input type="text" name="fname" id="fname" placeholder="Enter First name" required/>
      <input type="text" name="lname" id="lname" placeholder="Enter Last name" required/>
      <input type="email" name="email" id="email" placeholder="Enter Your Email" required/>
      <input type="text" name="phone" id="phone" placeholder="Enter mob number" required/>
      <input type="password" name="password" id="password" placeholder="Set Your passowrd" required/>
      <input type="submit" name="submit" id="submit"/>
    </form>
    <!--<a href="login.php"> <button>Login</button></a>-->
    <p class="or">
      ----- or continue with -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-github"></i>
      <a href="https://twitter.com/ROCKGMICRO" target="_blank_" ><i class="fab fa-twitter"></i></a>
    </div>
    <div class="not-member">
      Are you Part Us? <a href="login.php">Login</a>
    </div>
  </div>
