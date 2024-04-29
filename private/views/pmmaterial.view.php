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

        ._add_ {
            background-color: #E5863D;
            color: white;
        }
    </style>
    <h2 style="margin-bottom: 20px">MATERIALS</h2>
    <?php $project_id = isset($_GET['project_id']) ? $_GET['project_id'] : ""; ?>
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
            <h3>Sent request</h3>
            <?php if ($project_id) : ?>
                <div>
                    <a href="<?= ROOT ?>/Pmmaterial_r/<?= $project_id ?>/"><button class="add___">Request</button></a>
                </div>
            <?php endif; ?>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Request ID</th>
                        <th>Level</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <?php if ($rows2) : ?>
                    <?php foreach ($rows2 as $row) : ?>
                        <tbody>
                            <tr>
                                <td><?= $row->project_id; ?></td>
                                <td><?= $row->request_id; ?></td>
                                <td><?= $row->level; ?></td>
                                <td><?= $row->r_date; ?></td>
                                <td>
                                    <a href="<?= ROOT ?>/Pmmaterial/materialRequest_view/<?= $row->request_id; ?>"><button><i class="fa-solid fa-eye"></i></button></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                <?Php endif; ?>
            </table>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <h3>To Recieve</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Request ID</th>
                        <th>Quotation ID</th>
                        <th>Level</th>
                        <th></th>
                    </tr>
                </thead>
                <?php if ($rows3) : ?>
                    <?php foreach ($rows3 as $row) : ?>
                        <tbody>
                            <tr>
                                <td><?= $row->project_id; ?></td>
                                <td><?= $row->request_id; ?></td>
                                <td><?= $row->quotation_id; ?></td>
                                <td><?= $row->level; ?></td>
                                <td>
                                <a href="<?= ROOT ?>/Pmmaterial/materialReceive_view/<?= $row->quotation_id; ?>/<?= $row->project_id; ?>/<?= $row->level; ?>/"><button><i class="fa-solid fa-eye"></i></button></a>
                                    <a href="<?= ROOT ?>/"><button style="background-color: #E5863D;" class="_add_">Recieved</button></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                <?Php endif; ?>
            </table>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <h3>Recieved</h3>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Request ID</th>
                        <th>Quotation ID</th>
                        <th>Level</th>
                        <th></th>
                    </tr>
                </thead>
                <?php if ($rows4) : ?>
                    <?php foreach ($rows4 as $row) : ?>
                        <tbody>
                            <tr>
                                <td><?= $row->project_id; ?></td>
                                <td><?= $row->request_id; ?></td>
                                <td><?= $row->quotation_id; ?></td>
                                <td><?= $row->level; ?></td>
                                <td>
                                <a href="<?= ROOT ?>/Pmmaterial/materialReceived_view/<?= $row->quotation_id; ?>/<?= $row->project_id; ?>/<?= $row->level; ?>/"><button><i class="fa-solid fa-eye"></i></button></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                <?Php endif; ?>
            </table>
        </div>
    </div>

    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>