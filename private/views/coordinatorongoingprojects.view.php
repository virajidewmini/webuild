<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>

<!-- <pre><?php print_r($rows);?></pre><br><?="mmmmmmm"?>
<pre><?php print_r($rows[1]->payment_date);?></pre> -->
    <?php if($rows):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Ongoing Projects </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>Customer Name</th>
                            <th>Date of the Next Installment</th>
                            <th>Manager Name</th>
                            <!-- <th>Supervisor Name</th> -->
                            <th>See more</th>
                            <th>View Payments</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                           

                            <?php $current_date = date('Y-m-d');?>
                            
                            <?php if(isset($row->payment_date) && $row->payment_date < $current_date ):?>           
                                                                
                                <tr style="background-color: #ff0000;">                       
                                
                                    <td style="color: white;"><?=$row->project_id?></td>
                                    <td style="color: white;"><?=$row->user->firstname?> <?=$row->user->firstname?></td>
                                    <td style="color: white;"><?=$row->payment_date?></td>
                                    <td style="color: white;"><?=$row->staff_m->firstname?> <?=$row->staff_m->firstname?></td>
                                    <!-- <td style="color: white;"><?=$row->staff->firstname?> <?=$row->staff->firstname?></td>   -->
                                    <td >
                                        <a href="#">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td>
                                    <td >
                                        <a href="<?=ROOT?>/coordinatorprojects/viewpayments/<?=$row->project_id?>/<?=$row->payment_package_id?>">
                                            <button><i class="fa-brands fa-paypal"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>

                            <?php elseif(isset($row->payment_date) && $row->payment_date > $current_date):?>
                                <tr>                       
                                    <td><?=$row->project_id?></td>
                                    <td><?=$row->user->firstname?> <?=$row->user->firstname?></td>
                                    <td><?=$row->payment_date?></td>
                                    <td><?=$row->staff_m->firstname?> <?=$row->staff_m->firstname?></td>
                                    <!-- <td><?=$row->staff->firstname?> <?=$row->staff->firstname?></td>   -->
                                    <td >
                                        <a href="#">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td>
                                    <td >
                                        <a href="<?=ROOT?>/coordinatorprojects/viewpayments/<?=$row->project_id?>/<?=$row->payment_package_id?>">
                                            <button><i class="fa-brands fa-paypal"></i></i></button>
                                        </a>
                                    </td>
                                    
                                </tr>
                                
                                
                            <?php elseif(!isset($row->payment_date)):?>
                                
                                <!-- <tr style="background-color: #e5863d;">  -->
                                <tr>
                                    
                                    <td><?=$row->project_id?></td>
                                    <td><?=$row->user->firstname?> <?=$row->user->firstname?></td>
                                    <td>All Paid</td>
                                    <td><?=$row->staff_m->firstname?> <?=$row->staff_m->firstname?></td>
                                    <!-- <td><?=$row->staff->firstname?> <?=$row->staff->firstname?></td>   -->
                                    <td>
                                        <a href="#">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td>
                                    <td >
                                            <a href="<?=ROOT?>/coordinatorprojects/viewpayments/<?=$row->project_id?>/<?=$row->payment_package_id?>">
                                                <button><i class="fa-brands fa-paypal"></i></button>
                                            </a>
                                        </td> 
                                    
                                </tr>
                                
                                
                            <?php endif;?>
                                
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Material Requesrts from Strore keeper.</h4>
        <br><br>
    <?php endif;?> 

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
