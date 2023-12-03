<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>
    
    <form method="post">
        <h3>Edit Employee Details</h3>

        <?php if(count($errors) >0):?>
            <strong>Errors:</strong>
            <?php foreach($errors as $error):?>
                <br><?=$error?>
            <?php endforeach; ?>
        <?php endif;?>
        <input name="staffid" value= "<?= get_var('staffid');?>" type="text" placeholder="Staff ID" class="">
        <br>
        <br>
    
        <input name="name" value= "<?= get_var('name');?>" type="text" placeholder="Name" class="">
        <br>
        <br>
        <input name="email" value="<?= get_var('email');?>" type="text" placeholder="Email" class="">
        <br>
        <br>
        <input name="password" value= "<?= get_var('password');?>" type="text" placeholder="Password" class="">
        <br>
        <br>
        <input name="nic" value= "<?= get_var('nic');?>" type="text" placeholder="NIC" class="">
        <br>
        <br>
        <input name="contactnumber" value= "<?= get_var('contactnumber');?>" type="text" placeholder="Contact Number" class="">
        <br>
        <br>
        <input name="address" value="<?= get_var('address');?>" type="text" placeholder="Address" class="">
        <br>
        <br>
        <input name="city" value= "<?= get_var('city');?>" type="text" placeholder="City" class="">
        <br>
        <br>
        <select name="role" value="<?= get_var('role');?>" type="text" placeholder="Role" class="">
        <option <?= get_select('role','');?> value="">--Selcect a Role--</option>
        <option <?= get_select('role','projectcoordinator');?> value="projectcoordinator">Project Coordinator</option>
        <option <?= get_select('role','projectmanager');?> value="projectmanager">Project Manager</option>
        <option <?= get_select('role','storekeeper');?> value="storekeeper">Store Keeper</option>
        <option <?= get_select('role','supervisor');?> value="supervisor">Supervisor</option>   
        </select>
        <br>
        <br>
        <a href="<?=ROOT?>/staff">
            <input type="submit" value="Save"class="">  <t> <input type="button" value="Cancel"class="">
        </a>

    </form>
        

<?php $this->view('includes/footer'); ?>

