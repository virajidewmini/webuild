<?php $this->view('includes/header')?>

<div style="margin-left: 370px;" class="table_header" >
        <h1> Update Progress </h1>
</div>
    <div class="form_container">
       
        <form method="post"  class="v_form" enctype="multipart/form-data">
            <label class="v_label" id="photoEvi">Upload Photograph</label>
            <input type="file" name="files[]" id="files" multiple accept="image/*">
            
            <br><br>
            <a href="<?=ROOT?>/progress"> <button class="v_submit_button" type="submit">Submit</button></a>
        </form>
        
        </div>
            
    </div>

    <?php $this->view('includes/footer'); ?>