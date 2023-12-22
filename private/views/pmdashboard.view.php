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
                    <h1>Ongoing</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </a>
            <a href="<?=ROOT?>/Pmongoingproject">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cm_pro.png');">
                    <h1>Completed</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </a>
            <a href="<?=ROOT?>/Pmongoingproject">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cn_pro.png');">
                    <h1>Canceled</h1>
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
            <h3>Daily Progress reports</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Report ID</th>
                        <th>User ID</th>
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
                        <td><?= $row->dpr_id?></td>
                        <td><?= $row->s_user_id?></td>
                        <td><?= $row->user->firstname?> <?= $row->user->lastname?></td>
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
            <h3>On going sub task</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Task ID</th>
                        <th>Sub Task ID</th>
                        <th>Sub Task Name</th>
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
                        <td><?= $row->sub_task_id?></td>
                        <td><?= $row->sub_task_name ?></td>
                        <td><?=get_date($row->start_date)?></td>
                        <td>
                            <a href="<?=ROOT?>/Pmdashboard/subtask/<?=$row->sub_task_id?>">
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