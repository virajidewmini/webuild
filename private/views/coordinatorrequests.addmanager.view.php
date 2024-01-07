<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
   

</style>
    <?php if($row):?>
    
    <div class="delete-box">
        <form method="post">
       
            <div class="delete-message"> 
                <div style="display: flex; justify-content: center;" >
                    <h3> <b> Are you sure you want to add <?= get_var('manager_id',$manager_id);?> as the Project Manager ? </b></h3>
                </div>
            </div>
                <!-- <label class="v_label" id="manager_id">Request ID :</label> -->
                <input name="id" value= "<?= get_var('id',$row[0]->id);?>" type="text" placeholder="Request ID" class="" hidden >
        
                
                
                <input name="manager_id" value= "<?= get_var('manager_id',$manager_id);?>" type="text" placeholder="" class="" hidden>
                
                
            
                
               
        <div style="display: flex; justify-content: center;" >        
            <input type="submit" value="  ADD  "class="save-button"> 
            <a href="<?=ROOT?>/staff">
                <input type="button" value="Cancel"class="cancel-button">
            </a>
        </div>

    </form>
    </div>
    <?php else:?>
        <h3>The Employee was not found.</h3>
        <a href="<?=ROOT?>/coordinatorrequests">
            <input type="button" value="Cancel"class="cancel-button">
        </a>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
