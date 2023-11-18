<?php include 'connection/connect.php';

  if(isset($_POST['user_login'])){
    if(empty($_POST['acc_no']) || empty($_POST['pass'])){
      header("Location: connection/failed_userlogin.php");
      exit();
    }

    $acc_no = mysqli_real_escape_string($conn, $_POST['acc_no']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM user WHERE acc_no='$acc_no'";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) < 1){
      header("Location: connection/failed_userlogin.php");
      exit();
    }elseif(mysqli_num_rows($query) > 0){
      $row = mysqli_fetch_array($query);
      if($row['acc_no'] != $acc_no || $row['password'] != $pass){
        header("Location: connection/failed_userlogin.php");
        exit();
      }
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['phone'] = $row['phone'];
      $_SESSION['balance'] = $row['balance'];
      $_SESSION['c_address'] = $row['c_address'];
      $_SESSION['p_address'] = $row['p_address'];
      $_SESSION['last_tran_date'] = $row['last_tran_date'];
      $_SESSION['last_tran_am'] = $row['last_tran_am'];
      $_SESSION['acc_no'] = $acc_no;
      $_SESSION['password'] = $pass;
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || User Panel</title>
    <link rel="icon" href="icons/title.ico">
    <link rel="stylesheet" href="css/panel.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="body">
      <img src="images/panel-top.jpg" width="100%"> <br>
      <h3>:: User Panel ::</h3>
      <hr>
      <p style="color: black; font-family:'Ubuntu Condensed', sans-serif;";>Please choose an option</p>

      <div class="panel">
        <a class="panel_a" href="2.2.1.user_profile.php">Account Information</a>
        <p class="panel_p">View your account info</p>
      </div>
      <div class="panel">
        <a class="panel_a" href="2.2.2.transfer.php">Transfer</a>
        <p class="panel_p">Request transfer credit</p>
      </div>

      <footer> <hr>
        <ul>
          <li><a class="foot" href="connection/logout.php">Log out</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html></ht>
