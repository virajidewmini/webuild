<?php if(Auth::getRole()== 'Project Manager'): ?>
<?php $this->view('includes/header')?>

<div class="table">
        <h2 style="margin-bottom: 20px">TASKS</h2>
        <div class="table_header">
            <h3>On going task</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Task ID</th>
                        <th>Task Name</th>
                        <th>Start date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows1):?>
                    <?php foreach ($rows1 as $row):?>
                    <tr>
                        <td><?= $row->project_id?></td>
                        <td><?= $row->task_id?></td>
                        <td><?= $row->task->task_name?></td>
                        <td><?= $row->est_start_date?></td>
                        <td></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No tasks were found at this time</h3>
                <?php endif; ?> 
                </tbody>
            </table>
        </div>

        <div class="table_header">
            <h3>Sub tasks</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Task ID</th>
                        <th>Task Name</th>
                        <th>Sub Task Count</th>
                        <th>Duration in days</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows):?>
                    <?php foreach ($rows as $row):?>
                        <tr>
                            <td><?= $row->id?></td>
                            <td><?= $row->task_name?></td>
                            <td><?= $row->sub_task_count?></td>
                            <td><?= $row->duration_in_days?></td>
                            <td>
                                <a href="<?=ROOT?>/Pmtask/add/<?=$row->id?>">
                                <button><i class="fa-solid fa-plus"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No tasks were found at this time</h3>
                <?php endif; ?> 

                </tbody>
            </table>
        </div>
</div>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>


