<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'logreg') or die("Connection Failed:" . mysqli_connect_error());
    if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['dept']) && isset($_POST['shift']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $dept = $_POST['dept'];
        $shift = $_POST['shift'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO empl (name,username,dept,shift,mobile,email,password) VALUES ('$name','$username','$dept','$shift','$mobile','$email','$password')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "ADDED successfully";
            //header('Location: admin.php');
        } 
        else {
            echo "something went wrong";
            $_SESSION['status'] = "Data Not Registered ";
            $_SESSION['status_code'] = "error";
            //header('Location: register.php');
        }
    }
}
