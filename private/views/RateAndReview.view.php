<?php if ($_SESSION['role'] == 'Client') : ?>
<?php $this->view('includes/header')?>

<style>
  .reviews {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 547px;
  width: 100%;
  border-radius: 10px;
  background-color: white;
  padding: 25px 0 69px 0;
  margin: 0 auto;
}
.reviews1{
  flex-direction: column;
  align-items: center;
  max-width: 547px;
  width: 100%;
  border-radius: 10px;
  background-color: white;
  padding: 25px 0 69px 0;
  margin: 0 auto;
  color: #f9d71c;
}

.reviews__heading {
  font-size: 32px;
  color: #323357;
  font-family: "Muli";
  font-weight: 700;
  text-align: center;
  margin: 28px 0;
}

.reviews__average-ratings {
  margin-bottom: 63px;
}

.average-ratings__stars {
  display: flex;
  align-items: center;
  padding: 0 25px;
  width: 347px;
  height: 63px;
  border-radius: 32px;
  background-color: #f5f8ff;
  margin-bottom: 8px;
}

.stars__average-rating-score {
  font-size: 16px;
  color: #323357;
  font-family: "Muli";
  font-weight: 400;
  margin-left: auto;
}

.average-ratings__total-customers {
  font-size: 16px;
  color: #595b71;
  font-family: "Muli";
  font-weight: 400;
  text-align: center;
}

.reviews__breakdown {
  display: flex;
  
}

.reviews-breakdown__wrapper {
  margin: 0 auto;
}

.reviews__single-star-average {
  display: flex;
  margin: 22px 0;
}

.reviews__single-star-average:first-child {
  margin-top: 0;
}

.single-star-average__amount {
  font-size: 18px;
  color: #151cd1;
  font-family: "Muli";
  font-weight: 400;
}

.single-star-average__progress-bar {
  max-width: 280px;
  width: 280px;
  border-radius: 10px;
  background-color: #f5f8ff;
  padding: 1px;
  margin: 0 10px;
}

.progress-bar__data {
  width: 100%;
  height: 100%;
  padding: 2px;
  appearance: none;
  border: none;
  background-color: whiteSmoke;
  border-radius: 10px;
  color: bisque;
}



.progress-bar__data[value] {
  border-radius: 8px;
  color: aquamarine;
  
}

.single-star-average__percentage {
  font-size: 18px;
  color: #151cd1;
  font-family: "Muli";
  font-weight: 400;
}


progress::-webkit-progress-value {
  background-color: #ffcc48; 
}


progress::-moz-progress-bar {
  background-color:  #ffcc48; 
}


progress { 
  background-color:#ffcc48; 
}
</style>


<div class="rate-heading">
    <span>Comments</span>
    <h1>Clients Says</h1>
  </div>


  <div class="reviews">
      <h4 class="reviews__heading">Customer reviews</h4>

      <div class="reviews__average-ratings">
        <div class="average-ratings__stars">
    <?php
     
      $overallRating = $averageRate[0]->overall_rating ;

      
      for ($i = 1; $i <= 5; $i++) {
          
          if ($i <= $overallRating) {
           echo ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 2l2.356 7.236H21l-6.046 4.392 2.355 7.239L12 17.47l-6.308 4.397 2.355-7.239L3 9.236h6.644z" fill="#f1b41b"/>
            </svg>';
          } else {
              echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12 2l2.356 7.236H21l-6.046 4.392 2.355 7.239L12 17.47l-6.308 4.397 2.355-7.239L3 9.236h6.644z" fill="#BDBDBD"/>
          </svg>';
          }

          
      }
    ?>
  
         
        </div>
        <div class="average-ratings__total-customers">
          <?=$count[0]->count." Customer Ratings "?> 
        </div>
      </div>

      


          <?php if(isset($rate)): ?>
            <?php for ($i = 5; $i >= 1; $i--): ?>
              <?php $found = false; ?>
              <?php foreach ($rate as $row): ?>
                <?php if ($row->number_of_stars == $i): ?>
                  <div class="reviews__breakdown">
                    <div class="reviews-breakdown__wrapper">
                      <div class="reviews__single-star-average">
                        <div class="single-star-average__amount"><?= $row->number_of_stars ?> star</div>
                        <div class="single-star-average__progress-bar">
                          <progress class="progress-bar__data" max="100" value="<?= $row->percentage_count ?>"></progress>
                        </div>
                        <div class="single-star-average__percentage"><?= $row->percentage_count ?>%</div>
                      </div>
                    </div>
                  </div>
                  <?php $found = true; ?>
                <?php endif; ?>
              <?php endforeach; ?>
              <?php if (!$found): ?>
                <div class="reviews__breakdown">
                  <div class="reviews-breakdown__wrapper">
                    <div class="reviews__single-star-average">
                      <div class="single-star-average__amount"><?= $i ?> star</div>
                      <div class="single-star-average__progress-bar">
                        <progress class="progress-bar__data" max="100" value="0"></progress>
                      </div>
                      <div class="single-star-average__percentage">0%</div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endfor; ?>
          <?php endif; ?>



</div>

      </div>
    </div>

  
 
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
            <strong><?=$row->firstname." ". $row->lastname?></strong>
            <span><?=$row->email?></span>
          </div>
        </div>
        <div class="reviews1">
         
          
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

  <?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>