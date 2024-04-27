<?php $this->view('includes/header') ?>
<style>
    .pro-id {
        display: flex;
        padding: 0 0 20px 0;
        border-radius: 20px;
        width: 100%;
        height: auto;
    }

    .pro-id-details {
        width: 100%;
    }

    .title-id {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        width: 100%;
    }

    .p-title {
        min-width: 200px;
        width: 20%;
        margin: 10px 0 0 20px;
    }

    .p-title-detail {
        margin-top: 5%;
    }

    .unit-d {

        display: flex;
        align-items: center;
        margin-left: 5%;
        margin-bottom: 10px;
    }

    .unit {
        min-width: 150px;
        width: 30%;
        margin: 5px;
    }

    .table_header {
        width: 100%;
        height: auto;
    }

    .task_d::placeholder {
        color: black;
    }

    .task_d {
        border: 1px solid black;
        border-radius: 7px;
        padding: 10px 10px 10px 20px;
        margin-left: 10px;
        width: 300px;
        height: 100px;
    }

    .in_a_c:hover {
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
    }

    .in_a_c:active {
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
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
    .subtask_id{
        width:60px;
        text-align: center;
    }
</style>
<?php if ($row) : ?>
    <div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">
        <div class="pro-id" style="padding: 0 0 40px 0; ">

            <div class="pro-id-details">


                <form method="post">
                    <div class="table">
                        <h2 style="margin-bottom: 20px">ADD TASK</h2>
                        <?php if (count($errors) > 0) : ?>
                            <div class="popup-overlay"></div> <!-- Add overlay -->
                            <div class="popup-container">
                                <strong><i style="color: red; font-size: 80px; margin:10px 0 10px 0 ;" class="fa-solid fa-circle-exclamation"></i></strong>
                                <?php foreach ($errors as $error) : ?>
                                    <br>
                                    <h3 style="margin-bottom:10px;"><?= $error ?></h3>
                                <?php endforeach; ?>
                                <br><button style="background-color: #E5863D; color:#ffffff;" type="button" class="btn-close">OK</button>
                            </div>
                        <?php endif; ?>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Project ID :</p>
                            </div> 
                            <div class="e-id-d">
                                    <input readonly name="project_id" value="<?= $project_id ?>" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Task ID :</p>
                            </div>
                            <div class="e-id-d">
                                <input readonly value="<?= get_var('task_id', $row[0]->task_id) ?>" type="text" name="task_id">
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Task Name :</p>
                            </div>
                            <div class="e-id-d">
                                <input readonly value="<?= get_var('task_name', $row[0]->task->task_name) ?>" type="text">
                            </div>
                        </div>
                        <div class="table_header">
                            <h3>Sub Task Details</h3>
                        </div>
                        <div class="table_section">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sub Task ID</th>
                                        <th>Sub Task Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($row) : ?>
                                        <?php foreach ($row as $row) : ?>
                                            <tr>
                                                <td><input readonly class="subtask_id" value="<?= $row->id ?>" type="text" name="subtask_id[]"></td>
                                                <td><input readonly value="<?= $row->sub_task_name ?>" type="text" ></td>
                                                <td><?= $row->sub_task_details ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <h3>No tasks were found at this time</h3>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="table_header" style="align-items: center;">
                        <a href="<?= ROOT ?>/pmtask">
                            <input class="in_a_c" style="border:1px solid #E5863D; color:#E5863D" type="button" value="Cancel">
                        </a>
                        <input class="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Add">
                    </div>
                </form>
            </div>

        </div>
    </div>
<?php endif; ?>
 

<?php $this->view('includes/footer'); ?>