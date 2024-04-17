<?php $this->view('includes/header') ?>
<style>
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

    .in_a_c:hover {
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.4);
    }

    .in_a_c:active {
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
    }

    .sub {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div style="margin-left: 285px;" class="table_header">
    <h1>Add Quotation PDF</h1>
</div>
<div class="form_container">
    <form method="post" class="v_form" enctype="multipart/form-data">

        <div class="unit-d">
            <div class="unit">
                <p>Date :</p>
            </div>
            <div class="e-id-d">
                <input readonly required value="<?= date("Y-m-d") ?>" type="email">
            </div>
        </div>
        <div class="unit-d">
            <div class="unit">
                <p>Select files :</p>
            </div>
            <div class="e-id-d">
                <input required type="file" name="files[]" id="files" accept="application/pdf/*">
            </div>
        </div>
        <div class="sub">
            <a href=""> <button class="in_a_c" style="color:white; background-color: #E5863D" type="submit">Submit</button></a>
        </div>


        <div class="hide" style="display:none">
            <div class="column">
                <label for="user_id">Customer ID :</label>
                <input readonly type="text" name="user_id" value="<?= $rows[0]->user_id ?>">
            </div>
            <div class="column">
                <label for="lastName">Customer Name :</label>
                <input readonly type="text" value="<?= $rows[0]->user->firstname ?> <?= $rows[0]->user->lastname ?>">
            </div>
            <div class="column">
                <label for="manager_id">Project Manager ID :</label>
                <input readonly type="text" name="manager_id" value="<?= $rows[0]->manager_id ?>">
            </div>
            <div class="column">
                <label for="lastName">Project Manager Name :</label>
                <input readonly type="text" id="occupation" value="<?= $rows[0]->staff->firstname ?> <?= $rows[0]->staff->lastname ?>">
            </div>
            <div class="column">
                <label for="request_id">Request ID: :</label>
                <input readonly type="text" id="request_id" name="request_id" value="<?= $rows[0]->id ?>">
            </div>
            <div class="column">
                <label for="modification_id">Modification ID: :</label>
                <input readonly type="text" id="occupation" name="modification_id" value="<?= $rows[0]->modification_id ?>">
            </div>
            <div class="column">
                <label for="model_id">Model ID: :</label>
                <input readonly type="text" name="model_id" id="occupation" value="<?= $rows[0]->model_id ?>">
            </div>
            <div class="column">
                <label for="model_name">Model Name :</label>
                <input readonly type="text" id="occupation" value="<?= $rows[0]->mdl->name ?>">
            </div>
            <div class="column">
                <label for="payment_package_id">Payment Package ID: :</label>
                <input readonly type="text" name="payment_package_id" id="occupation" value="<?= $rows[0]->payment_plan_id ?>">
            </div>
            <div class="column">
                <label for="payment_package_name">Payment Package Name: :</label>
                <input readonly type="text" value="<?= $rows[0]->payment->name ?>">
            </div>
            <div class="column">
                <label for="payment_package_id">Payment Package ID: :</label>
                <input readonly type="text" name="totalprice" id="occupation" value="<?= $price ?>">
            </div>
        </div>


    </form>
<?php print_r($_POST) ?>
</div>

<?php $this->view('includes/footer'); ?>