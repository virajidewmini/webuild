<?php if(Auth::getRole()== 'Supervisor'): ?>
<?php $this->view('includes/header')?>

<div style="margin-left: 285px;" class="table_header" >
        <h1>  Update subtask status</h1>
</div>
    <div class="form_container">
        <form method="post"  class="v_form" enctype="multipart/form-data">
            <label class="v_label" id="status">Task Status</label>
           
            <select id="type" name="status" class="v_form-control" >
                <option value="<?= get_var('role',$rows->status);?>" selected><?= get_var('role',$rows->status);?></option>
                <option value="Complete">Complete</option>
                <option value="Ongoing">Ongoing</option>
                <option value="Suspend">Suspend </option>
            </select>
                
                <label for="description">Remark</label>
                <input type="text" name="remark" id="remark" class="v_form-control" style="height: 150px;">

            <a href="<?=ROOT?>/task/1"> <button class="v_submit_button" type="submit">Submit</button></a>
           

        </form>
    </div>

<?php $this->view('includes/footer'); ?>

<?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>