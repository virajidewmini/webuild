<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEBUILD</title>

   <!-- fontawesome cdn link  -->


  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script src="<?=ROOT?>/js/newhome.js"></script>
  <!-- custom css file link  -->

  <link rel="stylesheet" href="<?=ROOT?>/css/newhome.css">
  

</head>
<body>
 
  <!-- header section starts -->

<header class="header">

  <a href="#" class="logo">We <span>Build</span> </a>
  
  
  <nav class="navbar">
  

  


    <a  href=Home>home</a>
    <!-- <a  href="#lands">Lands</a>
    <a  href="#houses">houses</a> -->
    <a  href="#projects">completed projects</a>
   
  
  </nav>
  <div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>
    <div id="info-btn" class="fas fa-info-circle"></div>
    <div id="search-btn" class="fas fa-search"></div>
    <div id="login-btn" class="fas fa-user"></div>
    
    <!-- <div id="menu-btn" class="fas fa-info-circle"></div> -->
  </div>
  
<form action="" class="search-form">
  <input type="search" name="" placeholder="search here..." id="search-box">
  <label for="search-box" class="fas fa-search"></label>
</form>

<form action="" class="login-form">
  <h3>Login form</h3>
  <input type="email" placeholder="enter your email" class="box" name="" id="">
  <input type="password" placeholder="enter your password" class="box">
  <div class="flex">
    <input type="checkbox" name="" id="remember-me">
    <label for="remember-me">remember-me</label>
    <a href="#GAVEESHA">forgot password</a>
  </div>
  <input type="submit" value="login now" class="btn">
  <p>don't have an account <a href="#"> create one!</a></p>
</form>
  
  </header>

  <div class="contact-info">

    <div id="close-contact-info" class="fas fa-times">

    </div>

    <div class="info">
      <i class="fas fa-phone">
        <h3>phone number</h3>
        <p>+94-123-3449</p>
        <p>+91-112-1233</p>

      </i>
    </div>
    <div class="info">
      <i class="fas fa-envelope">
        <h3>email address</h3>
        <p>webuildconstruction@gmail.com</p>
        <p>webuildconcept@gmail.com</p>
        
      </i>
    </div>
    <div class="info">
      <i class="fas fa-map-marker-alt">
        <h3>office  address</h3>
        <p>reid avenue , colombo- sri lanka</p>
        <p></p>
      </i>
    </div>

    <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
    </div>


  </div>
  
  <!-- header section ends -->

 
  <section class="home" id="home" style="background-color: #f2f2f2; padding: 20px; ">
  <div class="swiper home-slider" >
    <div class="swiper-wrapper">
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/pexels-pixasquare-com-1115804.jpg) no-repeat; width:100%; height:100%;">
        <div class="content">
          <h3>Existing Models</h3>
          <p>Welcome to our diverse range of homes, each meticulously designed to suit every lifestyle. From the intimate charm of our 2-bedroom model to the grandeur of our 6-bedroom masterpiece, experience unparalleled comfort, style, and functionality tailored to your needs. Step into luxury, step into your dream home.</p>
          <!-- Form for filtering -->
          <div class="filtermodel" style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <form id="filterForm" style="display: flex; align-items: center; justify-content: center;">
            <h3>Find Your Dream Place</h3>
              <label for="numRooms" style="margin-right: 10px;">Number of Rooms:</label>
              <select id="numRooms" name="numRooms" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-right: 10px;">
                <option value="1">1 Room</option>
                <option value="2">2 Room</option>
                <option value="3">3 Room</option>
                <!-- Add more options as needed -->
              </select>
              <label for="numFloors" style="margin-right: 10px;">Number of Floors:</label>
              <select id="numFloors" name="numFloors" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-right: 10px;">
                <option value="1">1 Floor</option>
                <option value="2">2 Floor</option>
                <option value="3">3 Floor</option>
                <!-- Add more options as needed -->
              </select>
              <button type="submit" style="padding: 8px 16px; background-color: #E5863D; color: white; border: none; border-radius: 5px; cursor: pointer;">Search</button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

  
  

    <!-- home section ends  -->

<section class="blogs" id="blogs">

<h1 class="heading" style="margin-top: -3.5rem;" >our existing models </h1>

<div class="blog-slider">

  <div class="-wrapper">

    <div class="slide">
      <div class="image">
      <a href=ExistingModels/gallery1>
    <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/download (1).jpg" alt="">
      </a>
      </div>
      <div class="content" style="margin-bottom: 5rem;">
        <h3>"Cozy Haven: 1-Story, 2 Bedroom Retreat</h3>
        
        <!-- <a href="#" class="btn">read more</a> -->
      </div>
    </div>

    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery2">
        <img src="<?=ROOT?>/img/Photos/forLandingPage/property-7.jpg" alt="">
    </a>
</div>
      <div class="content"style="margin-bottom: 5rem;">
        <h3>Family Oasis: 1-Story, 3 Bedroom Haven</h3>
      </div>
    </div>

    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery3">
        <img src="<?=ROOT?>/img/Photos/forLandingPage/property-6.jpg" alt="">
    </a>
</div>
      <div class="content" style="margin-bottom: 5rem;">
        <h3>Elevated Living: 2-Story, 3 Bedroom Sanctuary</h3>
      </div>
    </div>
    

    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery4">
        <img src="<?=ROOT?>/img/Photos/forLandingPage/property-7.jpg" alt="">
    </a>
</div>

      <div class="content"style="margin-bottom: 5rem;">
        <h3>Grand Estate: 2-Story, 5 Bedroom Residence</h3>
      </div>
    </div>

    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery5">
        <img src="<?=ROOT?>/img/Photos/forLandingPage/property-6.jpg" alt="">
    </a>
</div>

      <div class="content"style="margin-bottom: 5rem;">
        <h3>Skyline Villa: 3-Story, 6 Bedroom Penthouse</h3>
      </div>
    </div>

   


  </div>


</div>



</section>
 


<!-- footer section starts  -->

<!-- <section class="footer">

  <div class="links">
    <a class="btn" href="#home.php">Lands</a>
    <a class="btn" href="#houses.php">About Us</a>
    <a class="btn" href="#about.php">House</a>
    <a class="btn" href="#services.php">Completed Projects</a>
    <a class="btn" href="#completed projects.php">About Us</a>
    <a class="btn" href="#pricing">Pricing</a>
    <a class="btn" href="#contact">Contact Us</a>
    <a class="btn" href="#blogs">Blogs</a>

  </div>

  <div class="credit">credited by <span>webuild construction</span> | all rights reserved!</div>


</section> -->


<!-- footer section ends  -->







<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script src="<?=ROOT?>/js/newhome.js"></script>

 <script>
  lightGallery(document.querySelector('.projects .box-container'));
 </script>

</body>
</html>
