<?php $this->view('includes/header')?>

<div style="margin-left: 370px;" class="table_header" >
        <h1> New Team Members </h1>
</div>
    <div class="form_container">
        <form method="post"  class="v_form" enctype="multipart/form-data">
            <label class="v_label" id="ccsvFile">Upload CSV File</label>
            <input type="file" name="csv_file" id="csv_file" accept=".csv" required>
            <br><br>
            <a href="<?=ROOT?>/allcoworkers"> <button class="v_submit_button" type="submit">Submit</button></a>
        </form>
        <br>
        <div class="or-container">
            <div class="or-line"></div>
            <div class="or-text">or</div>
            <div class="or-line"></div>
        </div>

        <br>

        <form method="post"  class="v_form" enctype="multipart/form-data">
            <label class="v_label" id="complaintType">Complaint Type</label>
           
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
           <label for="fileUpload">Select files:</label>
           <input type="file" name="files[]" id="files" multiple accept="application/pdf,image/*">

            <a href="<?=ROOT?>/clientcomplaint"> <button class="v_submit_button" type="submit">Submit</button></a>
           

        </form>

    </div>

    