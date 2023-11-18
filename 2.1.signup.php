
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || Register</title>
    <link rel="icon" href='icons/title.ico'>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
  </head>
  <body>
    <div style="width:700px" class="body">
      <img src="images/top.jpg" width="100%" height="160px"> <br>
      <h3>:: Register an Account ::</h3>
      <hr>
      <p style="background-color:#35495e; color:#dff6f0; padding: 3px;">Personal information</p>
      <form class="form" method="POST" action="connection/signup.php">
        <table align="center" class="form">
          <tr>
            <td><label>Name: </label></td>
            <td><input type="text" name="user_name" value="" placeholder="Your Account Name"> <br></td>
          </tr>
          <tr>
            <td><label>Acount no.: </label></td>
            <td><input type="number" name="acc_no" value="" placeholder="8 digit Account number"> <br></td>
          </tr>
          <tr>
            <td><label>Password: </label></td>
            <td><input type="password" name="user_pass" value="" placeholder="8-16 characters"> <br></td>
          </tr>
          <tr>
            <td><label>Profile picture: </label></td>
            <td><input type="file" name="" value=""> <br></td>
          </tr>
        </table>
        <p style="background-color:#35495e; color:#dff6f0; padding: 3px;">Contact information</p>
        <table align="center" class="form">
          <tr>
            <td><label>E-mail:</label></td>
            <td><input type="email" name="user_email" value="" placeholder="A valid e-mail"> <br></td>
          </tr>
          <tr>
            <td><label>Phone:<h6>(+880)</h6></label></td>
            <td><input type="number" name="user_phone" value="" placeholder="A valid phone number"> <br></td>
          </tr>
          <tr>
            <td><label>Permanent address: </label></td>
            <td><textarea name="p_add"></textarea> <br></td>
          </tr>
          <tr>
            <td><label>Current address: </label></td>
            <td><textarea name="c_add"></textarea><br></td>
          </tr>
        </table>
        <br>
        <input class="btn" type="submit" name="signup" value="Submit">
        </form>
        <br>

      <footer> <hr>
        <ul>
          <li><a class="foot" href="index.php">Home</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html></ht>
