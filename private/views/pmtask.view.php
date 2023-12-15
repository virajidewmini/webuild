<?php $this->view('includes/header')?>

<div class="table">
        <div class="table_header">
            <p>On going sub task</p>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Task ID</th>
                        <th>Sub Task ID</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P003</td>
                        <td>TSK001</td>
                        <td>TSK001S023</td>
                        <td>Foundation excavation</td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="table_header">
            <p>Sub tasks</p>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Task ID</th>
                        <th>Sub Task ID</th>
                        <th>Sub Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows):?>
                    <?php foreach ($rows as $row):?>
                        <tr>
                            <td></td>
                            <td><?= $row->task_id?></td>
                            <td><?= $row->sub_task_id?></td>
                            <td><?= $row->sub_task_name?></td>
                            <td>
                                <a href="<?=ROOT?>/Pmtask/add/<?=$row->sub_task_id?>">
                                <button><i class="fa-solid fa-plus"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No Sub tasks were found at this time</h3>
                <?php endif; ?> 

                </tbody>
            </table>
        </div>
</div>

<?php $this->view('includes/footer'); ?>


