<?php $this->view('includes/header')?>

<div class="table">
<div class="table_header">
            <h1>Coworkers</h1>
            <div>
               <a href="<?=ROOT?>/clientcomplaint/add"><button class="add___">Add More</button></a>  
               <a href="<?=ROOT?>/clientcomplaint/add"><button class="add___">Add One</button></a>   
            </div>
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>District</th>
                        <th>Address</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                    <?php foreach ($rows as $row):?>
                         <tr>
                        <td><?=$row->id?></td>
                        <td><?=$row->type?></td>
                        <td><?=$row->description?></td>
                        <td><?=$row->status?></td>
                        
                        <td>
                         <a href="<?=ROOT?>/clientcomplaint/viewComplaint/<?=$row->id?>"><button ><i class="fa-solid fa-eye"></i></button></a>
                           
                         <a href="<?=ROOT?>/clientcomplaint/delete/<?=$row->id?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

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

