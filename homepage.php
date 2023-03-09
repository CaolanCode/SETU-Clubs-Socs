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
    <form action="" method="post" class="form">
      <label>Personal Information:</label>
      <input type="text" placeholder="Enter student ID" id="student-id" />
      <input type="tel" placeholder="Enter phone number" id="phone-number" />
      <input type="email" placeholder="Enter email" id="email" />
      <input type="date" id="dob" name="dob" />
      <div class="form-row">
        <label>Upload photo:</label>
        <input type="file" id="photo" />
      </div>
      <label>Medical Information:</label>
      <input type="text" placeholder="Enter medical conditions" id="medical-condition" />
      <input type="text" placeholder="Enter Doctor's name" id="doctor-name" />
      <input type="tel" placeholder="Enter Doctor's number" id="doctor-number" />
      <input type="text" placeholder="Enter Next of Kin name" id="nok-name" />
      <input type="tel" placeholder="Enter Next of Kin number" id="nok-number" />
      <div class="form-row">
        <label>I declare that I am medically fit to partake in club/society activities:</label>
        <input type="checkbox" id="medical-checkbox" />
      </div>
      <div class="form-buttons">
        <input type="submit" value="Submit" />
        <input type="reset" value="Cancel" />
      </div>
    </form>
  </div>
</body>

</html>