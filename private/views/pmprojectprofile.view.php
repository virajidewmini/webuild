<?php $this->view('includes/header') ?>

<style>
    .pro-id {
        background-color: white;
        padding: 0 0 20px 0;
        border-radius: 20px;
    }

    .pro-id-details {
        width: 100%;
    }

    .title-id {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .p-title {
        min-width: 120px;
        width: 20%;
        margin: 30px 0 0 30px;
    }

    .p-title-detail {
        margin-top: 30px;
    }

    .unit-d {
        display: flex;
        justify-content: center;
        align-content: center;


    }

    .unit {
        /* min-width: 150px;
        width: 30%;
        margin: 5px; */
        width: 50%;
        float: left;
        box-sizing: border-box;
        padding: 10px;
        margin-left: 30%;
    }

    .e-id-d {
        width: 50%;
        float: right;
        box-sizing: border-box;
        padding: 10px;
        margin-right: 20%;
    }

    .add___ {
        background-color: aliceblue;
        color: #E5863D;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
    }

    .table {
        padding: 20px;
    }

    th {
        position: sticky;
        top: 0;
    }

    .table_section {
        max-height: 500px;
        overflow-y: scroll;

        margin: 1px;
    }

    #pro_de {
        padding: 10px;
        margin-top: 10px;
    }

    .hidden {
        display: none;
    }

    #mid {
        margin-top: 20px;
    }

    .ind-topic {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .mod-title {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fff;
    }

    .container .progress-container {
        margin-bottom: 25px;
    }

    .container .progress-container h4 {
        margin: 0 0 15px 15px;
        letter-spacing: .5px;
    }

    .container .progress-container .progress-bar {
        position: relative;
        width: 500px;
        height: 40px;
        border-radius: 30px;
        background-color: white;
        box-shadow: 3px 4px 5px 0px rgba(204 185 185 / .75);
    }

    .container .progress-container .progress-bar span {
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        color: white;
        font-weight: 800;
        font-size: 18px;
        line-height: 2.2;
        text-align: center;
        border-radius: 30px;
        background: linear-gradient(90deg, rgba(255, 152, 0, 1) 50%, rgba(255, 193, 7, 1) 100%);
        transition: width .5s linear;
    }

    .modi_top {
        margin-top: 20px;
    }
</style>
<?= $modification_id = ""; ?>
<div>
    <div class="pro-id">
        <div class="title-id ind-topic">
            <div class="p-title">
                <h2 class="">Project ID :</h2>
            </div>
            <div class="p-title-detail">
                <h2><?= $project_id ?></h2>
            </div>
        </div>

        <div class="form_container">

            <fieldset style="padding:10px;" class="FormFieldset">
                <legend class="Formlegend"> Project Details</legend>

                <div class="form-group">
                    <br>

                    <div class="column">
                        <label for="firstname">Customer Name :</label>
                        <input type="text" name="customer_name" value="<?= $rows[0]->user->firstname ?> <?= $rows[0]->user->lastname ?>">
                    </div>
                    <div class="column">
                        <label for="lastName">Project Manager :</label>
                        <input type="text" value="<?= $rows[0]->staff_m->firstname ?> <?= $rows[0]->staff_m->lastname ?>">
                    </div>
                    <div class="column">
                        <label for="occupation">Project Supervisor :</label>
                        <?php if ($rows[0]->staff) : ?>
                            <input type="text" id="occupation" name="occupation" value="<?= $rows[0]->staff->firstname ?> <?= $rows[0]->staff->lastname ?>">
                        <?php else : ?>
                            <input style="color:red" type="text" id="occupation" name="occupation" value="Not Assigned">
                        <?php endif; ?>
                    </div>
                    <div class="column">
                        <label for="lastName">Start date :</label>
                        <input type="text" id="occupation" name="occupation" value="<?= get_date($rows[0]->date) ?>">

                    </div>
                    <div class="column">
                        <label for="occupation">Estimate Finishing Date :</label>
                        <input type="text" id="contactnumber" name="contactnumber" value="<?= get_date($rows[0]->final_date) ?>">
                    </div>
                    <div class="column">
                        <label for="lastName">Model Name :</label>
                        <input type="text" id="occupation" name="occupation" value="<?= $rows[0]->mdl->name ?>">
                    </div>

                </div>
            </fieldset>
            <div id="pro_de" class="hidden">
                <fieldset style="padding:10px;" class="FormFieldset">
                    <legend class="Formlegend">Model Details</legend>

                    <div class="form-group">
                        <br>

                        <div class="column">
                            <label for="firstname">ID :</label>
                            <input type="text" name="customer_name" value="<?= $rows[0]->mdl->id ?>">
                        </div>
                        <div class="column">
                            <label for="lastName">Name :</label>
                            <input type="text" value="<?= $rows[0]->mdl->name ?>">
                        </div>
                        <div class="column">
                            <label for="occupation">No. Of Rooms :</label>
                            <input type="text" id="occupation" name="occupation" value="<?= $rows[0]->mdl->no_room ?>">
                        </div>
                        <div class="column">
                            <label for="lastName">No. Of Kitchen :</label>
                            <input type="text" id="occupation" name="occupation" value="<?= $rows[0]->mdl->no_kitchen ?>">

                        </div>
                        <div class="column">
                            <label for="occupation">Flow Plan :</label>
                            <input type="text" id="contactnumber" name="contactnumber" value="<?= get_date($rows[0]->final_date) ?>">
                        </div>
                        <div class="column">
                            <label for="lastName">No. Of Floars :</label>
                            <input type="text" id="occupation" name="occupation" value="<?= $rows[0]->mdl->no_floor ?>">
                        </div>
                        <div class="column">
                            <label for="lastName">Description :</label>
                            <textarea style="height:200px; width: 400px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:20px; padding:10px;" type="text" id="occupation" name="occupation" value=""><?= $rows[0]->mdl->description ?></textarea>
                        </div>
                        <div class="column">
                            <label for="lastName">Parking Space In Square Feet :</label>
                            <input type="text" id="occupation" name="occupation" value="<?= $rows[0]->mdl->parking_space ?>">
                        </div>

                    </div>
                </fieldset>
                <br>
                <?php if ($rowk || $rowba || $rowl || $rowbe || $rowd || $rowe) : ?>
                    <fieldset class="FormFieldset">
                        <legend class="Formlegend"> Modification Details</legend>

                        <div class="form-group">
                            <?php if ($rowba) : ?>
                                <fieldset style="margin:10px;padding:10px;" class="FormFieldset">
                                    <legend style="color:black;" class="Formlegend"><b>Bathroom</b></legend>
                                    <div class="column">
                                        <label for="firstname">Color Code :</label>
                                        <input type="text" name="customer_name" value="<?= $rowba[0]->paint->color ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Color Name :</label>
                                        <input type="text" value="<?= $rowba[0]->paint->name ?>">
                                    </div>
                                    <div class="column">
                                        <label for="firstname">Tile ID :</label>
                                        <input type="text" name="customer_name" value="<?= $rowba[0]->tile->id ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Tile Name :</label>
                                        <input type="text" value="<?= $rowba[0]->tile->name ?>">
                                    </div>
                                </fieldset>
                            <?php endif; ?>
                            <?php if ($rowl) : ?>
                                <fieldset style="margin:10px;padding:10px;" class="FormFieldset">
                                    <legend style="color:black;" class="Formlegend"><b>Living Room</b></legend>
                                    <div class="column">
                                        <label for="firstname">Color Code :</label>
                                        <input type="text" name="customer_name" value="<?= $rowl[0]->paint->color ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Color Name :</label>
                                        <input type="text" value="<?= $rowl[0]->paint->name ?>">
                                    </div>
                                    <div class="column">
                                        <label for="firstname">Tile ID :</label>
                                        <input type="text" name="customer_name" value="<?= $rowl[0]->tile->id ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Tile Name :</label>
                                        <input type="text" value="<?= $rowl[0]->tile->name ?>">
                                    </div>
                                </fieldset>
                            <?php endif; ?>
                            <?php if ($rowbe) : ?>
                                <fieldset style="margin:10px;padding:10px;" class="FormFieldset">
                                    <legend style="color:black;" class="Formlegend"><b>Bedroom</b></legend>
                                    <div class="column">
                                        <label for="firstname">Color Code :</label>
                                        <input type="text" name="customer_name" value="<?= $rowbe[0]->paint->color ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Color Name :</label>
                                        <input type="text" value="<?= $rowbe[0]->paint->name ?>">
                                    </div>
                                    <div class="column">
                                        <label for="firstname">Tile ID :</label>
                                        <input type="text" name="customer_name" value="<?= $rowbe[0]->tile->id ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Tile Name :</label>
                                        <input type="text" value="<?= $rowbe[0]->tile->name ?>">
                                    </div>
                                </fieldset>
                            <?php endif; ?>
                            <?php if ($rowd) : ?>
                                <fieldset style="margin:10px;padding:10px;" class="FormFieldset">
                                    <legend style="color:black;" class="Formlegend"><b>Dining</b></legend>
                                    <div class="column">
                                        <label for="firstname">Color Code :</label>
                                        <input type="text" name="customer_name" value="<?= $rowd[0]->paint->color ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Color Name :</label>
                                        <input type="text" value="<?= $rowd[0]->paint->name ?>">
                                    </div>
                                    <div class="column">
                                        <label for="firstname">Tile ID :</label>
                                        <input type="text" name="customer_name" value="<?= $rowd[0]->tile->id ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Tile Name :</label>
                                        <input type="text" value="<?= $rowd[0]->tile->name ?>">
                                    </div>
                                </fieldset>
                            <?php endif; ?>
                            <?php if ($rowe) : ?>
                                <fieldset style="margin:10px;padding:10px;" class="FormFieldset">
                                    <legend style="color:black;" class="Formlegend"><b>Exterior</b></legend>
                                    <div class="column">
                                        <label for="firstname">Color Code :</label>
                                        <input type="text" name="customer_name" value="<?= $rowe[0]->paint->color ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Color Name :</label>
                                        <input type="text" value="<?= $rowe[0]->paint->name ?>">
                                    </div>
                                    <div class="column">
                                        <label for="firstname">Tile ID :</label>
                                        <input type="text" name="customer_name" value="<?= $rowe[0]->tile->id ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Tile Name :</label>
                                        <input type="text" value="<?= $rowe[0]->tile->name ?>">
                                    </div>
                                </fieldset>
                            <?php endif; ?>
                            <?php if ($rowk) : ?>
                                <fieldset style="margin:10px;padding:10px;" class="FormFieldset">
                                    <legend style="color:black;" class="Formlegend"><b>Kitchen</b></legend>
                                    <div class="column">
                                        <label for="firstname">Color Code :</label>
                                        <input type="text" name="customer_name" value="<?= $rowk[0]->paint->color ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Color Name :</label>
                                        <input type="text" value="<?= $rowk[0]->paint->name ?>">
                                    </div>
                                    <div class="column">
                                        <label for="firstname">Tile ID :</label>
                                        <input type="text" name="customer_name" value="<?= $rowk[0]->tile->id ?>">
                                    </div>
                                    <div class="column">
                                        <label for="lastName">Tile Name :</label>
                                        <input type="text" value="<?= $rowk[0]->tile->name ?>">
                                    </div>
                                </fieldset>
                            <?php endif; ?>
                        </div>
                    </fieldset>
                    <br>
                <?php endif; ?>
                <fieldset style="padding:10px;" class="FormFieldset">
                    <legend class="Formlegend">Land Details</legend>

                    <div class="form-group">
                        <br>
                        <?php if ($row3[0]->land_type == 'user') : ?>
                            <div class="column">
                                <label for="firstname">ID :</label>
                                <input type="text" name="customer_name" value="<?= $row3[0]->land_u->id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Street :</label>
                                <input type="text" value="<?= $row3[0]->land_u->street ?>">
                            </div>
                            <div class="column">
                                <label for="occupation">Town :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land_u->town ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">District :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land_u->ul_district ?>">

                            </div>
                            <div class="column">
                                <label for="occupation">Block Plan :</label>
                                <input type="text" id="contactnumber" name="contactnumber" value="<?= $row3[0]->land_u->block_plan ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Area in perch :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land_u->area ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Image :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land_u->image ?>">
                            </div>
                        <?php else : ?>
                            <div class="column">
                                <label for="lastName">ID :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Name :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->name ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Lane :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->lane ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Town :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->town ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">District :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->district ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Area in perch :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->area_in_perch ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Image :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->block_plan ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Block plan :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->town ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Road map :</label>
                                <input type="text" id="occupation" name="occupation" value="<?= $row3[0]->land->road_map ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </fieldset>

            </div>
            <div class="unit-d" style="display: flex; justify-content: center; align-items: center;">
                <div>
                    <button onclick="toggleDiv()" id="toggleButton" class="add___" style="margin-top:20px">More</button>
                </div>
            </div>
        </div>
        <div class="pro-id-details">
            <div class="title-id">
                <div class="p-title">
                    <h2 class="ind-topic">Progress</h2>
                </div>
            </div>
            <div class="container">
                <div class="progress-container">
                    <h3>Project Progress</h3>
                    <div class="progress-bar">
                        <span id="p_progress" data-width="<?= (int)(($row6[0]->total_progress) / ($row4[0]->task_count)) ?>%"></span>
                    </div>
                </div>
            </div>
            <div class="title-id">
                <div class="p-title">
                    <h3 class="ind-topic">Tasks Progress</h3>
                </div>
            </div>
            <?php if ($row5) : ?>
                <?php foreach ($row5 as $row) : ?>
                    <?php if ($row->status == 'Done') : ?>
                        <div class="container">
                            <div class="progress-container">
                                <h4><?= $row->task->task_name ?></h4>
                                <div class="progress-bar">
                                    <span style="background:linear-gradient(90deg, rgba(0, 128, 0, 1) 50%, rgba(0, 255, 0, 1) 100%);
" data-width="<?= $row->progress ?>%"></span>
                                </div>
                            </div>
                        </div>
                    <?php elseif (($row->status == 'Complete') || ($row->status == 'Ongoing')) : ?>
                        <div class="container">
                            <div class="progress-container">
                                <h4><?= $row->task->task_name ?></h4>
                                <div class="progress-bar">
                                    <span data-width="<?= $row->progress ?>%"></span>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($row->status == 'Pending') : ?>
                        <div class="container">
                            <div class="progress-container">
                                <h4><?= $row->task->task_name ?></h4>
                                <div style="background-color: grey;" class="progress-bar">
                                    <span style="color: grey;" data-width="<?= $row->progress ?>%"></span>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($row->status == 'Suspend') : ?>
                        <div class="container">
                            <div class="progress-container">
                                <h4><?= $row->task->task_name ?></h4>
                                <div class="progress-bar">
                                    <span style="background:linear-gradient(90deg, rgba(200, 0, 0, 1) 50%, rgba(255, 0, 0, 1) 100%)
;" data-width="<?= $row->progress ?>%"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="pro-id-details">
            <div class="table">
                <div class="title-id">
                    <div class="p-title">
                        <h2 class="ind-topic">Members</h2>
                    </div>
                </div>
                <?php if ($rows[0]->staff) : ?>
                    <div class="">
                        <div class="" style="margin:0 0 20px 5px;">
                            <h3>Supervisor : <?= $rows[0]->staff->firstname ?> <?= $rows[0]->staff->lastname ?> </h3>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="unit-d">
                        <?php if ($row3[0]->land_type == 'user') : ?>
                            <a href="<?= ROOT ?>/Pmmember_search/<?= $row3[0]->land_u->district ?>/<?= $rows[0]->id ?>/"><button style="background-color:#E5863D; color:#fff; margin-bottom 10px;">Add Supervisor</button></a>
                        <?php else : ?>
                            <a href="<?= ROOT ?>/Pmmember_search/<?= $row3[0]->land->district ?>/<?= $rows[0]->id ?>/"><button style="background-color:#E5863D; color:#fff; margin-bottom 10px;">Add Supervisor</button></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="table_header">
                    <h3>Co-Workers</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Skill</th>
                                <th>Task ID</th>
                                <th>Task Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($row9) : ?>
                                <?php foreach ($row9 as $row) : ?>
                                    <tr>
                                        <td><?= $row->emp_id ?></td>
                                        <td><?= $row->co->name ?></td>
                                        <td><?= $row->co->role ?></td>
                                        <td><?= $row->task_id ?></td>
                                        <td><?= $row->task->task_name ?></td>
                                        <td><?= get_date($row->start_date) ?></td>
                                        <td><?= get_date($row->end_date) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="pro-id-details" id="mid">
            <div class="title-id">
                <div class="">
                    <h2 class="ind-topic">Tasks</h2>
                </div>
            </div>
            <div class="table">
                <div class="table_header">
                    <h3>Tasks</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Task ID</th>
                                <th>Task Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($rows1) : ?>
                                <?php foreach ($rows1 as $row) : ?>
                                    <?php if ($row->status == 'Done') : ?>
                                        <tr style="background-color:#1fd655;">
                                            <td><?= $row->task_id ?></td>
                                            <td><?= $row->task->task_name ?></td>
                                            <td><?= $row->status ?></td>
                                        </tr>
                                    <?php elseif ($row->est_end_date < date('Y-m-d')) : ?>
                                        <tr style="background-color:#ff0000;">
                                            <td><?= $row->task_id ?></td>
                                            <td><?= $row->task->task_name ?></td>
                                            <td><?= $row->status ?></td>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <td><?= $row->task_id ?></td>
                                            <td><?= $row->task->task_name ?></td>
                                            <td><?= $row->status ?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table">
                <div class="table_header">
                    <h3>Completed Tasks</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Task ID</th>
                                <th>Task Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($rows2) : ?>
                                <?php foreach ($rows2 as $row) : ?>
                                    <tr>
                                        <td><?= $row->task_id ?></td>
                                        <td><?= $row->task->task_name ?></td>
                                        <td><a href="<?= ROOT ?>/Pmongoingproject/AcceptTask/<?= $project_id ?>/<?= $row->task_id ?>/"><button id="task_accept" style="background-color:#E5863D; color:#fff;">Accept</button></a> <a href="<?= ROOT ?>/Pmongoingproject/RejectTask/<?= $project_id ?>/<?= $row->task_id ?>/"><button id="" style="background-color:#f2eaea;">Reject</button></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table">
                <div class="table_header">
                    <h3>To Do Tasks</h3>
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
                            <?php if ($row7) :?>
                                <?php foreach ($row7 as $row) : ?>
                                    <tr>
                                        <td><?= $row->id ?></td>
                                        <td><?= $row->task_name ?></td>
                                        <td><?= $row->sub_task_count ?></td>
                                        <td><?= $row->duration_in_days ?></td>
                                        <td>
                                            <?php if ($row5) : ?>
                                                <?php if (($row7[0]->id == $row->id && $rows19[0]->progress > 80)) : ?>
                                                    <a href="<?= ROOT ?>/Pmtask/add/<?= $row->id ?>/<?= $rows[0]->id ?>/">
                                                        <button><i class="fa-solid fa-plus"></i></button>
                                                    </a>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                <?php if ($row7[0]->id == $row->id) : ?>
                                                    <a href="<?= ROOT ?>/Pmtask/add/<?= $row->id ?>/<?= $rows[0]->id ?>/">
                                                        <button><i class="fa-solid fa-plus"></i></button>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="pro-id-details">
            <h2 style="margin:0 0 20px 20px">MATERIALS</h2>
            <div class="table">
                <div class="table_header">
                    <h3>Sent request</h3>
                    <div>
                        <a href="<?= ROOT ?>/Pmmaterial_r"><button style="background-color:#E5863D; color:white;" class="add___">Request</button></a>
                    </div>
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
                        <?php if ($rows5) : ?>
                            <?php foreach ($rows5 as $row) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $row->project_id; ?></td>
                                        <td><?= $row->request_id; ?></td>
                                        <td><?= $row->level; ?></td>
                                        <td><?= $row->r_date; ?></td>
                                        <td>
                                            <a href="<?= ROOT ?>/Pmmaterial/request_view/<?= $row->request_id; ?>"><button><i class="fa-solid fa-eye"></i></button></a>
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
                    <h3>Remaining</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Quatation ID</th>
                                <th>Level</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($row10) : ?>
                                <?php foreach ($row10 as $row) : ?>
                                    <tr>
                                        <td><?= $row->request_id ?></td>
                                        <td><?= $row->id ?></td>
                                        <td><?= $row->req->level ?></td>
                                        <td>
                                            <a href="<?= ROOT ?>/Pmmaterial_r/remaining_request/<?= $row->id ?>/<?= $row->request_id ?>/"><button style="background-color:#E5863D; color:white;" class="add___">Request</button></a>
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
                    <h3>To Recieve</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Request ID</th>
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
                                        <td><?= $row->level; ?></td>
                                        <td>
                                            <a href="<?= ROOT ?>/Pmmaterial/request_view/<?= $row->request_id; ?>"><button><i class="fa-solid fa-eye"></i></button></a>
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
                                        <td><?= $row->level; ?></td>
                                        <td>
                                            <a href="<?= ROOT ?>/Pmmaterial/request_view/<?= $row->request_id; ?>"><button><i class="fa-solid fa-eye"></i></button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        <?Php endif; ?>
                    </table>
                </div>
            </div>
        </div>
        <?php if ($rows17) : ?>
            <div class="pro-id-details">
                <div class="table">
                    <div class="title-id">
                        <div class="p-title">
                            <h2 class="ind-topic">Complaints</h2>
                        </div>
                    </div>
                    <div class="table_section">
                        <table>
                            <thead>
                                <tr>
                                    <th>Project ID</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rows17 as $row) : ?>
                                    <tr>
                                        <td><?= $row->project_id ?></td>
                                        <td><?= $row->type ?></td>
                                        <td><?= $row->description ?></td>
                                        <td><?= $row->date ?></td>
                                        <td><?= $row->status ?></td>
                                        <td>
                                            <a href="<?= ROOT ?>/Pmcomplaint/man_view_complaint/<?= $row->id ?>"><button><i class="fa-solid fa-eye"></i></button></a>



                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($rows18) : ?>
            <div class="pro-id-details">
                <div class="table">
                    <div class="title-id">
                        <div class="p-title">
                            <h2 class="ind-topic">Daily Progress Report</h2>
                        </div>
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

                                <?php foreach ($rows18 as $row) : ?>
                                    <tr>
                                        <td><?= $row->date ?></td>
                                        <td><?= $row->comment ?></td>
                                        <td>

                                            <a href="<?= ROOT ?>/Pmdailyreports/viewDPR/<?= $row->project_id ?>/<?= $row->date ?>/"><button><i class="fa-solid fa-eye"></i></button></a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>
<script>
    const task_accept = document.getElementById('task_accept');

    function toggleDiv() {

        var myDiv = document.getElementById("pro_de");
        var toggleButton = document.getElementById("toggleButton");

        myDiv.classList.toggle("hidden");

        if (myDiv.classList.contains("hidden")) {
            toggleButton.innerHTML = "More";
        } else {
            toggleButton.innerHTML = "Less";
        }
    }

    const spans = document.querySelectorAll('.progress-bar span');

    spans.forEach((span) => {
        span.style.width = span.dataset.width;
        span.innerHTML = span.dataset.width;
    });
</script>


<?php $this->view('includes/footer'); ?>