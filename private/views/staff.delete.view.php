<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>

    <?php if($row):?>
    
    <form method="post">
        <h3>Are you sure tou want to delete?!</h3>

        <input name="name" value= "<?= get_var('name',$row[0]->name);?>" type="text" placeholder="Name" class="name">
        <br>
        <br>
        <input name="email" value="<?= get_var('email',$row[0]->email);?>" type="text" placeholder="Email" class="">
        <br>
        <br>
        <input name="password" value= "<?= get_var('password',$row[0]->password);?>" type="text" placeholder="Password" class="">
        <br>
        <br>
        <input name="nic" value= "<?= get_var('nic',$row[0]->nic);?>" type="text" placeholder="NIC" class="">
        <br>
        <br>
        <input name="contactnumber" value= "<?= get_var('contactnumber',$row[0]->contactnumber);?>" type="text" placeholder="Contact Number" class="">
        <br>
        <br>
        <input name="address" value="<?= get_var('address',$row[0]->address);?>" type="text" placeholder="Address" class="">
        <br>
        <br>
        <input name="city" value= "<?= get_var('city',$row[0]->city);?>" type="text" placeholder="City" class="">
        <br>
        <br>
        <select name="role" value="<?= get_var('role','');?>" type="text" placeholder="Role" class="">
        <option <?= get_select('role','');?> value="">--Selcect a Role--</option>
        <option <?= get_select('role','projectcoordinator');?>  value="projectcoordinator">Project Coordinator</option>
        <option <?= get_select('role','projectmanager');?>  value="projectmanager">Project Manager</option>
        <option <?= get_select('role','storekeeper');?>  value="storekeeper">Store Keeper</option>
        <option <?= get_select('role','supervisor');?>  value="supervisor">Supervisor</option>   
        </select>
        <br>
        <br>
        <input type="hidden" name="id">
        <input type="submit" value="Delete"class=""> 
        <a href="<?=ROOT?>/staff">
            <input type="button" value="Cancel"class="">
        </a>

    </form>
    
    <?php else:?>
        <h3>The Employee was not found.</h3>
        <a href="<?=ROOT?>/staff">
            <input type="button" value="Cancel"class="">
        </a>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>

