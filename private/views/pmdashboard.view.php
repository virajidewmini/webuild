<?php if(Auth::getRole()== 'Project Manager'): ?>
<?php $this->view('includes/header')?>
<style>
main {
}
body{
    overflow: hidden;
}
</style>
    <div class="project-details">
        <div class="table_header">
            <h3>Projects</h3>
        </div>
        <div class="project">
            <a href="<?=ROOT?>/Pmongoingproject"
            style="text-decoration:none">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/on_pro.png');">
                    <h3>Ongoing</h3>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </a>
            <a href="<?=ROOT?>/Pmongoingproject">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cm_pro.png');">
                    <h3>Completed</h3>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </a>
            <a href="<?=ROOT?>/Pmongoingproject">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cn_pro.png');">
                    <h3>Canceled</h3>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right" style="padding-left: 4px;"></i>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <h3>To modify bill</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>Customer Name</th>
                        <th>Model Name</th>
                        <th>Land Type</th>
                        <th>Land ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows2):?>
                    <?php foreach ($rows2 as $row):?>
                    <tr>
                        <td><?= $row->id?></td>
                        <td><?= $row->user->firstname?> <?= $row->user->lastname?></td>
                        <td><?= $row->model->name?></td>
                        <td><?= $row->land_type?></td>
                        <td><?= $row->land_id?></td>
                        <td>
                            <a href="<?=ROOT?>/Pmmodification/<?=$row->id?>/<?=$row->modification_id?>/<?=$row->total_price?>">
                            <button><i class="fa-solid fa-eye"></i></button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No request were found at this time</h3>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <h3>Daily Progress reports</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Report ID</th>
                        <th>Supervisor Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows):?>
                    <?php foreach ($rows as $row):?>
                    <tr>
                        <td><?= $row->project_id?></td>
                        <td><?= $row->id?></td>
                        <td><?= $row->staff->firstname?> <?= $row->staff->lastname?></td>
                        <td><?=get_date($row->date)?></td>
                        <td>
                            <a href="#">
                            <button><i class="fa-solid fa-eye"></i></button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No Reports were found at this time</h3>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table">
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
                        <th>Start Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows1):?>
                    <?php foreach ($rows1 as $row):?>
                    <tr>
                        <td><?= $row->project_id?></td>
                        <td><?= $row->task_id?></td>
                        <td><?= $row->task->task_name?></td>
                        <td><?=get_date($row->est_start_date)?></td>
                        <td>
                            <a href="<?=ROOT?>/Pmdashboard/subtask/<?=$row->task_id?>">
                            <button><i class="fa-solid fa-eye"></i></button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No Reports were found at this time</h3>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>