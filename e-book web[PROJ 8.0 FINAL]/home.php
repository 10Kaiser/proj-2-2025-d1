<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- AOS LIBRARY -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <title>Home</title>
 
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
          <img src="assets/img/opyt.png" width="3.5%" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              <li class="nav-item">
                <!-- From Uiverse.io by WhiteNervosa --> 
                <button class="btn2">
<a class="nav-link active" aria-current="page" href="home.php">Home</a>
</button>
                
              </li>

              <li class="nav-item">
                <button class="btn2">
                  <a class="nav-link" href="Comp.html">Competition</a>
                </button>
                         
               
              </li>

            </ul>
            <form class="d-flex" >
              <!-- Fancy Buttons Edited --> 
              <div class="button-borders" style="padding-right: 20px;" >
                <button class="primary-button" ><a href="store.html"> Store</a>
                </button>
              </div>
<div class="button-borders" style="padding-right: 20px;" >
  <button class="primary-button" ><a href="register.php"> Register</a>
  </button>
</div>
<div class="button-borders" style="padding-left: 20px; " >
  
 <button class="primary-button loginbutton "><a href="login.php"> LogIn</a>
</button> 
</div>
              <input style="padding-left: 20px;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn  bg-primary" type="submit"><a href="#">Search</a></button>
              <button><a href="logout.php">Logout</a></button>
            </form>
          </div>
        </div>
      </nav>
  </head>


<!-- MAIN PAGE -->



  <body>
    <center>
  Thanks For Log in Enjoy
  </center>
 <!-- CAROSUEL -->

    <div id="carouselExampleCaptions" class="carousel slide" style="padding-top: 20px;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/carosuel image 1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/carosuel img 2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/carosuel omg 3.jpg" class="d-block w-100"  alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- carosuel End  -->




<div class="featured" data-aos="fade-right"
data-aos-offset="300" data-aos-easing="ease-in-sine">
  <!-- Book Image -->
  <div class="book-image">
    <img src="assets/img/jojo1.png"  alt="Featured Book Cover">
  </div>
  <!-- Book Info -->
  <div class="book-info">
    <h1>Featured book</h1>
    <h2>JoJo's Bizarre Adventure: Part 7 SBR</h2>
    <p class="book-price">$9.99</p>
    <p class="book-synopsis">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel eros a sapien consequat bibendum.
    </p>
    <a href="book1.html" class="book-button">View Details</a>
  </div>
</div>

<div class="featured" data-aos="fade-left"
data-aos-offset="300" data-aos-easing="ease-in-sine">
  <div class="book-info">
    <h1>Most sold</h1>
    <h2>JoJo's Bizarre Adventure: Part 3 Stardust crusaders</h2>
    <p class="book-price">$9.99</p>
    <p class="book-synopsis">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel eros a sapien consequat bibendum.
    </p>
    <a href="book2.html" class="book-button">View Details</a>
  </div>
  <div class="book-image2">
    <img src="assets/img/jojo2.png" alt="Featured Book Cover">
  </div>
</div>


</div>


</div>
<div class="footer">
  <div class="container">
      <div class="row">
          <div class="footer-col-1">
              <h3>Download our App</h3>
              <p>Download app for andoriad and Ios mobile phone.</p>
              <div class="applogo">
                  <img src="./assets/img/play-store.png" alt="">
                  <img src="./assets/img/app-store.png" alt="">
              </div>
          </div>
          <div class="footer-col-2">
              <img src="assets/img/logo-white.png" alt="">
              <p>Our porpose is to Sustainbaly make up the Pleasure and Benifit of sport Accessible to the many.</p>
          </div>
          <div class="footer-col-3">
              <h3>Useful Links</h3>
              <ul>
                  <li>Coupons</li>
                  <li>Blog Post</li>
                  <li>Return Policy</li>
                  <li>Join Affiliate</li>
              </ul>
          </div>
          <div class="footer-col-4">
              <h3>Follow us</h3>
              <ul>
                  <li>Facebook</li>
                  <li>Twitter</li>
                  <li>Instagram/li>
                  <li>Youtube</li>
              </ul>
          </div>
      </div>
      <hr>
      <p></p>
  </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- AOS LIBRARY -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  </body>
</html>