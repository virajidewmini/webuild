<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php $this->view('includes/header')?>

<div class="table">

<form method="GET" action="<?= ROOT ?>/request/index">
    <input type="text" name="filter" placeholder="Enter project CODE...">
    <button type="submit" class="filter-button">Filter</button>
</form>

    <div class="table_header">
        <h1>Requests from project manager</h1>
    </div>
    <div class="table_section" style="height: 1000px;">
        <table>
            <thead>
                <tr>
                    <th>Project ID</th>
                    <th>Request ID</th>
                    <!-- <th>Manager ID</th> -->
                    <!-- <th>Date</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($rows)): ?>
                    <?php foreach ($rows as $row):?>
                         <tr
                             data-project-id="<?=$row->project_id?>" 
                             
                             >
                            <td><?=$row->project_id?></td>
                            <td><?=$row->id?></td>
                            <!-- <td><?=$row->manager_id?></td> -->
                            <!-- <td><?=$row->date?></td> -->
                            <td>
                                <!-- <button ><i class="fa-regular fa-clock"></i><a href="<?=ROOT?>/requestsecond/add"></button> -->
                                <!-- <a href="<?=ROOT?>/request/viewDetails/<?=$row->id?>"><button ><i class="fa-regular fa-clock"></i></button> -->
                                <a href="<?=ROOT?>/request/viewDetails/<?=$row->id?>"><button><i class="fa-regular fa-clock"></i></button></a>
                            </td>
                            <!-- <td>
                                <button class="send-quotation-btn"><i class="fa-regular fa-clock"></i><a href="<?=ROOT?>/requestsecond/"></a></button>
                            </td> -->
                            <!-- <td>
                                <button class="send-quotation-btn"><i class="fa-regular fa-clock"></i></button>
                            </td> -->
                        </tr>
                    <?php endforeach;?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->view('includes/footer'); ?>

<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>