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
        <h3>  Complaint Details </h3>
    </div>
    <div class="form_container">
        <form method="post"  class="v_form">
    
        

    

    <div class="form-row">
        <div class="form-group2">
            <label class="v_label" id="firstname">Complaint ID :</label>
            <input name="firstname" value= "<?= get_var('firstname',$row[0]->id);?>" type="text" placeholder="" class="v_form-control" readonly >
        </div>
        <div class="form-group2">
            <label class="v_label" id="firstname">Project ID :</label>
            <input name="firstname" value= "<?= get_var('firstname',$row[0]->project_id);?>" type="text" placeholder="" class="v_form-control" readonly >
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <label class="v_label" id="firstname">Date :</label>
            <input name="firstname" value= "<?= get_var('firstname',$row[0]->date);?>" type="text" placeholder="" class="v_form-control" readonly >
        </div>
        <div class="form-group2">
            <label class="v_label" id="firstname">Type :</label>
            <input name="firstname" value= "<?= get_var('firstname',$row[0]->type);?>" type="text" placeholder="" class="v_form-control" readonly >
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <label class="v_label" id="firstname">Status :</label>
            <input name="firstname" value= "<?= get_var('firstname',$row[0]->status);?>" type="text" placeholder="" class="v_form-control" readonly >
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <label class="v_label" id="firstname">Description :</label>
            <input name="firstname" value= "<?= get_var('firstname',$row[0]->description);?>" type="text" placeholder="" class="v_form-control" readonly >
        </div>
    </div>

    <div class="form-row">
        <div class="form-group2">
            <label class="v_label" id="firstname">Remark :</label>
            <input name="firstname" value= "<?= get_var('firstname',$row[0]->remark);?>" type="text" placeholder="" class="v_form-control"  >
        </div>
    </div>

    <div style="display: flex;" >            
    <a href="<?=ROOT?>/staff">
        <input type="submit" value="  Save Remark   "class="add-button">
    </a>
    </div>
</form>

<div class="form-row">
        <div class="form-group2">
            <label class="v_label" id="firstname">View Project :</label>
            <a href="<?=ROOT?>/coordinatorrequests/seemore/<?=$row[0]->project_id;?>">
                <button><i class="fa-solid fa-sheet-plastic"></i></button>
            </a>
        </div>
    </div>

</div>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>