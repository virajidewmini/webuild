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
     <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Land Type</th>
                            <th>Model ID</th>
                            <th>Manager ID</th>
                            <th>Quotation</th>
                            <th>Date</th>
                            <th>State</th>
                            <th>
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                            <tr>                       
                                <td><?=$row->id?></td>
                                <td><?=$row->user_id?></td>
                                <td><?=$row->firstname?></td>
                                <td><?=$row->land_type?>
                                <td><?=$row->model_id?></td>  
                                <td><?=$row->manager_id?></td>         
                                <td><?=$row->total_price?></td>         
                                <td><?=get_date($row->date)?></td> 
                                <td><?=$row->action?></td>
                                <td>
                                    <a href="<?=ROOT?>/coordinatorrequests/seemore/<?=$row->id?>">
                                        <button><i class="fa-solid fa-eye"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
     </div>


<?php $this->view('includes/footer'); ?>

