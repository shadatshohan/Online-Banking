<?php include 'connection/connect.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || Admin Panel</title>
    <link rel="icon" href="icons/title.ico">
    <link rel="stylesheet" href="css/profile.css">
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
          <a class="panel_a_p" href="#">Profile</a><br>
          <a class="panel_a_p" href="1.1.2.adminpanel_users.php">User details</a><br>
          <a class="panel_a_p" href="">Account information</a><br>
          <a class="panel_a_p" href="1.1.3.transaction.php">Transactions</a><br>
        </div>
        <div class="part2">
          <p class="panel_p">:: Profile ::</p>
          <center>
            <table>
              <tr>
                <td class='td1'>Accountant ID:</td>
                <td style="width: 40%"><?php if(isset($_SESSION['acc_id'])) echo $_SESSION['acc_id']; ?></td>
                <td rowspan="5"><img src="images/pp.png"/></td>
              </tr>
              <tr>
                <td class="td1">Accountant name:</td>
                <td><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></td>
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
                <td><?php if(isset($_SESSION['address'])) echo $_SESSION['address']; ?></td>
              </tr>
              <tr>
                <td class="td1">Current status:</td>
                <td><?php if(isset($_SESSION['rank'])) echo $_SESSION['rank']; ?></td>
              </tr>
              <tr>
                <td class="td1">Current salary:</td>
                <td><?php if(isset($_SESSION['salary'])) echo $_SESSION['salary']; ?></td>
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
</html>
