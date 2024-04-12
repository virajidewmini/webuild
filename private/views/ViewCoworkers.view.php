<?php $this->view('includes/header')?>

<div class="table">
<div class="table_header">
            <h1>Coworkers</h1>
            <div>
            
               <a href="<?=ROOT?>/allcoworkers/add"><button class="add___">Add New</button></a>  
                
            </div>
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th style="width: 100px;">District</th>
                        <th >Address</th>
                        <th>Role</th>
                        <th style="width: 150px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($worker)): ?>
                
                    <?php foreach ($worker as $row):?>
                        
                         <tr>
                        <td><?=$row->name?></td>
                        <td><?=$row->phone_no?></td>
                        <td><?=$row->district?></td>
                        <td><?=$row->address?></td>
                        <td><?=$row->role?></td>
                        
                        <td>
                        <a href="<?=ROOT?>/allcoworkers/editCoworker/<?=$row->id?>"><button ><i class="fas fa-edit"></i></button></a>
                         <a href="<?=ROOT?>/allcoworkers/delete/<?=$row->id?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

                        </td>
                        
                    </tr>

                    <?php endforeach;?>

            <?php else: ?>
                <h3>No Coworkers Yet</h3>

            <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
     
     

<?php $this->view('includes/footer'); ?>

