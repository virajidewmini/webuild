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


    <div class="table">
        <h2 style="margin-bottom: 20px">SUB TASKS</h2>
        <div class="unit-d">
            <div class="unit">
                <h4>Project ID :</h4>
            </div>
            <div class="e-id-d">
                <h4 style="margin-left:20px"><?= $project_id ?></h4>
            </div>
        </div>
        <div class="unit-d">
            <div class="unit">
                <h4>Task ID :</h4>
            </div>
            <div class="e-id-d">
                <h4 style="margin-left:20px"><?= $task_id ?></h4>
            </div>
        </div>
        <div class="table_section">
            <?php if ($rows) : ?>
                <table>
                    <thead>
                        <tr>
                            <th>Sub Task ID</th>
                            <th>Sub Task Name</th>
                            <th style="width:400px;">Details</th>
                            <th>Status</th>
                            <th>Remark from Supervisor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) : ?>
                            <?php if ($row->status == 'Complete') : ?>
                                <tr style="background-color:#2ecc71;">
                                    <td><?= $row->subtask_id ?></td>
                                    <td><?= $row->subtask->sub_task_name ?></td>
                                    <td><?= $row->subtask->sub_task_details ?></td>
                                    <td><?= $row->status ?></td>
                                    <td><?= $row->remark ?></td>
                                </tr>
                            <?php elseif ($row->status == 'Ongoing') : ?>
                                <tr style="background-color:#e5863d;">
                                    <td><?= $row->subtask_id ?></td>
                                    <td><?= $row->subtask->sub_task_name ?></td>
                                    <td><?= $row->subtask->sub_task_details ?></td>
                                    <td><?= $row->status ?></td>
                                    <td><?= $row->remark ?></td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td><?= $row->subtask_id ?></td>
                                    <td><?= $row->subtask->sub_task_name ?></td>
                                    <td><?= $row->subtask->sub_task_details ?></td>
                                    <td><?= $row->status ?></td>
                                    <td><?= $row->remark ?></td>
                                </tr>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        <div class="unit-d">
            <div class="unit">
                <h3>Evidence </h3>
            </div>
            
            </div>
        </div>
        <div id="gallery">
            
                <?php if ($photo) : ?>
                    <div style="display:flex;">
                    <?php foreach ($photo as $row) : ?>
                        
                        <a href="<?= ROOT ?>/uploads/<?= $row->file_name ?>">
                            <img style="width:400px; height:auto;" src="<?= ROOT ?>/uploads/<?= $row->file_name ?>" alt="Image ">
                        </a>
                        
                    <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    <p>No Photograph evidence</p>
                <?php endif; ?>
        <?php if ($remark) : ?>
            <div class="unit-d">
                <div class="unit">
                    <h3>Remark from Client :</h3>
                </div>
                <div class="e-id-d">
                    <h4><?= $remark ?></h4>
                </div>
            </div>
        <?php endif; ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lg-thumbnail@1.10.0/dist/lg-thumbnail.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lightGallery(document.getElementById('gallery'), {
                mode: 'lg-fade',
                download: false,
                thumbnail: true
            });
        });
    </script>

    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>