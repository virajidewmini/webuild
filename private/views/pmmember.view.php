<?php if(Auth::getRole()== 'Project Manager'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    <h2 style="margin-bottom: 20px">MEMBERS</h2>
    <div class="table">
        <div class="table_header">
            <h3>Supervisor</h3>
            <div>
                <a href="<?=ROOT?>/Pmmember_search"><button class="add___">Add member</button>
            </div></a>
        </div>
        <div class="table_section" style="height: 250px;">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Profile</th>
                        <th>Supervisor Name</th>
                        <th>NO. Project</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($rows):?>
                    <?php foreach ($rows as $row):?>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td></td>
                            <td><?= $row->user->firstname?> <?= $row->user->lastname?></td>
                            <td><?= $row->count?></td>
                            <td>
                                <a href="#">
                                <button class="btn-sm btn btn-info text-white"><i class="fa fa-edit"></i></button>
                                </a>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No members were found at this time</h3>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <h3>Wokers</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Skill</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

