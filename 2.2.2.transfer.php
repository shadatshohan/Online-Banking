<?php include 'connection/connect.php';

  if(isset($_POST['send'])){
    $from = $_SESSION['acc_no'];
    $to = $_POST['reciever'];
    $s_phone = $_POST['s_phone'];
    $credit = $_POST['credit'];

    $check = "SELECT * FROM user WHERE acc_no='$to'";
    $query = mysqli_query($conn, $check);

    if(empty($_POST['reciever']) || empty($_POST['s_phone']) || empty($_POST['credit'])){
      $msg = "<p style='color:red'>Fill up the fields</p>";
    }elseif(mysqli_num_rows($query) < 1){
      $msg = "<p style='color:red'>Reciever does not exist</p>";
    }elseif (mysqli_num_rows($query) > 0) {
      if($_SESSION['balance'] < $credit){
        $msg = "<p style='color:red'>Insufficient balance</p>";
      }elseif(strlen($_POST['s_phone']) != 10){
        $msg = "<p style='color:red'>Use valid phone number</p>";
      }else{
        $insert = "INSERT INTO transfer (sender, reciever, amount, sender_phone, trans_date)
                  VALUES ('$from', '$to', '$credit', '$s_phone', curdate());";

        mysqli_query($conn, $insert);
        $msg = "<p style='color:green'>Your transaction has been sent to pending request</p>";
      }
    }

  }



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || Trasfer</title>
    <link rel="icon" href="icons/title.ico">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
  </head>
  <body>
    <div style="width:700px" class="body">
      <img src="images/panel-top.jpg" width="100%"> <br>
      <h3>:: Transfer credit ::</h3>
      <hr>
      <?php if(isset($msg)) echo $msg; ?>
      <p style="background-color:#35495e; color:#dff6f0; padding: 3px;">Please fill up the required information</p>
      <form class="form" action="2.2.2.transfer.php" method="POST">
        <table align="center" class="form">
          <tr>
            <td><label>Reciever's account no.: </label></td>
            <td><input type="number" name="reciever" value=""> <br></td>
          </tr>
          <tr>
            <td><label>Sender's Phone:<h6>(+880)</h6></label></td>
            <td><input type="number" name="s_phone" value=""> <br></td>
          </tr>
          <tr>
            <td><label>Credit amount: </label></td>
            <td><input type="number" name="credit" value=""> <br></td>
          </tr>
        </table>
        <br>
        <input class="btn" type="submit" name="send" value="Submit">
      </form>

      <footer> <hr>
        <ul>
          <li><a class="foot" href="2.2.userpanel.php">Home</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html></ht>
