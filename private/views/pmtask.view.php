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
    </style>
    <?php $message = ""; ?>

    <div class="table">
        <h2 style="margin-bottom: 20px">TASKS</h2>
        <div class="table_header">
            <h3>On going task</h3>
            <?php if (isset($_GET['message'])) {
                // Retrieve the value of the 'id' parameter
                $message = $_GET['message'];
                // Now $id contains the value passed from the previous page
            } ?>
            <?php if ($message) : ?>
                <div class="popup-overlay"></div> <!-- Add overlay -->
                <div class="popup-container">
                    <strong><i style="color: green; font-size: 80px; margin:10px 0 10px 0 ;" class="fa-solid fa-circle-check"></i></strong>
                    <br>
                    <h3 style="margin-bottom:10px;"><?= $message ?></h3>
                    <br><button style="background-color: #E5863D; color:#ffffff;" type="button" class="btn-close">OK</button>
                </div>
            <?php endif; ?>
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
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
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
                    <?php if ($rows) : ?>
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= $row->task_name ?></td>
                                <td><?= $row->sub_task_count ?></td>
                                <td><?= $row->duration_in_days ?></td>
                                <td>
                                    <a href="<?= ROOT ?>/Pmtask/add/<?= $row->id ?>">
                                        <button><i class="fa-solid fa-plus"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <h3>No tasks were found at this time</h3>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
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