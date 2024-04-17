<?php $this->view('includes/header')?>

<h2>Complaint Details</h2>

   

    <table class="viewTable">
    <?php if(isset($rows)):?>
    
        
        <tr>
            <th class="viewTableHeader">Complaint ID</th>
            <td class="viewTableData" id="complaintId"><?=$rows[0]->id?></td>
        </tr>
        <tr>
            <th class="viewTableHeader">Project ID</th>
            <td class="viewTableData" id="projectId"><?=$rows[0]->project_id?></td>
        </tr>
        <tr>
            <th class="viewTableHeader">Date</th>
            <td class="viewTableData" id="complaintDate"><?=$rows[0]->date?></td>
        </tr>
        <tr> 
            <th class="viewTableHeader">Complaint Type</th>
            <td class="viewTableData" id="complaintType"><?=$rows[0]->type?></td>
        </tr>
        <tr>
            <th class="viewTableHeader">Complaint Description</th>
            <td class="viewTableData" id="complaintDescription"><?=$rows[0]->description?></td>
        </tr>
        <tr>
            <th class="viewTableHeader">Complaint Remark</th>
            <td class="viewTableData" id="complaintRemark"><?=$rows[0]->remark?></td>
        </tr>
        <tr>
            <th class="viewTableHeader">Complaint Status</th>
            <td class="viewTableData" id="complaintStatus"><?=$rows[0]->status?></td>
        </tr>
        <?php endif; ?>
    </table>

    <div class="attachment-table">
        <h2>Evidence</h2>
        <table id="attachmentTable">
        <?php if($attachment): ?>
            
            <?php foreach ($attachment as $row): ?>
            <tr>
                <th>Attachment</th>
            </tr>
            <tr>
                <td><a href="<?=ROOT?>/uploads/<?=$row->file_name?>"  target="_blank" style="color: blue;"><?=$row->file_name?></a></td>
                
                <?php endforeach;?>

             <?php else: ?>
               <p>No Complaint evidence</p> 

             <?php endif; ?>
             </tr>
        </table>

        <?php if($rows[0]->remark==null):?>
        <div class="form_container">
            <form method="post"  class="v_form" enctype="multipart/form-data">
                
                <label for="description">Remark</label>
                <input type="text" name="remark" id="remark" class="v_form-control" style="height: 150px;" required>

                <a href=""> <button class="v_submit_button" type="submit">Submit</button></a>
            </form>
        </div>
    <?php endif; ?>
        <a href="<?=ROOT?>/supcomplaint"> <button class="v_submit_button" type="button" style="margin-left: 830px; margin-top: 40px;">Ok</button></a>
        </div>
    
