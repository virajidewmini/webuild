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

  
  
  <nav class="navbar">
  


    <a  href=Home>home</a>
   
  
  </nav>
 
  
  </header>




  
  <!-- header section ends -->

 <div>
  <section class="home" id="home" style="background-color: #f2f2f2; padding: 20px; ">
  <div class="swiper home-slider" >
    <div class="swiper-wrapper">
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/pexels-pixasquare-com-1115804.jpg) no-repeat; width:100%; height:100%;">
        <div class="content" style="font-size: medium;">
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
      


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script src="<?=ROOT?>/js/newhome.js"></script>

 <script>
  lightGallery(document.querySelector('.projects .box-container'));
 </script>

</body>
</html>
