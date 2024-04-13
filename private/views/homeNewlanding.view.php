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

    <a  href=Home/houses>Houses</a>
    <a  href=ExistingModels>existing models </a>
    <a  href="#about">about</a>
    <a  href="#services">services</a>
    <a  href=Home/completedProjects>completed projects</a>
    <a  href="#pricing">pricing</a>
    <a  href="#contact">contact </a>
    <a  href=Home/staff>Staff</a>
  
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

 

  
  <section class="home" id="home">
  <div class="swiper home-slider">
    <div class="swiper-wrapper">
      <section class="swiper-slide slide" style="background: url(<?=ROOT?>/img/Photos/forLandingPage/istockphoto-1457606026-612x612.jpg) no-repeat;">
        <div class="content">
          <h3>we provide best service</h3>
          <p style="margin-bottom:35px;">Step onto the grounds where dreams take shape, as steel meets sky and concrete breathes life. Here, amidst the rhythmic symphony of hammers and drills, we craft the foundations of tomorrow. Join us on this journey of creation, where every beam raised is a testament to progress and possibilit</p>
          
        </div>
      </section>
      
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>


    <!-- home section ends  -->

    <!-- about section starts -->

    <section class="about" id="about">

      <h1 class="heading">about us</h1>

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
            <img src="<?=ROOT?>/img/Photos/forLandingPage/construction.jpg" alt="">
            <h3>building construction</h3>
            <p> Crafting dreams into concrete reality. Our expert
               team transforms blueprints into breathtaking structures,
                ensuring quality, precision, and timely delivery.Crafting dreams into concrete reality. Our expert team transforms blueprints into breathtaking structures, ensuring quality, precision, and timely delivery.</p>
          </div>
  
          <div class="box">
            <img src="<?=ROOT?>/img/Photos/forLandingPage/02d4c179-b590-4bd4-b18d-9882b95b8d46.jpg" alt="">
            <h3>construction consultant</h3>
            <p> Navigating the complexities of construction with finesse.
               Our consultants offer invaluable insights, strategic guidance,
                and innovative solutions, ensuring your project stays on track and exceeds expectations."</p>
          </div>
  
          <div class="box">
            <img src="<?=ROOT?>/img/Photos/bedrooms/br7.jpg" alt="">
            <h3>architecture design</h3>
            <p>Where imagination meets functionality. Our architects blend
               creativity with practicality to design spaces that inspire,
                innovate, and elevate the human experience. Let's turn your vision into architectural marvels.</p>
          </div>
  
        </div>
      </section>
      <!-- service section ends  -->
   
 

<!-- completed project section starts  -->

<section class="projects" id="projects">

  <h1 class="heading">our completed projects</h1>

  <div class="box-container" style="display: flex;gap:2rem;">
    <a href="" class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/21080514083801.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>dream house</h3>
          <p>construction ,design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="" class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/00.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>dream house</h3>
          <p>construction ,design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="" class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/3 Floor/hq720.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>dream house</h3>
          <p>construction ,design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="" class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/1 Floor/pexels-photo-6782429.webp" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>dream house</h3>
          <p>construction ,design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="" class="box">
      <div class="image">
        <img src="<?=ROOT?>/img/Photos/Houses/2 Floor/images4.jpeg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>dream house</h3>
          <p>construction ,design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>
  </div>
</section>

<!-- completed project section ends  -->

<!-- reviews section starts  -->

<section class="reviews">

  <h1 class="heading">client reviews</h1>

  <div class="swiper reviews-slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide slide">
        <p>nijijnn nnc ijij ijij jijj ijjijijqowiuq qpspqokq okkkwoiq ojojijoi oij jiui biu bnc</p>

        <div class="user">
          <img src="<?=ROOT?>/img/Photos/Reviews/RE1.jpg" alt="">
          <div class="info">
            <h3>john deo</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i> 
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>nijijnn nnc ijij ijij jijj ijjijijqowiuq qpspqokq okkkwoiq ojojijoi oij jiui biu bnc</p>

        <div class="user">
          <img src="<?=ROOT?>/img/Photos/Reviews/RE3.jpg" alt="">
          <div class="info">
            <h3>john deo</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i> 
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>nijijnn nnc ijij ijij jijj ijjijijqowiuq qpspqokq okkkwoiq ojojijoi oij jiui biu bnc</p>

        <div class="user">
          <img src="<?=ROOT?>/img/Photos/Reviews/RE3.jpg" alt="">
          <div class="info">
            <h3>john deo</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i> 
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>nijijnn nnc ijij ijij jijj ijjijijqowiuq qpspqokq okkkwoiq ojojijoi oij jiui biu bnc</p>

        <div class="user">
          <img src="<?=ROOT?>/img/Photos/Reviews/RE4.jpg" alt="">
          <div class="info">
            <h3>john deo</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i> 
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>nijijnn nnc ijij ijij jijj ijjijijqowiuq qpspqokq okkkwoiq ojojijoi oij jiui biu bnc</p>

        <div class="user">
          <img src="<?=ROOT?>/img/Photos/Reviews/RE5.jpg" alt="">
          <div class="info">
            <h3>john deo</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- reviews section ends  -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

  <h1 class="heading"> our pricing</h1>

  <div class="box-container" style="display: flex;justify-content:center">

    <div class="box">
      <i class="fas fa-home"></i>
      <h3>basic plan</h3>
      <div class="price"><span>Rs</span>250<span>/no</span></div>
      <div class="list">
        <p>interior design</p>
        <p>refurbishment</p>
        <p>material supply</p>
        <p>24/7 support</p>
      </div>
      <a href="#" class="btn">choose plan</a>
    </div>

    <div class="box">
      <i class="fas fa-building"></i>
      <h3>premium plan</h3>
      <div class="price"><span>Rs</span>650<span>/no</span></div>
      <div class="list">
        <p>interior design</p>
        <p>refurbishment</p>
        <p>material supply</p>
        <p>24/7 support</p>
      </div>
      <a href="#" class="btn">choose plan</a>
    </div>

    <div class="box">
      <i class="fas fa-city"></i>
      <h3>ultimate plan</h3>
      <div class="price"><span>Rs</span>1250<span>/no</span></div>
      <div class="list">
        <p>interior design</p>
        <p>refurbishment</p>
        <p>material supply</p>
        <p>24/7 support</p>
      </div>
      <a href="#" class="btn">choose plan</a>
    </div>

  

  </div>

</section>

<!-- pricing section ends   -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">contact us</h1>

<div class="row">
 
  <iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.902976812423!2d79.86115290000001!
3d6.9022055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2s
University%20of%20Colombo%20School%20of%20Computing%20(UCSC)!5e0!3m2!1sen!2slk!4v1708289637822!5m2!1sen!2slk"
  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <form action="">
    <h3>get in touch</h3>
    <input type="text" placeholder="name" class="box">
    <input type="email" placeholder="email" class="box">
    <input type="number" placeholder="phone" class="box">
    <textarea name="" placeholder="message"  class="box"  id="" cols="30" rows="10"></textarea>
    <input type="submit" value="send message" class="btn">
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
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/1535965.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/11990055.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/269947.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/270072.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/bank_8690572.png" alt=""></div>
      <div class="swiper-slide slide"><img src="<?=ROOT?>/img/Photos/blogs/buildings_24914.png" alt=""></div>
    </div>
  </div>
</section>

<!-- client logo section ends  -->

<!-- footer section starts  -->

<section class="footer">

  <div class="links">
    <!-- <a class="btn" href="#home.php">Lands</a> -->
    <a class="btn" href="#houses.php">About Us</a>
    <a class="btn" href="#about.php">House</a>
    <a class="btn" href="#services.php">Completed Projects</a>
    <a class="btn" href="#completed projects.php">About Us</a>
    <a class="btn" href="#pricing">Pricing</a>
    <a class="btn" href="#contact">Contact Us</a>
    <!-- <a class="btn" href="#blogs">Blogs</a> -->

  </div>

  <div class="credit">credited by <span>webuild construction</span> | all rights reserved!</div>


</section>


<!-- footer section ends  -->







<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <script src="<?=ROOT?>/js/newhome.js"></script>

 <script>
  lightGallery(document.querySelector('.projects .box-container'));
 </script>

</body>
</html>







