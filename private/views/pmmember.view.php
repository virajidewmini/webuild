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
                        <th>Employee ID</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Since</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php print_r($rows)?>  
                <?php if ($rows):?>
                    <?php foreach ($rows as $row):?>
                        <tr>
                            <td><?= $row->user->id ?></td>
                            <td><?= $row->staff->id?> <?= $row->staff->id?></td>
                            <td><?= $row->staffs->id?> <?= $row->staffs->id?></td>
                            <td>
                                <a href="#">
                                <button class="btn-sm btn btn-info text-white"><i class="fa fa-edit"></i></button>
                                </a>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>No school were found at this time</h3>
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
                        <td>EM025</td>
                        <td>K.H. Shantha</td>
                        <td>Masons</td>
                    </tr>
                    <tr>
                        <td>EM024</td>
                        <td>P.I. Sanath</td>
                        <td>Welders</td>
                    </tr>
                    <tr>
                        <td>EM020</td>
                        <td>L.H. Arun</td>
                        <td>Tile setters</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

