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
      
    <form action="<?=ROOT?>/coordinatormanagersearch/<?=$rows['common']->id?>" method="post">
            <select name="district" class="v_form-control" value="<?= get_select2('district','');?>" type="text" placeholder="district" style="width: auto;padding: 8px;font-size: 16px;border: 1px solid #ccc; border-radius: 5px;outline: none; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); ">
                <option selected value="<?php if(strcmp($rows['common']->status_of_land,"customer")==0): ?><?= $rows['customer']->ul_district ; ?><?php else: ?><?= $rows['company']->district ; ?><?php endif; ?>">            
                    <?php if(strcmp($rows['common']->status_of_land,"customer")==0): ?>
                        <?= $rows['customer']->ul_district ; ?>                    
                    <?php else: ?>
                        <?= $rows['company']->district ; ?>                    
                    <?php endif; ?>                       
                </option>
                <option <?= get_select2('district','');?> value="">Select a district</option>
                <option <?= get_select2('district','Galle');?> value="Galle">Galle</option>
                <option <?= get_select2('district','Ampara');?> value="Ampara">Ampara</option>
                <option <?= get_select2('district','Anuradhapura');?> value="Anuradhapura">Anuradhapura</option>
                <option <?= get_select2('district','Badulla');?>  value="Badulla">Badulla</option>
                <option <?= get_select2('district','Batticaloa');?> value="Batticaloa">Batticaloa</option>
                <option <?= get_select2('district','Colombo');?> value="Colombo">Colombo</option>
                <option <?= get_select2('district','Gampaha');?> value="Gampaha">Gampaha</option>
                <option <?= get_select2('district','Hambantota');?> value="Hambantota">Hambantota</option>
                <option <?= get_select2('district','Jaffna');?> value="Jaffna">Jaffna</option>
                <option <?= get_select2('district','Kaluthara');?> value="Kaluthara">Kaluthara</option>
                <option <?= get_select2('district','Kandy');?> value="Kandy">Kandy</option>
                <option <?= get_select2('district','Kegalle');?> value="Kegalle">Kegalle</option>
                <option <?= get_select2('district','Kilinochchi');?> value="Kilinochchi">Kilinochchi</option>
                <option <?= get_select2('district','Kurunegala');?> value="Kurunegala">Kurunegala</option>
                <option <?= get_select2('district','Mannar');?> value="Mannar">Mannar</option>
                <option <?= get_select2('district','Matara');?> value="Matara">Matara</option>
                <option <?= get_select2('district','Monaragala');?> value="Monaragala">Monaragala</option>
                <option <?= get_select2('district','Mulathivu');?> value="Mulathivu">Mulathivu</option>
                <option <?= get_select2('district','Nuwara eliya');?> value="Nuwara eliya">Nuwara Eliya</option>
                <option <?= get_select2('district','Polonnaruwa');?> value="Polonnaruwa">Polonnaruwa</option>
                <option <?= get_select2('district','Puttalam');?> value="Puttalam">Puttalam</option>
                <option <?= get_select2('district','Rathnapura');?> value="Rathnapura">Rathnapura</option>
                <option <?= get_select2('district','Trincomalee');?> value="Trincomalee">Trincomalee</option>
                <option <?= get_select2('district','Vavuniya');?> value="Vavuniya">Vavuniya</option>
                    
                </select>


        <button style="background-color:#E5863D; color:white" class="" type="submit">Search</button>
    </form>
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
                                <td><?=$row->id?></td>
                                <td><?=$row->firstname?> <?=$row->lastname?></td>
                                <td>
                                    <?php if (empty($row->count)):?>  
                                        None 
                                    <?php else:?>
                                        <?=$row->count?> 
                                    <?php endif;?>
                                </td>
                                <td></td> 
                                <td>
                                    <a href="<?=ROOT?>/coordinatorrequests/addmanager/<?=$rows["common"]->id?>/<?=$row->id?>/<?=$row->firstname?>/<?=$row->lastname?>">
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
        <div style="border: 2px solid black; margin: 20px;padding:20px">
        <h3 style="text-align: center;">No Project Managers are in this district.
        </h3>
        <h4 style="text-align: center;">Select the nearest disistrict to the project</h4>
        </div>
    <?php endif;?> 

        
        
        
        
        
        
        
                    
                
    </div>
<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>