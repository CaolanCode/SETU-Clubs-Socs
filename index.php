<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SETU Clubs and Society</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  require_once 'connector.php';
  ?>
  <div class="header">
    SETU Clubs & Societies
    <div class="header-buttons">
      <button id="sign-in">Sign-In</button>
      <button id="sign-up">Sign-Up</button>
    </div>
  </div>
  <div class="main-container">
    <form action="index.php" method="post" class="form">
      <input type="text" placeholder="Username" id="login-uname" name="login-uname" required />
      <input type="password" placeholder="Password" id="login-pwd" name="login-pwd" required />
      <div class="form-buttons">
        <input type="submit" value="Submit" />
        <input type="reset" value="Cancel" />
      </div>
    </form>
  </div>
  <?php
  /*
  $loginUname = $_POST["login-uname"];
  echo $loginUname;
  echo '</br>';
  $loginPlainPassword = $_POST['login-pwd'];
  echo $loginPlainPassword;
  echo '</br>';
  $hash = password_hash($loginPlainPassword, PASSWORD_DEFAULT);
  echo $hash;
  echo '</br>';
  $verify = password_verify($loginPlainPassword, $hash);
  echo ($verify ? 'Y' : 'N');
  */
  ?>
  <script src="app.js"></script>
</body>

</html>