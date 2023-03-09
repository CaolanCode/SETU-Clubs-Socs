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
    <form action="" method="post" class="form">
      <input type="text" placeholder="Username" id="username" />
      <input type="password" placeholder="Password" id="password" />
      <div class="form-buttons">
        <input type="submit" value="Submit" />
        <input type="reset" value="Cancel" />
      </div>
    </form>
  </div>
  <script src="app.js"></script>
</body>

</html>