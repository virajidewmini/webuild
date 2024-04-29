<?php if (Auth::getRole() == 'Project Manager') : ?>
    <?php $this->view('includes/header') ?>
    <style>
        .popup-container {
            height: 250px;
            width: 500px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            z-index: 9999;
            text-align: center;
            border-radius: 10px;
            display: flex;
            /* Use flexbox for centering */
            flex-direction: column;
            /* Stack items vertically */
            justify-content: center;
            /* Center items vertically */
            align-items: center;
            /* Center items horizontally */
        }

        .btn-close {
            height: 50px;
            width: 70px;
            background-color: #E5863D;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black overlay */
            z-index: 9998;
            /* Lower z-index than popup container */
        }

        .unit-d {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
        }

        .in_a_c:hover {
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
        }

        .in_a_c:active {
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

    <?php $message = isset($_GET['message']) ? $_GET['message'] : ""; ?>
    <?php $project_id = isset($_GET['project_id']) ? $_GET['project_id'] : ""; ?>

    <div class="table">
        <h2 style="margin-bottom: 20px">TASKS</h2>
        <?php if ($message) : ?>
            <div class="popup-overlay"></div> <!-- Add overlay -->
            <div class="popup-container">
                <strong><i style="color: green; font-size: 80px; margin:10px 0 10px 0 ;" class="fa-solid fa-circle-check"></i></strong>
                <br>
                <h3 style="margin-bottom:10px;"><?= $message ?></h3>
                <br><button style="background-color: #E5863D; color:#ffffff;" type="button" class="btn-close">OK</button>
            </div>
        <?php endif; ?>



        <div class="table_header">
            <h3>Filter Tasks Using Project ID</h3>
        </div>
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
        <div class="table_section">
            <?php if ($rows2) : ?>
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
                        <?php foreach ($rows2 as $row) : ?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= $row->task_name ?></td>
                                <td><?= $row->sub_task_count ?></td>
                                <td><?= $row->duration_in_days ?></td>
                                <td>
                                    <?php if ($rows3) : ?>
                                        <?php if (($rows2[0]->id == $row->id && $rows3[0]->progress > 80) && (!($rows3[0]->status == 'Pending' || $rows3[0]->status == 'Suspend'))) : ?>
                                            <a href="<?= ROOT ?>/Pmtask/add/<?= $row->id ?>/<?= $rows[0]->id ?>/<?= $row->duration_in_days ?>/">
                                                <button><i class="fa-solid fa-plus"></i></button>
                                            </a>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <?php if ($rows2[0]->id == $row->id ) : ?>
                                        <a href="<?= ROOT ?>/Pmtask/add/<?= $row->id ?>/<?= $rows[0]->id ?>/<?= $row->duration_in_days ?>/">
                                            <button><i class="fa-solid fa-plus"></i></button>
                                        </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <!-- <a href="<?= ROOT ?>/Pmtask/add/<?= $row->id ?>/<?= $project_id ?>">
                                        <button><i class="fa-solid fa-plus"></i></button>
                                    </a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
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
                <?php if ($rows1) : ?>
                    <?php foreach ($rows1 as $row) : ?>
                        <tr>
                            <td><?= $row->project_id ?></td>
                            <td><?= $row->task_id ?></td>
                            <td><?= $row->task->task_name ?></td>
                            <td><?= $row->est_start_date ?></td>
                            <td>
                                <a href="<?= ROOT ?>/Pmtask/allocateTaskDetails/<?= $row->task_id ?>/<?= $row->project_id ?>/<?= $row->feedback ?>/">
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
        addEventListener('DOMContentLoaded', function() {
            var popupContainer = document.querySelector('.popup-container');
            var closeButton = popupContainer.querySelector('.btn-close');

            // Close the popup when the close button is clicked
            closeButton.addEventListener('click', function() {
                popupContainer.style.display = 'none';
                document.querySelector('.popup-overlay').style.display = 'none';
            });
        });
    </script>

    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>