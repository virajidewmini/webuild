<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>

    <?php if($rows):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Material Requests from Store Keeper </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Requested Material</th>
                            <th>Requested Quantity</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                            <?php if($row->status=='Emailed'):?>
                                <tr style="background-color: #2ecc71;">                       
                                    
                                    <td style="color: white;"><?=$row->id?></td>
                                    <td style="color: white;"><?=$row->material->material_name?></td>
                                    <td style="color: white;"><?=$row->requested_quantity?></td>
                                    <td style="color: white;"><?=$row->requested_date?></td>
                                    <td style="color: white;"><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatormaterialrequests/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-sheet-plastic"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php elseif($row->status=='Pending'):?>
                                <tr>                       
                                    <td><?=$row->id?></td>
                                    <td><?=$row->material->material_name?></td>
                                    <td><?=$row->requested_quantity?></td>
                                    <td><?=$row->requested_date?></td>
                                    <td><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatormaterialrequests/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-sheet-plastic"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php elseif($row->status=='Recieved'):?>
                                <tr style="background-color: #e5863d;">                       
                                    
                                    <td style="color: white;"><?=$row->id?></td>
                                    <td style="color: white;"><?=$row->material->material_name?></td>
                                    <td style="color: white;"><?=$row->requested_quantity?></td>
                                    <td style="color: white;"><?=$row->requested_date?></td>
                                    <td style="color: white;"><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatormaterialrequests/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-sheet-plastic"></i></button>
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
