<?php $this->view('includes/header')?>

<!-- <?php print_r($rows);?> -->


<div class="table">
<div class="table_header">
            <p>Sent request</p>
            <div>
                <button class="add___">Add New</button>
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Complaint No</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
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
                            <button><i class="fa-solid fa-eye"></i></button>
                            <button><i class="fas fa-trash-alt"></i></button>
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

