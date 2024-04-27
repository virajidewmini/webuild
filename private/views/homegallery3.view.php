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
 
 

  <!-- home section starts  -->
  

  <section class="home" id="home">

  
    <div class="swiper home-slider">
      

      <div class="swiper-wrapper">
        
        <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/pexels-maria-orlova-4916281.jpg)no-repeat; width:100%; height:100%;">
        <!-- <a href=home  class="btn"   style="margin-top: -30rem; margin-left:-10rem; font-size:small;">HOME</a> -->
        <a class="btn" href=home style="margin-top: -30rem; margin-left:-10rem; font-size:small;">About Us</a>
          <div class="content">
            <h3>Serene Retreat Cottages</h3>
            <p>Escape to Serene Retreat Cottages, where modern comfort meets natural beauty. Discover cozy 2-bedroom homes nestled amidst lush surroundings, offering peaceful sanctuaries for rest and relaxation.</p>
           
          </div>
        </section>

          
      </div>

      
      
    </div>
  </section>

    <!-- home section ends  -->

  <!-- header section starts -->

<header class="header">
  <div class="existing1">
       <nav class="navbar">   
           <a  href="#Gallery">Gallery</a>
           <a  href=#floorplan>Floor Plans </a>
           <a  href="#blockplan">Block Plan</a>
      </nav>
   </div>
</header>



<!-- header section ends -->

<!-- <section class="blogs" id="blogs">

  <h1 class="heading">Gallery</h1>

  
  <div class="-wrapper">

    <div class="slide">
      <div class="image">
      
     <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/download (1).jpg" alt="">
     
      </div>
      <div class="content">
        <h3>10% reservation, then 1% in 40 equal installments, and the remaining 50% at handover.<br>Enjoy this Special Payment Plan that designed just for you!</h3>
        <p style="text-align: center;"><i class="fa-solid fa-square">   2 Bed Room</i><br>
          <i class="fa-solid fa-square">   1 Bath Room & 1 Kitchen</i><br>
          <i class="fa-solid fa-square">   Living Room &Dining Area</i></p>
        
      </div>
    </div>

    

  </div>
  
</section> -->
<section class="blogs" id="blogs" style="margin-top: 2rem;">
  <style>
    .home{
      padding: 0;

      .slide{
        min-height:  38rem;
        display: flex;
        align-items: center;
        position: relative;
        background-size: cover ;
        background-position: center ;

        &::before{
          content: '';
          position: absolute;
          top: 0; left: 0;
          height: 100%;
          width: 100%;
          background: linear-gradient(90deg, var(--white),transparent);
        }
        .content{
          width: 50rem;
          position: relative;

          h3{
            @include font-size: (6rem);
            text-transform: uppercase;
          }
          p{
            @include graphText(1.4rem);
            line-height: 1.5rem;
            padding: 1rem 0;
          }
        }
      }
    }
  </style>

  <h1 class="heading">Gallery</h1>

  <div class="gallery1">

    <div class="slide">
      <div class="image">
      <section class="home" id="home" style="padding-bottom:4.8rem;">
  <style>
    .home{
      padding: 0;

      .slide{
        min-height: 38rem;
        display: flex;
        align-items: center;
        position: relative;
        background-size: cover !important;
        background-position: center !important;

        &::before{
          content: '';
          position: absolute;
          top: 0; left: 0;
          height: 100%;
          width: 100%;
          background: linear-gradient(90deg, var(--white));
        }
        
      }
    }
  </style>

  <div class="swiper home-slider">
    <div class="swiper-wrapper">
    <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/bedrooms/br5.jpg) 2px;">
        
      </section>
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/kitchen/k1jpg.jpg) no-repeat;padding-bottom:3rem;height: 2px;">
        
      </section>
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/bathroom/small-bathroom-with-modern-style-ai-generated_23-2150694918.jpg) no-repeat;padding-bottom:3rem;height: 2px;  object-fit:cover;">
       
      </section>
      
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".blogs.home-slider", {
      loop:true,
      grabCursor:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</section>
      </div>
      <div class="content">
        <h3>10% reservation, then 1% in 40 equal installments, and the remaining 50% at handover.<br>Enjoy this Special Payment Plan that designed just for you!</h3>
        <p style="text-align: center;"><i class="fa-solid fa-square">   2 Bed Room</i><br>
          <i class="fa-solid fa-square">   1 Bath Room & 1 Kitchen</i><br>
          <i class="fa-solid fa-square">   Living Room & Dining Area</i></p>
      </div>
    </div>

  </div>
  <script>
    var swiper = new Swiper(".home-slider", {
      loop:true,
      grabCursor:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</section>





<section class="floorplan" id="floorplan" style="background-color: azure;">

  <h1 class="heading">Floor Plan</h1>

  <div class="floorimg"  style="justify-content: center;">
    <img src="<?=ROOT?>/img/Photos/Floorpaln/1689348704Type_A.jpg" alt=""  style="justify-content: center;">
  </div>
  
</section>





<section class="blockplan" id="blockplan">

  <h1 class="heading">Block Plan</h1>

  <div class="floorimg">
    <img src="<?=ROOT?>/img/Photos/blockPlan/230714200742web-4.jpg " alt="">
  </div>
  
</section>

<a class="btn" href=#  style="background-color: #E5863D; padding:1rem ;font-size: 1rem; ;margin-left:100rem; margin-bottom:2rem;">Move to Model</a>

<section class="logo-container" style="background-color: black;">
  <div class="swiper logo-slider" >
    <div class="swiper-wrapper">
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/lankatiles.jpg" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/images.jpg" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/melva.jpg" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/download.jpg" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/alumex.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/bricks.avif" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/bank_8690572.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/buildings_24914.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/bank_8690572.png" alt=""></div>
    </div>
  </div>
  <style>
    .logo-container{
  text-align: center;

  img{
    height: 10rem;
    pointer-events: none;
    user-select: none;
  }
}

.footer{
  text-align: center;

  .links .btn{
    margin: .5rem;
  }

  .credit{
    @include titleText(2rem);
    margin-top: 2rem;
    padding-top: 1rem;

    span{
      color: var(--yellow);
    }
  }
}

  </style>
  <script>
    var swiper =new Swiper(".logo-slider",{
  grabCursor:true,
  spaceBetween:20,
  breakpoints: {
    450: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    1000: {
      slidesPerView: 5,
    },
  },
});
  </script>
</section>







<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script src="<?=ROOT?>/js/newhome.js"></script>

 <script>
  lightGallery(document.querySelector('.projects .box-container'));
 </script>

</body>
</html>
