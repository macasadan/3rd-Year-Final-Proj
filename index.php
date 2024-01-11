<?php
# Initialize the session
session_start();

# If the user is not logged in, redirect them to the login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>window.location.href='./login.php';</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
  <style>
    /* ... Your existing styles ... */
  </style>
</head>

<body>
  <div class="container">
    <div class="alert alert-success my-5">
      Welcome! You are now signed in to your account.
    </div>
    <!-- User profile -->
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center profile-container">
        <img src="./img/blank-avatar.jpg" class="img-fluid avatar" alt="User avatar">
        <h4 class="my-4 username">Hello, <?= htmlspecialchars($_SESSION["username"]); ?></h4>
        <a href="./https://www.mediafire.com/file/tbfijgts3wzyxz0/P-itsPitness.apk/file?fbclid=IwAR1NcMqFGHBU_aNyxkt47CG9SqKnQG-5MwfAEFU6qH-SiBRnKpCjGbc-aCE" class="btn btn-primary logout-btn">Get Application</a>
        <a href="./logout.php" class="btn btn-primary logout-btn">Log Out</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8e+Vr+SH8ceOpqb6rSD5A6BdH6jN/mA2k5W9UyIgxgSgFAW/dAiS6I2txs1Z" crossorigin="anonymous"></script>
</body>

</html>
