<?php if(Auth::getRole()== 'Storekeeper'): ?>
<?php $this->view('includes/header')?>

<div style="margin-left: 285px;" class="table_header" >
        <h1>  Send Requests</h1>
</div>
    <div class="form_container">
        <form method="post"  class="v_form">
				    <label class="v_label" id="">Quotation No</label>
            <input type="text" name="quotation_id" id="quotation_id" class="v_form-control" style="height: 50px;" required>

						

            <label class="v_label" id="">Material Name</label>
            <input type="text" name="material_name" id="Material_Name" class="v_form-control" style="height: 50px;" required>

            <label for="description">Material Code</label>
            <input type="text" name="material_code" id="Material_Code" class="v_form-control" style="height: 50px;" required>

            <label class="v_label" id="">Batch No</label>
            <input type="text" name="batch_NO" id="batch_NO" class="v_form-control" style="height: 50px;" required>

            <label class="v_label" id="">Quntity</label>
            <input type="text" name="send_quantity" id="send_quantity" class="v_form-control" style="height: 50px;" required>

						<label class="v_label" id="">unit Price</label>
            <input type="text" name="unit_Price" id="unit_price" class="v_form-control" style="height: 50px;" required>

						<label class="v_label" id="">Total Price</label>
            <input type="text" name="total_price" id="total_price" class="v_form-control" style="height: 50px;" required>

						<label class="v_label" id="">Issue Date</label>
            <input type="text" name="quotation_issue_date" id="quotation_issue_date" class="v_form-control" style="height: 50px;" required>

						

            <a href="<?=ROOT?>/quotationorder"> <button class="v_submit_button" type="submit">Submit</button></a>
           

        </form>
    </div>

<?php $this->view('includes/footer'); ?>
