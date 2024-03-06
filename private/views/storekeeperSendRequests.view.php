<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php 
$this->view('includes/header');
$materialName = $_GET['material_name'] ?? '';
$materialCode = $_GET['material_code'] ?? '';
$remainQuantity = $_GET['remain_quantity'] ?? '';
?>
<div style="margin-left: 285px;" class="table_header">
    <h1>Send Requests</h1>
</div>
<div class="form_container">
    <form method="post" class="v_form">
        <label class="v_label" id="">Material Name</label>
        <input type="text" name="material_name" id="Material_Name" class="v_form-control" style="height: 50px;" value="<?=$materialName?>" required>
        <label for="description">Material Code</label>
        <input type="text" name="material_code" id="Material_Code" class="v_form-control" style="height: 50px;" value="<?=$materialCode?>" required>
        <label class="v_label" id="">Remain Quantity</label>
        <input type="text" name="remain_quantity" id="Remain_Quantity" class="v_form-control" style="height: 50px;" value="<?=$remainQuantity?>" required>
        <label class="v_label" id="">Requested Quantity</label>
        <input type="text" name="requested_quantity" id="Requested_Quantity" class="v_form-control" style="height: 50px;" required>

        <a href="<?=ROOT?>/maintainrequests"> <button class="v_submit_button" type="submit">Submit</button></a>
        <!-- <button class="v_submit_button" type="submit">Submit</button> -->
    </form>
</div>
<?php $this->view('includes/footer'); ?>
