
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || Admin Panel</title>
    <link rel="icon" href="../icons/title.ico">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="body">
      <img src="../images/top.jpg" width="100%" height="150px"> <br>
      <h3>:: Admin Panel ::</h3>
      <hr>
      <h4>Login failed</h4>
      <p class='fail'>
        *Incorrect Information. Try again.
      </p>
      <form class="form" action="../1.1.adminpanel.php" method="POST">
        <table align="center" class="form">
          <tr>
            <td><label>Username: </label></td>
            <td><input type="text" name="admin_username" value="" placeholder="Username"> <br></td>
          </tr>
          <tr>
            <td><label>Password: </label></td>
            <td><input type="password" name="admin_pass" value="" placeholder="Password"> <br></td>
          </tr>
        </table>
        <input class="btn" type="submit" name="admin_login" value="Login">
      </form>
      <footer> <hr>
        <ul>
          <li><a href="../index.php">Home</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html></ht>
