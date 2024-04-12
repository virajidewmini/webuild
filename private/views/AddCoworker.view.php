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

        <div class="form-group">
            <div class="column">
                <label class="v_label" id="name" >Name</label>
                <input type="text" name="name" class="v_form-control">
                
            </div>

            <div class="column">
                <label class="v_label" id="phone">Phone</label>
                <input type="text" name="phone_no" class="v_form-control">
            </div>

            <div class="column">
                <label class="v_label" id="role" >Role</label>
                <select id="type" name="role" class="v_form-control">
                    <option value="" disabled selected>Select Role</option>
                    <option value="General Laborer">General Laborer</option>
                    <option value="Carpenter">Carpenter</option>
                    <option value="Steel Workers">Steel Workers </option>
                    <option value="Equipment Operator">Equipment Operator</option>
                    <option value="other">Other</option>
            </select>
            </div>

            <div class="column">
                <label class="v_label" id="district">District</label>
                <select id="selectDistrict" name="district" class="v_form-control">
                        <option>Choose a District</option>
                </select>
            </div>
            <label class="v_label" id="address">Address</label>
            <input type="text" name="address" id="address" class="v_form-control">
        </div>

            
            <a href="<?=ROOT?>/allcoworkers"> <button class="v_submit_button" type="submit">Submit</button></a>

        </form>
        </div>
            
    </div>

    <?php $this->view('includes/footer'); ?>