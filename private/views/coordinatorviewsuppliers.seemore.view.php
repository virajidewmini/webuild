<?php if(Auth::getRole()== 'Project Coordinator'): ?>
    <?php $this->view('includes/header')?>
    <style>
    body{
        overflow: hidden;
    }
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

        
            <div class="form-row">
                <div class="form-group2">
                    <label class="v_label" id="id">Complaint ID :</label>
                    <input name="id" value= "<?= get_var('id',$rows[0]->id);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
                <div class="form-group2">
                    <label class="v_label" id="project_id">Name :</label>
                    <input name="project_id" value= "<?= get_var('project_id',$rows[0]->name);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group2">
                    <label class="v_label" id="date">Date :</label>
                    <input name="date" value= "<?= get_var('date',$rows[0]->date_joined);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
                <div class="form-group2">
                    <label class="v_label" id="type">Materials :</label>
                    <input name="type" value= "<?= get_var('type',$rows[0]->materials);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group2">
                    <label class="v_label" id="description">Email :</label>
                    <input name="description" value= "<?= get_var('description',$rows[0]->email_address);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
                <div class="form-group2">
                    <label class="v_label" id="description">Address :</label>
                    <input name="description" value= "<?= get_var('description',$rows[0]->permenant_address);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group2">
                    <label class="v_label" id="description">Remark :</label>
                    <input name="description" value= "<?= get_var('description',$rows[0]->remark);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
                <div class="form-group2">
                    <label class="v_label" id="description">Status :</label>
                    <input name="description" value= "<?= get_var('description',$rows[0]->status);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
            </div>
    
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
    



