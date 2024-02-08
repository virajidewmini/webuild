
<?php $this->view('includes/header')?>
<div style="margin-left: 400px;" class="table_header" >
        <h1>Allocate Coworkers</h1>
</div>

<div class="taskBody">
<div class="task-container">
        <div class="task-header">

        <?php if(isset($rows)):?>
            <h1 class="task-name"><?=$rows[0]->task_name?></h1>
        <?php endif;?>
        </div>
        <ul class="subtask-list">
        <?php if(isset($subTask)): ?>
            <?php foreach ($subTask as $row):?>
            <li class="subtask">
                <i class="subtask-icon">▶</i> <?=$row->sub_task_name?>
            </li>
                <li>
                    <p><?=$row->sub_task_details?></p>
                </li>
            <?php endforeach;?>
            <?php endif; ?>
        </ul>
    </div>
    </div>

    <br><br>

    <?php if(isset($start)):?>
        <h4>Start Date - </h4><p><?=$start[0]->est_start_date?></p> <br>
    <?php endif;?>

    <?php if(isset($end)):?>
        <h4>Estimated End Date - </h4><p><?=$end?></p><br>
    <?php endif;?>

    <h4>Estimated Coworker Count</h4><br>

    <div class="card-container">
    <?php if(isset($est)): ?>
            <?php foreach ($est as $row):?>

    <div class="total-card" style="margin-bottom: 30px; width: auto; background-color: #3D9CE5;">
    
        <p class="card_label"><?=$row->role?></p>
        <div class="total-amount"><?=$row->count?><br></div> 

        

    </div>
    <?php endforeach;?>
        <?php endif; ?>

    </div>




    

    <div class="table">
    <div style="justify-content: flex-start;" class="table_header" >
            
            <div>

           <?php
           $url = $_GET["url"]; 
           $parts = explode('/', $url); 
           $id = end($parts); 
           
           ?>
            
               <a href="<?=ROOT?>/task/addAutomatically/<?=$id?>"><button style="margin-right:10px;" class="add___">Auto Assign</button></a>   
           
            
            </div>
            
        </div>

<div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
               
                
                <?php if(isset($coworkers)&& !empty($coworkers)):?>
                    <?php $counter = 1; ?>
                  
                    <?php foreach ($coworkers as $row):?>
                         <tr>
                        <td><?= $counter++ ?></td>
                        <td><?=$row->role?></td>
                        <td><?=$row->name?></td>
                        <td><?=$row->phone_no?></td>
                        
                        <td>
                           
                         <button ><i class="fas fa-trash-alt"></i></button>

                        </td>
                        
                    </tr>
                    <?php endforeach;?>
                    <?php else: ?>
                        <tr><td colspan="5">No data available</td></tr>
                <?php endif; ?>


                </tbody>
            </table>
            <a href="<?= ROOT ?>/task/" > <button style="margin-left:750px;" class="v_submit_button">Back</button></a>
        </div>
            </div>

        <?php $this->view('includes/footer'); ?>

