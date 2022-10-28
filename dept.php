<?php include('include/header.php') ?>
<style>
  * {
    box-sizing: border-box;
  }

  .row {
    margin-left: -5px;
    margin-right: -5px;
  }

  .column {
    float: left;
    width: 50%;
    padding: 5px;
  }

  /* Clearfix (clear floats) */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th {
    background-color: #87cefa;
  }

  td {
    background-color: #fff;
  }

  th,
  td {
    text-align: left;
    padding: 16px;
  }

  tr:nth-child() {
    background-color: #fff;
  }

  * {
    box-sizing: border-box;
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
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }

  /* Full-width input fields */
  .form-container input[type=text],
  .form-container input[type=time] {
    width: 100%;
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
    <h1>Dept/Shift</h1>
    <i class="fas fa-user-cog"></i>
  </div>

  <body>
    <br>
    <div>
      <button type="button" class="button button2" onclick="openForm1()" style="padding:5px 15px;background-color:#87cefa;">Add Dept</button>
      <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
          <h1>ADD DEPARTMENT</h1>

          <label for="dept"><b>Dept name</b></label>
          <input type="text" placeholder="Enter Dept Name" name="email" required>

          <label for="deptid"><b>Dept ID</b></label>
          <input type="text" placeholder="Enter Dept ID" name="psw" required>

          <button type="submit" class="btn">Save</button>
          <button type="button" class="btn-cancel" onclick="closeForm1()">Close</button>
        </form>
      </div>
  
      <button type="button" class="button button2" onclick="openForm()" style="padding:5px 15px;background-color:#87cefa;margin-left:180px;">Add Shift</button>
      <div class="form-popup" id="myForm1">
        <form action="/action_page.php" class="form-container">
          <h1>ADD SHIFT</h1>

          <label for="time"><b>Shift time</b></label>
          <input type="time" placeholder="Enter Shift time" name="email" required>

          <label for="shift"><b>Shift Type</b></label>
          <input type="text" placeholder="Enter Shift type" name="psw" required>

          <button type="submit" class="btn">Save</button>
          <button type="button" class="btn-cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>
    <div>
      <p>Department</p>
      <p style="margin-left: 290px;margin-top: -23px;">Shift</p>
    </div>
    <div class="row">
      <div class="column">
        <table>
          <tr>
            <th>SI no</th>
            <th>Dept name</th>
            <th>Dept Id</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Full Stack Dev</td>
            <td>FSD</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Dot net</td>
            <td>Dnet</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Testing</td>
            <td>TST</td>
          </tr>
        </table>
      </div>

      <div class="column">
        <table>
          <tr>
            <th>SI no</th>
            <th>Shift time</th>
            <th>Shift Type</th>
          </tr>
          <tr>
            <td>1</td>
            <td>10:30-6:30</td>
            <td>Full day</td>
          </tr>
          <tr>
            <td>2</td>
            <td>2:00-6:30</td>
            <td>Halft day</td>
          </tr>
          <tr>
            <td>3</td>
            <td>10:00-6:00</td>
            <td>Full day</td>
          </tr>
        </table>
      </div>
    </div>
    <script>
      function openForm1() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm1() {
        document.getElementById("myForm").style.display = "none";
      }
      function openForm() {
        document.getElementById("myForm1").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm1").style.display = "none";
      }
    </script>
  </body>

  </html>