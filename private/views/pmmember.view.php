<?php if (Auth::getRole() == 'Project Manager') : ?>
    <?php $this->view('includes/header') ?>
    <style>
        body {
            overflow: hidden;
        }

        .unit-d {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
        }
        .table_section {
            height: 400px;
            overflow-y: auto;
        }
    </style>
    <?php $message = isset($_GET['message']) ? $_GET['message'] : ""; ?>
    <?php $project_id = isset($_GET['project_id']) ? $_GET['project_id'] : ""; ?>
    <h2 style="margin-bottom: 20px">MEMBERS</h2>
    <form action="" method="GET">
        <?php
        if (isset($_GET['project_id'])) {
        ?>
            <div class="unit-d">
                <div class="unit">
                    <h3 style="margin-left:20px;">Project ID :</h3>
                </div>
                <div class="e-id-d">

                    <select style="height:35px; width:100px; margin-left:20px; border-radius:10px;" name="project_id" class="" type="text">
                        <option style="text-align:center;" value="" <?= get_select2('project_id', ''); ?>>Select ID</option>
                        <?php if ($rows) : ?>
                            <?php foreach ($rows as $row) : ?>
                                <option style="text-align:center;" <?= get_select2('project_id', $row->id); ?> value="<?= $row->id; ?>" <?php if ($project_id == $row->id) {
                                                                                                                                            echo "selected";
                                                                                                                                        } ?>>
                                    <?= $row->id; ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <option style="text-align:center;" <?= get_select2('project_id', ''); ?> value="">No Project Found</option>
                            <?php endif; ?>
                    </select>
                    <button style="background-color:#E5863D; color:white; margin-left: 20px;" class="" type="submit">Filter</button>
                </div>

            </div>
        <?php
        } else {
        ?>
            <div class="unit-d">
                <div class="unit">
                    <h3 style="margin-left:20px;">Project ID :</h3>
                </div>
                <div class="e-id-d">
                    <select style="height:35px; width:100px; margin-left:20px; border-radius:10px;" name="project_id" class="" type="text">
                        <option style="text-align:center;" value="<?= $project_id ?>" <?= get_select2('project_id', ''); ?>>Select ID</option>
                        <?php if ($rows) : ?>
                            <?php foreach ($rows as $row) : ?>
                                <option style="text-align:center;" <?= get_select2('project_id', $row->id); ?> value="<?= $row->id; ?>" <?php if ($project_id == $row->id) {
                                                                                                                                            echo "selected";
                                                                                                                                        } ?>>
                                    <?= $row->id; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option style="text-align:center;" <?= get_select2('project_id', ''); ?> value="">No Project Found</option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="btnnext">
                    <button style="background-color:#E5863D; color:white; margin-left: 20px;" type="submit">Filter</button>
                </div>
            </div>

        <?php
        }
        ?>
    </form>
    <div class="table">
        <div class="table_header">
            <h3>Supervisor</h3>
        </div>

        <div class="table_section" style="height: 250px;">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Supervisor Name</th>
                        <th>NO. Project</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows1) : ?>
                        <?php foreach ($rows1 as $row) : ?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= $row->staff->firstname ?> <?= $row->staff->lastname ?></td>
                                <td><?= $row->staff->project_count ?></td>
                                <td>
                                    <a href="<?= ROOT ?>/Pmmember_search/view_sup/<?= $row->supervisor_id ?>">
                                        <button class="btn-sm btn btn-info text-white"><i class="fa fa-eye"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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
                        <th>Project ID</th>
                        <th>Task ID</th>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($rows2) : ?>
                        <?php foreach ($rows2 as $row) : ?>
                            <tr>
                                <td><?= $row->project_id ?></td>
                                <td><?= $row->task_id ?></td>
                                <td><?= $row->emp_id ?></td>
                                <td><?= $row->co->name ?></td>
                                <td><?= $row->co->role ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>