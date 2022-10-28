<?php
session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
      $conn = mysqli_connect('localhost','root','','logreg') or die("Connection Failed:" .mysqli_connect_error());
      if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])) {
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $password= $_POST['password'];

        $sql= "INSERT INTO register (fname ,lname,email,phone,password) VALUES ('$fname', '$lname', '$email','$phone', '$password')";

        $query = mysqli_query($conn,$sql);
        if($query) {
          echo "registered successfully";
          //header('Location: admin.php');
        }
        else{
          //echo "something went wrong";
          $_SESSION['status'] = "Data Not Registered ";
          $_SESSION['status_code'] = "error";
          header('Location: register.php');
        }
      }
    }
?>