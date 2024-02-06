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

    .unit{
        /* min-width: 150px;
        width: 30%;
        margin: 5px; */
        width: 50%;
        float: left;
        box-sizing: border-box;
        padding: 10px;    
        margin-left: 30%;
    }
    .e-id-d{
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
    .mod-title{
        display: flex;
        justify-content: center;
        align-items: center;
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
                <?php else: ?>
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
                    <?php if ($row3[0]->land_type=='user') : ?>
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
                                <p><?= $row3[0]->land_u->district ?></p>
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
                    <?php else: ?>
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
                <h3></h3>
                <div>
                    <button onclick="toggleDiv()" id="toggleButton" class="add___">More</button>
                </div>
            </div>
        </div>
        <div class="pro-id-details">
        <div class="table">
                <div class="title-id">
                    <div class="p-title">
                        <h2 class="ind-topic">Members</h2>
                    </div>
                </div>
                <?php if($rows[0]->staff) : ?>
                    <div class="unit-d">
                        <div class="unit" style="display:flex;">
                            <h3>Supervisor :  <?= $rows[0]->staff_m->firstname ?> <?= $rows[0]->staff_m->lastname ?> </h3>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="unit-d">
                        <button style="background-color:#E5863D; color:#fff;">Add Supervisor</button>
                    </div>
                <?php endif; ?>
                <div class="table_header">
                    <h3>Co-Workers</h3>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Skill</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
        <div class="pro-id-details" id="mid">
            <div class="title-id">
                <div class="p-title">
                    <h2 class="ind-topic">Task</h2>
                </div>
            </div>
            <div class="table">
                <div class="table_header">
                    <h3>Ongoing And Done Task</h3>
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
                                        <td><?= $row->id ?></td>
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
                                        <td><?= $row->id ?></td>
                                        <td><?= $row->task->task_name ?></td>
                                        <td><button style="background-color:#E5863D; color:#fff;">Accept</button></a> <button style="background-color:#f2eaea;">Reject</button></td>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>

                        </tbody>
                    </table>
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
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
</script>


<?php $this->view('includes/footer'); ?>