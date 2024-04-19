<?php if(Auth::getRole() == 'Storekeeper'): ?>
<?php $this->view('includes/header'); ?>
<div style="margin-left: 285px;" class="table_header">
    <h1>Material Restore</h1>
</div>
<div class="form_container">
    <form method="post" class="v_form">
        <label class="v_label" id="material_name_label">Material Name</label>
        <select name="material_name" id="material_name" class="v_form-control" style="height: 50px;" required>
            <?php foreach ($materialNames as $material): ?>
                <option value="<?=$material['material_name']?>"><?=$material['material_name']?></option>
            <?php endforeach; ?>
        </select>
        <label class="v_label" id="remain_quantity_label">Remain Quantity</label>
        <input type="text" name="total_quantity" id="total_quantity" class="v_form-control" style="height: 50px;" readonly required>
        <label class="v_label" id="refill_quantity_label">Refill Quantity</label>
        <input type="text" name="refill_quantity" id="refill_quantity" class="v_form-control" style="height: 50px;" required>
        <button class="v_submit_button" type="submit">Submit</button>
    </form>
</div>
<?php $this->view('includes/footer'); ?>
<?php else: ?>
<?php $this->view('404'); ?>
<?php endif; ?>
