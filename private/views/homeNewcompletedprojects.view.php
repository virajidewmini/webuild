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
    <!-- <a  href="#projects">completed projects</a> -->
   
  
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
          <h3>Completed Projects</h3>
          <p>Delighted to announce the successful completion of our latest house 
            construction project! With meticulous planning and skilled craftsmanship,
             we've brought to life a dream home that exceeds expectations. From foundation
              to finishing touches, our attention to detail ensures quality and durability.
               Let us turn your vision into reality with our expertise and dedication.</p>
          <!-- Form for filtering -->
          <!-- <div class="filtermodel" style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <form id="filterForm" style="display: flex; align-items: center; justify-content: center;">
            <h3>Find Your Dream Place</h3>
              <label for="numRooms" style="margin-right: 10px;">Number of Rooms:</label>
              <select id="numRooms" name="numRooms" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-right: 10px;">
                <option value="1">1 Room</option>
                <option value="2">2 Room</option>
                <option value="3">3 Room</option>
              
              </select>
              <label for="numFloors" style="margin-right: 10px;">Number of Floors:</label>
              <select id="numFloors" name="numFloors" style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-right: 10px;">
                <option value="1">1 Floor</option>
                <option value="2">2 Floor</option>
                <option value="3">3 Floor</option>
              
              </select>
              <button type="submit" style="padding: 8px 16px; background-color: #E5863D; color: white; border: none; border-radius: 5px; cursor: pointer;">Search</button>
            </form>
          </div> -->
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
             <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/beautiful-red-brick-house-with-decorative-lights_53876-49372.jpg" alt="">
        </div>
        <div class="content">
           <h3>Gampaha</h3>
         </div>
        </div>

          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/beautiful-wooden-house-with-big-windows_23-2149343704.jpg" alt="">
            </div>
            <div class="content">
              <h3>Colombo</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/charming-yellow-house-with-wooden-windows-green-grassy-garden_181624-8074.jpg" alt="">
            </div>
            <div class="content">
              <h3>Galle</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/creative-landscape-design-beautiful-house_181624-40962.jpg"alt="">
            </div>
            <div class="content">
              <h3>Gampaha</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/happy-man-woman-dressed-official-clothing-front-old-cozy-building-running-each-other_8353-11427.jpg" alt="">
            </div>
            <div class="content">
              <h3>Kaluthara</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/houses-river-dikes-near-sleeuwijk_181624-8207.jpg" alt="">
            </div>
            <div class="content">
              <h3>Matara</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/long-shot-woman-field_23-2149535199.jpg" alt="">
            </div>
            <div class="content">
              <h3>Kaluthara</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/old-white-house-garden_1150-12900.jpg" alt="">
            </div>
            <div class="content">
              <h3>Gampaha</h3>
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
              <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/road-city.jpg" alt="">
            </div>
            <div class="content">
              <h3>Galle</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/house-isolated-field.jpg" alt="">
            </div>
            <div class="content">
              <h3>Gampaha</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/luxury-house-real-estate-sale-property-generative-ai.jpg" alt="">
            </div>
            <div class="content">
              <h3>Kaluthara</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/luxury-pool-villa-spectacular-contemporary-design-digital-art-real-estate-home-house-property-ge.jpg" alt="">
            </div>
            <div class="content">
              <h3>Matara</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/modern-residential-district-with-green-roof-balcony-generated-by-ai.jpg" alt="">
            </div>
            <div class="content">
              <h3>Galle</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/pexels-photo-1105754.jpeg" alt="">
            </div>
            <div class="content">
              <h3>Gampaha</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/3d-render-timber-house-with-drawing-instruments_1048-5617.jpg" alt="">
            </div>
            <div class="content">
              <h3>Galle</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/road-city.jpg" alt="">
            </div>
            <div class="content">
              <h3>Kaluthara</h3>
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
              <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/beautiful-shot-big-farmhouse-clear-blue-sky_181624-15996.jpg" alt="">
            </div>
            <div class="content">
              <h3>Gampaha</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/cameron-gallery-catherine-park_1398-2848.jpg" alt="">
            </div>
            <div class="content">
              <h3>Kaluthara</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/framing-landscape-while-traveling_23-2149887691.jpg" alt="">
            </div>
            <div class="content">
              <h3>Galle</h3>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/low-angle-shot-modern-architectural-structure-with-glass-facade_181624-7458.jpg" alt="">
            </div>
            <div class="content">
              <h3>Colombo</h3>
            </div>
          </div>
          <!-- <div class="box">
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
          </div> -->
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
