<?php $this->view('includes/header')?>


     <!-- <?php
          //echo "<pre>";
          //print_r($rows);
     ?> -->

     <?php if($rows):?>
          <?php foreach ($rows as $row) :?>
               <h5> <?=$row->firstname?> <?=$row->lastname?> </h5>
               <p><?=$row->contactnumber?></p>
               <a href="">Profile</a>
               <br>
               <br>
          <?php endforeach;?>
     <?php else:?>
          <h4>No staff is found</h4>
     <div>
          <button class="add___">Add Users</button>
     </div>
<?php endif;?> 


<?php $this->view('includes/footer'); ?>

