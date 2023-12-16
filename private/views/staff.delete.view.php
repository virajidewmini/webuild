<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}

</style>

    <?php if($row):?>
        
    <div class="">
        <div class="delete-box">
        <form method="post">
            
            <div class="delete-message"> 
                <h3 ">  Are you sure you want to delete this user?

                </h3>
            </div>

            <div name="delete-user-input">      
            <input name="firstname" value= "<?= get_var('firstname',$row[0]->firstname);?>" type="text" class="firstname" readonly style=" display: inline-block;text-align: right;margin: 0; padding: 0px;border:none;">
            <input name="lastname" value= "<?= get_var('lastname',$row[0]->lastname);?>" type="text" class="lastname" readonly style="margin: 0; padding: 0px;border:none;;                  ">
            </div>
            
            <br>
            
            <input type="submit" value="Delete"  class="delete-button"> 
            <a href="<?=ROOT?>/staff">
                <input type="button" value="Cancel"class="cancel-button">
            </a>

        </form>
        </div>
    </div>
    
    <?php else:?>
        <h3>The Employee was not found.</h3>
        <a href="<?=ROOT?>/staff">
            <input type="button" value="Cancel"class="">
        </a>
    <?php endif;?>        

<?php $this->view('includes/footer'); ?>

