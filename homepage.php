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
      <button id="logout">Log-out</button>
    </div>
  </div>
  <div class="main-container">
    <h1>Welcome to our Society!</h1>
  </div>
  <script>
    const logoutButton = document.getElementById('logout')
    logoutButton.addEventListener('click', () => {
      window.location = './index.php'
    })
  </script>
</body>

</html>