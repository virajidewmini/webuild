<?php $this->view('includes/header')?>


<div class="rate-heading">
    <span>Comments</span>
    <h1>Clients Says</h1>
  </div>


  <!-------------->

  
  
  

  <!-------------->

  
 
  <div class="rate-container">

  <?php if(isset($rows)):?>
    <?php foreach ($rows as $row):?>
    <div class="rate-box">
      <div class="rate-top">
        <div class="rate-profile">
          <div class="rate-profile-img">
            <img src="<?=ROOT?>/img/profile.jpg">
          </div>
          <div class="name-user">
            <strong>Viraji Dewmini</strong>
            <span>virajidewmini@gmail.Com</span>
          </div>
        </div>
        <div class="reviews">
         <?php
//         $rating = 3;
        
// for ($i = 1; $i <= 5; $i++) {
//     if ($i <= $rating) {
//         echo '<i class="fas fa-star" style="color: gold;"></i>';
//     } else {
//         echo '<i class="far fa-star"></i>';
// }
 ?> 
          <!-- <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i> -->
        </div>
      </div>

      <div class="rate-comment">
        <p><?=$row->review?></p>
      </div>
    </div>
    <?php endforeach;?>

    <?php endif; ?> 
    </div>
  </div>


  <!-- here is star rating -->

  <div class="main-container">
    <div class="star-container">
     <h1>Put Your Reviews & Ratings</h1>
     <form method="post">
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5" style="display:none;" class="star-input" value="5">
        <label for="rate-5" class="star-label fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4" style="display:none;" class="star-input" value="4">
        <label for="rate-4" class="star-label fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3" style="display:none;" class="star-input" value="3">
        <label for="rate-3" class="star-label fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2" style="display:none;" class="star-input" value="2">
        <label for="rate-2" class="star-label fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1" style="display:none;" class="star-input" value="1">
        <label for="rate-1" class="star-label fas fa-star"></label>
        
        
          <div>
            <input type="text" class="v_form-control" name= "review" placeholder="Describe your experience.."></input>
          </div>
          <div>
            <button class="v_submit_button" style="width:325px" type="submit">Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>

 