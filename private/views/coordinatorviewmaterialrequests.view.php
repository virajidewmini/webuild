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
                                <tr>                       
                                    <td><?=$row->id?></td>
                                    <td><?=$row->material->name?></td>
                                    <td><?=$row->requested_quantity?></td>
                                    <td><?=$row->requested_date?></td>
                                    <td><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatormaterialrequests/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-sheet-plastic"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
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
