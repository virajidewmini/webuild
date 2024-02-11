<?php if(Auth::getRole()== 'Project Coordinator'): ?>
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
        <h3>  Add New Supplier </h3>
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
            <input name="name" value="<?= get_var('name');?>" type="text" placeholder=" Name" class="v_form-control">
        </div>
        <div class="form-group2">
            <input name="address" value="<?= get_var('address');?>" type="text" placeholder="Address" class="v_form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <input name="contact_person_name" value="<?= get_var('contact_person_name');?>" type="text" placeholder="Contact Person's Name" class="v_form-control">
        </div>
        <div class="form-group2">
            <input name="contact_person_number" value="<?= get_var('contact_person_number');?>" type="text" placeholder="Contact Person's Number" class="v_form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <input name="contact_person_email" value="<?= get_var('contact_person_email');?>" type="text" placeholder="Contact Person's Email" class="v_form-control">
        </div>
        
    </div>


    <div class="form-row">
        <div class="form-group2">
            <select name="material" class="v_form-control" value="<?= get_select2('material','');?>" type="text" placeholder="material">
                <option <?= get_select2('material','');?> value="">Select a material</option>
                <option <?= get_select2('material','Paint');?> value="Paint">Paint</option>
                <option <?= get_select2('material','Tile');?> value="Tile">Tile</option>
                <option <?= get_select2('material','Cement');?> value="Cement">Cement</option>
                <option <?= get_select2('material','Bricks & Other');?> value="Bricks & Other">Bricks & Other</option>
            </select>
        </div>
        
    </div>
    <div style="display: flex; justify-content: center;" >            
    <a href="<?=ROOT?>/coordinatorviewsuppliers">
        <input type="submit" value="  Add   "class="add-button">
   
        <input type="button" value="Cancel"class="cancel-button">
    </a>
    </div>
</form>
</div>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>