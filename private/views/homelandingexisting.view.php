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


  
  <style>
     .header .navbar a {
    color: #E5863D; /* Set default color */
    font-size: 1.2rem;
    text-decoration: none; /* Remove default underline */
    transition: color 0.3s; /* Smooth transition for color change */
}

.header .navbar a:hover {
    color: black; /* Change color on hover */
}

.header .navbar a:active {
    color: black; /* Change color on click */
}
  </style>
  <nav class="navbar" style="margin-left:35rem;">
  
    <a  href=Home style="color: #E5863D;">home</a>
    <!-- <a  href="#lands">Lands</a>
    <a  href="#houses">houses</a> -->
    <a  href=home/completedProjects  style="color: #E5863D;">completed projects</a>
   
  
  </nav>
 

  </header>


  
  <!-- header section ends -->

 
  <section class="home" id="home" style="background-color: #f2f2f2; padding: 20px; margin:3rem;">
  <div class="swiper home-slider" >
    <div class="swiper-wrapper">
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/pexels-pixasquare-com-1115804.jpg) no-repeat; width:100%; height:100%;">
        <div class="content" style="font-size: medium;">
          <h3>Existing Models</h3>
          <p>Welcome to our diverse range of homes, each meticulously designed to suit every lifestyle. From the intimate charm of our 2-bedroom model to the grandeur of our 6-bedroom masterpiece, experience unparalleled comfort, style, and functionality tailored to your needs. Step into luxury, step into your dream home.</p>
          <!-- Form for filtering -->
          <div class="filtermodel" style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <form id="filterForm" style="display: flex; align-items: center; justify-content: center;" action="<?=ROOT?>/ExistingModels" method="POST">
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
    <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/old-white-house-garden_1150-12900.jpg" alt="">
      </a>
      </div>
      <div class="content" style="margin-bottom: 5rem;">
        <h3>"Cozy Haven: 1-Story, 2 Bedroom Retreat</h3>
        
        
    </div>
   

    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery2">
        <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/long-shot-woman-field_23-2149535199.jpg" alt="">
    </a>
</div>
      <div class="content"style="margin-bottom: 5rem;">
        <h3>Family Oasis: 1-Story, 3 Bedroom Haven</h3>
      </div>
    </div>

    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery3">
        <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/luxury-pool-villa-spectacular-contemporary-design-digital-art-real-estate-home-house-property-ge.jpg" alt="">
    </a>
</div>
      <div class="content" style="margin-bottom: 5rem;">
        <h3>Elevated Living: 2-Story, 3 Bedroom Sanctuary</h3>
      </div>
    </div>
    

    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery4">
        <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/house-isolated-field.jpg" alt="">
    </a>
</div>

      <div class="content"style="margin-bottom: 5rem;">
        <h3>Grand Estate: 2-Story, 5 Bedroom Residence</h3>
      </div>
    </div>

    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery5">
        <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/cameron-gallery-catherine-park_1398-2848.jpg" alt="">
    </a>
</div>

      <div class="content"style="margin-bottom: 5rem;">
        <h3>Skyline Villa: 2-Story, 6 Bedroom Haven</h3>
      </div>
    </div>
    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery6">
        <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/courtyard-monastery-park_1268-15399.jpg" alt="">
    </a>
</div>

      <div class="content"style="margin-bottom: 5rem;">
        <h3>Skyline Villa: 3-Story, 4 Bedroom Residence</h3>
      </div>
    </div>
    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery7">
        <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/house-isolated-field.jpg" alt="">
    </a>
</div>

      <div class="content"style="margin-bottom: 5rem;">
        <h3>Skyline Villa: 3-Story, 5 Bedroom Haven</h3>
      </div>
    </div>
    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery8">
        <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/beautiful-wooden-house-with-big-windows_23-2149343704.jpg" alt="">
    </a>
</div>

      <div class="content"style="margin-bottom: 5rem;">
        <h3>Skyline Villa: 3-Story, 7 Bedroom Penthouse</h3>
      </div>
    </div>
    <div class=" slide">
    <div class="image">
    <a href="ExistingModels/gallery9">
        <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/beautiful-shot-big-farmhouse-clear-blue-sky_181624-15996.jpg" alt="">
    </a>
</div>

      <div class="content"style="margin-bottom: 5rem;">
        <h3>Skyline Villa: 3-Story, 8 Bedroom Residence</h3>
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
