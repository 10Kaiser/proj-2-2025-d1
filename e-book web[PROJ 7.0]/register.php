<?php
include 'connect.php';
if(isset($_POST['signup'])){
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = $_POST['password'];


$sql = "insert into `persons` (Fullname,Email,PASSWORD)
values('$fullname','$email','$password')";
$result=mysqli_query($con,$sql);
if($result){
  echo "Data Inserted";
}else{
  die(mysqli_error($con));
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
    <link rel="stylesheet" href="assets/css/reigister.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- AOS LIBRARY -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- HOME BUTTON -->
<button>
    <a href="main.html"><span> Home
 </span></a> 
   </button>
 
    <!-- Form Register -->
     <center>

    
<div class="form-box">
    <form class="form" method="post">
        <span class="title">Register</span>
        <span class="subtitle">Create a free account with your email.</span>
        <div class="form-container">
          <input type="text" class="input" placeholder="Full Name"  name = "fullname">
                <input type="email" class="input" placeholder="Email" name = "email">
                <input type="password" class="input" placeholder="Password" name = "password">
        </div>
        <button name = "signup">Sign up</button>
    </form>
    <div class="form-section">
      <p>Have an account? <a href="login.html">Log in</a></p>
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