<?php $this->view('includes/header')?>
<style>
          .pro-id{
               background-color: white;
               display: flex;
               padding: 0 0 20px 0;
               border-radius: 20px;
               width: 90%;
               max-width: 700px;
               height: auto;
          }
          .pro-id-details{
               width: 70%;
          }
          .title-id{
               display: flex;
               align-items: center;
               margin-bottom: 20px;
          }
          .p-title{
               min-width: 200px;
               width: 20%;
               margin: 10px 0 0 20px;
          }
          .p-title-detail{
               margin-top: 5%;
          }
          .unit-d{
     
               display: flex;
               align-items: center;
               margin-left: 5%;
               margin-bottom: 10px;
          }
          .unit{
               min-width: 150px;
               width: 30%;
               margin: 5px;
          }
          .table_header{
               width:100%;
               height: auto;
          }

          .task_d::placeholder{
            color: black;
          }

          .task_d{
            border: 1px solid black;
            border-radius: 7px;
            padding: 10px 10px 10px 20px;
            margin-left: 10px;
            width:300px;
            height:100px;
          }

.in_a_c:hover{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
}
.in_a_c:active{
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
}
</style>
<?php if($row): ?>
     <div>
          <div class="pro-id">
                
                    <div class="pro-id-details">
                    <form method="post">
                        <div class="title-id">
                            <div class="p-title">
                                <h3><?= $row[0]->firstname?> <?= $row[0]->lastname?></h3>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>ID :</p>
                            </div>
                            <div class="e-id-d">
                                <input readonly value="<?=get_var('id',$row[0]->id)?>" type="text" name="id">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Email :</p>
                            </div>
                            <div class="e-id-d">
                                <input readonly value="<?=get_var('id',$row[0]->email)?>" type="email" name="email">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>District :</p>
                            </div>
                            <div class="e-id-d">
                                <input readonly value="<?=get_var('id',$row[0]->district)?>" type="text" name="district">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Qualification :</p>
                            </div>
                            <div class="e-id-d">
                                <textarea readonly class="task_d" style="color:black" values="<?=get_var('id',$row[0]->qualification)?>" type="text" name="qualification" placeholder="Qualification"><?=get_var('task_id',$row[0]->qualification)?></textarea>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Experience:</p>
                            </div>
                            <div class="e-id-d">
                                <textarea readonly class="task_d" style="color:black" values="<?=get_var('task_id',$row[0]->experience)?>" type="text" name="experience" placeholder="Experience"><?=get_var('task_id',$row[0]->experience)?></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Project ID :</p>
                            </div>
                            <div class="e-id-d">
                                <input value="<?=get_var('id')?>" type="text" name="id">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Start Date :</p>
                            </div>
                            <div class="e-id-d">
                                <input value="<?=get_var('date')?>" type="date" name="date">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Final Date :</p>
                            </div>
                            <div class="e-id-d">
                                <input value="<?=get_var('final_date')?>" type="date" name="final_date">
                            </div>
                        </div>
                        <div class="table_header" style="align-items: center; background-color:white">
                        <a href="<?=ROOT?>/pmmember_search">
                        <input class ="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
                        </a>
                        <input class ="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Add">
                        </div>
                    </form>
                    <?php print_r($_POST);?>
                    </div> 
                
        </div>
    </div>
 <?php endif; ?>
<?php $this->view('includes/footer'); ?>