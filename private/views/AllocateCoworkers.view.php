<?php $this->view('includes/header')?>

<div style="margin-left: 400px;" class="table_header" >
        <h1>Allocate Coworkers</h1>
</div>

<div class="taskBody">
<div class="task-container">
        <div class="task-header">

        <?php if(isset($rows)): ?>
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

    <!-- <h4>Remain Coworker Count</h4><br>

    <div class="card-container">
    <?php if(isset($est)): ?>
            <?php foreach ($est as $row):?>

    <div class="total-card" style="margin-bottom: 30px; width: auto;">
       
    
        <p class="card_label"><?=$row->role?></p>
        <div class="total-amount"><?=$row->count?><br></div> 

        

    </div>
    <?php endforeach;?>
        <?php endif; ?>

    </div> -->



    <div id="container">
        <div class="additional-fields">
        <select id="type" name="type" class="additional_form-control">
                <option value="" disabled selected>Select Role</option>
                <option value="Concrete Worker">Concrete Worker</option>
                <option value="General Laborer">General Laborer</option>
                <option value="Equipment Operator">Equipment Operator </option>
            </select>
            <input type="text" class="additional_form-control">
            
            <button class="additional-button">Add</button>
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
               
                
                    
                         <tr>
                        <td>1</td>
                        <td>Paint Expert</td>
                        <td>Amila dissanayake</td>
                        <td>0772679930</td>
                        
                        <td>
                           
                         <button ><i class="fas fa-trash-alt"></i></button>

                        </td>
                        
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Paint Expert</td>
                        <td>Amila dissanayake</td>
                        <td>0772679930</td>
                        
                        <td>
                           
                         <button ><i class="fas fa-trash-alt"></i></button>

                        </td>
                        
                    </tr>

                   

            

                </tbody>
            </table>
        </div>

        <?php $this->view('includes/footer'); ?>

