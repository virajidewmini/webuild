<?php if(Auth::getRole()== 'Project Coordinator'): ?>
    <?php $this->view('includes/header')?>
    <style>
    body{
        overflow: hidden;
    }
    </style>
    

        <?php if($rows):?>
            <!-- <pre><?php print_r($rows);?></pre> -->
            <div class="table">
                <div class="table_header">
                    <div style="display: flex;" >
                        <h3>  Recent Quotations Sent by Project Managers </h3>
                    </div>
                    
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Project Request ID</th>
                                <th>Project ID</th>
                                <th>Project Manager</th>
                                <th>Customer</th>
                                <th>Quoatation</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Create or View Installments</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $row) :?>
                                    <tr>                       
                                        <td><?=$row->project_request_id?></td>
                                        <td><?=$row->project_id?></td>
                                        <td><?=$row->manager->firstname?> <?=$row->manager->lastname?></td>
                                        <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>  
                                        <td><a target="_blank" href="<?=ROOT;?>/uploads/<?=$row->quotation?>"><?=$row->quotation?></a></td>
                                        <td><?=$row->created_date?></td>
                                        <td><?=$row->status?></td>
                                        <td>
                                            <?php if($row->status=="Pending"):?>
                                                <a href="<?=ROOT?>/coordinatorviewquotation/<?=$row->id?>">
                                                    <button><i class="fa-solid fa-pen-to-square"></i></button>
                                                </a>
                                            <?php else:?>
                                                <a href="<?=ROOT?>/coordinatorprojects/viewpayments/<?=$row->project_id?>/<?=$row->payment_package_id?>">
                                                    <button><i class="fa-brands fa-paypal"></i></button>
                                                </a>
                                            <?php endif;?>
                                        </td> 
                                        
                                    </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>    
            </div>
        <?php else:?>
            <h4>No Suppliers have been added.</h4>
            <br><br>
        <?php endif;?> 
    
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
    



