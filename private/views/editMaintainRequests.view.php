<?php $this->view('includes/header')?>

<div style="margin-left: 285px;" class="table_header" >
        <h1>  Recorrect Your Requests</h1>
</div>
    <div class="form_container">
        <?php if($rows): ?>
        <form method="post"  class="v_form">
            <label class="v_label" id="">Material Name</label>
            <input type="text" name="material_name" id="Material_Name" class="v_form-control" value="<?= $rows[0]->material_name ?>" style="height: 50px;" readonly>

            <label for="description">Material Code</label>
            <input type="text" name="material_code" id="Material_Code" class="v_form-control" value="<?= $rows[0]->material_code ?>"  style="height: 50px;" readonly>

            <label class="v_label" id="">Remain Quantity</label>
            <input type="text" name="remain_quantity" id="Remain_Quantity" class="v_form-control" value="<?= $rows[0]->remain_quantity ?>"  style="height: 50px;" readonly>

            <label class="v_label" id="">Requsted Quntity</label>
            <input type="text" name="requested_quantity" id="Requested_Quntity" class="v_form-control" value=""   style="height: 50px;" required>

            <a href="<?=ROOT?>/maintainrequests"> <button class="v_submit_button" type="submit">Submit</button></a>
           
        <?php endif; ?>
        </form>
    </div>

