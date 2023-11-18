<?php include 'connection/connect.php';

  if(isset($_POST['admin_login'])){
    if(empty($_POST['admin_username']) || empty($_POST['admin_pass'])){
      header("Location: connection/failed_login.php");
      exit();
    }

    $admin_username = mysqli_real_escape_string($conn, $_POST['admin_username']);
    $admin_pass = mysqli_real_escape_string($conn, $_POST['admin_pass']);

    $sql = "SELECT * FROM admin WHERE username='$admin_username'";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) < 1){
      header("Location: connection/failed_login.php");
      exit();
    }elseif(mysqli_num_rows($query) > 0){
      $row = mysqli_fetch_array($query);
      if($row['username'] != $admin_username || $row['password'] != $admin_pass){
        header("Location: connection/failed_login.php");
        exit();
      }
      $_SESSION['acc_id'] = $row['acc_id'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['phone'] = $row['phone'];
      $_SESSION['rank'] = $row['rank'];
      $_SESSION['salary'] = $row['salary'];
      $_SESSION['address'] = $row['address'];
      $_SESSION['username'] = $admin_username;
      $_SESSION['password'] = $admin_pass;
  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || Admin Panel</title>
    <link rel="icon" href="icons/title.ico">
    <link rel="stylesheet" href="css/panel.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="body">
      <img src="images/panel-top.jpg" width="100%"> <br>
      <h3>:: Admin Panel ::</h3>
      <hr>
      <p style="color: black; font-family:'Ubuntu Condensed', sans-serif;";>Please choose an option</p>

      <div class="">
        <div class="panel">
          <a class="panel_a" href="1.1.4.userinfo.php">Account Information</a>
          <p class="panel_p">View a specific user details</p>
        </div>
        <div class="panel">
          <a class="panel_a" href="1.1.2.adminpanel_users.php">User Details</a>
          <p class="panel_p">Brief details of all users</p>
        </div>
      </div>
      <div class="">
        <div class="panel">
          <a class="panel_a" href="1.1.1.admin_profile.php">Profile</a>
          <p class="panel_p">Brief details about you</p>
        </div>
        <div class="panel">
          <a class="panel_a" href="1.1.3.transaction.php">Transactions</a>
          <p class="panel_p">List of all transactions</p>
        </div>
      </div>
      <br>
      <footer> <hr>
        <ul>
          <li><a class="foot" href="connection/logout.php">Logout</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html>
