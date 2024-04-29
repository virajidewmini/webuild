<?php if ($_SESSION['role'] == 'Client') : ?>
<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            <h1>Complaints</h1>
            <div>
               <a href="<?=ROOT?>/clientcomplaint/add"><button class="add___">Add New</button></a>   
            </div>
        </div>
        <div class="table_section" style="height: 1000px;">
            <table>
                <thead>
                    <tr>
                        <th>Complaint No</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($rows) && !empty($rows)): ?>
                
                    <?php foreach ($rows as $row):?>
                         <tr>
                        <td><?=$row->id?></td>
                        <td><?=$row->type?></td>
                        <td><?=$row->date?></td>
                        <td><?=$row->status?></td>
                        
                        <td>
                         <a href="<?=ROOT?>/clientcomplaint/viewComplaint/<?=$row->id?>"><button ><i class="fa-solid fa-eye"></i></button></a>
                           
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
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
