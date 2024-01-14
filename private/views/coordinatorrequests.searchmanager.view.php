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
        
    <form action="<?=ROOT?>/coordinatormanagersearch" method="POST">
        
        <select name="distict" value="<?= get_select2('district','')    ;?>"                                    style="width: auto;padding: 8px;font-size: 16px;border: 1px solid #ccc; border-radius: 5px;outline: none; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); ">
            
            <option selected value="<?php if(strcmp($rows['common']->status_of_land,"customer")==0): ?><?= $rows['customer']->ul_district ; ?><?php else: ?><?= $rows['company']->district ; ?><?php endif; ?>">            
                <?php if(strcmp($rows['common']->status_of_land,"customer")==0): ?>
                    <?= $rows['customer']->ul_district ; ?>                    
                <?php else: ?>
                    <?= $rows['company']->district ; ?>                    
                <?php endif; ?>                       
            </option>
            <option <?= get_select2('district','ampara');?> value="ampara">Ampara</option>
            <option <?= get_select2('district','anuradhapura');?> value="anuradhapura">Anuradhapura</option>
            <option <?= get_select2('district','badulla');?>value="badulla">Badulla</option>
            <option <?= get_select2('district','batticaloa');?>value="batticaloa">Batticaloa</option>
            <option <?= get_select2('district','colombo');?>value="colombo">Colombo</option>
            <option <?= get_select2('district','galle');?>value="galle">Galle</option>
            <option <?= get_select2('district','gampaha');?>value="gampaha">Gampaha</option>
            <option <?= get_select2('district','hambantota');?>value="hambantota">Hambantota</option>
            <option <?= get_select2('district','jaffna');?>value="jaffna">Jaffna</option>
            <option <?= get_select2('district','kaluthara');?>value="kaluthara">Kaluthara</option>
            <option <?= get_select2('district','kandy');?>value="kandy">Kandy</option>
            <option <?= get_select2('district','kegalle');?>value="kegalle">Kegalle</option>
            <option <?= get_select2('district','kilinochchi');?>value="kilinochchi">Kilinochchi</option>
            <option <?= get_select2('district','kurunegala');?>value="kurunegala">Kurunegala</option>
            <option <?= get_select2('district','mannar');?>value="mannar">Mannar</option>
            <option <?= get_select2('district','matara');?>value="matara">Matara</option>
            <option <?= get_select2('district','monaragala');?>value="monaragala">Monaragala</option>
            <option <?= get_select2('district','mulathivu');?>value="mulathivu">Mulathivu</option>
            <option <?= get_select2('district','nuwara eliya');?>value="nuwara eliya">Nuwara Eliya</option>
            <option <?= get_select2('district','polonnaruwa');?>value="polonnaruwa">Polonnaruwa</option>
            <option <?= get_select2('district','puttalam');?>value="puttalam">Puttalam</option>
            <option <?= get_select2('district','rathnapura');?>value="rathnapura">Rathnapura</option>
            <option <?= get_select2('district','trincomalee');?>value="trincomalee">Trincomalee</option>
            <option <?= get_select2('district','vavuniya');?>value="vavuniya">Vavuniya</option>

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