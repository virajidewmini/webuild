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

 <div>
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


<header class="header" style="margin-left: 3rem; background-color:#ccc; width:max-content;">
       <nav class="navbar">   
           <a  href="#1Floor">1 Floor</a>
           <a  href=#floorplan>2 Floor</a>
           <a  href="#blockplan">3 Floor </a>
       </nav>  
      </header>
      
  
      <section class="home-packages" id="home-packeges">
      

      <h1 class="heading">1 Floor</h1>

      <!-- <section class="home-packages" id="home-packeges"> -->
     
      
        <div class="box-container">
        <div class="box">
  <div class="image">
    <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/21080514083801.jpg" alt="">
  </div>
  <div class="content">
    <h3>Purch Your Lands</h3>
    <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
  </div>
  <script>
    var images = [
      "<?=ROOT?>/img/Photos/Houses/1 Floor/21080514083801.jpg",
      "<?=ROOT?>/img/Photos/Houses/1 Floor/21080514083801.jpg",
      "<?=ROOT?>/img/Photos/Houses/1 Floor/download.jpg",
      // Add more image paths here
    ];

    var currentImageIndex = 0;
    var imageElement = document.querySelector('.box .image img');

    function showNextImage() {
      currentImageIndex = (currentImageIndex + 1) % images.length;
      imageElement.src = images[currentImageIndex];
    }

    // Change image every 3 seconds
    setInterval(showNextImage, 3000);
  </script>
</div>

          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/images5.jpeg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Lands</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
        </div>
      

       
      </section>
      <section class="home-packages" id="home-packeges">
      

      <h1 class="heading">2 Floor</h1>

      <!-- <section class="home-packages" id="home-packeges"> -->
     
      
        <div class="box-container">
          <div class="box">
            <div class="image">
              <img src="./Photos/Lands/land1.jpeg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Lands</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/images5.jpeg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Lands</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
        </div>
      

       
      </section>

      <section class="home-packages" id="home-packeges">
      

      <h1 class="heading">3 Floor</h1>

      <!-- <section class="home-packages" id="home-packeges"> -->
     
      
        <div class="box-container">
          <div class="box">
            <div class="image">
              <img src="./Photos/Lands/land1.jpeg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Lands</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/Houses/2 Floor/741_house_1.jpg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Houses</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="./Photos/images5.jpeg" alt="">
            </div>
            <div class="content">
              <h3>Purch Your Lands</h3>
              <p>jdnjndnnnn jmkkmk okmlkmmf kmmm</p>
            </div>
          </div>
        </div>
      

       
      </section>
      <style>
        .home-packages{
  background: var(--light-bg);
}
.home-packages .box-container{
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(20rem,1fr));
  gap: 1rem;
}
.home-packages .box-container .box{
  border: var(--border);
  box-shadow: var(--box-shadow);
  background: var(--white);
  border-radius: 1.7rem;
  outline: none;
}
.home-packages .box-container .box .image{
  height: 25rem;
  overflow: hidden;
  /* border-radius: 20rem; */
}
.home-packages .box-container .box .image img{
  height: 100%;
  width:100%;
  object-fit: cover;
  transition: .2s linear;
}
.home-packages .box-container .box .content{
  padding: .5rem;
  text-align: center;
}
.home-packages .box-container .box .content h3{
  color: var(--black);
}
.home-packages .box-container .box .content p{
  color: var(--light-black);
  line-height: 1;
  padding: .5rem;
}
.home-packages .load-more{
  text-align: center;
  margin-top: 2rem;
}
       </style>
      </div>
      




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
