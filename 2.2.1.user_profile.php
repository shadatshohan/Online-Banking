<?php include 'connection/connect.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || User Panel</title>
    <link rel="icon" href="icons/title.ico">
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="panel_body">
      <img src="images/panel-top.jpg" width="100%"> <br>
      <h3>:: User Panel ::</h3>
      <hr>
      <div style="width: 100%">
        <div class="part1">
          <a class="panel_a_p" href="#">Account information</a><br>
          <a class="panel_a_p" href="2.2.2.transfer.php">Transfer</a><br>
        </div>
        <div class="part2">
          <p class="panel_p">:: Profile ::</p>
          <center>
            <table>
              <tr>
                <th colspan="3" class="span">Personal information</td>
              </tr>
              <tr>
                <td class="td1">User name:</td>
                <td style="width: 40%"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></td>
                <td rowspan="4" style="padding-left: 19px"><img src="images/pp.png"/></td>
              </tr>
              <tr>
                <td class="td1">E-mail:</td>
                <td><?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?></td>
              </tr>
              <tr>
                <td class="td1">Phone:</td>
                <td>0<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone']; ?></td>
              </tr>
              <tr>
                <td class="td1">Full address:</td>
                <td><u>Current:</u> <?php if(isset($_SESSION['c_address'])) echo $_SESSION['c_address']; ?> <br>
                    <u>Permanent:</u> <?php if(isset($_SESSION['p_address'])) echo $_SESSION['p_address']; ?>
                </td>
              </tr>
              <tr>
                <th colspan="3" class="span">Bank information</td>
              </tr>
              <tr>
                <td class="td1">Account no.:</td>
                <td><?php if(isset($_SESSION['acc_no'])) echo $_SESSION['acc_no']; ?></td>
                <td rowspan="5"></td>
              </tr>
              <tr>
                <td class="td1">Current balance:</td>
                <td><?php if(isset($_SESSION['balance'])) echo $_SESSION['balance']; ?> BDT</td>
              </tr>
              <tr>
                <td class="td1">Account type:</td>
                <td>Savings</td>
              <tr>
                <td class="td1">Last transaction: (date)</td>
                <td><?php if(isset($_SESSION['last_tran_date'])) echo $_SESSION['last_tran_date']; ?></td>
              </tr>
              <tr>
                <td class="td1">Last transaction: (amount)</td>
                <td><?php if(isset($_SESSION['last_tran_am'])) echo $_SESSION['last_tran_am']; ?></td>
              </tr>
            </table>
          </center>
        </div>
      </div>

      <footer> <hr>
        <ul>
          <li><a class="foot" href="2.2.userpanel.php">Home</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html></ht>
