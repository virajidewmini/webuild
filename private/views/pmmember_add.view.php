<?php $this->view('includes/header') ?>
<style>
    .pro-id {
        background-color: white;
        display: flex;
        padding: 0 0 20px 0;
        border-radius: 20px;
        width: 90%;
        max-width: 700px;
        height: auto;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
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
</style>
<?php if ($rows) : ?>
    <div style="display:flex; flex-direction: row; justify-content: center; padding: 0 0 40px 0; ">
        <div class="pro-id" style="padding: 0 0 40px 0; ">

            <div class="pro-id-details">
                <form method="post">
                    <div class="title-id" style="display:flex; justify-content:center; padding-top:5px;">
                        <div class="p-title">
                            <h3>Project Details</h3>
                        </div>
                    </div>
                    <fieldset style="padding:10px; margin:10px" class="FormFieldset">
                        <legend class="Formlegend">Details</legend>

                        <div class="form-group">
                            <br>

                            <div class="column">
                                <label for="firstname">Project ID :</label>
                                <input readonly type="text" name="id" value="<?= $rows[0]->id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Request ID :</label>
                                <input readonly type="text" value="<?= $rows[0]->project_request_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Project Manager ID :</label>
                                <input readonly type="text" value="<?= $rows[0]->manager_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Project Manager Name :</label>
                                <input readonly type="text" value="<?= $rows[0]->staff_m->firstname ?> <?= $rows[0]->staff_m->lastname ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Project Supervisor ID :</label>
                                <input readonly type="text" name="supervisor_id" value="<?= $uid ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Project Supervisor Name :</label>
                                <input readonly type="text" value="<?= $fname ?> <?= $lname ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Customer ID :</label>
                                <input readonly type="text" name="user_id" value="<?= $rows[0]->user_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Customer Name :</label>
                                <input readonly type="text" value="<?= $rows[0]->user->firstname ?> <?= $rows[0]->user->lastname ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Modification ID :</label>
                                <input readonly type="text"  value="<?= $rows[0]->	modification_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Quotation ID :</label>
                                <input readonly type="text"  value="<?= $q_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Model ID :</label>
                                <input readonly type="text"  value="<?= $rows[0]->model_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Model Name :</label>
                                <input readonly type="text" value="<?= $rows[0]->mdl->name ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Payment Plan ID :</label>
                                <input readonly type="text"  value="<?= $rows[0]->	payment_package_id ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Payment Plan Name :</label>
                                <input readonly type="text" value="<?= $rows[0]->payment->name ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">Start Date :</label>
                                <input readonly type="date"
                                Name="date" value="<?= date("Y-m-d", strtotime("+7 days")) ?>">
                            </div>
                            <div class="column">
                                <label for="lastName">EstimateFinal Date :</label>
                                <input readonly type="date"
                                Name="final_date"  value="<?= date("Y-m-d", strtotime(" +$months months +7 days")) ?>">
                            </div>


                        </div>
                    </fieldset>
                    <?php print_r($_POST) ?>
                    <div class="table_header" style="align-items: center; background-color:white">
                        <a href="<?= ROOT ?>/pmmember_search">
                            <input class="in_a_c" style="border:none; color:#E5863D" type="button" value="Cancel">
                        </a>
                        <input class="in_a_c" style="border:none; background-color:#E5863D; color:white" type="submit" value="Start">
                    </div>
                </form>

            </div>

        </div>
    </div>
<?php endif; ?>
<script>
    console.log(window.location.href)
    console.log("")
</script>
<?php $this->view('includes/footer'); ?>