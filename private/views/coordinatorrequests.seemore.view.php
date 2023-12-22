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
          <div class="pro-id">
                    <div class="pro-id-details">
                        <div class="title-id">
                            <div class="p-title">
                                <h3>Request ID:</h3>
                            </div>
                            <div class="p-title-detail">
                                <h3><?= $rows[0]->id ?></h3>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Start date :</p>
                            </div>
                            <div class="e-id-d">
                                <p>1 may 2023</p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Customer name :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->customer_name ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Model ID :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->model_id ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Location :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->location ?></p>
                            </div>
                        </div>
                    </div> 
     </div>


<?php $this->view('includes/footer'); ?>

