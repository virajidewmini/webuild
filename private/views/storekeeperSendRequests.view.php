<?php $this->view('includes/header')?>

<div style="margin-left: 285px;" class="table_header" >
        <h1>  Send Requests</h1>
</div>
    <div class="form_container">
        <form method="post"  class="v_form">
            <label class="v_label" id="">Material Name</label>
            <input type="text" name="Material_Name" id="Material_Name" class="v_form-control" style="height: 150px;" required>

            <label for="description">Material Code</label>
            <input type="text" name="Material_Code" id="Material_Code" class="v_form-control" style="height: 150px;" required>

            <label class="v_label" id="">Material Name</label>
            <input type="text" name="Remain_Quantity" id="Remain_Quantity" class="v_form-control" style="height: 150px;" required>

            <label class="v_label" id="">Material Name</label>
            <input type="text" name="Required_Quntity" id="Required_Quntity" class="v_form-control" style="height: 150px;" required>

            <a href="<?=ROOT?>/maintain"> <button class="v_submit_button" type="submit">Submit</button></a>
           

        </form>
    </div>

<?php $this->view('includes/footer'); ?>