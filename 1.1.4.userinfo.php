<?php include 'connection/connect.php';
  if(isset($_POST['search'])){
    $sql = "SELECT * FROM user WHERE acc_no='$_POST[acc]'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) < 1){
      $msg = "<p style='color:red; text-align: center;'>User doesn't exist</p>";
    }else{
      $row = mysqli_fetch_array($query);
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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="panel_body">
      <img src="images/panel-top.jpg" width="100%"> <br>
      <h3>:: Admin Panel ::</h3>
      <hr>
      <div style="width: 100%">
        <div class="part1">
          <a class="panel_a_p" href="1.1.1.admin_profile.php">Profile</a><br>
          <a class="panel_a_p" href="1.1.2.adminpanel_users.php">User details</a><br>
          <a class="panel_a_p" href="#">Account information</a><br>
          <a class="panel_a_p" href="1.1.3.transaction.php">Transactions</a><br>
        </div>
        <div class="part2">
          <p class="table_title">:: User Information ::</p>
          <form class="form" action="1.1.4.userinfo.php" method="POST">
            <table align="center">
              <tr>
                <td><label>Account no.: </label></td>
                <td><input type="number" name="acc" value="User's 8 digit account number"> <br></td>
                <td><input style="display: inline-block" class="btn" type="submit" name="search" value="Search"></td>
              </tr>
            </table>
          </form>
          <?php if(!isset($_POST['search'])){
            exit();
          }
          ?>
          <?php if(isset($msg)){
            echo $msg;
            exit();
          }?>
          <center>
            <table>
              <tr>
                <th colspan="3" class="span">Personal information</td>
              </tr>
              <tr>
                <td class="td1">User name:</td>
                <td style="width: 40%"><?php if(isset($row['name'])) echo $row['name']; ?></td>
                <td rowspan="4" style="padding-left: 19px"><img src="images/pp.png"/></td>
              </tr>
              <tr>
                <td class="td1">E-mail:</td>
                <td><?php if(isset($row['email'])) echo $row['email']; ?></td>
              </tr>
              <tr>
                <td class="td1">Phone:</td>
                <td>0<?php if(isset($row['phone'])) echo $row['phone']; ?></td>
              </tr>
              <tr>
                <td class="td1">Full address:</td>
                <td><u>Current:</u> <?php if(isset($row['c_address'])) echo $row['c_address']; ?> <br>
                    <u>Permanent:</u> <?php if(isset($row['p_address'])) echo $row['p_address']; ?>
                </td>
              </tr>
              <tr>
                <th colspan="3" class="span">Bank information</td>
              </tr>
              <tr>
                <td class="td1">Account no.:</td>
                <td><?php if(isset($row['acc_no'])) echo $row['acc_no']; ?></td>
                <td rowspan="5"></td>
              </tr>
              <tr>
                <td class="td1">Current balance:</td>
                <td><?php if(isset($row['balance'])) echo $row['balance']; ?> BDT</td>
              </tr>
              <tr>
                <td class="td1">Account type:</td>
                <td>Savings</td>
              <tr>
                <td class="td1">Last transaction: (date)</td>
                <td><?php if(isset($row['last_tran_date'])) echo $row['last_tran_date']; ?></td>
              </tr>
              <tr>
                <td class="td1">Last transaction: (amount)</td>
                <td><?php if(isset($row['last_tran_am'])) echo $row['last_tran_am']; ?></td>
              </tr>
            </table>
          </center>
        </div>
      </div>

      <footer> <hr>
        <ul>
          <li><a class="foot" href="1.1.adminpanel.php">Home</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html></ht>
