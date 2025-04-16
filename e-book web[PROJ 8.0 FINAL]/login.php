<?php
include 'connect.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM persons WHERE Email='$email' AND PASSWORD='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $email;
        header("Location: home.php"); // change to your desired landing page
        exit();
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style.css -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- AOS LIBRARY -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!-- google fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>


    <!-- LOGIN FORM -->
<!-- HOME BUTTON -->
<button>
    <a href="home.php"><span> Home
 </span></a> 
   </button>
 
    <!-- Form Register -->
     <center>
<div class="form-box">
    <form class="form" method = "post">
        <span class="title">LogIn</span>
        <span class="subtitle">LogIn And Enjoy Your Shopping.</span>
        <div class="form-container">
        <input type="email" name="email" class="input" placeholder="Email" required>
<input type="password" name="password" class="input" placeholder="Password" required>

        </div>
        <button>Log In</button>
    </form>
    <div class="form-section">
      <p> Dont Have an account? <a href="register.php">Register</a></p>
    </div>
    </div>
</center>
<!-- AOS LIBRARY -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>