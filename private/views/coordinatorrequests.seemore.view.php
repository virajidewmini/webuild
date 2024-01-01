<?php $this->view('includes/header')?>

     <style>
          .pro-id{
               background-color: white;
               display: flex;
               padding: 0 0 20px 0;
               border-radius: 20px;
          }

          .pro-id-details{
               width: 70%;
          }

          .title-id{
               display: flex;
               align-items: center;
          }

          .p-title{
               min-width: 120px;
               width: 20%;
               margin: 5% 0 0 5%;
          }

          .p-title-detail{
               margin-top: 5%;
          }

          .unit-d{
     
               display: flex;
               align-items: center;
               margin-left: 10%;
          }

          .unit{
               min-width: 150px;
               width: 30%;
               margin: 5px;
          }
     </style>
     <div>
     <?php printr($rows)?>
     </div>


<?php $this->view('includes/footer'); ?>

