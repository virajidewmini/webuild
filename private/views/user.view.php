<?php $this->view('includes/header')?>


     <!-- <?php
          //echo "<pre>";
          //print_r($rows);
     ?> -->


     <?php foreach ($rows as $row) :?>
          <h5> <?=$row->firstname?> <?=$row->lastname?> </h5>
          <p><?=$row->contactnumber?></p>
          <a href="">Profile</a>
          <br>
          <br>
     <?php endforeach;?>
     


<?php $this->view('includes/footer'); ?>

