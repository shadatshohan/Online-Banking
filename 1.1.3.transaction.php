<?php include 'connection/connect.php';

// $conn = mysqli_connect("localhost", "root", "", "register");
$sql = "SELECT * FROM transfer WHERE status='0';";
$result = mysqli_query($conn, $sql);
$user = $_SESSION['username'];

for($i=0; $i<mysqli_num_rows($result); $i++){
  if(isset($_POST['action'.$i])){
    $sender = $_POST['sender'];
    $reciever = $_POST['reciever'];
    $id = $_POST['id'];

    if($_POST['action'.$i]=="Accept"){
      $senderData = mysqli_fetch_array(mysqli_query($conn,"SELECT balance FROM user WHERE acc_no='$sender';"));
      $senderNewBal = $senderData['balance'] - $_POST['amount'];
      $recieverData = mysqli_fetch_array(mysqli_query($conn,"SELECT balance FROM user WHERE acc_no='$reciever';"));
      $recieverNewBal = $recieverData['balance'] + $_POST['amount'];
  
      $query1 = mysqli_query($conn, "UPDATE user SET balance='$recieverNewBal' WHERE acc_no='$reciever';");
      $query1 = mysqli_query($conn, "UPDATE user SET balance='$senderNewBal' WHERE acc_no='$sender';");
      $query3 = mysqli_query($conn, "UPDATE transfer SET status='1', action_by='$user' WHERE ID='$id';");
      
    }else{
      $query3 = mysqli_query($conn, "UPDATE transfer SET status='-1', action_by='$user' WHERE ID='$id';");
    }
  }else{}
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
          <a class="panel_a_p" href="1.1.4.userinfo.php">Account information</a><br>
          <a class="panel_a_p" href="#">Transactions</a><br>
        </div>
        <div class="part2">
          <p class="table_title">:: Transaction list ::</p>
            <table>
              <tr>
                <th style="width: 20%">Transaction ID</th>
                <th style="width: 20%">Sender</th>
                <th style="width: 20%">Reciever</th>
                <th style="width: 20%">Transfer amount</th>
                <th style="width: 20%">Transaction Date</th>
                <th style="width: 20%">Action</th>
              </tr>

              <?php
              $sql = "SELECT * FROM transfer WHERE status='0';";
              $result = mysqli_query($conn, $sql);
              $c =0;
              while($rows = mysqli_fetch_assoc($result)){
                echo "<tr><td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['ID']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['sender']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['reciever']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['amount']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['trans_date']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>
                        <form action='1.1.3.transaction.php' method='POST'>
                          <input type='hidden' value='".$rows['sender']."' name='sender'>
                          <input type='hidden' value='".$rows['reciever']."' name='reciever'>
                          <input type='hidden' value='".$rows['amount']."' name='amount'>
                          <input type='hidden' value='".$rows['ID']."' name='id'>
                          <input type='submit' value='Accept' name='action".$c."'>
                          <input type='submit' value='Deny' name='action".$c."'>
                        </form>
                      </td></tr>";
                      $c++;
              } 
              if(mysqli_num_rows($result)<1){
                echo "<tr> <td colspan='6' style='text-align:center; background-color:#ff646480'>No transaction left to view</td></tr>";
              }
              ?>

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
