<?php include 'connection/connect.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || Admin Panel</title>
    <link rel="icon" href="icons/title.ico">
    <link rel="stylesheet" href="css/panel.css">
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
          <a class="panel_a_p" href="#">User details</a><br>
          <a class="panel_a_p" href="1.1.4.userinfo.php">Account information</a><br>
          <a class="panel_a_p" href="1.1.3.transaction.php">Transactions</a><br>
        </div>
        <div class="part2">
          <p class="table_title">:: User Details ::</p>
            <table>
              <tr>
                <th style="width: 40%">User Name</th>
                <th style="width: 20%">Account No.</th>
                <th style="width: 10%">Balance</th>
                <th style="width: 20%">Last transaction (date)</th>
                <th style="width: 10%">Last transaction (amount)</th>
              </tr>
              <?php
              // $conn = mysqli_connect("localhost", "root", "", "register");
              $sql = "SELECT * FROM user;";
              $result = mysqli_query($conn, $sql);

              while($rows = mysqli_fetch_assoc($result)){
                echo "<tr><td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['name']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['acc_no']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['balance']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['last_tran_date']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['last_tran_am']."</td></tr>";
              } ?>

            </table>
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
