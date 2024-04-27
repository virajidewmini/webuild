<?php if (Auth::getRole() == 'Storekeeper') : ?>
    <?php $this->view('includes/header'); ?>
    <div style="margin-left: 285px;" class="table_header">
        <h1>Send Requests</h1>
    </div>
    <div class="form_container">
        <form method="post" class="v_form">
            <?php if($rows): ?>
            <label class="v_label" id="">Material Or Equipment ID</label>
            <input type="text" name="material_id" id="material_id" class="v_form-control" style="height: 50px;" value="<?= $rows[0]->id ?>" readonly>
            <label class="v_label" id="">Material Or Equipment</label>
            <input type="text" name="material_name" id="Material_Name" class="v_form-control" style="height: 50px;" value="<?= $rows[0]->material_name ?>" readonly>
            <label for="description">Material Or Equipment Code</label>
            <input type="text" name="material_code" id="Material_Code" class="v_form-control" style="height: 50px;" value="<?= $rows[0]->material_code ?>" readonly>
            <label class="v_label" id="">Remain Quantity</label>
            <input type="text" name="remain_quantity" id="Remain_Quantity" class="v_form-control" style="height: 50px;" value="<?= $rows[0]->remain_quantity ?>" readonly>
            <label class="v_label" id="">Requested Quantity</label>
            <input type="text" name="requested_quantity" id="Requested_Quantity" class="v_form-control" style="height: 50px;" required>
            <input style="display:none" name="status" value="Pending"  >

            <?php print_r($_POST); ?>

            <button class="v_submit_button" type="submit">Submit</button>
            <!-- <button class="v_submit_button" type="submit">Submit</button> -->
            <?php endif; ?>
        </form>
    </div>
    <?php $this->view('includes/footer'); ?>
<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>