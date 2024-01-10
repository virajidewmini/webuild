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

    <div class="card-container">

    <div class="total-card" style="margin-bottom: 30px; width: auto; background-color: #3D9CE5;">
    
        <p class="card_label">Total Amount</p>
        <div class="total-amount">10000<br></div> 
    </div>

    <div class="total-card" style="margin-bottom: 30px; width: auto; background-color: #3D9CE5;">
        <p class="card_label">Total Amount</p>
        <div class="total-amount">10000<br></div> 
    
        
    </div>
    <div class="total-card" style="margin-bottom: 30px; width: auto; background-color: #3D9CE5;">
    
        <div class="total-amount">10000<br></div> 
    
        <p class="card_label">Total Amount</p>
    </div>

    <div class="total-card" style="margin-bottom: 30px; width: auto; background-color: #3D9CE5;">
    
        <div class="total-amount">10000<br></div> 
    
        <p class="card_label">Total Amount</p>
    </div>

    </div>

    <div class="card-container">

    <div class="total-card" style="margin-bottom: 30px; width: auto; ">
    
        <div class="total-amount">10000<br></div> 
    
        <p class="card_label">Total Amount</p>
    </div>

    <div class="total-card" style="margin-bottom: 30px; width: auto; ;">
    
        <div class="total-amount">10000<br></div> 
    
        <p class="card_label">Total Amount</p>
    </div>
    <div class="total-card" style="margin-bottom: 30px; width: auto; ">
    
        <div class="total-amount">10000<br></div> 
    
        <p class="card_label">Total Amount</p>
    </div>

    <div class="total-card" style="margin-bottom: 30px; width: auto; ">
    
        <div class="total-amount">10000<br></div> 
    
        <p class="card_label">Total Amount</p>
    </div>

    </div>


    <div id="container">
        <div class="additional-fields">
        <select id="type" name="type" class="additional_form-control">
                <option value="" disabled selected>Select Complaint Type</option>
                <option value="Quality of the photograph">Quality of the photograph</option>
                <option value="Construction project delay">Construction project delay</option>
                <option value="Quality of workmanship and materials">Quality of workmanship and materials </option>
                <option value="Poor Communication">Poor Communication </option>
                <option value="other">Other</option>
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

