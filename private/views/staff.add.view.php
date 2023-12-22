<?php $this->view('includes/header')?>
<style>
    .form-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .form-group2 {
        flex: 1;
        margin-right: 10px;
    }

    
    /* Placeholder styling */
    .v_form-control::placeholder {
        /* font-weight: bold; */
        color: black;
    }


    

    </style>
    <div style="display: flex; justify-content: center;" >
        <h3>  Add New Employee </h3>
    </div>
    <div class="form_container">
        <form method="post"  class="v_form">
    
        

        <?php if(count($errors) >0):?>
            <strong>Errors:</strong>
            <?php foreach($errors as $error):?>
                <br><?=$error?>
            <?php endforeach; ?>
        <?php endif;?>

    <div class="form-row">
        <div class="form-group2">
            <input name="firstname" value="<?= get_var('firstname');?>" type="text" placeholder="First Name" class="v_form-control">
        </div>
        <div class="form-group2">
            <input name="lastname" value="<?= get_var('lastname');?>" type="text" placeholder="Last Name" class="v_form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <input name="email" value="<?= get_var('email');?>" type="text" placeholder="Email" class="v_form-control">
        </div>
        <div class="form-group2">
            <input name="password" value="<?= get_var('password');?>" type="text" placeholder="Password" class="v_form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <input name="nic" value="<?= get_var('nic');?>" type="text" placeholder="NIC" class="v_form-control">
        </div>
        <div class="form-group2">
            <input name="contactnumber" value="<?= get_var('contactnumber');?>" type="text" placeholder="Contact Number" class="v_form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <input name="address" value="<?= get_var('address');?>" type="text" placeholder="Address" class="v_form-control">
        </div>
        <div class="form-group2">
            <input name="district" value="<?= get_var('district');?>" type="text" placeholder="District" class="v_form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <select name="role" class="v_form-control" value="<?= get_select2('role','');?>" type="text" placeholder="Role">
                <option <?= get_select2('role','');?> value="">Select a Role</option>
                <option <?= get_select2('role','Project Coordinator');?> value="Project Coordinator">Project Coordinator</option>
                <option <?= get_select2('role','Project Manager');?> value="Project Manager">Project Manager</option>
                <option <?= get_select2('role','Storekeeper');?> value="Storekeeper">Store Keeper</option>
                <option <?= get_select2('role','Supervisor');?> value="Supervisor">Supervisor</option>
            </select>
        </div>
        <div class="form-group2">
            <select name="gender" class="v_form-control" value="<?= get_select2('gender','');?>" type="text" placeholder="Gender">
                <option <?= get_select2('gender','');?> value="">Select a gender</option>
                <option <?= get_select2('gender','male');?> value="male">Male</option>
                <option <?= get_select2('gender','female');?> value="female">Female</option>
            </select>
        </div>
    </div>
    <div style="display: flex; justify-content: center;" >            
    <a href="<?=ROOT?>/staff">
        <input type="submit" value="  Add   "class="add-button">
   
        <input type="button" value="Cancel"class="cancel-button">
    </a>
    </div>
</form>
</div>

<?php $this->view('includes/footer'); ?>
