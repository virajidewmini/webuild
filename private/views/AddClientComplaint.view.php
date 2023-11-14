<?php $this->view('includes/header')?>

<div style="margin-left: 285px;" class="table_header" >
        <h1>  Complaints, Let's Us Know !</h1>
    </div>
    <div class="form_container">
        <form method="post"  class="v_form">
            <label class="v_label" id="complaintType">Complaint Type</label>
            <!-- <input type="text" name="type" id="type"  class="v_form-control" required> -->
            <select id="type" name="type" class="v_form-control" >
                <option value="" disabled selected>Select Complaint Type</option>
                <option value="Quality of the photograph">Quality of the photograph</option>
                <option value="Construction project delay">Construction project delay</option>
                <option value="Quality of workmanship and materials">Quality of workmanship and materials </option>
                <option value="Poor Communication">Poor Communication </option>
                <option value="other">Other</option>
            </select>

            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="v_form-control" style="height: 150px;" required>

            <input type="hidden" name="status" value="pending">

            <a href="<?=ROOT?>/clientcomplaint"> <button class="v_submit_button" type="submit">Submit</button></a>
           

        </form>
    </div>

<?php $this->view('includes/footer'); ?>