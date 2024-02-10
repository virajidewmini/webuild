<!-- 
<?php $this->view('includes/header')?>

<div style="margin-left: 285px;" class="table_header" >
        <h1>  Send Requests</h1>
</div>
    <div class="form_container">
        <form method="post"  class="v_form">
            

            <label class="v_label" id="">Material Name</label>
            <input type="text" name="material_name" id="Material_Name" class="v_form-control" style="height: 50px;" required>

            <label for="description">Material Code</label>
            <input type="text" name="material_code" id="Material_Code" class="v_form-control" style="height: 50px;" required>

            <label class="v_label" id="">Remain Quantity</label>
            <input type="text" name="remain_quantity" id="Remain_Quantity" class="v_form-control" style="height: 50px;" required>

            <label class="v_label" id="">Requsted Quntity</label>
            <input type="text" name="requested_quantity" id="Requested_Quntity" class="v_form-control" style="height: 50px;" required>

            <a href="<?=ROOT?>/maintainrequests"> <button class="v_submit_button" type="submit">Submit</button></a>
           

        </form>
    </div>

<?php $this->view('includes/footer'); ?> -->

//////////////////

<?php $this->view('includes/header')?>

<div style="margin-left: 285px;" class="table_header" >
    <h1>Send Requests</h1>
</div>

<div class="form_container">
    <form method="post" class="v_form">
        <?php foreach ($materials as $material): ?>
            <label class="v_label" id=""><?= $material->MaterialName ?></label>
            <input type="hidden" name="material_id[]" value="<?= $material->MaterialID ?>">
            <input type="hidden" name="material_code[]" value="<?= $material->MaterialCode ?>">
            <input type="hidden" name="remain_quantity[]" value="<?= $material->RemainQuantity ?>">
            <input type="text" name="requested_quantity[]" class="v_form-control" style="height: 50px;" value="<?= $material->RemainQuantity ?>" required>
        <?php endforeach; ?>

        <a href="<?=ROOT?>/maintainrequests"><button class="v_submit_button" type="submit">Submit</button></a>
    </form>
</div>

<?php $this->view('includes/footer'); ?>



