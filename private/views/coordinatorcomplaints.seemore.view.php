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
        
        <form method="post"  class="v_form" action="<?=ROOT?>/coordinatorviewcomplaints/addremark/<?=$row[0]->id?>">   

            <div class="form-row">
                <div class="form-group2">
                    <label class="v_label" id="id">Complaint ID :</label>
                    <input name="id" readonly value= "<?= get_var('id',$row[0]->id);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
                <div class="form-group2">
                    <label class="v_label" id="project_id">Project ID :</label>
                    <input name="project_id" readonly value= "<?= get_var('project_id',$row[0]->project_id);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group2">
                    <label class="v_label" id="date">Date :</label>
                    <input name="date" readonly value= "<?= get_var('date',$row[0]->date);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
                <div class="form-group2">
                    <label class="v_label" id="type">Type :</label>
                    <input name="type" readonly value= "<?= get_var('type',$row[0]->type);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
            </div>

            

            <div class="form-row">
                <div class="form-group2">
                    <label class="v_label" id="description">Description :</label>
                    <input name="description" readonly value= "<?= get_var('description',$row[0]->description);?>" type="text" placeholder="" class="v_form-control" readonly >
                </div>
            </div>

            <?php if($row["attachments"]):?>
                <div class="form-group2">
                        <label class="v_label" id="description">Attachments :</label>
                        
                </div>
                <!-- <pre><?php print_r($row["attachments"]);?></pre> -->
                <div class="form-row">
                    <?php foreach ($row["attachments"] as $rows) :?>
                        <!-- <pre><?php print_r($rows);?></pre> -->
                        <div class="form-group2">
                            <a target="_blank" href="<?=ROOT?>/uploads/<?=$rows->file_name?>"><input readonly style="color: blue;" name="description" value= "<?=$rows->file_name?>" type="text" placeholder="" class="v_form-control" readonly ></a>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>


            <!-- Coordinator's remark is only for the ones for sending to SUP and PM -->
            <?php if($row[0]->type=="Quality and the number of the photograph"  ||  $row[0]->type=="Quality of workmanship and materials"   ||  $row[0]->type=="Construction project delay "):?>

            <div class="">
                <div class="">
                    <label class="v_label" id="remark">Coordinator's Remark :</label>
                    <input name="coordinator_remark" value= "<?= get_var('coordinator_remark',$row[0]->coordinator_remark);?>" type="text" placeholder="" class="v_form-control"  >
                </div>
            </div>

                <?php if($row[0]->status=='Pending'):?>

                <div style="display: flex;margin-left: 600px" >                
                    <input type="submit" value="   Save Remark    "class="add-button">    
                </div>

                <?php endif;?>
            
            <?php endif;?> 
                <br><br>
            
            <!-- Remark is only for OTHER & POOR COMMUNICATION COMPLAINTS -->
            <?php if($row[0]->type=="Other"  ||  $row[0]->type=="Poor Communication" ):?>

            <div class="">
                <div class="">
                    <label class="v_label" id="remark">Remark :</label>
                    <input name="remark" value= "<?= get_var('remark',$row[0]->remark);?>" type="text" placeholder="" class="v_form-control"  >
                </div>
            </div>

                <div style="display: flex;margin-left: 600px" >                
                    <input type="submit" value="   Save Remark    "class="add-button">    
                </div>


            <?php elseif ( $row[0]->status=='Complete' && ($row[0]->type=="Quality and the number of the photograph"  ||  $row[0]->type=="Quality of workmanship and materials"   ||  $row[0]->type=="Construction project delay ")):?>
            
            <div class="">
                <div class="">
                    <label class="v_label" id="remark">Remark :</label>
                    <input readonly name="remark" value= "<?= get_var('remark',$row[0]->remark);?>" type="text" placeholder="" class="v_form-control"  >
                </div>
            </div>

            <?php endif;?>    

        </form>

        <br><br>

        <!-- for manager and supervisor handling complaints -->
        <?php if($row[0]->type=="Quality and the number of the photograph"  ||  $row[0]->type=="Quality of workmanship and materials"   ||  $row[0]->type=="Construction project delay "):?>
            <!-- only for pending complaints -->
            <?php if($row[0]->status=='Pending'):?>

                <form method="post" action="<?=ROOT?>/coordinatorviewcomplaints/notify/<?=$row[0]->project_id?>/<?=$row[0]->id?>"> 
                    
                    <div>
                        <label class="v_label" id="status">Status :</label>
                        <input readonly name="status" value= "<?= get_var('status',$row[0]->status);?>" type="text" placeholder="" class="v_form-control" style="background-color: #e5863d;" readonly >
                    </div> 
                    
                    <?php if($row[0]->type=="Quality and the number of the photograph"   ||  $row[0]->type=="Quality of workmanship and materials" ):?>
                        <div style="display: flex; justify-content:center; margin-left: 461px" >                        
                            <input  type="submit" value="Notify Supervisor"class="cancel-button">                         
                        </div>
                    <?php elseif($row[0]->type=="Construction project delay "):?>
                        <div style="display: flex; justify-content:center; margin-left: 461px" >                        
                            <input  type="submit" value="Notify Manager"class="cancel-button">                         
                        </div>                   
                    <?php endif;?>
                    
                    <input name="type" value= "<?= get_var('type',$row[0]->type);?>" type="text" placeholder="type" class="" hidden >
                    <input name="project_id" value= "<?= get_var('project_id',$row[0]->project_id);?>" type="text" placeholder="pid" class="" hidden >  
                    
                </form> 

            <!-- for already notified complaints     -->
            <?php elseif($row[0]->status=='Notified'):?>

                <div>
                    <label class="v_label" id="status">Status :</label>
                    <input readonly name="status" value= "<?= get_var('status',$row[0]->status);?>" type="text" placeholder="" class="v_form-control" style="background-color: #3498db;"  readonly >
                </div>

            <!--for Complete Ones to be converted to Handled  -->
            <?php elseif($row[0]->status=='Complete'):?>

                <div>
                    <label class="v_label" id="status">Status :</label>
                    <input readonly name="status" value= "<?= get_var('status',$row[0]->status);?>d" type="text" placeholder="" class="v_form-control" style="background-color: #4177a7;" readonly >
                </div>
                <div style="display: flex; justify-content:center; margin-left: 461px" >                        
                    <a href="<?=ROOT?>/coordinatorviewcomplaints/notifyCustomer/<?=$row[0]->project_id?>/<?=$row[0]->id?>""><input  type="" value="        Notify Customer"class="cancel-button">   </a>                      
                </div>

            <?php elseif($row[0]->status=='Handled'):?>
                <div>
                    <label class="v_label" id="status">Status :</label>
                    <input readonly name="status" value= "<?= get_var('status',$row[0]->status);?>" type="text" placeholder="" class="v_form-control" style="background-color: #2ecc71;" readonly >               
                </div>

            <?php endif;?>

        <?php elseif($row[0]->type=="Other"  ||  $row[0]->type=="Poor Communication" ):?>
            
            <div>
                <label class="v_label" id="status">Status :</label>
                <?php if($row[0]->status=='Pending'):?>
                    <input readonly name="status" value= "<?= get_var('status',$row[0]->status);?>" type="text" placeholder="" class="v_form-control" style="background-color: #e5863d" readonly >
                <?php elseif($row[0]->status=='Handled'):?>
                    <input readonly name="status" value= "<?= get_var('status',$row[0]->status);?>" type="text" placeholder="" class="v_form-control" style="background-color: #2ecc71;" readonly >                   
                <?php endif;?>
            </div>

        <?php endif;?>
    
<br><br>
<div class="form-row">
        <div class="form-group2">
            <a href="<?=ROOT?>/coordinatorrequests/seemore/<?=$row[0]->project_id;?>">
                <label class="v_label" id="firstname" style="color: blue; text-decoration: underline; cursor: pointer;">Click here to view the whole project :</label>
            
                <button><i class="fa-solid fa-sheet-plastic"></i></button>
            </a>
        </div>
    </div>

</div>

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>