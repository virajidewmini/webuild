<?php if(Auth::getRole()== 'Admin'): ?>
<?php $this->view('includes/header')?>
<style>
   

</style>

    <?php if($row):?>
    <div style="display: flex; justify-content: center;" >
        <h3>  Edit Employee </h3>
    </div>
    <div class="form_container">
        <form method="post"  class="v_form">
       

        <?php if(count($errors) >0):?>
            <div style="color: #e74c3c; font-size: 14px;">
                <strong>Errors:</strong>
                <?php foreach($errors as $error):?>
                    <br><?=$error?>
                <?php endforeach; ?>
            </div>
        <?php endif;?>
        
                <br>
                <input name="id" value= "<?= get_var('id',$row[0]->id);?>" type="text" placeholder="Staff ID" class="" hidden>
        
                <label class="v_label" id="firstname">First Name</label>
                <input name="firstname" value= "<?= get_var('firstname',$row[0]->firstname);?>" type="text" placeholder="" class="v_form-control">
                
                <label class="v_label" id="lastname">Last Name</label>
                <input name="lastname" value= "<?= get_var('lastname',$row[0]->lastname);?>" type="text" placeholder="" class="v_form-control">
                
                <label class="v_label" id="nic">NIC</label>
                <input name="nic" value= "<?= get_var('nic',$row[0]->nic);?>" type="text" placeholder="" class="v_form-control">

                <label class="v_label" id="contactnumber">Contact Number</label>
                <input name="contactnumber" value= "<?= get_var('contactnumber',$row[0]->contactnumber);?>" type="text" placeholder="" class="v_form-control">
          
                <label class="v_label" id="address">Address</label>
                <input name="address" value="<?= get_var('address',$row[0]->address);?>" type="text" placeholder="" class="v_form-control">
                
                <label class="v_label" id="address">District</label>
                <input name="district" value="<?= get_var('district',$row[0]->district);?>" type="text" placeholder="" class="v_form-control">
            
                
                <br><br>
           
        <div style="display: flex; justify-content: center;" >        
            <input type="submit" value=" Save "class="save-button"> 
            <a href="<?=ROOT?>/staff">
                <input type="button" value="Cancel"class="cancel-button">
            </a>
        </div>

    </form>
    </div>
    <?php else:?>
        <h3>The Employee was not found.</h3>
        <a href="<?=ROOT?>/staff">
            <input type="button" value="Cancel"class="cancel-button">
        </a>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

