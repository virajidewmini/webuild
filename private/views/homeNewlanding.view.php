<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEBUILD</title>

   <!-- fontawesome cdn link  -->


   <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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

<header class="header"  style="height:-2px;">

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

</style>

  <a href="#" class="logo" style="font-size: x-large;"> <i class="fas fa-university" style="color: #E5863D;"></i><span style="color: #000000; font-weight:600;"> WeBuild</span> </a>
 
  <nav class="navbar" style="font-size:medium; ">

    <a  href=ExistingModels style="color: #E5863D; ">Existing models </a>
    <a  href="#about" style="color: #E5863D;">About</a>
    <a  href="#services" style="color: #E5863D;">Services</a>
    <a  href=Home/completedProjects style="color: #E5863D;">Completed projects</a>
    <a  href="#pricing" style="color: #E5863D;">Pricing</a>
    <a  href="#contact" style="color: #E5863D;">Contact </a>
    
    <script>
    var links = document.querySelectorAll('a');

    links.forEach(function(link) {
        link.addEventListener('click', function() {
            this.style.color = 'black';
        });
    });
</script>

  
  </nav>
  <div class="icons">
    <a class="btn" href="<?=ROOT?>/login" style="background-color: #E5863D; padding:1rem ;font-size: 1rem; justify-content:end;border-radius:1rem;">Login</a>
    <a href="<?=ROOT?>/staff_login"><div id="login-btn" class="fas fa-user" style="font-size: x-large; color:#000000;" ></div> </a>
  </div>

  </header>

  
  
  <!-- header section ends -->

  <!-- home section starts  -->
  

  
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

  <div class="swiper home-slider">
    <div class="swiper-wrapper">
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/canva2.png) no-repeat;padding-bottom:3rem;height: 2px;">
        <div class="content">
          <h3  style="font-size: 4rem;">we provide the best service</h3>
          <p style="margin-bottom:35px; font-size: 1.2rem;text-align:justify;">Enter a realm where dreams materialize, 
          as steel meets sky and concrete pulses with vitality. Amidst the symphony of 
          construction, we forge tomorrow's groundwork. Embark on our journey, where each 
          raised beam symbolizes progress and endless potential.</p>
          
        </div>
      </section>
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/canva1.png) no-repeat;padding-bottom:3rem;height: 2px;">
        <div class="content">
          <h3  style="font-size: 4rem;">we work with friendly staff</h3>
          <p style="margin-bottom:35px;  font-size: 1.2rem; text-align:justify;">Our exceptional staff comprises talented individuals 
          dedicated to excellence. With their expertise and passion, they bring projects to life, embodying our
           commitment to quality and innovation. Join our team and experience the difference firsthan</p>
          
        </div>
      </section>
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/bathroom/miss1.jpg) no-repeat;padding-bottom:3rem;height: 2px;">
        <div class="content">
          <h3  style="font-size: 4rem;">we provide fashionated pre existing models</h3>
          <p style="margin-bottom:35px;  font-size: 1.2rem; text-align:justify;">Discover our curated selection of fashion-forward
           pre-existing models. From timeless classics to contemporary designs, our collection offers a range 
          of stylish options to suit every taste. Explore our inventory and find the perfect model to elevate your project.</p>
          
        </div>
      </section>
      
      
    </div>

    <div class="swiper-button-next" style="height: 4.5rem;width:6.7rem;"></div>
    <div class="swiper-button-prev" style="height: 4.5rem;width:6.7rem;"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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


    <!-- home section ends  -->

    <!-- about section starts -->

    <section class="about" id="about" style="margin-top: -4rem;">

    
      <h1 class="heading">About Us</h1>

      <div class="row">

        <div class="video">
          <img src="<?=ROOT?>/img/Photos/bathroom/architects-wearing-helmets-plans.jpg" alt="">
        </div>

        <div class="content">
          <h3 style="font-size: 2rem;">We will provide you the best work which you dreamt for!</h3>
          <p style="font-size: 1.2rem;text-align:justify;">Everyone aspires to own a great piece of property. We, at webuild, made it our aim to make 
            this dream a reality. Assume you wish to buy land to build a house for you and your family. webuild
             provide you with a selection of the most excellent land alternatives in the country, as well 
             as a variety of support services, such as legal and financial assistance, to help you realize your
              property dreams. In Sri Lanka's highly competitive real estate market, Prime Lands acquired over 
              300,000 customers, sufficient proof of Prime Lands' capacity and leadership in the real estate industry. </p>
          
        </div>

      </div>

      <div class="box-container" style="display: flex;justify-content:center;gap:3rem; margin-top:5rem; ">

        <div class="box" style="background-color: #F5D7B6; padding: 2rem; border-radius: 10px; text-align: center; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#CCCCCC'" onmouseout="this.style.backgroundColor='#F5D7B6'">
          <h3 style="font-size: 2rem;">3+</h3>
          <p style="font-size: 1.2rem;">years of experience</p>
        </div>

        <div class="box" style="background-color: #F5D7B6; padding: 2rem; border-radius: 10px; text-align: center; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#CCCCCC'" onmouseout="this.style.backgroundColor='#F5D7B6'">
          <h3 style="font-size: 2rem;">15+</h3>
          <p style="font-size: 1.2rem;">project completed</p>
        </div>

        <div class="box" style="background-color: #F5D7B6; padding: 2rem; border-radius: 10px; text-align: center; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#CCCCCC'" onmouseout="this.style.backgroundColor='#F5D7B6'">
          <h3 style="font-size: 2rem;">10+</h3>
          <p style="font-size: 1.2rem;">satisfied clients</p>
        </div>

        <div class="box" style="background-color: #F5D7B6; padding: 2rem; border-radius: 10px; text-align: center; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#CCCCCC'" onmouseout="this.style.backgroundColor='#F5D7B6'">
          <h3 style="font-size: 2rem;">250+</h3>
          <p style="font-size: 1.2rem;">active workers</p>
        </div>
      </div>
</section>


   
    <section class="services" id="services">
  
        <h1 class="heading">Our Services</h1>
  
        <div class="box-container" style="display:flex">
  
          <div class="box">
            <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/4174814.png" alt="" >
            <h3>building construction</h3>
            <p> Crafting dreams into concrete reality. Our expert
               team transforms blueprints into breathtaking structures,
                ensuring quality, precision, and timely delivery.Crafting dreams into concrete reality. Our expert team transforms blueprints into breathtaking structures, ensuring quality, precision, and timely delivery.</p>
          </div>
  
          <div class="box">
            <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/5874513.png"   alt="" >
            <h3>construction consultant</h3>
            <p> Navigating the complexities of construction with finesse.
               Our consultants offer invaluable insights, strategic guidance,
                and innovative solutions, ensuring your project stays on track and exceeds expectations."</p>
          </div>
  
          <div class="box">
            <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/7181699.png" alt="">
            <h3>architecture design</h3>
            <p>Where imagination meets functionality. Our architects blend
               creativity with practicality to design spaces that inspire,
                innovate, and elevate the human experience. Let's turn your vision into architectural marvels.</p>
          </div>
          <div class="box">
            <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/6613266.png" alt="">
            <h3>Existing  model </h3>
            <p>Discover unparalleled customization with our model
               modification service. We offer a curated selection of pre-existing models,
                expertly tailored to your unique needs. Harness the power of cutting-edge AI 
                while enjoying seamless integration and optimized performance. Elevate your 
                business with precision, efficiency, and unparalleled innovation.</p>
          </div>
  
        </div>
      </section>
      <!-- service section ends  -->
   
 

<!-- completed project section starts  -->

<section class="projects" id="projects"  style="background-color:#CCCCCC;">

<style>
  .projects{
  background: var(--black);
  .heading{
    color: var(--white);
  }

  .box-container{
    @include grid(30rem);

    .box{
      cursor: initial;

      /* &:hover .image img{
        transform: scale(1.1);
      } */

      .image{
        height: 40rem;
        overflow: hidden;

        img{
          height: 100%;
          width: 100%;
          object-fit: cover;
          cursor: pointer;
        }
      }
      .content{
        display: flex;
        background: var(--white);

        .info{
          padding: 1rem 2rem;

          h2{
            text-align:center;
          }
          h3{
            @include titleText(1.7rem);
            text-align:center;
            color: black;
          }

          p{
            @include graphText(1.5rem);
          }
        }

        i{
          width: 6rem;
          font-size: 3rem;
          background: var(--yellow);
          cursor: pointer;
          text-align: center;
          line-height: 7.5rem;
        }
      }
    }
  }
}
</style>
  <h1 class="heading" style="color: black;">Trending Models</h1>

  <div class="box-container" style="display: flex;gap:2rem;">
    <a href= ExistingModels/gallery1/ class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/beautiful-wooden-house-with-big-windows_23-2149343704.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h2 >Model 1</h2>
          <h3 >Cozy Haven: 1-Story, 2 Bedroom Retreat</h3>
          <!-- <p>construction ,design</p> -->
        </div>
        <!-- <i class="fas fa-plus"></i> -->
      </div>
    </a>

    <a href=ExistingModels/gallery2 class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/courtyard-monastery-park_1268-15399.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
        <h2 >Model 2</h2>
          <h3>Family Oasis: 1-Story, 3 Bedroom Haven</h3>
          <!-- <p>construction ,design</p> -->
        </div>
        <!-- <i class="fas fa-plus"></i> -->
      </div>
    </a>

    <a href=ExistingModels/gallery3 class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/houses-river-dikes-near-sleeuwijk_181624-8207.jpg" alt="">
      </div>
      
      <div class="content">
        <div class="info">
        <h2 >Model 3</h2>
          <h3>Elevated Living: 2-Story, 3 Bedroom Sanctuary</h3>
          <!-- <p>construction ,design</p> -->
        </div>
        <!-- <i class="fas fa-plus"></i> -->
      </div>
    </a>

    <!-- <a href=ExistingModels/gallery4 class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/house-isolated-field.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
        <h2 >Model 4</h2>
          <h3>Grand Estate: 2-Story, 5 Bedroom Residence</h3>
        </div>
      </div>
    </a>

    <a href=ExistingModels/gallery5 class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/old-white-house-garden_1150-12900.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
        <h2 >Model 5</h2>
          <h3>Skyline Villa: 3-Story, 6 Bedroom Penthouse</h3>
        </div>
      </div>
    </a> -->
  </div>
  <a class="btn" href=ExistingModels  style="background-color: #E5863D; margin-left:79%; justify-content:end">Models</a>
</section>

<!-- completed project section ends  -->

<!-- reviews section starts  -->

<section class="reviews"  >

  <h1 class="heading">Client Ratings</h1>

  <div class="swiper reviews-slider" style="display: flex; justify-content:center;" >
    <div class="swiper-wrapper" >
      <div class="swiper-slide slide" style="display: flex; gap:3rem;">
      <?php if(isset($rows)):?>
    <?php foreach ($rows as $row):?>
      <div class="r-new" style="display: grid;">

      
        <p>
        <?=$row->review?>
        </p>
        <div class="user">
        <!-- <img src="<?=ROOT?>/img/profile.jpg"> -->
          <div class="info">
          <strong><?=$row->firstname." ". $row->lastname?></strong>
            <span><?=$row->email?></span>
            <div class="stars">
            <?php 
            
            $filledStarColor = '#ffc107'; 
            $emptyStarColor = '#ced4da';  
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $row->number_of_stars) {
                    echo '<i class="fas fa-star" style="color: ' . $filledStarColor . '"></i>';
                } else {
                    echo '<i class="far fa-star" style="color: ' . $emptyStarColor . '"></i>';
                }
            }
          ?>
            </div>
          </div>
        </div>
        </div>
        <script>
    var swiper = new Swiper(".reviews-slider",{
  loop:true,
  grabCursor:true,
  spaceBetween:20,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
});
  </script>
        <?php endforeach;?>

<?php endif; ?> 

      </div>
    </div>
  </div>
        
  
  

</section>

<!-- reviews section ends  -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

  <h1 class="heading">Payment Packages</h1>

  <div class="box-container" style="display: flex;justify-content:center;height:45%;" >

    <div class="box" style="padding:8rem;margin-top:-1rem;">
      <i class="fas fa-home"></i>
      <h3 style="font-size: 2rem; font-weight:600;">TriEase Pay</h3>
      <!-- <div class="price"><span>Rs</span>250<span>/no</span></div> -->
      <div class="list">
        <p style="font-size: 1.2rem;">30% Initial payment</p>
        <p style="font-size: 1.2rem;">35% of 2nd Installment</p>
        <p style="font-size: 1.2rem;">35% of 3rd Installment</p>
        <p style="font-size: 1.2rem;">5% Interest</p>
      </div>
      <!-- <a href="#" class="btn">choose plan</a> -->
    </div>

    <div class="box" style="padding:8rem;margin-top:-1rem;">
      <i class="fas fa-building"></i>
      <h3 style="font-size: 2rem; font-weight:600;">DuoEase Plan</h3>
      <!-- <div class="price"><span>Rs</span>650<span>/no</span></div> -->
      <div class="list">
        <p style="font-size: 1.2rem;">40% Initial payment</p>
        <p style="font-size: 1.2rem;">60% of 2nd Installment</p>
        <p style="font-size: 1.2rem;">No Interest</p>
      </div>
      <!-- <a href="#" class="btn">choose plan</a> -->
    </div>

    <div class="box" style="padding:8rem;margin-top:-1rem;">
      <i class="fas fa-city"></i>
      <h3 style="font-size: 2rem; font-weight:600;">Ultimate Plan</h3>
      <!-- <div class="price"><span>Rs</span>1250<span>/no</span></div> -->
      <div class="list">
        <p style="font-size: 1.2rem;">20% Initial payment</p>
        <p style="font-size: 1.2rem;">20% of 2nd Installment</p>
        <p style="font-size: 1.2rem;">20% of 3rd Installment</p>
        <p style="font-size: 1.2rem;">20% of 4rd Installment</p>
        <p style="font-size: 1.2rem;">20% of 5rd Installment</p>
        <p style="font-size: 1.2rem;">10% Interest</p>
      </div>
      <!-- <a href="#" class="btn">choose plan</a> -->
    </div>

  

  </div>

</section>

<!-- pricing section ends   -->

<!-- contact section starts  -->

<section class="contact" id="contact" style="background-color:#CCCCCC; height:40%;">

<h1 class="heading" style="color: #000000;">Contact Us</h1>

<div class="row">
 
  <iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.902976812423!2d79.86115290000001!
3d6.9022055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2s
University%20of%20Colombo%20School%20of%20Computing%20(UCSC)!5e0!3m2!1sen!2slk!4v1708289637822!5m2!1sen!2slk"
  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  style="height: 25rem;"  ></iframe>

  <form action=ContactUsHome/add method="post" class="conatct-us"style="height: 25rem; background-color:#CCCCCC; margin-left:3rem;margin-top:3rem;"  >
  <h3  style="font-size:x-large;">info</h3>
      <i class="fas fa-phone" style="font-size: medium;"></i><span style="font-size: medium;"><span><span> </span>    </span>+94 112 699827 </span> <br>
      <i class="fas fa-envelope" style="font-size: medium;" ></i><span style="font-size: medium;"><span><span> </span>    </span>info@webuild.lk</span> <br>
      <i class="fas fa-map" style="font-size: medium;"></i><span style="font-size: medium;"><span><span> </span>    </span>No.7, Koswatte Road,Rajagiriya</span> 
    <!-- <input type="submit" value="send message" class="btn" style="background-color: #E5863D;"> -->
  </form>


</div>

</section>


<!-- contact section ends  -->



<!-- client logo section starts  -->

<section class="logo-container"  style="background-color:#000000;">
  <div class="swiper logo-slider" >
    <div class="swiper-wrapper">
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/lankatiles.jpg" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/images.jpg" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/melva.jpg" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/download.jpg" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/alumex.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/bricks.avif" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/forLandingPage/slon.png" alt=""></div>
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

<!-- client logo section ends  -->

<!-- footer section starts  -->

<section class="footer">

  

  <div class="credit" style="margin: -2%; font-size:medium;">credited by <span>WeBuild</span> | all rights reserved!</div>


</section>


<!-- footer section ends  -->



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script src="<?=ROOT?>/js/newhome.js"></script>
<!-- 
 <script>
  lightGallery(document.querySelector('.projects .box-container'));
 </script> -->

</body>
</html>







