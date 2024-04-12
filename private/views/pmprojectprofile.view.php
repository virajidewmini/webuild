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
</style>
<?= $modification_id = ""; ?>
<div>
    <div class="pro-id">
        <div class="pro-id-details">
            <div class="title-id ind-topic">
                <div class="p-title">
                    <h2 class="">Project ID :</h2>
                </div>
                <div class="p-title-detail">
                    <h2><?= $rows[0]->id ?></h2>
                </div>
            </div>
            <div class="unit-d">
                <div class="unit">
                    <p>Customer Name : </p>
                </div>
                <div class="e-id-d">
                    <p><?= $rows[0]->user->firstname ?> <?= $rows[0]->user->lastname ?></p>
                </div>
            </div>
            <div class="unit-d">
                <div class="unit">
                    <p>Project Manager : </p>
                </div>
                <div class="e-id-d">
                    <p><?= $rows[0]->staff_m->firstname ?> <?= $rows[0]->staff_m->lastname ?></p>
                </div>
            </div>
            <div class="unit-d">
                <div class="unit">
                    <p>Project Supervisor : </p>
                </div>
                <?php if ($rows[0]->staff) : ?>
                    <div class="e-id-d">
                        <p><?= $rows[0]->staff->firstname ?> <?= $rows[0]->staff->lastname ?></p>
                    </div>
                <?php else : ?>
                    <div class="e-id-d">
                        <p style="color:red">Not Assigned</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="unit-d">
                <div class="unit">
                    <p>Start date :</p>
                </div>
                <div class="e-id-d">
                    <p><?= get_date($rows[0]->date) ?></p>
                </div>
            </div>
            <div class="unit-d">
                <div class="unit">
                    <p>Estimate Finishing Date :</p>
                </div>
                <div class="e-id-d">
                    <p><?= get_date($rows[0]->final_date) ?></p>
                </div>
            </div>
            <div class="unit-d">
                <div class="unit">
                    <p>Land Type :</p>
                </div>
                <div class="e-id-d">
                    <p><?= $rows[0]->land_type ?></p>
                </div>
            </div>
            <div class="unit-d">
                <div class="unit">
                    <p>Land ID :</p>
                </div>
                <div class="e-id-d">
                    <p><?= $rows[0]->land_id ?></p>
                </div>
            </div>
            <div class="unit-d">
                <div class="unit">
                    <p>Model Name :</p>
                </div>
                <div class="e-id-d">
                    <p><?= $rows[0]->mdl->name ?></p>
                </div>
            </div>
            <div id="pro_de" class="hidden">
                <div>
                    <h3 class="ind-topic">Model Details</h3>
                    <div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>ID :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->id ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Name :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->name ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>No. Of Rooms :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->no_room ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>No. Of Kitchen :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->no_kitchen ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Flow Plan :</p>
                            </div>
                            <div class="e-id-d">
                                <p></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>No. Of Floars :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->no_floar ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Parking Space In Square Feet :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->parking_space ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Tile ID Of Kitchen :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->kitchen_tile ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Tile ID Of Dining :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->dinien_tile ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Tile ID Of Bathroom :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->bathroom_tile ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Color ID :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->color ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Description :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $rows[0]->mdl->description ?></p>
                            </div>
                        </div>
                    </div>
                    <?php if ($rowk || $rowba || $rowl || $rowbe || $rowd || $rowe) : ?>
                        <h3 class="ind-topic">Modification Details</h3>
                        <div>
                            <?php if ($rowk) : ?>
                                <h4 class="mod-title">Kitchen</h4>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowk[0]->paint->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Code :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowk[0]->paint->color ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowk[0]->tile->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile ID :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowk[0]->tile->id ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if ($rowba) : ?>
                                <h4 class="mod-title">Bathroom</h4>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowba[0]->paint->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Code :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowba[0]->paint->color ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowba[0]->tile->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile ID :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowba[0]->tile->id ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if ($rowl) : ?>
                                <h4 class="mod-title">Living Area</h4>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowl[0]->paint->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Code :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowl[0]->paint->color ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowl[0]->tile->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile ID :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowl[0]->tile->id ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if ($rowbe) : ?>
                                <h4 class="mod-title">Bedroom</h4>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowbe[0]->paint->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Code :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowbe[0]->paint->color ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowbe[0]->tile->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile ID :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowbe[0]->tile->id ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if ($rowd) : ?>
                                <h4 class="mod-title">Dining</h4>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowd[0]->paint->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Code :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowd[0]->paint->color ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowd[0]->tile->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile ID :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowd[0]->tile->id ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if ($rowe) : ?>
                                <h4 class="mod-title">Exterior</h4>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowe[0]->paint->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Color Code :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowe[0]->paint->color ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile Name :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowe[0]->tile->name ?></p>
                                    </div>
                                </div>
                                <div class="unit-d">
                                    <div class="unit">
                                        <p>Tile ID :</p>
                                    </div>
                                    <div class="e-id-d">
                                        <p><?= $rowe[0]->tile->id ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <h3 class="ind-topic">Land Details</h3>
                    <?php if ($row3[0]->land_type == 'user') : ?>
                        <div class="unit-d">
                            <div class="unit">
                                <p>ID :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land_u->id ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Street :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land_u->street ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Town :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land_u->town ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>District :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land_u->ul_district ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Block Plan :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land_u->block_plan ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Area in perch :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land_u->area ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Image :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land_u->image ?></p>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="unit-d">
                            <div class="unit">
                                <p>ID :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->id ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Name :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->name ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Lane :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->lane ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Town :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->town ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>District :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->district ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Area in perch :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->area_in_perch ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Image :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->image ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Block plan :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->block_plan ?></p>
                            </div>
                        </div>
                        <div class="unit-d">
                            <div class="unit">
                                <p>Road map :</p>
                            </div>
                            <div class="e-id-d">
                                <p><?= $row3[0]->land->road_map ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="unit-d" style="display: flex; justify-content: center; align-items: center;">
                <div>
                    <button onclick="toggleDiv()" id="toggleButton" class="add___">More</button>
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
                                        <td><?= $row->coworker->name ?></td>
                                        <td><?= $row->coworker->role ?></td>
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
                                    <tr>
                                        <td><?= $row->task_id ?></td>
                                        <td><?= $row->task->task_name ?></td>
                                        <td><?= $row->status ?></td>
                                    </tr>
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
                                        <td><button id="task_accept" style="background-color:#E5863D; color:#fff;">Accept</button> <button id="task_reject" style="background-color:#f2eaea;">Reject</button></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table">
                <div class="table_header">
                    <h3>Delegated Tasks</h3>
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
                            <?php if ($row8) : ?>
                                <?php foreach ($row8 as $row) : ?>
                                    <tr>
                                        <td><?= $row->task_id ?></td>
                                        <td><?= $row->task->task_name ?></td>
                                        <td></td>
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
                            <?php if ($row7) : ?>
                                <?php foreach ($row7 as $row) : ?>
                                    <tr>
                                        <td><?= $row->id ?></td>
                                        <td><?= $row->task_name ?></td>
                                        <td><?= $row->sub_task_count ?></td>
                                        <td><?= $row->duration_in_days ?></td>
                                        <td>
                                            <a href="<?= ROOT ?>/Pmtask/add/<?= $row->id ?>/<?= $rows[0]->id ?>/">
                                                <button><i class="fa-solid fa-plus"></i></button>
                                            </a>
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
                        <a href="<?= ROOT ?>/Pmmaterial_r/p_thruogh_request/<?= $rows[0]->id ?>/<?= $rows[0]->project_request_id ?>/<?= $rows[0]->mdl->id ?>"><button style="background-color:#E5863D; color:#fff;" class="add___">Request</button></a>
                    </div>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RQT013</td>
                                <td>11/05/2022</td>
                                <td>
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RQT013</td>
                                <td>11/05/2022</td>
                                <td>
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RQT013</td>
                                <td>11/05/2022</td>
                                <td>
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RQT013</td>
                                <td>11/05/2022</td>
                                <td>
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
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
                                            <a href="<?= ROOT ?>/Pmmaterial_r/remaining_request/<?= $row->id ?>/<?= $row->request_id ?>/"><button style="background-color:#E5863D; color:#fff;" class="add___">Request</button></a>
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
                    <h3>To be recieved</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RQT013</td>
                                <td>012</td>
                                <td>
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RQT010</td>
                                <td>009</td>
                                <td>
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RQT009</td>
                                <td>007</td>
                                <td>
                                    <button><i class="fa-solid fa-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table">
                <div class="table_header">
                    <h3>Materials details</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Material ID</th>
                                <th>Material name</th>
                                <th>Mesure unit</th>
                                <th>Available Quantity</th>
                                <th>Used Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MTL001</td>
                                <td>Sand</td>
                                <td>Cube</td>
                                <td>06</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>MTL002</td>
                                <td>6x9 Rock</td>
                                <td>Cube</td>
                                <td>03</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>MTL006</td>
                                <td>Cement</td>
                                <td>Num</td>
                                <td>03</td>
                                <td>6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table">
                <div class="table_header">
                    <h3>Items details</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Item name</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ITM025</td>
                                <td>Concrete pump</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>ITM005</td>
                                <td>Power drill</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>ITM010</td>
                                <td>Wacker</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="pro-id-details">
            <div class="table">
                <div class="title-id">
                    <div class="p-title">
                        <h2 class="ind-topic">Daily Progress Report</h2>
                    </div>
                </div>
                <div class="table_header">
                    <h3>Reports</h3>
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
                                        <td><?= $row->coworker->name ?></td>
                                        <td><?= $row->coworker->role ?></td>
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
    <?php if ($rows2) : ?>

        task_accept.addEventListener('click', async (e) => {
            e.preventDefault();
            await fetch("<?= ROOT ?>/Pmongoingproject/acceptSupervisor/<?= $rows2[0]->id ?>")
            window.location.reload();
        });
    <?php endif; ?>
</script>


<?php $this->view('includes/footer'); ?>