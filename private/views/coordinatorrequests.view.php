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
                    <h3> Project Requests  </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>User ID</th>
                            <th>Land Type</th>
                            <th>Model ID</th>
                            <th>Land ID</th>
                            <th>Modification ID</th>
                            <th>Payment ID</th>
                            <th>Manager ID</th>
                            <th>Quotation</th>
                            <th>Date</th>
                            <th>State</th>
                            <th>
                                <a href="#">
                                    <button><i class="fa-solid fa-user-plus" style="color: #e67f1e;"></i></button>
                                    <!-- <button class="add___">Add Staff</button> -->
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) :?>
                            <tr>                       
                                <td><?=$row->id?></td>
                                <td><?=$row->user_id?></td>
                                <td><?=$row->land_type?>
                                <td><?=$row->model_id?></td>  
                                <td><?=$row->land_id?>
                                <td><?=$row->modification_id?></td>       
                                <td><?=$row->payment_id?></td>                      
                                <td><?=$row->manager_id?></td>         
                                <td><?=$row->total_price?></td>         
                                <td><?=get_date($row->date)?></td> 
                                <td><?=$row->action?></td>
                                <td>
                                    <a href="<?=ROOT?>/coordinatorrequests/seemore/<?=$row->id?>">
                                        <button><i class="fa-solid fa-eye"></i></button>
                                    </a>
                                    <a href="#">
                                        <button><i class="fa-solid fa-trash"></i></button>
                                    </a>
                                    <a href="#">
                                        <button><i class="fa-solid fa-pen-to-square"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No requests are found</h4>
        <div>
            <a href="#">
                <button class="add___">Add Staff</button>
            </a>
        </div>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
