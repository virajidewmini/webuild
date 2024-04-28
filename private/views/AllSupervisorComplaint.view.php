<?php $this->view('includes/header')?>


<div class="table">
<div class="table_header">
            <h1>Complaints</h1>
           
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
                         <a href="<?=ROOT?>/supcomplaint/viewComplaint/<?=$row->id?>"><button ><i class="fa-solid fa-eye"></i></button></a>
                           
                         

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

