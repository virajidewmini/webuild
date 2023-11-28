<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            
            <!-- <div>
               <a href="clientcomplaint/add"><button class="add___">Add New</button></a>   
            </div> -->
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Material Name</th>
                        <th>Material Code</th>
                        <th>Project Profile</th>
                        <th>Requests</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows)): ?>
                
                    <?php foreach ($rows as $row):?>
                         <tr>
                        <td><?=$row->id?>kkns</td>
                        <td><?=$row->type?></td>
                        <td><?=$row->description?></td>
                        <td><?=$row->status?></td>
                        
                        <td>
                            <button ><i class="fa-solid fa-eye"></i></button>
                           
                         <a href="<?=ROOT?>/clientcomplaint/delete/<?=$row->id?>"><button ><i class="fas fa-trash-alt"></i></button></a> 

                        </td>
                        
                    </tr>

                    <?php endforeach;?>

            <?php else: ?>
                <h3>No Complaints Yet</h3>

            <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
     

<?php $this->view('includes/footer'); ?>