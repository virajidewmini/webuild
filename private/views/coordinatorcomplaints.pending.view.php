<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}
</style>

    <div style="text-align: center;" >
        <h2>Pending Complaints</h2>
    </div>
        <br>
        <form method="post">
        
            <?php if(isset($_POST['complaint_type'])){
                $complaint_type=$_POST['complaint_type'];
            } ?>
            
            <select name="complaint_type" class="" type="text" placeholder="Select Complaint Type" style="width: auto;padding: 8px;font-size: 16px;border: 1px solid #ccc; border-radius: 5px;outline: none; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); ">
                <option <?= get_select2('complaint_type','Quality of the photograph');?> value="Quality of the photograph">Quality of the photograph</option >
                <option <?= get_select2('complaint_type','Construction project delay ');?> value="Construction project delay ">Construction project delay </option>
                <option <?= get_select2('complaint_type','Other');?> value="Other">Other</option>
                <option <?= get_select2('complaint_type','Poor Communication');?>value="Poor Communication">Poor Communication</option>
                <option <?= get_select2('complaint_type','Quality of workmanship and materials');?>value="Quality of workmanship and materials">Quality of workmanship and materials</option>
            </select>
            

        
            <button style="background-color:#E5863D; color:white"  type="submit">Search</button>
            
            

        </form>
<br><br><br>



    <?php if($rows["complaints"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Complaints on <?=$rows["complaints"][0]->type;?> </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>See more</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["complaints"] as $row) :?>
                            <?php if($row->status=='Notified'):?>
                                <tr style="background-color: #e5863d;">                       
                                    <td style="color: white;"><?=$row->id?></td>
                                    <td style="color: white;"><?=$row->date?></td>
                                    <td style="color: white;"><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php elseif($row->status=='Pending'):?>
                                <tr>                       
                                    <td><?=$row->id?></td>
                                    <td><?=$row->date?></td>
                                    <td><?=$row->status?></td>  
                                    <td>
                                        <a href="<?=ROOT?>/coordinatorviewcomplaints/seemore/<?=$row->id?>">
                                            <button><i class="fa-solid fa-eye"></i></button>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Complaints on Photograph's Quality.</h4>
        <br><br>
    <?php endif;?> 
    
    


    


    
    
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>