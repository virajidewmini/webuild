<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
   

</style>

    <?php if($row):?>
    <div style="display: flex; justify-content: center;" >
        <h3>  Edit Contact Person's Details </h3>
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
        
                <label class="v_label" id="contact_person_name">Contact Person's Name</label>
                <input name="contact_person_name" value= "<?= get_var('contact_person_name',$row[0]->contact_person_name);?>" type="text" placeholder="" class="v_form-control">

                <label class="v_label" id="contact_person_number">Contact_Person's Number</label>
                <input name="contact_person_number" value= "<?= get_var('contact_person_number',$row[0]->contact_person_number);?>" type="text" placeholder="" class="v_form-control">
          
                <label class="v_label" id="contact_person_email">Contact Person's Email</label>
                <input name="contact_person_email" value="<?= get_var('contact_person_email',$row[0]->contact_person_email);?>" type="text" placeholder="" class="v_form-control">
            
                
                <br><br>
           
        <div style="display: flex; justify-content: center;" >        
            <input type="submit" value=" Save "class="save-button"> 
            <a href="<?=ROOT?>/coordinatorviewsuppliers">
                <input type="button" value="Cancel"class="cancel-button">
            </a>
        </div>

    </form>
    </div>
    <?php else:?>
        <h3>The Employee was not found.</h3>
        <a href="<?=ROOT?>/coordinatorviewsuppliers">
            <input type="button" value="Cancel"class="cancel-button">
        </a>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

