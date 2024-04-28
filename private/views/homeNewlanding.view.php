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

<header class="header"  style="width: -2px;">

  <a href="#" class="logo" style="font-size: x-large;"> <i class="fas fa-university" style="color: #E5863D;"></i> WeBuild</span> </a>
 
  <nav class="navbar" style="font-size:medium;">

    <!-- <a  href=Home/houses>Houses</a> -->
    <a  href=ExistingModels style="color: #E5863D; ">Existing models </a>
    <a  href="#about" style="color: #E5863D;">About</a>
    <a  href="#services" style="color: #E5863D;">Services</a>
    <a  href=Home/completedProjects style="color: #E5863D;">Completed projects</a>
    <a  href="#pricing" style="color: #E5863D;">Pricing</a>
    <a  href="#contact" style="color: #E5863D;">Contact </a>
    
    <script>
    // Get all links
    var links = document.querySelectorAll('a');

    // Add click event listener to each link
    links.forEach(function(link) {
        link.addEventListener('click', function() {
            // Change color to black
            this.style.color = 'black';
        });
    });
</script>

  
  </nav>
  <div class="icons">
    <a class="btn" href="<?=ROOT?>/login"  style="background-color: #E5863D; padding:1rem ;font-size: 1rem; justify-content:end;border-radius:1rem;">Login</a>
    <a href="<?=ROOT?>/staff_login"><div id="login-btn" class="fas fa-user" style="font-size: x-large;" ></div> </a>
  </div>
  
<!-- <form action="" class="search-form">
  <input type="search" name="" placeholder="search here..." id="search-box">
  <label for="search-box" class="fas fa-search"></label>
</form> -->

<!-- <form action="" class="login-form">
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
   -->
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
          <h3  style="font-size: 4rem;">we provide best service</h3>
          <p style="margin-bottom:35px; font-size: 1.2rem;">Step onto the grounds where dreams take shape, as steel meets sky and concrete breathes life. Here, amidst the rhythmic symphony of hammers and drills, we craft the foundations of tomorrow. Join us on this journey of creation, where every beam raised is a testament to progress and possibilit</p>
          
        </div>
      </section>
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/canva1.png) no-repeat;padding-bottom:3rem;height: 2px;">
        <div class="content">
          <h3  style="font-size: 4rem;">we provide best service</h3>
          <p style="margin-bottom:35px;  font-size: 1.2rem;">Step onto the grounds where dreams take shape, as steel meets sky and concrete breathes life. Here, amidst the rhythmic symphony of hammers and drills, we craft the foundations of tomorrow. Join us on this journey of creation, where every beam raised is a testament to progress and possibilit</p>
          
        </div>
      </section>
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/canva3.png) no-repeat;padding-bottom:3rem;height: 2px;">
        <div class="content">
          <h3  style="font-size: 4rem;">we provide best service</h3>
          <p style="margin-bottom:35px;  font-size: 1.2rem;">Step onto the grounds where dreams take shape, as steel meets sky and concrete breathes life. Here, amidst the rhythmic symphony of hammers and drills, we craft the foundations of tomorrow. Join us on this journey of creation, where every beam raised is a testament to progress and possibilit</p>
          
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

    <section class="about" id="about"  style="margin-top: -4rem;">

      <h1 class="heading">About Us</h1>

      <div class="row">

        <div class="video">
          <img src="<?=ROOT?>/img/Photos/forLandingPage/istockphoto-538575738-612x612.jpg" alt="">
        </div>

        <div class="content">
          <h3>We will provide you the best work which you dreamt for!</h3>
          <p>Everyone aspires to own a great piece of property. We, at Prime Lands, made it our aim to make 
            this dream a reality. Assume you wish to buy land to build a house for you and your family. Prime
             Lands provide you with a selection of the most excellent land alternatives in the country, as well 
             as a variety of support services, such as legal and financial assistance, to help you realize your
              property dreams. In Sri Lanka's highly competitive real estate market, Prime Lands acquired over 
              300,000 customers, sufficient proof of Prime Lands' capacity and leadership in the real estate industry. </p>
          
        </div>

      </div>

      <div class="box-container" style="display: flex;justify-content:center;gap:3rem;">

        <div class="box">
          <h3>10+</h3>
          <p>years of experience</p>
        </div>

        <div class="box">
          <h3>150+</h3>
          <p>project completed</p>
        </div>

        <div class="box">
          <h3>300+</h3>
          <p>satiesfied clients</p>
        </div>

        <div class="box">
          <h3>200+</h3>
          <p>active workers</p>
        </div>
      </div>
    </section>

   
    <section class="services" id="services">
  
        <h1 class="heading">our services</h1>
  
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

<section class="projects" id="projects">

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
  <h1 class="heading">Trending Models</h1>

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

    <a href=ExistingModels/gallery4 class="box">
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
    </a>
  </div>
  <a class="btn" href=ExistingModels  style="background-color: #E5863D; margin-left:85rem; justify-content:end">Models</a>
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

  <h1 class="heading"> Our Pricing</h1>

  <div class="box-container" style="display: flex;justify-content:center;" >

    <div class="box" style="padding:8rem;">
      <i class="fas fa-home"></i>
      <h3>TriEase Pay</h3>
      <!-- <div class="price"><span>Rs</span>250<span>/no</span></div> -->
      <div class="list">
        <p>30% Initial payment</p>
        <p>35% of 2nd Installment</p>
        <p>35% of 3rd Installment</p>
        <p>5% Interest</p>
      </div>
      <!-- <a href="#" class="btn">choose plan</a> -->
    </div>

    <div class="box" style="padding:8rem;">
      <i class="fas fa-building"></i>
      <h3>DuoEase Plan</h3>
      <!-- <div class="price"><span>Rs</span>650<span>/no</span></div> -->
      <div class="list">
        <p>40% Initial payment</p>
        <p>60% of 2nd Installment</p>
        <p>No Interest</p>
      </div>
      <!-- <a href="#" class="btn">choose plan</a> -->
    </div>

    <div class="box" style="padding:8rem;">
      <i class="fas fa-city"></i>
      <h3>ultimate plan</h3>
      <!-- <div class="price"><span>Rs</span>1250<span>/no</span></div> -->
      <div class="list">
        <p>20% Initial payment</p>
        <p>20% of 2nd Installment</p>
        <p>20% of 3rd Installment</p>
        <p>20% of 4rd Installment</p>
        <p>20% of 5rd Installment</p>
        <p>10% Interest</p>
      </div>
      <!-- <a href="#" class="btn">choose plan</a> -->
    </div>

  

  </div>

</section>

<!-- pricing section ends   -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">Contact Us</h1>

<div class="row">
 
  <iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.902976812423!2d79.86115290000001!
3d6.9022055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2s
University%20of%20Colombo%20School%20of%20Computing%20(UCSC)!5e0!3m2!1sen!2slk!4v1708289637822!5m2!1sen!2slk"
  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <form action=ContactUsHome/add method="post" class="conatct-us">
    <h3>get in touch</h3>
    <input type="text" placeholder="name" class="box" style="color: black; padding-left:2rem;" >
    <input type="email" placeholder="email" class="box"style="color: black;  padding-left:2rem;">
    <input type="number" placeholder="phone" class="box" style="color: black;  padding-left:2rem;">
    <textarea name="message" placeholder="message"  class="box"  id="" cols="30" rows="10" style="color: black; padding-left:2rem;"></textarea>
    <input type="submit" value="send message" class="btn" style="background-color: #E5863D;">
  </form>


</div>

</section>


<!-- contact section ends  -->

<!-- blogs section starts  -->

<!-- <section class="blogs" id="blogs">

  <h1 class="heading"> our blogs </h1>

  <div class=" swiper blog-slider">

    <div class="swiper-wrapper">

      <div class="swiper-slide slide">
        <div class="image">
          <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/download (1).jpg" alt="">
        </div>
        <div class="content">
          <h3>blog title goes here</h3>
          <p>uhiu ojojo oij ooij ijijwihqduwiudiqwhdihqqqqqqqqqqqqqqqqqqooooooooooobaslaaaaaaaaajqqqqqqq</p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="<?=ROOT?>/img/Photos/blogs/1535965.png" alt="">
        </div>
        <div class="content">
          <h3>blog title goes here</h3>
          <p>uhiu ojojo oij ooij ijijwihqduwiudiqwhdihqqqqqqqqqqqqqqqqqqooooooooooobaslaaaaaaaaajqqqqqqq</p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="<?=ROOT?>/img/Photos/blogs/269947.png" alt="">
        </div>
        <div class="content">
          <h3>blog title goes here</h3>
          <p>uhiu ojojo oij ooij ijijwihqduwiudiqwhdihqqqqqqqqqqqqqqqqqqooooooooooobaslaaaaaaaaajqqqqqqq</p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="<?=ROOT?>/img/Photos/blogs/270072.png" alt="">
        </div>
        <div class="content">
          <h3>blog title goes here</h3>
          <p>uhiu ojojo oij ooij ijijwihqduwiudiqwhdihqqqqqqqqqqqqqqqqqqooooooooooobaslaaaaaaaaajqqqqqqq</p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="<?=ROOT?>/img/Photos/blogs/buildings_24914.png" alt="">
        </div>
        <div class="content">
          <h3>blog title goes here</h3>
          <p>uhiu ojojo oij ooij ijijwihqduwiudiqwhdihqqqqqqqqqqqqqqqqqqooooooooooobaslaaaaaaaaajqqqqqqq</p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- blogs section ends  -->


<!-- client logo section starts  -->

<section class="logo-container">
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

  <div class="links">
    <!-- <a class="btn" href="#home.php">Lands</a> -->
    <a class="btn" href=ExistingModels>Existing Models</a>
    <a class="btn" href="#about">About</a>
    <a class="btn" href="#services">Services</a>
    <a class="btn" href=Home/completedProjects>Completed Projects</a>
    <a class="btn" href="#pricing">Pricing</a>
    <a class="btn" href="#contact">Contact Us</a>

  </div>

  <div class="credit">credited by <span>webuild construction</span> | all rights reserved!</div>


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







