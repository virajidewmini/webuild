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
                        <h3>  Suppliers </h3>
                    </div>
                    
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Supplier ID</th>
                                <th>Name</th>
                                <th>Supplying Materials</th>
                                <th>Status</th>
                                <th>
                                    <a href="<?=ROOT?>/coordinatorviewsuppliers/add">
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
                                        <td><?=$row->name?></td>
                                        <td><?=$row->materials?></td>
                                        <td><?=$row->status?></td>  
                                        <td>
                                            <a href="<?=ROOT?>/coordinatorviewsuppliers/seemore/<?=$row->id?>">
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
            <h4>No Suppliers have been added.</h4>
            <br><br>
        <?php endif;?> 
    
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
    



