<?php
require_once 'connector.php';

if (isset($_POST['submit'])) {
  $loginUsername = filter_input(INPUT_POST, 'login-uname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $loginPassword = filter_input(INPUT_POST, 'login-pwd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $conn = new mysqli($servername, $serverUName, $serverPwd, $dbname);
  $stmt = $conn->prepare('SELECT pwd FROM students WHERE username = ?');
  $stmt->bind_param('s', $loginUsername);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($db_pwd);
    $stmt->fetch();
    if (password_verify($loginPassword, $db_pwd)) {
      session_start();
      $_SESSION['username'] = $loginUsername;
      header('Location: ./homepage.php');
      exit();
    } else {
      echo "<script>alert('Invalid username or password');</script>";
    }
  } else {
    echo "<script>alert('Invalid username or password');</script>";
  }

  $stmt->close();
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SETU Clubs and Society</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="form.css" />
</head>

<body>
  <div class="header">
    SETU Clubs & Societies
    <div class="header-buttons">
      <button id="sign-in">Sign-In</button>
      <button id="sign-up">Sign-Up</button>
    </div>
  </div>
  <div class="signin-container">
    <form action="index.php" method="post" class="form">
      <input type="text" placeholder="Username" id="login-uname" name="login-uname" required />
      <input type="password" placeholder="Password" id="login-pwd" name="login-pwd" required />
      <div class="form-buttons">
        <input type="submit" value="Submit" name="submit" />
        <input type="reset" value="Cancel" />
      </div>
    </form>
  </div>
  <script src="app.js"></script>
</body>

</html>