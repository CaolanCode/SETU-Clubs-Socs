<?php
require_once 'connector.php';

if (isset($_POST['submit'])) {
  $signUpUname = $_POST['signup-uname'];
  $signUpPwd = $_POST['signup-pwd'];
  $confirmSignupPwd = $_POST['confirm-signup-pwd'];
  if ($signUpPwd !== $confirmSignupPwd) {
    echo 'passwords not the same';
    return;
  }
  $studentID = $_POST['student-id'];
  $fullName = $_POST['name'];
  $phoneNum = $_POST['phone-number'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $photo = file_get_contents($_FILES['photo']['tmp_name']);
  $medCon = $_POST['med-cond'];
  $docName = $_POST['doctor-name'];
  $docNum = $_POST['doctor-number'];
  $nokName = $_POST['nok-name'];
  $nokNum = $_POST['nok-number'];
  if (isset($_POST["med-chbox"])) {
    $medDec = 1;
  } else {
    $medDec = 0;
  }

  // initialise crypto variables
  $cipher = 'AES-128-CBC';
  $key = 'thisisasecretkey';
  $iv = random_bytes(16);
  $ivHex = bin2hex($iv);

  // hash password
  $pwdHash = password_hash($signUpPwd, PASSWORD_DEFAULT);

  // encrypt student ID
  $encryptSID = openssl_encrypt($studentID, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptSIDHex = bin2hex($encryptSID);

  // ecrypt full name
  $encryptName = openssl_encrypt($fullName, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptNameHex = bin2hex($encryptName);

  // encrypt phone number
  $encryptNumber = openssl_encrypt($phoneNum, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptNumberHex = bin2hex($encryptNumber);

  // encrypt email
  $encryptEmail = openssl_encrypt($email, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptEmailHex = bin2hex($encryptEmail);

  // encrypt dob
  $encryptDOB = openssl_encrypt($dob, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptDOBHex = bin2hex($encryptDOB);

  // encrypt image
  $encryptPhoto = openssl_encrypt($photo, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptPhotoHex = bin2hex($encryptPhoto);

  // encrypt medical conditions
  $encryptMedCon = openssl_encrypt($medCon, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptedMedConHex = bin2hex($encryptMedCon);

  // encrypt doctors name
  $encryptDocName = openssl_encrypt($docName, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptDocNameHex = bin2hex($encryptDocName);

  // encrypt doctors number
  $encryptDocNum = openssl_encrypt($docNum, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptDocNumHex = bin2hex($encryptDocNum);

  // encrypt nok name
  $encryptNokName = openssl_encrypt($nokName, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptNokNameHex = bin2hex($encryptNokName);

  // encrypt nok number
  $encryptNokNum = openssl_encrypt($nokNum, $cipher, $key, OPENSSL_RAW_DATA, $iv);
  $encryptNokNumHex = bin2hex($encryptNokNum);


  $conn = new mysqli($servername, $serverUName, $serverPwd, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $stmt = $conn->prepare("INSERT INTO students (username, pwd, student_id, full_name, phone_number, email, dob, photo, medical_declaration, medical_conditions, doctor_name, doctor_number, nok_name, nok_number, iv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  if (!$stmt) {
    die("Prepare failed: " . $conn->error);
  }
  $stmt->bind_param("sssssssssssssss", $signUpUname, $pwdHash, $encryptSIDHex, $encryptNameHex, $encryptNumberHex, $encryptEmailHex, $encryptDOBHex, $encryptPhotoHex, $medDec, $encryptedMedConHex, $encryptDocNameHex, $encryptDocNumHex, $encryptNokNameHex, $encryptNokNumHex, $ivHex);
  if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
  }

  $stmt->close();
  $conn->close();
}
?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SETU Clubs and Society</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="header">
    SETU Clubs & Societies
    <div class="header-buttons">
      <button id="sign-in">Sign-In</button>
      <button id="sign-up">Sign-Up</button>
    </div>
  </div>
  <div class="main-container">
    <form action="signup.php" method="post" class="form" enctype='multipart/form-data'>
      <label>Personal Information:</label>
      <input type="text" placeholder="Create Username" id="signup-uname" name="signup-uname" required />
      <input type="password" placeholder="Create Password" id="signup-pwd" name="signup-pwd" required />
      <input type="password" placeholder="Confirm Password" id="confirm-signup-pwd" name="confirm-signup-pwd"
        required />
      <input type="text" placeholder="Enter student ID" id="student-id" name="student-id" required />
      <input type="text" placeholder="Enter full name" id="full-name" name="full-name" required />
      <input type="tel" placeholder="Enter phone number" id="phone-number" name="phone-number" required />
      <input type="email" placeholder="Enter email" id="email" name="email" required />
      <input type="date" id="dob" name="dob" name="dob" required />
      <div class="form-row">
        <label>Upload photo:</label>
        <input type="file" id="photo" name="photo" required />
      </div>
      <label>Medical Information:</label>
      <input type="text" placeholder="Enter medical conditions" id="med-cond" name="med-cond" required />
      <input type="text" placeholder="Enter Doctor's name" id="doctor-name" name="doctor-name" required />
      <input type="tel" placeholder="Enter Doctor's number" id="doctor-number" name="doctor-number" required />
      <input type="text" placeholder="Enter Next of Kin name" id="nok-name" name="nok-name" required />
      <input type="tel" placeholder="Enter Next of Kin number" id="nok-number" name="nok-number" required />
      <div class="form-row">
        <label>I declare that I am medically fit to partake in club/society activities:</label>
        <input type="checkbox" id="med-chbox" name="med-chbox" required />
      </div>
      <div class="form-buttons">
        <input type="submit" value="Submit" name="submit" />
        <input type="reset" value="Cancel" />
      </div>
    </form>
  </div>

  <script src="app.js"></script>
</body>

</html>