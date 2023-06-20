<?php
require_once 'connector.php';
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: ./index.php');
  exit();
}

// Database configuration
$servername = "localhost";
$serverUName = "root";
$serverPwd = "root";
$dbname = "clubsAndSocs";
$conn = new mysqli($servername, $serverUName, $serverPwd, $dbname);

// initialise crypto variables
$cipher = 'AES-128-CBC';
$key = 'thisisasecretkey';

$loginUsername = $_SESSION['username'];
$stmt = $conn->prepare('SELECT * FROM students WHERE username = ?');
$stmt->bind_param('s', $loginUsername);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$iv = hex2bin($row['iv']);

$encrypted_std_name = hex2bin($row['full_name']);
$full_name = openssl_decrypt($encrypted_std_name, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_std_num = hex2bin($row['phone_number']);
$std_num = openssl_decrypt($encrypted_std_num, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_std_email = hex2bin($row['email']);
$std_email = openssl_decrypt($encrypted_std_email, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_std_dob = hex2bin($row['dob']);
$std_dob = openssl_decrypt($encrypted_std_dob, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_std_photo = hex2bin($row['photo']);
$std_photo = openssl_decrypt($encrypted_std_photo, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_std_med_cond = hex2bin($row['medical_conditions']);
$std_med_cond = openssl_decrypt($encrypted_std_med_cond, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_doc_name = hex2bin($row['doctor_name']);
$doc_name = openssl_decrypt($encrypted_doc_name, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_doc_num = hex2bin($row['doctor_number']);
$doc_name = openssl_decrypt($encrypted_doc_num, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_nok_name = hex2bin($row['nok_name']);
$nok_name = openssl_decrypt($encrypted_nok_name, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$encrypted_nok_num = hex2bin($row['nok_number']);
$nok_num = openssl_decrypt($encrypted_nok_num, $cipher, $key, OPENSSL_RAW_DATA, $iv);

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SETU Clubs and Society</title>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <div class="header">
    SETU Clubs & Societies
    <div class="header-buttons">
      <button id="logout">Log-out</button>
    </div>
  </div>
  <div class="main-container">
    <h1>Welcome to our Society!</h1>
    <div class="info">
      <div class="std-name">
        <?php echo $full_name; ?>
      </div>
      <div class="std-num">
        <?php echo $std_num; ?>
      </div>
      <div class="std-email">
        <?php echo $std_email; ?>
      </div>
      <div class="std-dob">
        <?php echo $std_dob; ?>
      </div>
      <div class="std-photo"><img src="data:image/jpeg;base64,<?php echo base64_encode($std_photo); ?>"
          alt="Student Photo"></div>
      <div class="std-med-cond">
        <?php echo $std_med_cond; ?>
      </div>
      <div class="doc-name">
        <?php echo $doc_name; ?>
      </div>
      <div class="doc-num">
        <?php echo $doc_num; ?>
      </div>
      <div class="nok-name">
        <?php echo $nok_name; ?>
      </div>
      <div class="nok-num">
        <?php echo $nok_num; ?>
      </div>
    </div>
  </div>
  <script>
    const logoutButton = document.getElementById('logout')
    logoutButton.addEventListener('click', () => {
      window.location = './index.php'
    })
  </script>
</body>

</html>