<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>

<!-- header section starts -->

<section class="header">

<!-- <a href="./home.php" class="logo">
        <img src="./Photos/LOGO2.png" alt="" class="LOGO-img" width="50" hight="50">
</a> -->

<a href="./home.php" class="logo">WEBUILD</a>
<nav class="navbar">
  <a href="./lands.php">Lands</a>
  <a href="./houses.php">House</a>
  <a href="./completed.php">Completed Projects</a>
  <a href="./about.php">About Us</a>
  <a href="./contact.php">Contact Us</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<div class="heading" style="background:url(./Photos/1630000306A.jpg)">;
  <h1>Contact Us</h1>
</div>

<!-- booking section starts -->
<section class="booking">
  
  <form action="book_form.php" method="post" class="book-form">
  <h1 class="heading-title">Add Details</h1>
    <div class="flex">
      <div class="inputBox">
        <span>name:</span>
        <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputBox">
        <span>email:</span>
        <input type="text" placeholder="enter your email" name="email">
      </div>
      <div class="inputBox">
        <span>phone:</span>
        <input type="text" placeholder="enter your number" name="phone">
      </div>
      <div class="inputBox">
        <span>address:</span>
        <input type="text" placeholder="enter your address" name="address">
      </div>
      <div class="inputBox">
        <span>your preferred location:</span>
        <input type="text" placeholder="select location" name="location">
      </div>
    </div>
    <input type="submit" value="submit" class="btn" name="send">
  </form>  
  </h1>
</section>
<!-- booking section starts -->




































<!-- footer section starts -->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Quik links</h3>
      <a href="./home.php"><i class="fas fa-angle-right"></i>Houses</a>
      <a href="./completed.php"><i class="fas fa-angle-right"></i>Completed Projects</a>
      <a href="./about.php"><i class="fas fa-angle-right"></i>About Us</a>
      <a href="./contact.php"><i class="fas fa-angle-right"></i>Contact Us</a>
    </div>

    <div class="box">
      <h3>Extra Links</h3>
      <a href="./about.php"><i class="fas fa-angle-right"></i>About Us</a>
      <a href="./contact.php"><i class="fas fa-angle-right"></i>Privacy Policy</a>
    </div>

    <div class="box">
      <h3>Contact info</h3>
      <a href="./home.php"><i class="fas fa-phone"></i>+94 112 699827</a>
      <a href="./completed.php"><i class="fas fa-envelope"></i>info@webuild.lk</a>
     
      <a href="./contact.php"><i class="fas fa-map"></i>Reid Avenue ,Colombo7</a>
    </div>
  </div>
  <div class="credit">WEBUILD (Pvt)Ltd</div>
</section>







<!-- footer section end -->


  
<!-- custon js file link -->
<script src="./home.js"></script>

</body>
</html>