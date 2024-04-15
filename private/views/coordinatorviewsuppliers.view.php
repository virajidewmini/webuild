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
                                <th>Name</th>
                                <th>Supplying Materials</th>
                                <th>Contact Person's Name</th>
                                <th>Contact Person's Email</th>
                                <th>Contact Person's Number</th>
                                <th>Address</th>
                                <th>
                                    <a href="<?=ROOT?>/coordinatorviewsuppliers/add">
                                        <button><i class="fa-solid fa-user-plus" style="color: #e67f1e;"></i></button>
                                    </a>
                                </th>
    
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $row) :?>
                                    <tr>                       
                                        <td><?=$row->name?></td>
                                        <td><?=$row->material?></td>
                                        <td><?=$row->contact_person_name?></td>
                                        <td><?=$row->contact_person_email?></td>  
                                        <td><?=$row->contact_person_number?></td>
                                        <td><?=$row->address?></td>
                                        <td>
                                            <a href="<?=ROOT?>/coordinatorviewsuppliers/edit/<?=$row->id?>">
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
            <h4>No Suppliers have been added.</h4>
            <br><br>
        <?php endif;?> 
    
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
    



