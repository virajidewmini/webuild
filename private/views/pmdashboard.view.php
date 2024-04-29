<?php if (Auth::getRole() == 'Project Manager') : ?>
    <?php $this->view('includes/header') ?>
    <style>
        main {}

        body {
            overflow: hidden;
        }
    </style>
    <div class="project-details">
        <div class="table_header">
            <h2>Projects</h2>
        </div>
        <div class="project">
            <a href="<?= ROOT ?>/Pmongoingproject/Ongoing" style="text-decoration:none">
                <div class="pro">
                    <div class="pro-body" style="background-image: url('<?= ROOT ?>/img/on_pro.png');">
                        <h3>Ongoing</h3>
                    </div>
                    <div class="pro-bottom">
                        More<i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>
            <a href="<?= ROOT ?>/Pmongoingproject/Completed">
                <div class="pro">
                    <div class="pro-body" style="background-image: url('<?= ROOT ?>/img/cm_pro.png');">
                        <h3>Completed</h3>
                    </div>
                    <div class="pro-bottom">
                        More<i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>
            <a href="<?= ROOT ?>/Pmongoingproject/Cancelled">
                <div class="pro">
                    <div class="pro-body" style="background-image: url('<?= ROOT ?>/img/cn_pro.png');">
                        <h3>Canceled</h3>
                    </div>
                    <div class="pro-bottom">
                        More<i class="fa-solid fa-arrow-right" style="padding-left: 4px;"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php if ($rows3) : ?>
        <div class="table">
            <div class="table_header">
                <h2>To Start Project</h2>
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>Request ID</th>
                            <th>Quotation ID</th>
                            <th>Customer Name</th>
                            <th>Model Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows3 as $row) : ?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= $row->project_request_id ?></td>
                                <td><?= $row->quotation_id ?></td>
                                <td><?= $row->user->firstname ?> <?= $row->user->lastname ?></td>
                                <td><?= $row->mdl->name ?></td>
                                <td>
                                    <a href="<?= ROOT ?>/Pmmember_search/<?= $row->land->ul_district ?>/<?= $row->id ?>/<?= $row->quotation_id ?>/<?= $row->mdl->time_duration_in_months ?>/">
                                        <button class="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit">Start</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($rows2) : ?>
        <div class="table">
            <div class="table_header">
                <h2>Recent Request</h2>
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Customer Name</th>
                            <th>Model Name</th>
                            <th>Modification ID</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows2 as $row) : ?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= $row->user->firstname ?> <?= $row->user->lastname ?></td>
                                <td><?= $row->model->name ?></td>
                                <td><?= $row->modification_id ?></td>
                                <td>
                                    <a href="<?= ROOT ?>/Pmcreateproject/<?= $row->id ?>/">
                                        <button><i class="fa-solid fa-eye"></i></button>
                                    </a>
                                    <!-- <a href="<?= ROOT ?>/Pmmodification/<?= $row->user_id ?>/<?= $row->id ?>/<?= $row->modification_id ?>/<?= $row->mdl->price ?>">
                                        <button><i class="fa-solid fa-eye"></i></button>
                                    </a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($rows5) : ?>
    <div class="table">
        <div class="table_header">
            <h2>Complaints</h2>

        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    

                        <?php foreach ($rows5 as $row) : ?>
                            <tr>
                                <td><?= $row->project_id ?></td>
                                <td><?= $row->type ?></td>
                                <td><?= $row->date ?></td>
                                <td><?= $row->status ?></td>

                                <td>
                                    <a href="<?= ROOT ?>/Pmcomplaint/man_view_complaint/<?= $row->id ?>/*/"><button><i class="fa-solid fa-eye"></i></button></a>



                                </td>

                            </tr>

                        <?php endforeach; ?>

                    

                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($rows) : ?>
        <div class="table">
            <div class="table_header">
                <h2>Daily Progress Reports</h1>
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th style="width:400px;">General Note</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($rows) && !empty($rows)) : ?>

                            <?php foreach ($rows as $row) : ?>
                                <tr>
                                    <td><?= $row->date ?></td>
                                    <td><?= $row->comment ?></td>
                                    <td>

                                        <a href="<?= ROOT ?>/Pmdailyreports/viewDPR/<?= $row->project_id ?>/<?= $row->date ?>/"><button><i class="fa-solid fa-eye"></i></button></a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php else : ?>
                            <h3>No Daily Progress Report Yet</h3>

                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
    <div class="table">
        <div class="table_header">
            <h2>On going task</h2>
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
                    <?php if ($rows1) : ?>
                        <?php foreach ($rows1 as $row) : ?>
                            <tr>
                                <td><?= $row->project_id ?></td>
                                <td><?= $row->task_id ?></td>
                                <td><?= $row->task->task_name ?></td>
                                <td><?= get_date($row->est_start_date) ?></td>
                                <td>
                                    <a href="<?= ROOT ?>/Pmdashboard/subtask/<?= $row->task_id ?>">
                                        <button><i class="fa-solid fa-eye"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <h3>No Reports were found at this time</h3>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>