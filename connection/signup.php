<?php include "connect.php";

 if(isset($_POST['signup'])){
   $username = mysqli_real_escape_string($conn, $_POST['user_name']);
   $acc_no = mysqli_real_escape_string($conn, $_POST['acc_no']);
   $user_pass = mysqli_real_escape_string($conn, $_POST['user_pass']);
   $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
   $user_phone = mysqli_real_escape_string($conn, $_POST['user_phone']);
   $user_p_add = mysqli_real_escape_string($conn, $_POST['p_add']);
   $user_c_add = mysqli_real_escape_string($conn, $_POST['c_add']);

   if(empty($_POST['user_name']) || empty($_POST['acc_no']) || empty($_POST['user_pass']) || empty($_POST['user_email']) || empty($_POST['user_phone']) || empty($_POST['p_add']) || empty($_POST['c_add'])){
     header("Location: failed_signup.php");
     exit();
   }elseif(strlen($_POST['user_pass']) < 8 || strlen($_POST['user_pass']) > 16){
     header("Location: failed_signup.php");
     exit();
   }elseif(strlen($_POST['acc_no']) != 8){
     header("Location: failed_signup.php");
     exit();
   }elseif(strlen($_POST['user_phone']) != 10) {
     header("Location: failed_signup.php");
     exit();
   }

   $input_user = "INSERT INTO user(acc_no, name, password, phone, email, p_address, c_address)
               VALUES ('$acc_no', '$username', '$user_pass', '$user_phone', '$user_email', '$user_p_add', '$user_c_add');";

     mysqli_query($conn, $input_user);
 }

 ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Banking Management || Register</title>
        <link rel="icon" href="../icons/title.ico">
        <link rel="stylesheet" href="../css/login.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
      </head>
      <body>
        <div style="width:700px" class="body">
          <img src="../images/panel-top.jpg" width="100%"> <br>
          <h3>:: Register an Account ::</h3>
          <hr>
          <p style="background-color: #35495e; font-size: 16pt; padding: 3px; font-family: 'Baloo Tammudu 2', cursive; color: #75daad; font-weight: bold;">Registration Successful.</p>
          <p>Please login to continue.</p>

          <footer> <hr>
            <ul>
              <li><a class="foot" href="../2.userlogin.php">Login</a></li><br>
              <li><a class="foot" href="../2.1.signup.php">Signup</a></li>
            </ul>
          </footer>
        </div>

      </body>
    </html>
