<?php include('include/header.php') ?>
<?php
include('security.php');
?>
<style>
    .container-1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .show-btn {
        background: #fff;
        padding: 10px 20px;
        font-size: 20px;
        font-weight: 500;
        color: #87cefa;
        cursor: pointer;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    input[type="checkbox"] {
        display: none;
    }

    .container-1 {
        display: none;
        background: #fff;
        width: 550px;
        padding: 230px;
        box-shadow: 0 0 8px rgb(0, 0, 0, 0.1);
    }

    #show:checked~.container-1 {
        display: block;
    }

    .container-1 .close-btn {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 18px;
        cursor: pointer;
    }

    .container-1 .close-btn:hover {
        color: #87cefa;
    }

    .container-1 .text {
        margin-left: -190px;
        margin-top: -200px;
        font-size: 30px;
        font-weight: 500;
        text-align: left;
    }

    .container-1 form {
        margin-top: -18px;
        margin-left: -180px;
    }

    .container-1 form .data {
        height: 25px;
        width: 100%;
        margin: 15px 0;
    }

    form .data label {
        font-size: 15px;
    }

    form .data input {
        height: 100%;
        width: 100%;
        padding-left: 15px;
        font-size: 20px;
        border: 2px solid lightgrey;
    }

    form .btn button {
        background: #87cefa;
        padding: 3px 10px;
        font-size: 20px;
        font-weight: 500;
        color: white;
        cursor: pointer;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 400px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
        width: 60%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
    }

    .form-container .btn-cancel {
        background-color: Red;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
    }
</style>
<section class="main">
    <div class="main-top">
        <h1>Employee</h1>
        <i class="fas fa-user-cog"></i>
    </div>

    <div class="container-fluid">
        <br>
        <div>
            <button type="button" class="button button2" onclick="openForm1()" style="padding:5px 15px;background-color:#87cefa;">Add Employee</button>
            <div class="form-popup" id="myForm">
                <form action="action_page.php" method="POST" class="form-container">
                    <h1>ADD EMPLOYEE</h1>

                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" id="name" required><br>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required><br>

                    <label for="dept"><b>Dept</b></label>
                    <input type="text" placeholder="Enter Dept Name" name="dept" id="dept" required><br>

                    <label for="shift"><b>Shift</b></label>
                    <input type="text" placeholder="Enter Shift" name="shift" id="shift" required><br>

                    <label for="number"><b>Mobile no</b></label>
                    <input type="text" placeholder="Enter Mobile no" name="mobile" id="mobile" required><br>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter email ID" name="email" id="email" required><br>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter password" name="password" id="password" required>



                    <button type="submit" class="btn">Save</button>
                    <button type="button" class="btn-cancel" onclick="closeForm1()">Close</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Usernmae</th>
                            <th>Dept</th>
                            <th>Shift</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script>
        function openForm1() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm1() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>