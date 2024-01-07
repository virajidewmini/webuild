<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>
<style>
body{
    overflow: hidden;
}

.top1{
    background-color: white;
    display: flex;
    justify-content: center;
    align-content: center;
    border-radius: 20px 20px 0 0;
    padding: 20px;
}

.top1 .form-control{
    width: 150px;
    text-align: center;
    border-radius: 10px;
    border-color: #E5863D;
    margin-right: 5%;
}

@media screen and (max-width: 600px) {
            .top1 a, .top1 input[type="text"] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav input[type="text"] {
                border: 1px solid #ccc;
            }
        }
</style>
    
    <h2 style="margin-bottom: 20px">Search Project Managers</h2>
    
        <label for="district" style="margin-right: 10px; font-weight: bold;">District of the Request : </label>
        <select name="distict" value="<?= get_select2('district','')    ;?>"                                    style="width: auto;padding: 8px;font-size: 16px;border: 1px solid #ccc; border-radius: 5px;outline: none; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); ">
            
            <option value="<?php if(strcmp($rows['common']->status_of_land,"customer")==0): ?><?= $rows['customer']->ul_district ; ?><?php else: ?><?= $rows['company']->district ; ?><?php endif; ?>">            
                <?php if(strcmp($rows['common']->status_of_land,"customer")==0): ?>
                    <?= $rows['customer']->ul_district ; ?>                    
                <?php else: ?>
                    <?= $rows['company']->district ; ?>                    
                <?php endif; ?>                       
            </option>

        </select>

        <br>
        <br>

        <?php if($rows["managers"]):?>
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3>  Project Managers in <?php if(strcmp($rows['common']->status_of_land,"customer")==0): ?><?= $rows['customer']->ul_district ; ?><?php else: ?><?= $rows['company']->district ; ?><?php endif; ?> district  </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>No. of Projects Currently Working On</th>
                            <th>No. of Projects Completed in the Past Two Months</th>
                            <th>Assign</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows["managers"] as $row) :?>
                            <tr>                       
                                <td><?=$row->staff_id?></td>
                                <td><?=$row->firstname?> <?=$row->lastname?></td>
                                <td><?=$row->count?></td> 
                                <td></td> 
                                <td>
                                    <a href="<?=ROOT?>/coordinatorrequests/addmanager/<?=$rows["common"]->id?>/<?=$row->staff_id?>">
                                        <button><i class="fa-solid fa-plus" style="color: #ed8835;"></i></button>
                                    </a>
                                </td>                                                              
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Project Managers are in this district.</h4>
    <?php endif;?> 

        
        
        
        
        
        
        
                    
                
    </div>
<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>

