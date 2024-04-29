<?php if(Auth::getRole()== 'Supervisor'): ?>
<?php $this->view('includes/header')?>

<div style="margin-left: 370px;" class="table_header" >
        <h1> Update Team Members </h1>
</div>
    <div class="form_container">
        
        <form method="post"  class="v_form" enctype="multipart/form-data">

        <div class="form-group">
            <div class="column">
                <label class="v_label" id="name" >Name</label>
                <input type="text" name="name" value="<?= get_var('name',$rows->name);?>" class="v_form-control">
                
            </div>

            <div class="column">
                <label class="v_label" id="phone">Phone</label>
                <input type="text" name="phone_no" value="<?= get_var('phone_no',$rows->phone_no);?>" class="v_form-control">
            </div>

            <div class="column">
                <label class="v_label" id="role" >Role</label>
                <select id="type" name="role" class="v_form-control">
                    <option value="<?= get_var('role',$rows->role);?>" selected><?= get_var('role',$rows->role);?></option>
                    <option value="General Laborer">General Laborer</option>
                    <option value="Carpenter">Carpenter</option>
                    <option value="Steel Workers">Steel Workers </option>
                    <option value="Equipment Operator">Equipment Operator</option>
                    <option value="other">Other</option>
            </select>
            </div>

            <div class="column">
                <label class="v_label" id="district">District</label>
                <select id="selectDistrict" name="district" class="v_form-control">
                <option value="<?= get_var('role',$rows->role);?>" selected><?= get_var('district',$rows->district);?></option>
                </select>
            </div>
            <label class="v_label" id="address">Address</label>
            <input type="text" name="address" id="address" value="<?= get_var('address',$rows->address);?>"  class="v_form-control">
        </div>

            
            <a href="<?=ROOT?>/allcoworkers"> <button class="v_submit_button" type="submit">Submit</button></a>

        </form>
        </div>
            
    </div>

    <?php $this->view('includes/footer'); ?>

    <?php else : ?>
    <?php $this->view('404'); ?>
<?php endif; ?>