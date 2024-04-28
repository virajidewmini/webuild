<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>

    <?php if($rows['Pending']):?>
        
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3> Pending Project Requests  </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>User Name</th>
                            <th>Model Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows['Pending'] as $row) :?>
                        
                            <tr>                       
                                <td><?=$row->id?></td>
                                <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
                                <td><?=$row->model->name?></td>                
                                <td><?=get_date($row->date)?></td> 
                                <td><?=$row->status?></td>
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
        </div>
    <?php else:?>
        <br>
        <h4>No Pending Project Requests are found.</h4>
        <br><br>
        <!-- <div>
            <a href="#">
                <button class="add___">Add Staff</button>
            </a>
        </div> -->
    <?php endif;?>        



    <?php if($rows['Accepted']):?>
        
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3> Accepted Project Requests  </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>User Name</th>
                            <th>Model Name</th>
                            <th>Project Manager</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows['Accepted'] as $row) :?>
                        
                            <tr>                       
                                <td><?=$row->id?></td>
                                <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
                                <td><?=$row->model->name?></td>  
                                <td>
                                    <?php if(empty($row->manager_id)): ?>
                                        <a href="<?=ROOT?>/coordinatorrequests/seemore/<?=$row->id?>/<?=$row->id?>">
                                            <button><i class="fa-solid fa-user-plus" style="color: #e67f1e;"></i></button>
                                        </a>
                                    <?php else : ?>                                
                                        <?=$row->managerName->firstname?> <?=$row->managerName->lastname?>
                                    <?php endif;?>
                                </td>              
                                <td><?=get_date($row->date)?></td> 
                                <td><?=$row->status?></td>
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
        </div>
    <?php else:?>
        <br>
        <h4>No Accepted Project Requests are found.</h4>
        <br><br>
        <!-- <div>
            <a href="#">
                <button class="add___">Add Staff</button>
            </a>
        </div> -->
    <?php endif;?> 



    <?php if($rows['Done']):?>
        <!-- <pre><?php print_r($rows['Done'][0]->payment_status);?></pre> -->
        
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3> Waiting for Initial Payment Project Requests  </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>User Name</th>
                            <th>Model Name</th>
                            <th>Customer Notification Status</th>
                            <th>Project Manager</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows['Done'] as $row) :?>
                        
                            <tr <?php if(($row->payment_status)=="Warning"):?> style="background-color:#ff0000"<?php elseif(($row->payment_status)=="Notified"):?> style="background-color:#3498db"<?php elseif(($row->payment_status)=="Unpaid"):?> style="background-color:"<?php elseif(($row->payment_status)=="Paid"):?> style="background-color:#2ecc71;"<?php else:?> style="background-color:#e5863d" <?php endif;?>>                       
                                <td><?=$row->id?></td>
                                <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
                                <td><?=$row->model->name?></td>  
                                <td>
                                    <?php if(empty($row->payment_status)):?>
                                        <?="Didn't view the quotation"?>
                                    <?php elseif(($row->payment_status)=="Notified"):?>
                                        <?=$row->payment_status?>
                                    <?php elseif(($row->payment_status)=="Warning"):?>
                                        <?=$row->payment_status?>
                                    <?php elseif(($row->payment_status)=="Unpaid"):?>
                                        <?=$row->payment_status?>
                                    <?php elseif(($row->payment_status)=="Paid"):?>
                                        <?=$row->payment_status?>
                                    <?php endif;?>
                                </td>
                                <td>
                                    <?php if(empty($row->manager_id)): ?>
                                        <a href="<?=ROOT?>/coordinatorrequests/seemore/<?=$row->id?>/<?=$row->id?>">
                                            <button><i class="fa-solid fa-user-plus" style="color: #e67f1e;"></i></button>
                                        </a>
                                    <?php else : ?>                                
                                        <?=$row->managerName->firstname?> <?=$row->managerName->lastname?>
                                    <?php endif;?>
                                </td>              
                                <td><?=get_date($row->date)?></td> 
                                <td><?=$row->status?></td>
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
        </div>
    <?php else:?>
        <br>
        <h4>No Waiting for Intial Payment Project Requests are found.</h4>
        <!-- <div>
            <a href="#">
                <button class="add___">Add Staff</button>
            </a>
        </div> -->
    <?php endif;?>


    <div style="display: flex; justify-content: right;" >
        <a href="<?=ROOT?>/coordinatorrequests/getALLRequests/<?php print_r(date('Y'));?>">                                        
            <input type="button" value="View All Project Requests"class="cancel-button"  style="background-color:#E5863D; color:white">            
        </a>
    </div>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
