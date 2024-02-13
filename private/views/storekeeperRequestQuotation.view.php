<?php 
$this->view('includes/header');
$projectId = $_GET['p_id'] ?? '';
$materialCode = $_GET['material_code'] ?? '';
$materialName = $_GET['material_name'] ?? '';
$measureUnit = $_GET['measure_unit'] ?? '';
$requestedQuantity = $_GET['requested_quantity'] ?? '';
?>
<div style="margin-left: 285px;" class="table_header">
    <h1>Send Quotations</h1>
</div>
<div class="form_container">
    <form method="post" class="v_form">
        <label class="v_label">Project No</label>
        <input type="text" name="p_id" id="p_id" class="v_form-control" style="height: 50px;" value="<?=$projectId?>" required>
        <label class="v_label">Material Name</label>
        <input type="text" name="material_name" id="material_name" class="v_form-control" style="height: 50px;" value="<?=$materialName?>" required>
        <label class="v_label">Material Code</label>
        <input type="text" name="material_code" id="material_code" class="v_form-control" style="height: 50px;" value="<?=$materialCode?>" required>
        <label class="v_label">Requested Quantity</label>
        <input type="text" name="requested_quantity" id="requested_quantity" class="v_form-control" style="height: 50px;" value="<?=$requestedQuantity?>" required>
        <label class="v_label">Measure Unit</label>
        <input type="text" name="measure_unit" id="measure_unit" class="v_form-control" style="height: 50px;" value="<?=$measureUnit?>" required>
        <label class="v_label">Batch No</label>
        <input type="text" name="batch_NO" id="batch_NO" class="v_form-control" style="height: 50px;" required>
        <label class="v_label">Send Quantity</label>
        <input type="text" name="send_quantity" id="send_quantity" class="v_form-control" style="height: 50px;" required>
        <label class="v_label">Unit Price</label>
        <input type="text" name="unit_Price" id="unit_price" class="v_form-control" style="height: 50px;" required>
        <label class="v_label">Total Price</label>
        <input type="text" name="total_price" id="total_price" class="v_form-control" style="height: 50px;" required>
        <label class="v_label">Issue Date</label>
        <input type="text" name="quotation_issue_date" id="quotation_issue_date" class="v_form-control" style="height: 50px;" required>
        <button class="v_submit_button" type="submit">Submit</button>
    </form>
</div>
<?php $this->view('includes/footer'); ?>
