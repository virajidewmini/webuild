<?php $this->view('includes/header')?>


     <!-- <?php
          //echo "<pre>";
          //print_r($rows);
     ?> -->
<style>
     main{
          display: grid;
          grid-template-columns: 1fr 1fr 1fr 1fr;
          gap: 1rem;
     }
     .box{
          display: flex;
          align-items: stretch;
          justify-content: center;
          flex-direction: column;
          border: 2px solid black;
          border-radius:5px;
     }

     .image-wrapper{
          display: flex;
          align-items: center;
          justify-content: center;
          width: 100%;
     }
     .user-overview{
          display: flex;
          align-items: flex-start;
          justify-content: flex-start;
          flex-direction: column;
          margin: 2rem;
     }

</style>
     <?php if($rows):?>
          <?php foreach ($rows as $row) :?>
               <div class="box">
               <div style="max-width: 14rem; min-width:14rem;" class="image-wrapper">

                    <img style="width:50%" src="<?PHP echo ROOT;?>/img/profile.webp" alt="nlah">
               </div>
               <div class="user-overview">
               <h5> <?=$row->firstname?> <?=$row->lastname?> </h5>
               <p><?=$row->contactnumber?></p>
               
               <a href="<?=ROOT?>/userprofile">
                    <input type="button" value="View Pofile"class="">
               </a>
               </div>
               </div>
          <?php endforeach;?>
     <?php else:?>
          <h4>No staff is found</h4>
     <div>
          <button class="add___">Add Users</button>
     </div>
<?php endif;?> 


<?php $this->view('includes/footer'); ?>

