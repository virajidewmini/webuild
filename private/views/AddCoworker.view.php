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

        <?php if (isset($errors)) : ?>
            <div class="errors">
                <?php foreach ($errors as $error) : ?>
                    <p class="error"><?= $error ?></p>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        <div class="form-group">
            <div class="column">
                <label class="v_label" id="name" >Name</label>
                <input type="text" name="name" class="v_form-control" value= "<?= get_var('name');?>">
                
            </div>

            <div class="column">
                <label class="v_label" id="phone">Phone</label>
                <input type="text" name="phone_no" class="v_form-control" value= "<?= get_var('phone_no');?>">
            </div>

            <div class="column">
                <label class="v_label" id="role" >Role</label>
                <select id="type" name="role" class="v_form-control">
                    <option value="" disabled selected>Select Role</option>
                    <option <?= get_select2('role','General Laborer');?> value="General Laborer">General Laborer</option>
                    <option <?= get_select2('role','Carpenter');?> value="Carpenter">Carpenter</option>
                    <option <?= get_select2('role','Steel Workers');?> value="Steel Workers">Steel Workers </option>
                    <option <?= get_select2('role','Equipment Operator');?> value="Equipment Operator">Equipment Operator</option>
                    <option <?= get_select2('role','other');?> value="other">Other</option>
            </select>
            </div> <?= (get_var('h3') === 'None') ? 'checked' : ''; ?>

            <div class="column">
                <label class="v_label" id="district">District</label>
                <select id="selectDistrict" name="district" class="v_form-control">
                        <option>Choose a District</option>
                        <?php 
                            $options = ['Colombo', 'Kandy', 'Galle', 'Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Gampaha', 'Hambantota', 'Jaffna', 'Kalutara', 'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara', 'Moneragala', 'Mullativu', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura', 'Trincomalee', 'Vavuniya'];
                            foreach ($options as $option) {
                                echo '<option value="' . $option . '"';
                                if (get_var('district') === $option) {
                                    echo ' selected';
                                }
                                echo '>' . $option . '</option>';
                            }
                        ?>
                </select>
            </div>
            <label class="v_label" id="address">Address</label>
            <input type="text" name="address" id="address" class="v_form-control" value= "<?= get_var('address');?>">
        </div>

            
            <a href="<?=ROOT?>/allcoworkers"> <button class="v_submit_button" type="submit">Submit</button></a>

        </form>
        </div>
            
    </div>

    <?php $this->view('includes/footer'); ?>
